 <?php
 function randomPHPCode(){
   $code = "<?php
function randomPHPCode() {
    $code = \"<?php
function randomPHPCode() {\n";
    for ($i=0; $i < 10; $i++) { 
      $code .= rand(0,9);
    }
    $code .= "} ?>\"\n";
    return $code;
   }
?>";
return $code;
}
?>
