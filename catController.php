<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catController extends Controller
{ 
 public function about () { 
 return view('subview.about'); 
 } 
 public function team () { 
 return view('subview.team'); 
 } 
 public function list () { 
    $list=array(
        array(
            'Title'=>'Reading is fun',
            'ISBN' =>'0-1234-12345',
            'Category'=>'Education',
            'Page'=>40
        ),
        array(
            'Title'=>'School Ghost',
            'ISBN' =>'1-3333-39393',
            'Category'=>'Horror',
            'Page'=>90
        ),
        array(
            'Title'=>'Billionare',
            'ISBN' =>'0-7895-62749',
            'Category'=>'Self Help',
            'Page'=>165
        ),
        array(
            'Title'=>'Depression',
            'ISBN' =>'0-6629-17294',
            'Category'=>'Health',
            'Page'=>277
        ),
        array(
            'Title'=>'Economics',
            'ISBN' =>'6-6628-81238',
            'Category'=>'Education',
            'Page'=>300
        )
    );
 return view('subview.list', compact('list')); 
 } 
}
