<?php 

class home extends Controller {

    public function Index() {
        
        $data['judul'] = 'Utama';
        $this->view('template/header', $data);
        
        $data['user'] = $this->model('user_model')->getUser();
        $this->view('home/index', $data);

        $this->view('template/footer');
    }
}

?>