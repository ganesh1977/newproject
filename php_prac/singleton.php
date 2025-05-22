<?php
   class DataBaseConnector {				
      private static $obj;				
      private final function __construct() {
         echo __CLASS__ . " object created for first time ". PHP_EOL;
      }
      public static function getConnect() {
         if (!isset(self::$obj)) {
            self::$obj = new DataBaseConnector();
            return self::$obj;
         } else {
            echo "connection object could not be created again" . PHP_EOL;
         }
      }
   }

   $obj1 = DataBaseConnector::getConnect();
   $obj2 = DataBaseConnector::getConnect();


   var_dump($obj1);
   echo "\n";
   var_dump($obj2);
   echo "\n";
   var_dump($obj1 == $obj2);
?>