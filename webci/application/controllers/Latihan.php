<?php
class Latihan extends CI_Controller {
        public function index()
        {
                $this->load->view('latihan/viewlatihan');
        }
        public function kedua()
        {
                echo 'Fungsi kedua';
        }		

        public function formulir()
        {
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('name', 'Name', 'required');
                $this->form_validation->set_rules('kodepos', 'Kodepos', 'required',
                        array('required' => ' %s harus diisi')
                );
                $this->form_validation->set_rules('email', 'Email', 'required');
                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('latihan/formulir');
                }
                else
                {
                        echo 'Berhasil';
                }
        }
}