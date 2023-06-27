<?php

// An example Book storeclass with getters and setters and all visibility types
class Book
{
    // Properties
    private $title;
    private $author;
    private $pages;
    protected $price;

    public function __construct($title, $author, $pages)
    {
        $this->title  = $title;
        $this->author = $author;
        $this->pages  = $pages;
    }

    // Getters
    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }
    
    public function getPages()
    {
        return $this->pages;
    }

    public function getPrice()
    {
        return $this->price;
    }

    // Setters
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }
    
    public function setPages($pages)
    {
        $this->pages = $pages;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    // Methods
    public function bookInfo()
    {
        return "The book {$this->title} was written by {$this->author} and has {$this->pages} pages.";
    }
}

// Object book
$book1 = new Book('Harry Potter', 'JK Rowling', 400);

// echo $book1->title = 'Hunger Games'; // Fatal error: Cannot access private property Book::$title

// echo $book1->price = 10; // Fatal error: Cannot access protected property Book::$price

// Setters
$book1->setTitle('Hunger Games');

// Print to screen
echo "The book title is: " . $book1->getTitle() . "\n";
echo "The book author is: " . $book1->getAuthor() . "\n";
echo "The book pages is: " . $book1->getPages() . "\n";
echo $book1->bookInfo() . "\n";