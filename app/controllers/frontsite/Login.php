<?php
class Login extends Controller
{
public function index()
{
    $data['title'] = 'Login';
    $this->view('frontsite/templates/style', $data);
    $this->view('frontsite/templates/header', $data);
    $this->view('frontsite/login/index', $data);
    $this->view('frontsite/templates/footer');
    $this->view('frontsite/templates/script');


}
public function login()
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    //echo $username.'<br>'.$password;  //mengecek apakah username dan pass terkirim
    $data['login'] = $this->model('LoginModel')->getUser($username, $password);
    //proses username dan pass
    var_dump($data['login']);
}
}


