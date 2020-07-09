<?php  
class Mobil{
	private $warna;
	public $merk;

	public function setWarna($warnaBaru){
		$this->warna = $warnaBaru;
	}
	public function getWarna(){
		return $this->warna;
	}
}

$mobilAhmad = new Mobil();
$mobilAhmad->setWarna("Hitam");
echo "Mobil Ahmad adalah berwarna " .$mobilAhmad->getWarna()."<br>";
// echo "Mobil Ahmad adalah berwarna".$mobilAhmad->Warna."<br>";
$mobilAhmad->setWarna("Merah");
echo "warna mobil ahmad terbaru adalah " .$mobilAhmad->getWarna()."<br>";


$mobilDina = new Mobil();
$mobilDina->setWarna("Ungu");
echo "Mobil Dina adalah berwarna " .$mobilDina->getWarna()."<br>";
$mobilDina->setWarna("Biru");
echo "warna mobil Dina terbaru adalah " .$mobilDina->getWarna()."<br>";

$mobilSinta = new Mobil();
$mobilSinta->setWarna("Jingga");
echo "Mobil Sinta adalah berwarna " .$mobilSinta->getWarna()."<br>";
$mobilSinta->setWarna("Kuning");
echo "warna mobilSinta terbaru adalah " .$mobilSinta->getWarna()."<br>";

$mobilAziz = new Mobil();
$mobilAziz->setWarna("Silver");
echo "Mobil Aziz adalah berwarna " .$mobilAziz->getWarna()."<br>";
$mobilAziz->setWarna("Putih");
echo "warna mobilAziz terbaru adalah " .$mobilAziz->getWarna()."<br>";




?>