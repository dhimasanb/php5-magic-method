<?php
class Mahasiswa {
  private $nama;
  private $alamat;

  public function __get($attribute) {
    if (property_exists($this, $attribute)) {
      return $this->$attribute;
    }
  }

  public function __set($attribute, $value) {
    if (property_exists($this, $attribute)) {
      $this->$attribute = $value;
    }
  }
}

$mahasiswa = new Mahasiswa();
$mahasiswa->nama = "Dhimas Ganteng";
$mahasiswa->alamat = "Jakarta";
echo "Mahasiswa " . $mahasiswa->nama . " tinggal di " . $mahasiswa->alamat . "\n" ;

?>
