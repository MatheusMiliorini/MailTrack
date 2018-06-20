<?php
    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\DB;

    class TrackIDController extends Controller {
        
        public function updateID($id) {
            DB::update('UPDATE trackIDs SET contagem_acessos=contagem_acessos+1, ultimo_acesso=NOW() WHERE trackID=?',[$id]);
            return $id;
        }
    }
?>