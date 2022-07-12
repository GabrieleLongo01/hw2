function onJson(json){
  
    const sezione=document.querySelector(".videoyt");
    sezione.innerHTML="";
    const items=json.items;
 

    for(let dati of items){
       

       /*const img_url=dati.snippet.thumbnails.high.url;*/
      
 const div=document.createElement("div");
const video=document.createElement("iframe");
       const video_url=("https://www.youtube.com/embed/"+dati.id.videoId);
        
       video.src=video_url;
    
        console.log(video.src);
       video.classList.add("iframe");

/*const img=document.createElement("img");
img.src=img_url;*/
//console.log(img);

/*const a=document.createElement("a");
a.href=("https://www.youtube.com/embed/"+dati.id.videoId);
a.textContent=("https://www.youtube.com/embed/"+dati.id.videoId)

img.classList.add("video_api");
div.appendChild(img);*/
div.appendChild(video);


sezione.appendChild(div);
        

    }



}



function onResponse(Response){
    
    return Response.json();
    
    }

function search(event){

    
    fetch("/json_yt").then(onResponse).then(onJson);
    
    }

    search();

   

