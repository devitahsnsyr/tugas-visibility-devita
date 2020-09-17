<?php
class siswa{
	public $nama;
	public $jurusan;
	public $rayon;
	protected $diskon;
	private $bayaranSPP;

	public function getcetak(){
		return " $this->nama, $this->jurusan, $this->rayon, (RP $this->bayaranSPP)";
	}
	public function __construct($nama="nama", $jurusan="jurusan", $rayon="rayon", $bayaranSPP=0, $beasiswa="beasiswa",$pkl="pkl"){
		$this->nama = $nama;
		$this->jurusan = $jurusan;
		$this->rayon = $rayon;
		$this->bayaranSPP =$bayaranSPP;
		$this->beasiswa =$beasiswa;
		$this->pkl = $pkl;
	}

	public function cetakinfoSiswa(){
		$str="{$this->nama}, {$this->getcetak()} ";
		return $str;
	}
	public function setDiskon($diskon){
		$this->diskon= $diskon;
	}
	public function getbayaranSpp(){
		return $this->bayaranSPP - ($this->bayaranSPP * $this->diskon / 100);
	}

}
 class kelas11 extends siswa{
 	public $pkl;
 	public function __construct($nama,$jurusan,$rayon,$bayaranSPP,$pkl){
 		parent :: __construct($nama,$jurusan,$rayon,$bayaranSPP);
 		$this->pkl=$pkl;
 	}
 	public function cetakinfoSiswa(){
 		$str=" kelas11: ".parent::getcetak()." | pkl: {$this->pkl}";
 		return $str;
 	}

 }
 $siswa1 = new kelas11("Devita Hasnasya Rahma", "RPL XI-2", "Ciawi 1", 350000, "sedang pkl");

 echo $siswa1->cetakinfoSiswa();
 echo "<br>";
 echo "<hr>";
 $siswa1->setDiskon(20);
 echo " Maka spp yang harus dibayar adalah: ";
 echo $siswa1->getbayaranSpp();




