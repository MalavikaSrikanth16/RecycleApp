<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\subcategory;
use App\maplocation;
use App\recyclelocation;
use App\comment;
use Session;

use Guzzle\Http\Client;
use Guzzle\Http\EntityBody;
use Guzzle\Http\Message\Request as CRequest;
use Guzzle\Http\Message\Response;

class discardController extends Controller
{
   public function subcategories($id,$item){
   	$subcategories = subcategory::where('category',$item)->get();
   	// foreach($subcategories as $sub)
   	// 	print $sub;
   	return view('subcategories')->with(compact(['id']))->with(compact(['item']))->with(compact('subcategories'));
   }

    public function getlocation($category,$subcategory){
    	$values = maplocation::where('category',$category)->where('subcategory',$subcategory)->get();
    	return view('map',compact('values'));
    }

    public function details(Request $request, $refid){
      $details = recyclelocation::where('refid',$refid)->get()[0];
      $comments  = comment::where('refid',$refid)->get();
      $text = "";
      foreach ($comments as $comment){
      $text .= $comment['comments'];
    }
    $client = new Client("https://api.havenondemand.com/");
    $request1 = $client->get("1/api/sync/analyzesentiment/v1?text=".$text."&apikey=6a2cdc1a-c2fb-4a61-8fa0-9fe37b18a362");
    $response= $request1->send();
    $body = $response->getBody(true);
    $bodyjson = json_decode($body);
    $score = $bodyjson->aggregate->score;
    $rating = round($score * 5,2);
     $value = $request->session()->get('name', 'null');
     return view('locationdetails')->with(compact('details'))->with(compact('comments'))->with(compact(['value']))->with(compact(['rating']));
    }
    
}