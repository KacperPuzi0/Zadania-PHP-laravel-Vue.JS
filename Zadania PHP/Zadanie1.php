<?php 
class Pipeline {
  public static function make(...$functions) {
    return function($arg) use ($functions) {
      $result = $arg;
      foreach ($functions as $function) {
        $result = $function($result);
      }
      return $result;
    };
  }
}

$func = Pipeline::make(
  function($var) { return $var * 3; },
  function($var) { return $var + 1; },
  function($var) { return $var / 2; },
  function($var) {return $var *100; }
);

$result = $func(8);
echo $result; 

?>