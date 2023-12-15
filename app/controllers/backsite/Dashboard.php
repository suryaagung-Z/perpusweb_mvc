<?php

class Dashboard extends Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['anggota'] = $this->model('AnggotaModel')->getAllAnggota();

        $data['count_anggota'] = $this->model('AnggotaModel')->countAnggota();
        $data['count_buku'] = $this->model('BukuModel')->countBuku();
        $data['count_peminjaman'] = $this->model('PeminjamanModel')->countPeminjaman();
        $data['count_pengembalian'] = $this->model('PengembalianModel')->countPengembalian();

        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/dashboard/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }
}
