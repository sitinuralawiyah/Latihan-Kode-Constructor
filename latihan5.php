<?php
class Kerudung{
	public $merk,
			$harga;

	public function cetakKerudung(){
		return "$this->merk, $this->harga";
	}

	public function __construct($merk="merk", $harga=0){
		$this->merk = $merk;
		$this->harga = $harga;
	}
}

$Kerudung = new Kerudung("Elzatta",35000);
echo $Kerudung->cetakKerudung();

?>