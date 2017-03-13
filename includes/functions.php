<?php 
function input($id,$type,$name,$place){ 
    echo "<p>$id<input id='$id' type='$type' name='$name' placeholder='$place'></p>"; 
 } 
 function submit($value,$class){ 
	echo "<input type='submit' name='submit' value='$value' class='$class'>"; 
 } 
