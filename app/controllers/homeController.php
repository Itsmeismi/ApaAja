<?php

class homeController extends Controller
{

    public function index()
    {
        $data['title'] = 'Halaman Home';

        echo "Selamat Datang";
    }
}
