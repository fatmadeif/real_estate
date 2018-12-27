<?php

class Propriety {
  static protected $database;

  static public function set_database($database) {
    self::$database = $database;
  }

  public $id;
  private $name;
  private $photos;
  private $created_at;
  private $updated_at;
  private $price;
  private $longitude;
  private $latitude;
  private $num_of_view;
  private $type;
  private $address;
  private $sevices;

  public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}
  public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getPhotos(){
		return $this->photos;
	}

	public function setPhotos($photos){
		$this->photos = $photos;
	}

	public function getCreated_at(){
		return $this->created_at;
	}

	public function setCreated_at($created_at){
		$this->created_at = $created_at;
	}

	public function getUpdated_at(){
		return $this->updated_at;
	}

	public function setUpdated_at($updated_at){
		$this->updated_at = $updated_at;
	}

	public function getPrice(){
		return $this->price;
	}

	public function setPrice($price){
		$this->price = $price;
	}

	public function getLongitude(){
		return $this->longitude;
	}

	public function setLongitude($longitude){
		$this->longitude = $longitude;
	}

	public function getLatitude(){
		return $this->latitude;
	}

	public function setLatitude($latitude){
		$this->latitude = $latitude;
	}

	public function getNum_of_view(){
		return $this->num_of_view;
	}

	public function setNum_of_view($num_of_view){
		$this->num_of_view = $num_of_view;
	}

	public function getType(){
		return $this->type;
	}

	public function setType($type){
		$this->type = $type;
	}

	public function getAddress(){
		return $this->address;
	}

	public function setAddress($address){
		$this->address = $address;
	}
  public function getServices(){
		return $this->$sevices;
	}

	public function setServices($sevices){
		$this->sevices = $sevices;
	}


}
