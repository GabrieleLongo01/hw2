<?php 
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class ControllerRegistrazione extends Controller {

 protected function registrazione(){
$request=request();
if ($this->ControlloErrori($request)===0){
    $nuovo_utente=User::create([
'nome'=>$request['nome'],
'cognome'=>$request['cognome'],
'nomeutente'=>$request['nomeutente'],
'email'=>$request['email'],
'password'=>$request['password']

    ]);

    if($nuovo_utente){
        Session::put('id',$nuovo_utente->id);
        Session::put('nomeutente',$nuovo_utente->nomeutente);
        return redirect('home');
    }else {
    return redirect('/registrazione')->withInput();}  
}else {
    return redirect('/registrazione')->withInput();}   }




private function ControlloErrori($data){

    if(!empty($data["nome"]) && !empty($data["cognome"]) && !empty($data["nomeutente"]) && !empty($data["email"]) && !empty($data["password"]) && !empty($data["conferma_password"]) ){

        $errore=array();
        
        
         
        
        
        
        if(!preg_match('/^[a-zA-Z0-9_]{5,15}$/',$data["nomeutente"])){
                $errore[]="Nome utente errato.";
            } else {
                $nomeutente = User::where('nomeutente', $data['nomeutente'])->first();
                if ($nomeutente !== null) {
                    $errore[] = "Nome utente già utilizzato";
                }
            }
            
               
            
        
            if(!preg_match('/^[a-zA-Z0-9]{1,15}$/',$data["nome"])){
                $errore[]="Nome  non valido.";
            }
        
            if(!preg_match('/^[a-zA-Z0-9]{1,15}$/',$data["cognome"])){
                $errore[]="Cognome  non valido.";
            }
        
            if(!filter_var($data["email"],FILTER_VALIDATE_EMAIL)){
                $errore[]="Email errata.";
            } else {
                $email = User::where('email', $data['email'])->first();
                if ($email !== null) {
                    $error[] = "Email già utilizzata";
                }
            }
        
            if(!preg_match('/^[a-zA-Z0-9_]{5,15}$/',$data["password"])){
                $errore[]="Password errata.";
            }
            if(strlen($data["password"])<5){
                $errore[]="Password troppo corta.";
            }
        
            if($data['password']!=$data['conferma_password']){
                $errore[]="Le password non corrispondono";
                
                    }
        
                    return count($errore);
}
}



}




?>