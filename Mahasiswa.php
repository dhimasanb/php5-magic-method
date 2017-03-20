<?php
class Mahasiswa {
  private $nama;
  private $alamat;

  public function setNama($val) {
    $this->nama = $val;
  }

  public function getNama() {
    return $this->nama;
  }

  public function setAlamat($val) {
    $this->alamat = $val;
  }

  public function getAlamat() {
    return $this->alamat;
  }
}

$mahasiswa = new Mahasiswa();
$mahasiswa->setNama("Dhimas Ganteng");
$mahasiswa->setAlamat("Jakarta");
echo "Mahasiswa " . $mahasiswa->getNama() . " tinggal di " . $mahasiswa->getAlamat() . "\n" ;

?>
