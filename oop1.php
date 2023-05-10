<?php

class Product {
  private $name;
  private $price;
  private $discount;

  public function __construct($name, $price, $discount) {
    $this->name = $name;
    $this->price = $price;
    $this->discount = $discount;
  }

  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function getPrice() {
    return $this->price;
  }

  public function setPrice($price) {
    $this->price = $price;
  }

  public function getDiscount() {
    return $this->discount;
  }

  public function setDiscount($discount) {
    $this->discount = $discount;
  }
}

class CDMusic extends Product {
  private $artist;
  private $genre;

  public function __construct($name, $price, $discount, $artist, $genre) {
    parent::__construct($name, $price, $discount);
    $this->artist = $artist;
    $this->genre = $genre;
  }

  public function getArtist() {
    return $this->artist;
  }

  public function setArtist($artist) {
    $this->artist = $artist;
  }

  public function getGenre() {
    return $this->genre;
  }

  public function setGenre($genre) {
    $this->genre = $genre;
  }

  public function getPrice() {
    $price = parent::getPrice();
    $price += ($price * 0.1);
    $discount = parent::getDiscount();
    $discount += 0.05;
    return $price * (1 - $discount);
  }
}

class CDRack extends Product {
  private $capacity;
  private $model;

  public function __construct($name, $price, $discount, $capacity, $model) {
    parent::__construct($name, $price, $discount);
    $this->capacity = $capacity;
    $this->model = $model;
  }

  public function getCapacity() {
    return $this->capacity;
  }

  public function setCapacity($capacity) {
    $this->capacity = $capacity;
  }

  public function getModel() {
    return $this->model;
  }

  public function setModel($model) {
    $this->model = $model;
  }

  public function getPrice() {
    $price = parent::getPrice();
    $price += ($price * 0.15);
    return $price;
  }
}

// Contoh penggunaan
$cd_music = new CDMusic("Parachutes", 100000, 0.1, "Coldplay", "Pop");
echo "Nama Album : " . $cd_music->getName() . "<br>";
echo "Harga Album (disc) : " . $cd_music->getPrice() . "<br>";
echo "Discount : " . $cd_music->getDiscount() . "<br>";
echo "Artis : " . $cd_music->getArtist() . "<br>";
echo "Genre : " . $cd_music->getGenre() . "<br>";

$cd_rack = new CDRack("Rak CD", 500000, 0.2, 50, "Model Terbaru");
echo "Nama Rak : " . $cd_rack->getName() . "<br>";
echo "Harga Rak : " . $cd_rack->getPrice() . "<br>";
echo "Discount : " . $cd_rack->getDiscount() . "<br>";
echo "Kapasitas : " . $cd_rack->getCapacity() . "<br>";
echo "Model : " . $cd_rack->getModel() . "<br>";
