<?php

  try {
    define("HOST","mysql:host=localhost;dbname=showroom");
    define('USER','root');
    define('PASSWORD','');
    define('REGISTER','register');
    define('POSTS','posts');

    $connection = new PDO(HOST, USER, PASSWORD);
    //echo "you are succesfully connected to databse";
    // debug($connection);
    // if($connection=true){
    //   throw new PDOException("HELLO");
    
  }catch(PDOException $e){
    $msg= "Error :There is an error to connect to database ".$e->getMessage();
  }  

  define('URL', 'http://localhost/Admin-dashboard/');;
  define('DS'  , DIRECTORY_SEPARATOR);
  # Path
  define('PATH' ,dirname(dirname(__FILE__)) );

  // function userStatus($id){
  //   global $connection;
  //   $session = "SELECT * FROM `".FRESH_FOOD."` WHERE `id` =".$id;
  //   $fetch   = $connection->prepare($session);
  
  //   return $fetch ->fetchAll(PDO::FETCH_ASSOC);
  // }
  function debug($var){
    echo"<pre>";
     print_r($var);
    echo"<pre>";
  }

  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);

  $Engine_power = array('350cc', '480cc', '580cc', '720cc', '850cc' , '920cc', '1050cc' ,'1200cc');
  $Bstype = array('BS3', 'BS4' ,'BS5' ,'BS6' , 'BS7');
  $resolution = 'height="580" width="700"';
  $resolution2 = 'height="100" width="100"';
  // echo $resolution;
  session_start();
  
?>