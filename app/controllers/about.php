<?php

class about extends Controller {

    public function Index($nama ="siapa", $tempat = "dimana", $judul = "About"){
        
        $data['judul'] = $judul;
        $this->view('template/header', $data);
        $data['nama'] = $nama;
        $data['tempat'] = $tempat;
        $this->view('about/index', $data);
        $this->view('template/footer');
    }

    public function Page(){
        $this->view('template/header');
        $this->view('about/page');
        $this->view('template/footer');
    }
}

?>