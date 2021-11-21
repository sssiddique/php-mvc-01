<?php
//Code starts from here
include 'Book.php';

class Model {
    public function getBookDetails(){
        return array (
            "Xyz" => new Book('Xyz', 'Author A', 'The Book Is a test Book'),
            "Jungle" => new Book('Jungle', 'Author B', 'The Book is for Test2')
        );
    }
 
    public function getBook($title){
            $allbooks = $this->getBookDetails();
            return $allbooks[$title];
    }
}
?>