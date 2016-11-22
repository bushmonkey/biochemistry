<?php

$connection = mysqli_connect('localhost', 'root', '', 'biochemistry');

if(!$connection)


{

  $bConnection = false;

  exit("Unable to make a connection to the database");

}


?>