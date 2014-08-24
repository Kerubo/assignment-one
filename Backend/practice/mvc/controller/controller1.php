<?php
//we are going to call a controller class.
//model is the permanent storage of data used in the overal design
include_once("model/model.php");

class Controller{
	public $model;
	public function_construct()
	{
		$this->model=new model();
	}
	  public function invoke()  
     {  
          if (!isset($_GET['book']))  
          {  
               // no special book is requested, we'll show a list of all available books  
               $books = $this->model->getBookList();  
               include 'view/booklist.php'; 
          } 
          else 
          { 
               // show the requested book 
               $book = $this->model->getBook($_GET['book']); 
               include 'view/viewbook.php';  
          }  
     }  
}
?>