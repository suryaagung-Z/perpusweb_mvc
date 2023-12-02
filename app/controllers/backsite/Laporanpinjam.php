<?php
class Laporanpinjam extends Controller
{
    public function index()
    {
        $data['title'] = 'Laporan Peminjaman Buku Perpustakaan';
        $data['peminjaman'] = $this->model('PeminjamanModel')->getAllPeminjaman();
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/laporanpinjam/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }
    public function search()
    {
        $data['title'] = 'Laporanpinjam';
        $data['peminjaman'] = $this->model('PeminjamanModel')->cariPeminjaman();
        $data['key'] = $_POST['key'];
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/laporanpinjam/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function cetak()
    {
        $getByDate = [];
        if (isset($_POST['date'])) {
            $dateParts = explode('-', $_POST['date']);
            $tahun = $dateParts[0];
            $bulan = $dateParts[1];
            $tanggal = $dateParts[2];
            $getByDate = $this->model('PeminjamanModel')->cetakLaporanByDate($tahun, $bulan, $tanggal);
        } else {
            $getByDate = $this->model('PeminjamanModel')->cetakPeminjaman();
        }

        $data['title'] = 'Laporanpinjam';
        $data['peminjaman'] = $getByDate;
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/laporanpinjam/cetak', $data);
        $this->view('backsite/templates/script');
    }

    public function print()
    {
        if ($this->model('LaporanpinjamModel')->cetakLaporanpinjam($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'dicetak', 'success');
            header('location: ' . BASEURL . '/backsite/Laporanpinjam');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dicetak', 'danger');
            header('location: ' . BASEURL . '/backsite/Laporanpinjam');
            exit;
        }
    }
}
