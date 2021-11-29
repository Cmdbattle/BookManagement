<?php

class book {
    private $bookID, $title, $author, $numberAvailable, $publisher, $genre, $yearPublished ;
    
    public function __construct($bookID, $title, $author, $numberAvailable, $publisher, $genre, $yearPublished) {
        $this->bookID           = $bookID;
        $this->title            = $title;
        $this->author           = $author;
        $this->numberAvailable  = $numberAvailable;
        $this->publisher        = $publisher;
        $this->genre            = $genre;
        $this->yearPublished    = $yearPublished;
        
    }
    function getBookID() {
        return $this->bookID;
    }
    
    function getTitle() {
        return $this->title;
    }

    function getAuthor() {
        return $this->author;
    }

    function getNumberAvailable() {
        return $this->numberAvailable;
    }

    function getPublisher() {
        return $this->publisher;
    }

    function getGenre() {
        return $this->genre;
    }

    function getYearPublished() {
        return $this->yearPublished;
    }

    function setBookID($bookID){
        $this->bookID = $bookID;
    }
    
    function setTitle($title){
        $this->title = $title;
    }

    function setAuthor($author){
        $this->author = $author;
    }

    function setNumberAvailable($numberAvailable){
        $this->numberAvailable = $numberAvailable;
    }

    function setPublisher($publisher){
        $this->publisher = $publisher;
    }

    function setGenre($genre){
        $this->genre = $genre;
    }

    function setYearPublished($yearPublished){
        $this->yearPublished = $yearPublished;
    }


} //end book
