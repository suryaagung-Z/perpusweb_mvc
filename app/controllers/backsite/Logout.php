<?php

class Logout extends Controller
{
    public function index()
{
    $data['title'] = 'Logout';

    $this->view('backsite/templates/style', $data);
    $this->view('backsite/templates/header', $data);
    $this->view('backsite/templates/sidebar', $data);
    $this->view('backsite/templates/breadcrumb', $data);
    $this->view('backsite/logout/index', $data);
    $this->view('backsite/templates/footer');
    $this->view('backsite/templates/script');
    }
}