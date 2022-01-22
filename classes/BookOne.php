<?php

class BookOne {

    private $chapterNumber;
    private $currentChapterStudied;
    private $totalBookPages;
    private $currentChapterPages;
    private $bookIsbn;
    private $bookId;
    private $bookTitle;
    private $bookAuthor;
    private $bookPrice;

    private $nextLine = "\r\n";
    private $agliLine = "<br>";

    function __construct(
        $chapterNumber,
        $currentChapterStudied,
        $totalBookPages,
        $currentChapterPages,
        $bookIsbn,
        $bookId,
        $bookTitle,
        $bookAuthor,
        $bookPrice) {
        $this->bookAuthor = $bookAuthor;
        $this->bookTitle = $bookTitle;
        $this->bookId = $bookId;
        $this->bookIsbn = $bookIsbn;
        $this->currentChapterPages = $currentChapterPages;
        $this->totalBookPages = $totalBookPages;
        $this->currentChapterStudied = $currentChapterStudied;
        $this->chapterNumber = $chapterNumber;
        $this->bookPrice = $bookPrice;
    }

    function getBookId() {
        return $this->bookId;
    }

    function getBookDetails(): array {
        return [
            "Book Title " => $this->bookTitle,
            "Book Author " => $this->bookAuthor,
            "Book Price " => $this->bookPrice
        ];
    }

    // this phpstorm version does not support php variable types
    function getBookPrice(): float {
        return $this->bookPrice;
    }

}

