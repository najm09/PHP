<?php
  $a[] = "Alvin";
  $a[] = "Biba";
  $a[] = "chalotte";
  $a[] = "diva";
  $a[] = "eulia";
  $a[] = "foster";
  $a[] = "george";
  $a[] = "helena";
  $a[] = "David";
  $a[] = "jack";
  $a[] = "kevin";
  $a[] = "chaplin";
  $a[] = "monica";
  $a[] = "andy";
  $a[] = "peter";
  $a[] = "quill";
  $a[] = "bunny";
  $a[] = "ross";
  $a[] = "stephen";
  $a[] = "taylor";
  $a[] = "sophiya";
  $a[] = "veins";
  $a[] = "ravi";
  $a[] = "ayaaz";
  $a[] = "zaid";
  $a[] = "yash";

  $q = $_REQUEST["q"];
  $hint = "";

  if($q !== ""){
    $q = strtolower($q);
    $len = strlen($q);
    foreach($a as $name){
      if(stristr($q, substr($name, 0, $len))){
        if($hint === ""){
          $hint = $name; 
        }
        else{
          $hint .= ", $name";
        }
      }
    }
  }
  echo $hint === "" ? "No suggestion":$hint;

?>