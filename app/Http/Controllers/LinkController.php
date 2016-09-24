<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Url;


class LinkController extends Controller
{
    public function make(Request $request){
    	$this->validate($request,[
    		'url' => 'required|url|max:255']);

    	$url = $request->url;

    	$code = null;

    	$exists = Url::where('url','=',$url);

    	if($exists->count() === 1){
    		$codes = $exists->first()->code;
    	}else{
    		$link = new Url;

    		$link->url = $request->url;

    		$link->save();

    		$created = Url::where('url','=',$url)->first();

    		$codes = base_convert($created->id,10,36);

    		$created->code = $codes;

    		$created->save();

    		}

    		$fk = url("/") . '/' . $codes ;

    		if($codes){
    		return redirect('/')->with('status','All done! Here is your short URL:<a href="'. $fk .'">'. $fk .'</a>');
    		}

    		return redirect('/')->with('status','Something went wrong,try again');
    	}


    public function get($code){

    	$link = Url::where('code','=',$code)->first();

    	if($link->count() === 1){
    		return redirect($link->url);
    	}else{
    		return redirect('/');
    	}
    }
}
