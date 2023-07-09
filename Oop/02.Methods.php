<?php

// Initialize a class when it is created
class Book
{
    // Properties
    public $title;
    public $author;
    public $pages;

    /**
     * Constructor - It is a special method that is automatically called when an object is created
     * */
    public function __construct($title, $author, $pages)
    {
        $this->title  = $title;
        $this->author = $author;
        $this->pages  = $pages;
    }

    // Method
    public function bookInfo()
    {
        return "The book {$this->title} was written by {$this->author} and has {$this->pages} pages.";
    }
}

// Object book
$book1 = new Book('Harry Potter', 'JK Rowling', 400);
$book1->title  = 'Hunger Games';
$book1->author = 'Suzanne Collins';
$book1->pages  = 500;

// Print to screen
echo "The book title is: " . $book1->title . "\n";
echo "The book author is: " . $book1->author . "\n";
echo "The book pages is: " . $book1->pages . "\n";

// Access method bookInfo() in class Book
echo $book1->bookInfo() . "\n";
