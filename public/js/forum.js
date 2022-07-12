


const commenta_btn=document.querySelector('form');
    commenta_btn.addEventListener('submit',inserisciCommento);

    genera_tabella();



function genera_tabella(){

fetch('/select').then(onResponse).then(genera_righe);
}

function onResponse(response){

return response.json();
}


function genera_righe(json){


    for(let persona of json){
  
        const box=document.getElementById("container_tabella");
   
        const contenitore= document.createElement("div");
        contenitore.classList.add("div_form");

        const p= document.createElement("p");
        const p2= document.createElement("p");
        const p3= document.createElement("p");
   

  
        p.textContent=persona.id_utente;
        p2.textContent=persona.data;
        p3.textContent=persona.messaggio;
       
        const input=document.createElement("input");
        input.type="hidden";
        input.name="messaggio";
        input.id="input_mess";
        input.value = persona.messaggio;
        const button=document.createElement("button");
        const button2=document.createElement("button");
        button.id="elimina_commento";
        button.value=persona.commento_id;
        button2.id="modifica_commento";
        button2.value=persona.commento_id;

        const pulsante=document.querySelector("#sessione_utente div");

        if(persona.id_utente==pulsante.dataset.sessionId){
        button.textContent="ELIMINA";
        button.classList.add("elimina_commento");
        button.addEventListener("click", elimina_commento);

        button2.textContent="MODIFICA";
        button2.classList.add("elimina_commento");
        button2.addEventListener("click", crea_textarea);
        }

       


        box.appendChild(contenitore);
        contenitore.appendChild(p);
        contenitore.appendChild(p2);
        contenitore.appendChild(p3);
        p3.classList.add("p3");
     


        contenitore.appendChild(input);
        if(persona.id_utente==pulsante.dataset.sessionId){
           contenitore.appendChild(button); 
          contenitore.appendChild(button2);
        }
        

    }
}









function inserisciCommento(event){
    
   event.preventDefault();

   const myForm = document.querySelector("#messaggio");
 const value=myForm.value;
console.log(value);

const url= "/forum/" +value;

//const formData = new FormData(myForm);

    fetch(url).then(onResponse).then(aggiornaTabella);
   
}




function aggiornaTabella(){
    const container_tabella=document.getElementById("container_tabella");
    container_tabella.innerHTML="";
  
   genera_tabella();
}



  
function elimina_commento(e){
   let id=e.target.getAttribute('value');
    
    console.log('eliminato:', id);

    


const url= "/cancellacommento/" + id;



fetch(url).then(onResponse).then(aggiornaTabella);
 

}

function crea_textarea(e){

    if(!document.forms["FormModifica"]){
    const form=document.createElement("form");
    form.name="FormModifica";
    form.method="POST";
    form.id=e.target.getAttribute('value');  



    const input=document.createElement("button")   
    input.type="submit";
    input.textContent="MODIFICA COMMENTO";
    input.type="textarea";
    input.classList.add("bottone_commenti2");
    input.classList.add("normaltext");


    const input2=document.createElement("textarea");
    input2.classList.add("textarea");
    input2.id="commento_da_modificare";
   

   
    const body=document.querySelector('body');

       
    body.appendChild(form);
    form.appendChild(input2);
    form.appendChild(input);

    form.addEventListener("submit", modifica_commento);
    }
    else{
        form=document.forms["FormModifica"]
        form.id=e.target.getAttribute('value');  
        form.classList.remove("hidden");
        form.addEventListener("submit", modifica_commento);
    }

    /*let id=e.target.getAttribute('value');  
    
    //const form_modifica=document.createElement('form');
    const input_commentoid=document.createElement('input');
    const input_id_utente=document.createElement('input');
    const input_data=document.createElement('input');
    const textarea=document.createElement('textarea');
    const button_modifica=document.createElement("input");


    //form_modifica.type="GET";
    //form_modifica.id="form_modifica";


    input_commentoid.type="hidden";
    //input_commentoid.name="commento_id";

    button_modifica.type="submit";

    input_data.type="hidden";
    //input_data.name="data";


    input_id_utente.type="hidden";
    //input_id_utente.name="id_utente";

    //textarea.name="messaggio2";
    textarea.id="messaggio2";
    textarea.classList.add('textarea');

    //button_modifica.type="submit";

    //button_modifica.name="modifica_commenti";
    button_modifica.id="btn_modifica";
    button_modifica.value="MODIFICA COMMENTO"

    button_modifica.classList.add("bottone_commenti");
    button_modifica.classList.add("normaltext");

    form_modifica.appendChild(input_commentoid);
    form_modifica.appendChild(input_data);
    form_modifica.appendChild(input_id_utente);
    form_modifica.appendChild(textarea);
    form_modifica.appendChild(button_modifica);
    form_modifica.classList.add("form_commenti");
    const body=document.querySelector('body');
    body.appendChild(form_modifica);

    button_modifica.addEventListener('click',modifica_commento(id));






        console.log('modificato:', id);
        
    
    
        //

*/

}






function modifica_commento(event){
    console.log(event);
    event.preventDefault();
  //  const button_mod=document.getElementById("modifica_commento");
   const commento_da_modificare=document.querySelector("#commento_da_modificare");
    
 const myForm = document.forms["FormModifica"];

    
    const value=commento_da_modificare.value;
   console.log(value);
 
    //const form_modifica=document.querySelector('#form_modifica');
   
   const id= myForm.id;

   


const url= "/modifica/" + id +"/"+ encodeURIComponent(value);
console.log(url);

if(value){

fetch(url).then(onResponse).then(aggiornaTabella).then(EliminaAreaCommento);
}



}


function EliminaAreaCommento(){
    const myForm = document.forms["FormModifica"];
    myForm.classList.add("hidden");
  
}
