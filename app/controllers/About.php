<?php

class About {
    public function index($nama = 'Dimas', $pekerjaan = 'Programmer') {
        echo "Halo saya $nama, saya $pekerjaan";
    }
    public function page() {
        echo 'About in page';
    }
}