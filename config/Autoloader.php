<?php

class Autoloader
{
  static function register()
  {
    spl_autoload_register(array(__CLASS__, "autoload"));
  }

  static function autoload($class)
  {    

       if(file_exists("../model/".$class.".php"))
       {
      
            require_once "../model/".$class.".php";
       }
       else if(file_exists("../controller/".$class.".php"))
       {
           require_once  "../controller/".$class.".php";
       }
       else if(file_exists("../entities/".$class.".php"))
       {
           require_once  "../entities/".$class.".php";
       }
       else if(file_exists("../../model/".$class.".php"))
       {
           require_once  "../../model/".$class.".php";
       }

        /** namespace */
        else if(file_exists("../../".str_replace("\\", "/", $class.".php")))
        {        
         require_once ("../../".str_replace("\\", "/", $class.".php"));
        }
        else if(file_exists("../".str_replace("\\", "/", $class.".php")))
        {
             require_once ("../".str_replace("\\", "/", $class.".php"));
        }
       else
       {
           echo '<div class="">
                    <p>la classe '.$class.' n\'existe pas </p>
                 </div>';
         
       }
      
  }
}

Autoloader::register();


?>