<?php
    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Http\Request;

    class LoginController extends Controller {
        
        public function auth(Request $request) {
            $dados = $request->all();

            $login = DB::select('SELECT * FROM usuarios WHERE email_usuario=? AND senha=?',[$dados['email'],$dados['password']]);

            if (count($login) == 1) {
                //Guarda o e-mail na sessão
                $request->session()->put('email',$dados['email']);
                $request->session()->put('nome',$login[0]->primeiro_nome);
                $request->session()->put('sobrenome',$login[0]->ultimo_nome);

                //Joga o usuário autenticado para o dashboard
                return redirect('/dashboard');
            } else {
                return redirect('/login');
            }

        }

        public static function checkLogin($request) {
            
            //Se for falso, vai retornar para o login
            if ($request->session()->has('email')) {
                return true;
            } else {
                return false;
            }

        }
    }
?>