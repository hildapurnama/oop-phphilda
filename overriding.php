<?php

class produk {
	public $judul,
	       $penulis,
	       $penerbit,
	       $harga,
	       $waktumain;

public function  __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->waktuMain = $waktuMain;
}
	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";

		return$str;
	}

}