<?php

//! Base controller
class Controller {
    protected
        $db;

    //! HTTP route pre-processor
    function beforeroute($f3) {
      //
      // if ($this->restricted) {
      //   $auth = $f3->get('HEADERS.Authorization');
      //
      //   if (isset($auth)){
      //       $token = str_replace("Bearer ", "", $auth);
      //       $key = $f3->get('AUTH_SECRET_KEY');
      //       $decoded = JWT::decode($token, $key);
      //
      //       if ($decoded->decodedString == 'secret') {
      //           $this->currentUser = $decoded;
      //       } else {
      //           header("HTTP/1.1 202 Unauthorized");
      //           die();
      //       }
      //   } else {
      //       header("HTTP/1.1 202 Unauthorized");
      //       die();
      //   }
      // }


    }

    //! HTTP route post-processor
    function afterroute() {


        // header("Content-Type:application/json");
    }

    //! Instantiate class
    function __construct() {
        $f3=Base::instance();
        // Connect to the database
        //
        // $host =  $f3->get('DB_HOST');
        // $dbname = $f3->get('DB_NAME');
        // $dbuser = $f3->get('DB_USER');
        // $dbpass = $f3->get('DB_PASSWORD');
        //
        // $options = array(
        //     \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION, // generic attribute
        //     \PDO::ATTR_PERSISTENT => TRUE,  // we want to use persistent connections
        //     \PDO::MYSQL_ATTR_COMPRESS => TRUE, // MySQL-specific attribute
        // );
        // $db =  new \DB\SQL("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass, $options);
        //
        // $this->db=$db;
        // $this->currentUser = array();
        // $this->restricted = true;
        // $this->utils = new Utils();

    }


    function successOutput($data) {
        $output = array(
            'ok' => true,
            'error' => null,
            'results' => $data
        );
        die(json_encode($output));
    }


    function errorOutput($errorMessage) {
        $output = array(
            'ok' => false,
            'error' => $errorMessage
        );
        die(json_encode($output));
    }

}
