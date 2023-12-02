<?php

class Laporankembali extends Controller
{
    public function index()
{
    $data['title'] = 'Laporan Pengembalian Buku Perpustakaan';
    $data['pengembalian'] = $this->model('PengembalianModel')->getAllPengembalian();  
    $this->view('backsite/templates/style', $data);
    $this->view('backsite/templates/header', $data);
    $this->view('backsite/templates/sidebar', $data);
    $this->view('backsite/templates/breadcrumb', $data);
    $this->view('backsite/laporankembali/index', $data);
    $this->view('backsite/templates/footer');
    $this->view('backsite/templates/script');
    }

public function search()
{
    $data['title'] = 'Laporankembali';
    $data['pengembalian'] = $this->model('PengembalianModel')->cariPengembalian();
    $data['key'] = $_POST['key'];
    $this->view('backsite/templates/style', $data);
    $this->view('backsite/templates/header', $data);
    $this->view('backsite/templates/sidebar', $data);
    $this->view('backsite/templates/breadcrumb', $data);
    $this->view('backsite/laporankembali/index', $data);
    $this->view('backsite/templates/footer');
    $this->view('backsite/templates/script');
}

public function cetak()
{
    $data['title'] = 'Laporan kembali';
    $data['pengembalian'] = $this->model('PengembalianModel')->cetakPengembalian();  
    $this->view('backsite/templates/style', $data);
    $this->view('backsite/templates/header', $data);
    $this->view('backsite/templates/sidebar', $data);
    $this->view('backsite/templates/breadcrumb', $data);
    $this->view('backsite/laporankembali/cetak', $data);
    $this->view('backsite/templates/script');
}
public function print()
{
    if ($this->model('LaporankembaliModel')->cetakLaporankembali($_POST) > 0) {
        Flasher::setMessage('Berhasil', 'dicetak', 'success');
        header('location: ' . BASEURL . '/backsite/Laporankembali');
        exit;
    } else {
        Flasher::setMessage('Gagal', 'dicetak', 'danger');
        header('location: ' . BASEURL . '/backsite/Laporankembali');
        exit;
    }
}
}