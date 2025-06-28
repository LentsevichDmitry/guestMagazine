<?php

class GuestMagazine
{
    public $name;
    public $review;
    public $file = 'guestMagazine.txt';

    public function __construct()
    {
        $this->name = $_POST['name'];
        $this->review = $_POST['review'];
    }


    public function addReview()
    {
        $data = "Name: $this->name;\nReview: $this->review;\n\n";
        file_put_contents($this->file, $data, FILE_APPEND);
    }
}

$newMagazine = new GuestMagazine();
$newMagazine->addReview();