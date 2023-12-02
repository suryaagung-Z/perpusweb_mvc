<?php
class Resume extends Controller
{
public function index()
{
$data['title'] = 'Resume';
$this->view('frontsite/templates/style', $data);
$this->view('frontsite/templates/header', $data);
$this->view('frontsite/resume/index');
$this->view('frontsite/templates/script');
}
}
