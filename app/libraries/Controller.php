<?php 
   /* 
    * base con , loads models and view
    */


  class Controller
  {
      //load model

      public function model($model){
          //require

          require_once '../app/models/' .$model . '.php' ;

          return new $model();

      }


      public function view($view , $data = []){
        //require

        // require_once '../app/models/' .$view . '.php' ;

        // return new $view();

        if(file_exists('../app/views/' . $view . '.php')){
        require_once '../app/views/' . $view . '.php' ;
        }else {
        die ('view doest not exist');
        }
        
    }
  }
  