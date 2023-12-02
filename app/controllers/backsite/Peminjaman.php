<?php
class Peminjaman extends Controller
{
    public function index()
    {
        $data['title'] = 'Peminjaman';
        $data['peminjaman'] = $this->model('PeminjamanModel')->getAllPeminjaman();  
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/peminjaman/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function search()
    {
        $data['title'] = 'Peminjaman';
        $data['peminjaman'] = $this->model('PeminjamanModel')->cariPeminjaman();
        $data['key'] = $_POST['key'];
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/peminjaman/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function create()
    {
        $data['title'] = 'Peminjaman';
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/peminjaman/create');
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function store()
    {
        if ($this->model('PeminjamanModel')->tambahPeminjaman($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . BASEURL . '/backsite/Peminjaman');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/backsite/Peminjaman');
            exit;
        }
    }
    public function cetak()
    {
        $data['title'] = 'Peminjaman';
        $data['peminjaman'] = $this->model('PeminjamanModel')->cetakPeminjaman();  
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/peminjaman/cetak', $data);
        $this->view('backsite/templates/script');
    }
    public function print()
    {
        if ($this->model('PeminjamanModel')->cetakPeminjaman($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'dicetak', 'success');
            header('location: ' . BASEURL . '/backsite/Peminjaman');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dicetak', 'danger');
            header('location: ' . BASEURL . '/backsite/Peminjaman');
            exit;
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Peminjaman';
        $data['peminjaman'] = $this->model('PeminjamanModel')->getPeminjamanById($id);
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/peminjaman/edit', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function update()
    {
        if ($this->model('PeminjamanModel')->updatePeminjaman($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location: ' . BASEURL . '/backsite/Peminjaman');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location: ' . BASEURL . '/backsite/Peminjaman');
            exit;
        }
    }
    public function deploy($id)
    {
        if ($this->model('PeminjamanModel')->deletePeminjaman($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . BASEURL . '/backsite/Peminjaman');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . BASEURL . '/backsite/Peminjaman');
            exit;
        }
    }
}