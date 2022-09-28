<?php
// buat class penjualan_beras
class penjualan_beras{
  
   public $barang = "beras";
   public $harga = "50000";
  
   public function tampilkan_penjualan_beras(){
     echo "barang : $this->barang, harga : $this->harga";
  }
  public function __construct(){
    echo "Ini berasal dari Constructor penjualan_beras";
  }

}
  $penjualan_beras = new penjualan_beras;