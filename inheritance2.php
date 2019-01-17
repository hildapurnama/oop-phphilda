<?php

class produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $waktumain;


public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktumain = 0 ) {
	$this->judul = $judul;
	$this->penulis = $penulis;
	$this->penerbit = $penerbit;
	$this->harga = $harga;
	$this->jmlHalaman = $jmlHalaman;
	$this->waktumain = $waktumain;
 }
	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	
	}
		
	public function getInfoProduk() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;
		}
	}



	class komik extends produk{
		public function getInfoProduk(){
			$str = "komik : {$this->judul} | {$this->getLabel()} {Rp-{$this->harga} {$this->jmlHalaman} halaman.";
			return $str;
		}
	}




class Game  extends produk{
	public function getInfoProduk() {
			$str = "Game : {$this->judul}| {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktumain} Jam.";
	return $str;
	
}
}

class Cetakinfoproduk {
	public function cetak(produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
		}
}



$produk1 = new komik("Naruto","Masashi Kishimoto","Shonen Jump",30000, 100, 0);
$produk2 = new Game("Uncharted","Neil Druckman","Sony computer",25000,0, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
