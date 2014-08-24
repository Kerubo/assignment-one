<?php
// index.php file
//this is the format of the controller php file.
//controllers ensures that the model and the view are together.
//the controller receives request from the client,invokes the model to perform the request and sends the data to the views.
include_once("controller/controller.php");

$controller = new controller();
$controller->invoke();
?>