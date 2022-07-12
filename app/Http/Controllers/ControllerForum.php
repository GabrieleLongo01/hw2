<?php 
namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ControllerForum extends Controller {

    function view(){
        if($session_nomeutente = session('id')){
            $user_nomeutente = User::find($session_nomeutente);
    
    
         
            return view("forum")->with("user_nomeutente", $user_nomeutente);
        }
    
        else return view("forum");
    }
    



public function insert($query){
  
    date_default_timezone_set('Europe/Rome');
    $request=request();
    $id=session('id');

 $riga=User::find($id);
 $nomeutente=$riga['nomeutente'];
 $data=date("Y-m-d H:i:s");
 

    $query=Comment::create([
     
'id_utente'=>$nomeutente,
'data'=>$data,
'messaggio'=>$query,
    ]);
    
$c=Comment::all();
return $c;
 
  
}

/*public function insert(){
  
   
    $request=request();
    $id=session('id');

 $riga=User::find($id);
 $nomeutente=$riga['nomeutente'];
 $data=date("Y-m-d H:i:s");
 

    $query=Comment::create([
     
'id_utente'=>$nomeutente,
'data'=>$data,
'messaggio'=>$request['messaggio'],
    ]);
    

     return 'ciao';

    if($query){
        $data=["messaggio"=>"Messaggio inserito con successo", "response"=>1];
        return view('forum')->with($data);
      
    }else {
     $data=["messaggio"=>"Errore inserimento messaggio", "response"=>0];
     return view('forum')->with($data);}
    
}*/

public function insert_stampa(){
    
$count=0;
    $query=Comment::all();
for($i=0;$i<count($query);$i++){
    $count++;
}
    return $query[$count-1];
}



function select(){
    $query=Comment::all();
    return $query;
}



function delete($commento_id){


 
    $id_utente=session('id');
    $utente = User::find($id_utente);
    $user_nomeutente= $utente["nomeutente"];
  
   
    
    $query=DB::delete("delete FROM comments WHERE commento_id = $commento_id AND id_utente = '$user_nomeutente'");

   
    if($query){
        $data=["messaggio"=>"Messaggio eliminato con successo", "response"=>1];
        return $data;
      
    }else {
   
        $data=["messaggio"=>"Impossibile eliminare il messaggio", "response"=>0];
        return $data;
    }
}



function update($commento_id,$mess){
    $request=request();
   
 $query=DB::update("UPDATE comments SET messaggio='$mess' where commento_id='$commento_id'");
   
    if($query){
        $data=["messaggio"=>"Messaggio modificato con successo", "response"=>1];
        return $data;
      
    }else {
   
        $data=["messaggio"=>"Impossibile modificare il messaggio", "response"=>0];
        return $data;
    }
}
} 



