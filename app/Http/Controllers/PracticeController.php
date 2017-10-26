<?php

namespace App\Http\Controllers;

 use Illuminate\Http\Request;

 class PracticeController extends Controller
 {
     public function practice3()
     {
         return view('abc');
     }

     public function practice2()
     {
         $email = config('mail');
         dump($email);
     }

     public function practice1()
     {
         dump('This is the first example.');
     }

     public function index($n = null) {
         if (is_null($n)) {
             foreach (get_class_methods($this) as $method) {
                 if (strstr($method, 'practice')) {
                     echo "<a href='".str_replace('practice', '/practice/', $method)."'>" . $method . "</a><br>";
                 }
             }
         } else {
             $method = 'practice'.$n;

             if (method_exists($this, $method)) {
                 return $this->$method();
             } else {
                 dd("Practice route [{$n}] not defined");
             }
         }
     }
 }
