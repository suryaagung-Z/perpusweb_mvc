<?php

class Kategori extends Controller
{
    public function index()
{
    $data['title'] = 'Kategori';
    $data['kategori'] = $this->model('KategoriModel')->getAllKategori();
    $this->view('backsite/templates/style', $data);
    $this->view('backsite/templates/header', $data);
    $this->view('backsite/templates/sidebar', $data);
    $this->view('backsite/templates/breadcrumb', $data);
    $this->view('backsite/kategori/index', $data);
    $this->view('backsite/templates/footer');
    $this->view('backsite/templates/script');
    }

    public function search()
    {
        $data['title'] = 'Kategori';
        $data['kategori'] = $this->model('KategoriModel')->cariKategori();
        $data['key'] = $_POST['key'];
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/kategori/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function create()
    {
        $data['title'] = 'Kategori';
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/kategori/create');
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function store()
    {
        if ($this->model('KategoriModel')->tambahKategori($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . BASEURL . '/backsite/Kategori');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/backsite/Kategori');
            exit;
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Kategori';
        $data['kategori'] = $this->model('KategoriModel')->getKategoriById($id);
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/kategori/edit', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function update()
    {
        if ($this->model('KategoriModel')->updateKategori($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location: ' . BASEURL . '/backsite/Kategori');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location: ' . BASEURL . '/backsite/Kategori');
            exit;
        }
    }

    public function deploy($id)
    {
        if ($this->model('KategoriModel')->deleteKategori($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . BASEURL . '/backsite/Kategori');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . BASEURL . '/backsite/Kategori');
            exit;
        }
    }
}