<?php
//model is the permanent storage of data used in the overal design
    include_once("model/Book.php");  
      
    class Model {  
        public function getBookList()  
        {  
 // here goes some hardcoded values to simulate the database  
            return array(  
                "HTML for Dummies" => new Book("HTML for Dummies", "R. Kipling", "A classic book."),  
                "Solitude" => new Book("Solitude", "J. Walker", ""),  
                "PHP for Dummies" => new Book("PHP for Dummies", "Some Smart Guy", "")  
            );  
        }  
          
        public function getBook($title)  
        {  
 // we use the previous function to get all the books and then we return the requested one.  
  // in a real life scenario this will be done through a db select command  
            $allBooks = $this->getBookList();  
            return $allBooks[$title];  
        }  
          
          
    }  
?>