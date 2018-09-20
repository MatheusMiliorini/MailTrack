<?php
    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Http\Request;
    use App\PHPMailerAPI;
    use Exception;

    class LoginController extends Controller {
        
        public function auth(Request $request) {
            $dados = $request->all();

            $login = DB::select('SELECT * FROM usuarios WHERE email_usuario=? AND senha=?',[$dados['email'],md5($dados['password'])]);

            //Verifica se o login existe
            if (count($login) == 1) {
                //Verifica se o usuário está permitido a logar
                if ($login[0]->ativo == 1) {
                    //Guarda o e-mail na sessão
                    $request->session()->put('email',$dados['email']);
                    $request->session()->put('nome',$login[0]->primeiro_nome);
                    $request->session()->put('sobrenome',$login[0]->ultimo_nome);

                    //Joga o usuário autenticado para o dashboard
                    return redirect('/dashboard');
                } else {
                    return redirect('/login')->with('message','Please confirm you e-mail before logging in.');
                }

                
            } else {
                return redirect('/login')->with('message','E-mail or password incorrect');
            }

        }

        public function cadastro(Request $request) {
            $dados = $request->all();

            try {
                $codigo = md5($dados['email'].time());
                //Adiciona um novo usuário desabilitado, e com código pra ativação
                $inseriu = DB::insert('INSERT INTO usuarios(email_usuario,primeiro_nome,ultimo_nome,senha,ativo,codigo_verificacao) VALUES(?,?,?,?,?,?)',[
                    $dados['email'],$dados['nome'],$dados['sobrenome'],md5($dados['password']),0,$codigo
                ]);
    
                if ($inseriu) {
                    PHPMailerAPI::sendEmail($dados['email'],$dados['nome'],$dados['sobrenome'],$codigo);
                    return redirect('/login')->with('message','Account created. Please check your e-mail for the activation code :D');
                    
                }
            } catch(Exception $e) {
                return redirect('/register')->with('erro','An error has occured. Please try again using a different e-mail');
            }
        }

        public function logout(Request $request) {
            $request->session()->flush();

            return redirect('/login')->with('message','Logged out');
        }

        public function ativaConta($codigo) {
            //Verifica se o código é válido
            $usuario = DB::select("SELECT ativo FROM usuarios WHERE codigo_verificacao=?",[$codigo]);
            if (count($usuario) == 1) {
                //Verifica se o usuário está desativado
                $ativo = $usuario[0]->ativo;
                if ($ativo == 0) {
                    //Se estiver desativado, ativa
                    $mudou = DB::update("UPDATE usuarios SET ativo=1 WHERE codigo_verificacao=?",[$codigo]);
                    //Se mudou, muda o código para nulo
                    if ($mudou == 1) {
                        DB::update("UPDATE usuarios SET codigo_verificacao=NULL WHERE codigo_verificacao=?",[$codigo]);
                        //Joga o usuário de volta para a tela de login com a mensagem de que agora pode logar
                        return redirect('/login')->with('message','User enabled. You can loggin now :D');
                    }
                } else {
                    //Se o usuário já estiver ativo, joga para a tela de login
                    return redirect('/login')->with('message','This user is already enabled |o.O|. You should not be seeing this......');
                }
            } else {
                //Se não encontrou, joga o usuário para a página de login informando que o código não foi encontrado
                return redirect('/login')->with('message','Activation code not found :(');
            }
        }
    }
?>