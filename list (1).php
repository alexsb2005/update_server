<?php
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
 function get_data() {
  $file_name= 'list'. '.json';

  if(file_exists("$file_name")) {
   $current_data=file_get_contents("$file_name");
   $array_data=json_decode($current_data, true);
       
   $extra=array(
    'servername' => $_POST['servername'],
   );
   $array_data[]=$extra;
   return json_encode($array_data);
  }
  else {
   $datae=array();
   $datae[]=array(
    'servername' => $_POST['servername'],
   );
   return json_encode($datae);
  }
 }

 $file_name= 'list'. '.json';
 
 if(file_put_contents("$file_name", get_data())) {
  echo 'true';
 }    
 else {
  echo 'There is some error';    
 }
}
 
?>