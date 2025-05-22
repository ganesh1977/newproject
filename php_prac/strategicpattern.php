<?php
   interface example {
      public function case($str);
   }

   class ucase implements example {
      public function case($str) {
         return strtoupper($str);
      } 
   }

   class lcase implements example {
      public function case($str) {
         return strtolower($str);
      }
   }

   class testdata {
      private $data;

      public function __construct($input) {
         $this->data = $input;
      }
      public function process(example $type) {
         return $this->data = $type->case($this->data);
      }
   }
   $str = "hello";
   $obj = new testdata($str);
   echo $obj->process(new ucase) . PHP_EOL;  
   $str = "HELLO";
   echo $obj->process(new lcase);
?>