<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
$error=null;

class ControllerLogin extends Controller {

    public function login() {
        if(session('id') != null) {
            return redirect("home");
        }
        else {
            return view('login')
            ->with('csrf_token', csrf_token());
        }
     }

     public function ControlloLogin() {
         $request=request();
         $user = User::where('nomeutente', $request->nomeutente)->where('password', $request->password)->first();

         if($user !== null) {
             Session::put('id', $user->id);
           
             return redirect('home');
         }
         else {
            $error= "Nome utente o password errati!";
             return redirect('login')->withInput()->withErrors($error);
         }
     }

     public function logout() {
         Session::flush();
         return redirect('login');
     }


     function view(){
         return view('login');
     }
}
?>