<?php 
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;

class ControllerYoutube extends Controller {

  

function view(){
    return view('youtube');
 
}

/*protected function api_yt($key){
    $part = 'snippet';
    $q = 'softair';
    $type = 'video';
    $api_key = config(key:'services.youtube.api_key');
    $maxResults = 12;
    $youtube_endpoint=config(key:'services.youtube.youtube_endpoint');
    $url="$youtube_endpoint?part=".$part.'&q='.$q.'&type='.$type.'&key='.$api_key.'&maxResults='.$maxResults;
    $response=Http::get($url);
    $results=json_decode($response);
    File::put(storage_path() . '/app/public/results.json',$response ->body());
}*/



protected function api_yt(){

$part = 'snippet';
$q = 'softair';
$type = 'video';
$api_key = config(key:'services.youtube.api_key');
$maxResults = 12;
$youtube_endpoint=config(key:'services.youtube.search_endpoint');


$url = $youtube_endpoint."?part=".$part."&q=".$q."&type=".$type."&key=".$api_key."&maxResults=".$maxResults;
$response=Http::get($url);

File::put(storage_path() . '/app/public/results.json',$response ->body());
$decode=json_decode(file_get_contents($url),true);
/*$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);


curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


$resp=curl_exec($curl);*/


/*foreach($decode['items'] as $json){
//$img=$json ['snippet']['thumbnails']['high']['url'];

$video_id=$json['id']['videoId'];
$url_video="https://www.youtube.com/embed/".$video_id;


echo "    

<iframe  src='$url_video' ></iframe> 
       
      ";



}*/
//curl_close($curl);
return $decode;



}}