<?php

namespace PAR;

class PHPAutoReplace{

     public function replaceArrayText($array, $replacedarray, $replace){
          return str_replace($array, $replacedarray, $replace);
     }
     
}
