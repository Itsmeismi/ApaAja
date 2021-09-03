<?php

class SiswaController extends Controller
{
    public function index()
    {
        $data['title'] = 'Data Siswa';
        $data['siswa'] = $this->model('siswaModel')->getAllSiswa();
        $this->view('siswa/index', $data);
    }
}
