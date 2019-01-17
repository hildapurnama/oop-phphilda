<?

// static function halo() {
//		return"Hallo " . self::$angka++ . "kali.";
// }class Contoh static {
// public static $angka = 1;

// public 
// }

// echo Contohstatic::$angka;
// echo "<br>";
// echo Contohstatic::hallo();
// echo "<hr>";
// echo Contohstatic::halo();


class Contoh {
	public $angka = 1;

	public function halo() {
		return "Halo " . $this->angka++ . "kali. <br>";
	}
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
