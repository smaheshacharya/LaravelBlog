<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	$title = "Welcome to laravel";
    	// return view('pages.index',compact('title'));
    	return view('pages.index')->with('title',$title);
    }
    public function about(){
    	$title = "About welocome";
    	return view('pages.about')->with('title',$title);;
    }
     public function services(){
     	$data = array(
     		'title'=>'Experties On',
     		'Services'=>['Pyhton (Django,Machine Learning)','PHP(Laravel,Wordpress)','Web Devevelopment','Latex'] ,
            'Education'=>'BscCSIT Tribhuban University',
            'work_on'=>'Computer Linguistic, NN(Neural Network)',
            'skills' =>'Public Speaking, Communication, Event Management',
            'contact'=>['Phone: 9861007803  ','Gmail: iammaheshacharya@gmail.com'],
     	);
    	return view('pages.services')->with($data);;
    }
}
