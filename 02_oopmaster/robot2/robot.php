<?php
class robot
{
    public $warna;
    public $nama;
    const JENIS = 2;
	
    public function cekrobot($jenis)
    {
        if ($jenis != self::JENIS) {
            throw new Exception('Itu bukan termasuk jenis robot karena Robot humanoid diciptakan untuk meniru beberapa tugas fisik = '.$jenis);
        } else {
            $warna = $this->warna;
            $nama = $this->nama;
            $text = "robot anda berwarna $warna, dan berjenis $jenis";
            return $text;
        }
    }
}