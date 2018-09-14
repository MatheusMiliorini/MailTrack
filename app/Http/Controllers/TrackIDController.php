<?php
    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Http\Request;

    class TrackIDController extends Controller {
        
        public function contaAcesso($id) {

            //Verifica se o TrackID está ativo. Conta quantos resultados retornam
            $ativo = count(DB::select('SELECT * FROM trackIDs WHERE trackID=? AND ativo=?',[$id,1]));
            
            if ($ativo == 1) {
                //Insere o acesso no banco
                DB::insert("INSERT INTO acessos(trackID,data) VALUES(?,?)",[$id,date('Y-m-d H:i:s')]);

                //Adiciona esse acesso como ultimo acesso do TrackID
                DB::update("UPDATE trackIDs SET ultimo_acesso=? WHERE trackID=?",[date('Y-m-d H:i:s'),$id]);
                
                //Aumenta em 1 a quantidade de acessos
                DB::update("UPDATE trackIDs SET contagem_acessos=contagem_acessos+1 WHERE trackID=?",[$id]);

                //Verifica se é o primeiro acesso
                $primeiro_acesso = DB::select("SELECT primeiro_acesso FROM trackIDs WHERE trackID=?",[$id]);
                //Altera o TrackID para mostrar este como o primeiro acesso
                if ($primeiro_acesso[0]->primeiro_acesso == "" || $primeiro_acesso[0]->primeiro_acesso == null) {
                    DB::update("UPDATE trackIDs SET primeiro_acesso=? WHERE trackID=?",[date('Y-m-d H:i:s'),$id]);
                }
            }

            return view('trackID');
        }

        public function createNew(Request $request) {
            $dados = $request->all();
            $email = $request->session()->get('email');

            $inseriu = DB::insert("INSERT INTO trackIDs(trackID,observacao,data_criacao,contagem_acessos,email_usuario) VALUES(?,?,?,?,?)",[
                md5($email.time()).'.png',$dados['name'],date('Y-m-d H:i:s'),'0',$email
            ]);

            if ($inseriu) {
                return redirect('/dashboard');
            }
        }

        public function enable($id) {
            if (DB::update('UPDATE trackIDs SET ativo=1 WHERE trackID=?',[$id]) == 1) {
                return redirect('/dashboard');
            }
        }

        public function disable($id) {
            if (DB::update('UPDATE trackIDs SET ativo=0 WHERE trackID=?',[$id]) == 1) {
                return redirect('/dashboard');
            }
        }
    }
?>
