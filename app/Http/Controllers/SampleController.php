<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function greetPerson(){
    	//arguments
    	$fullname = [
    	'name'=>'juan',
    	'middlename'=>'dela',
    	'surname'=>'cruz'
    	];
    	return view("sample", compact("fullname"));
    }
    public function nameofFruits(){
    	//arguments here...
    	$fruits = [
    	'citrus'=>'lime',
    	'tropical'=>'banana',
    	'berry'=>'strawberry'
    	];
    	return view('fruits',compact('fruits'));
    }
}
