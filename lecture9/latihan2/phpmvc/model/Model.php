<?php
    require_once("model/Book.php");

    class Model{
        public function getBookList(){
            return array(
                "Jungle Book" => new Book("Jungle Book", "R. Kipling", "A Classic Book."),
                "Moonwalker" => new Book("Moonwalker", "J. Walker", "Simple Java Book for students."),
                "PHP for Dummies" => new Book("PHP for Dummies", "Smart Guy", "My favourite book.")
            );
        }

        public function getBook($title){
            $allBooks = $this->getBookList();
            return $allBooks[$title];
        }
    }
?>