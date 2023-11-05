<?php
require_once_DIR_ ."/Presiden.php";
require_once_DIR_."/WakilPresiden.php";

    class Paspampres implements Presiden, WakilPresiden{
      public function presiden($nama):void{
        echo "tugas saja menjaga Presiden $nama";
      }
      public function wakilpresiden($nama): void{
        echo "tugas saja menjaga Wakil Presiden $nama";
      }
}