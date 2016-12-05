<?php
	class Player{
		private $name;
		private $blood;
		private $mana;
	
		public function __construct($name){
			$this->name = $name;
			$this->blood = 100;
			$this->mana = 40;
		}
		
		public function set_name($name){
			$this->name=$name;
		}
		
		public function get_name(){
			return $this->name;
		}
		
		public function set_blood($blood){
			$this->blood=$blood;
		}
		
		public function get_blood(){
			return $this->blood;
		}
		
		public function set_mana($mana){
			$this->mana=$mana;
		}
		
		public function get_mana(){
			return $this->mana;
		}
		
		public function attack(){
			$this->mana -= 10;
		}
		
		public function deffend(){
			$this->mana -= 25;
		}
		
	}
	
	echo"===========SELAMAT DATANG DI GAME============\n";
	$name = "";	
	$posisi = "";	
	echo "Masukan Nama Player : ";
	fscanf(STDIN, "%s\n", $name);
	$player = new Player($name);
	echo "Pilih Posisi Menyerang Atau Bertahan : ";
	fscanf(STDIN, "%s\n", $posisi);
	if($posisi == "Meyerang"){
		$player->attack();
	}else{
		$player->deffend();
	} 
	print_r($player);
	
	/* class Main(){
		public $player = [];
		
		public function menu(){
		
		}
	}
	/* $players["kunto"] = new Player("kunto");
		$players[cecep] = new Player("cecep");
	
	$players["cecep"]->attach */
?>
