<?php
   class Pages 
   { 
       public function __construct()
       {
          
       }

       public function index(){
           echo 'index' ;
       }

       public function about($id){
           echo 'about of' . $id ;
       }
       
   }
   