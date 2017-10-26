<?php

namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use Debugbar;
 use cebe\markdown\MarkdownExtra;

 class PracticeController extends Controller
 {

     public function practice5()
     {
         $parser = new MarkdownExtra();
         echo $parser->parse('# Hello World');
     }

     public function practice4()
     {
         Debugbar::info($_GET);
         Debugbar::info(['a' => 1, 'b' => 2, 'c' => 3]);
         Debugbar::error('Error!');
         Debugbar::warning('Watch out...');
         Debugbar::addMessage('Another message', 'myLabel');

         return 'Practice 4';
     }

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
