<?php
class Mahasiswa {
  private $nama;
  private $alamat;
  private $berat;
  private $tinggi;

  public function __get($attribute) {
    if (method_exists($this, 'get'.$attribute)) {
      return call_user_func([$this, 'get'.$attribute]);
    } else {
      return $this->$attribute;
    }
  }

  public function __set($attribute, $value) {
    if (property_exists($this, $attribute)) {
      $this->$attribute = $value;
    }
  }

  public function getBerat() {
      return $this->berat . " Kg";
  }

  public function getTinggi() {
      return $this->tinggi . " Cm";
  }

}

$mahasiswa = new Mahasiswa();
$mahasiswa->nama = "Dhimas Ganteng";
$mahasiswa->alamat = "Jakarta";
$mahasiswa->berat = 80;
$mahasiswa->tinggi = 180;
echo "Mahasiswa " . $mahasiswa->nama . " tinggal di " . $mahasiswa->alamat . "\n" ;
echo "Dengan berat " . $mahasiswa->berat . " dan tinggi " . $mahasiswa->tinggi . "\n";

?>
