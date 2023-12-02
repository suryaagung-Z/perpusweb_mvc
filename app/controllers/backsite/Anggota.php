<?php
class Anggota extends Controller
{
    public function index()
    {
        $data['title'] = 'Anggota';
        $data['anggota'] = $this->model('AnggotaModel')->getAllAnggota();  
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/anggota/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function search()
    {
        $data['title'] = 'Anggota';
        $data['anggota'] = $this->model('AnggotaModel')->cariAnggota();
        $data['key'] = $_POST['key'];
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/anggota/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function create()
    {
        $data['title'] = 'Anggota';
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/anggota/create');
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function store()
    {
        if ($this->model('AnggotaModel')->tambahAnggota($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . BASEURL . '/backsite/anggota');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/backsite/anggota');
            exit;
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Anggota';
        $data['anggota'] = $this->model('AnggotaModel')->getAnggotaById($id);
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/anggota/edit', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function update()
    {
        if ($this->model('AnggotaModel')->updateAnggota($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location: ' . BASEURL . '/backsite/anggota');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location: ' . BASEURL . '/backsite/anggota');
            exit;
        }
    }
    public function deploy($id)
    {
        if ($this->model('AnggotaModel')->deleteAnggota($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . BASEURL . '/backsite/anggota');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . BASEURL . '/backsite/anggota');
            exit;
        }
    }

    public function print($id)
    {
        if ($this->model('AnggotaModel')->deleteAnggota($id) > 0) {
            Flasher::setMessage('Berhasil', 'diprint', 'success');
            header('location: ' . BASEURL . '/backsite/anggota');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diprint', 'danger');
            header('location: ' . BASEURL . '/backsite/anggota');
            exit;
        }
    }
}