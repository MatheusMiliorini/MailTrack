<?php
    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Http\Request;

    class DashboardController extends Controller {
        
        public function dashboard(Request $request) {

            //Só retorna false se não estiver logado
            if (!LoginController::checkLogin($request)) {
                return redirect('/login')->with('error','You need to be logged in to access this page!');
            } else {
                $dados = DB::select('SELECT * FROM trackIDs WHERE email_usuario=?',[$request->session()->get('email')]);
                return view('dashboard')->with('dados',$dados)
                ->with('nome',$request->session()->get('nome'))
                ->with('sobrenome',$request->session()->get('sobrenome'))
                ->with('email',$request->session()->get('email'));
            }

        }
    }
?>