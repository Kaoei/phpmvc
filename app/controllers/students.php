<?php
class students extends Controller {
    public function index(){
        $data['judul'] = 'Siswa';
        $this->view('template/header', $data);
        $data['table'] = $this->model('siswa_model')->getAllSiswa();
        $this->view('students/index',$data);
        $this->view('template/footer');
    }

    public function detail($id) {
        $data['judul'] = 'Detail Siswa';
        $data['table'] = $this->model('siswa_model')->getSiswaById($id);
        $this->view('template/header', $data);

        $this->view('students/detail', $data);
        $this->view('template/footer');
    }

    public function tambah(){
        if($this->model('siswa_model')->tambahDataSiswa($_POST) > 0){
            flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/students');
            exit;
        }else{
            flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/students');
            exit;
        }
    }

    public function hapus($id){
        if($this->model('siswa_model')->deleteSiswaById($id) > 0){
            flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/students');
            exit;
        }else{
            flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/students');
            exit;
        }
    }

    public function update(){
        if($this->model('siswa_model')->updateDataSiswa($_POST) > 0){
            flasher::setFlash('berhasil', 'diupdate', 'success');
            header('Location: ' . BASEURL . '/students');
            exit;
        }else{
            flasher::setFlash('gagal', 'diupdate', 'danger');
            header('Location: ' . BASEURL . '/students');
            exit;
        }
    }


}
?>