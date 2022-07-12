<?php 
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ControllerHome extends Controller {

function view(){
    if($session_nomeutente = session('id')){
        $user_nomeutente = User::find($session_nomeutente);


     
        return view("home")->with("user_nomeutente", $user_nomeutente);
    }

    else return view("home");
}
}



