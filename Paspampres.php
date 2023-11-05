<?php
require_once __DIR__ ."/Presiden.php";
require_once __DIR__ ."/WakilPresiden.php";

    class Paspampres implements Presiden, WakilPresiden{
      public function presiden($nama):void{
        echo "tugas saya menjaga Presiden $nama";
      }
      public function wakilpresiden($nama): void{
        echo "tugas saya menjaga Wakil Presiden $nama";
      }
}