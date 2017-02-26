<?php 
function input($id,$type,$name,$place){ 
    echo "<input id='$id' type='$type' name='$name' placeholder='$place'>"; 
 } 
 function submit($value,$class){ 
	echo "<input type='submit' name='submit' value='$value' class='$class'>"; 
 } 
