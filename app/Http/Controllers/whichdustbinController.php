<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\biodegradableProduct;
use App\objectmaterialmap;

use Guzzle\Http\Client;
use Guzzle\Http\EntityBody;
use Guzzle\Http\Message\Request as CRequest;
use Guzzle\Http\Message\Response;

class whichdustbinController extends Controller
{
    public function checkDB(Request $request){
    	$input = Request(['wasteitem']);
        $materials = biodegradableProduct::get();
        foreach ($materials as $material){
        	if (strlen(stristr($input,$material->item))>0) {
        		return view('whichbinanswer',['item' => $input,'object'=>'','biodegradable'=> $material->biodegradable,'option'=>0]);
			}
	    }

	    $objects = objectmaterialmap::get();
	  /*  foreach ($objects as $object){
	    		$distinctobjects = objectmaterialmap::groupBy('object')->having('COUNT(object)','=',1)
                ->get();
	    }*/

	    foreach($objects as $object){
	    	if (strlen(stristr($input,$object->object))>0) {  		
	    		$materials = objectmaterialmap::where('object',$object->object)->get();

	    		if(count($materials) > 1){
	    		
        			return view('itemoptions')->with(compact('materials'))->with(compact(['input']));
        		} else{
        			$biodegradable = BiodegradableProduct::where('item',$object->material)->value('biodegradable');
        			return view('whichbinanswer',['item' => $input,'object'=>'','biodegradable'=> $biodegradable]);
        		}
			}
	    }

	    return view('notfound');
	}

	public function checkMaterial($object, $inputmaterial){
		$materials = biodegradableProduct::get();
        foreach ($materials as $material){
        	if (strlen(stristr($inputmaterial,$material->item))>0) {
        		return view('whichbinanswer',['item' => $inputmaterial,'object'=>$object, 'biodegradable'=> $material->biodegradable]);
			}
	    }
	}

	public function viewsentiment($text){
		$client = new Client("https://api.havenondemand.com/");
		$request = $client->get("1/api/sync/analyzesentiment/v1?text=".$text."&apikey=6a2cdc1a-c2fb-4a61-8fa0-9fe37b18a362");
		$response= $request->send();
	    $body = $response->getBody(true);
	    // echo json_decode($body);
	    echo $body;
	}


}