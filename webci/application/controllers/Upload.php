<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->library('session');
        }

        public function index()
        {
                $this->load->view('upload_form', array('error' => ' ' ));
        }

        public function do_upload()
        {
                $config['upload_path']          = './assets/images/berita/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
                $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
                $config['max_size']             = 1500;
                $config['max_width']            = 1200;
                $config['max_height']           = 800;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('fileupload'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {

                    $gbr = $this->upload->data();
                    //Compress Image
                    $config['image_library']='gd2';
                    $config['create_thumb']= FALSE;
                    $config['maintain_ratio']= FALSE;
                    

                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();


                    // Resize to medium

                    $config['source_image'] = './assets/images/berita/'.$gbr['file_name'];
                    $config['new_image'] = './assets/images/berita/'.$gbr['file_name'];
                    $config['width'] = 700;
                    $config['height'] = 450;
                    $config['quality']= '80%';


                    $this->image_lib->initialize($config); 

                    if ( ! $this->image_lib->resize())
                    {
                        // an error occured
                    }

                    // Keep the same source image

                    $config['new_image'] = './assets/images/berita/thumb/'.$gbr['file_name'];
                    $config['width'] = 275;
                    $config['height'] = 175;
                    $config['quality']= '60%';

                    $this->image_lib->initialize($config); 

                    if ( ! $this->image_lib->resize())
                    {
                        // an error occured
                    }

                        $data = array('upload_data' => $this->upload->data());

        $data = array(
            "title" => $this->input->post('title'),
            "tek" => $this->input->post('tek'),
            "category" => $this->input->post('category'),
            "user_id" => $this->input->post('user_id'),
            "timestamp" => date('Y-m-d H:i:s'),
            "image_path" => $gbr['file_name']
        );
        
        $this->db->insert('berita', $data); 

                         echo 'Upload Berhasil';
                }
        }
}
?>