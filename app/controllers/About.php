<?php

class About {
    public function index($nama='Shandika',$pekerjaan='dosen'){
        echo "Nama saya adalah $nama, saya adalah seorang $pekerjaan";
    }
    public function page(){
        echo 'About/page';
    }
}