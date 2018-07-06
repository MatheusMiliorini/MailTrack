<?php
    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Http\Request;

    class DashboardController extends Controller {
        
        public function dashboard(Request $request) {

            $dados = DB::select('SELECT * FROM trackIDs WHERE email_usuario=?',[$request->session()->get('email')]);
                    
            //Busca quantas vezes os links foram abertos para esse usuário
            $aberturas = DB::select('SELECT SUM(contagem_acessos) AS acessos_total FROM trackIDs WHERE email_usuario=?',[$request->session()->get('email')]);
            //TrackIDs criados
            $total_trackIDs = DB::select('SELECT COUNT(trackID) AS total_trackIDs FROM trackIDs WHERE email_usuario=?',[$request->session()->get('email')]);
            //TrackIDs ativos
            $trackIDs_ativos = DB::select('SELECT COUNT(trackID) AS trackIDs_ativos FROM trackIDs WHERE email_usuario=? AND ativo=1',[$request->session()->get('email')]);
            //TrackIDs mais lidos
            $top_leituras = DB::select('SELECT * FROM trackIDs WHERE email_usuario=? ORDER BY contagem_acessos DESC LIMIT 5',[$request->session()->get('email')]);


            return view('dashboard')->with('dados',$dados)
            ->with('nome',$request->session()->get('nome'))
            ->with('sobrenome',$request->session()->get('sobrenome'))
            ->with('email',$request->session()->get('email'))
            ->with('total_trackIDs',$total_trackIDs[0])
            ->with('trackIDs_ativos',$trackIDs_ativos[0])
            ->with('top_leituras',$top_leituras)
            ->with('aberturas',$aberturas[0]);
            
        }
    }
?>