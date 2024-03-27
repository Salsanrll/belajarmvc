<?php

class About
{
    public function index()
    {
        echo "Anda Masuk Masuk Class About dan Method index";
    }

    public function page($nama = 'Caduts', $pekerjaan = 'Mahasiswi')
    {
        echo "Nama saya $nama, pekerjaan saya $pekerjaan";
    }
}