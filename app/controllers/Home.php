<?php
class Home extends Controller
{

    public function index()
    {
        $data['title'] = 'Halaman Home';
        $data['isi'] = 'ini adalah isi';

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');;
    }
}
