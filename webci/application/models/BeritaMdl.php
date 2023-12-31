<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BeritaMdl extends CI_Model {

 public function jmlh_berita()
 {
       return $this->db->count_all("berita");
 }

 public function dri_berita($limit, $start)
 {  
    $this->db->select('berita.*, user.fullname');
    $this->db->order_by("berita.id", "desc");
    $this->db->join('user', 'user.id = berita.user_id', 'left'); 
    $this->db->limit($limit, $start);
    $query = $this->db->get("berita");
    if ($query->num_rows() > 0)
    {
        foreach ($query->result_array() as $row)
        {
            $data[] = $row;
        }
        return $data;
    }
       return false;
 }

 public function get_berita($id = FALSE)
 {
    if ($id === FALSE)
    {
    $query = $this->db->get('berita');
    return $query->result_array();
    }

    $this->db->select('berita.*, user.fullname');
    $this->db->join('user', 'user.id = berita.user_id', 'left'); 
    $query = $this->db->get_where('berita', array('berita.id' => $id));
    return $query->row_array();
 }

 public function save()
 {
    $config['upload_path']          = './file/images/berita/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
    $config['encrypt_name'] = TRUE;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('fileupload'))
    {
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('berita/tambah', $error);
    }
    else
    {
        $gbr = $this->upload->data();
        $config['image_library']='gd2';
        $config['create_thumb']= FALSE;
        $config['maintain_ratio']= FALSE;
                    
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $config['source_image'] = './file/images/berita/'.$gbr['file_name'];
        $config['new_image'] = './file/images/berita/'.$gbr['file_name'];
        $config['width'] = 700;
        $config['height'] = 350;
        $config['quality']= '80%';
        $this->image_lib->initialize($config); 
        if ( ! $this->image_lib->resize())
        {
            echo 'Gagal';
        }

        $config['new_image'] = './file/images/berita/thumb/'.$gbr['file_name'];
        $config['width'] = 200;
        $config['height'] = 150;
        $config['quality']= '60%';
        $this->image_lib->initialize($config); 
        if ( ! $this->image_lib->resize())
        {
            echo 'Gagal';
        }

        $data = array(
            "title" => $this->input->post('title'),
            "tek" => $this->input->post('tek'),
            "category" => $this->input->post('category'),
            "user_id" => $this->input->post('user_id'),
            "timestamp" => date('Y-m-d H:i:s'),
            "image_path" => $gbr['file_name']
        );
        
        $this->db->insert('berita', $data); 
        redirect(site_url('berita/manage'));
    }
 }

 public function edit($id)
 {
    $data = array(
        "title" => $this->input->post('title'),
        "tek" => $this->input->post('tek'),
        "category" => $this->input->post('category'),
        "user_id" => $this->input->post('user_id')
    );
        
    $this->db->where('id', $id);
    $this->db->update('berita', $data); 
 }

 public function get_id($id)
 {
    $this->db->where('id', $id);
    return $this->db->get('berita')->row();
 }
        
 public function delete($id)
 {
    $query = $this->db->get_where('berita', array('id' => $id));
    $hp = $query->result_array(); 
    $nama='file/images/berita/'.$hp[0]['image_path'];
    $nama2='file/images/berita/thumb/'.$hp[0]['image_path'];
    unlink ($nama);
    unlink ($nama2);

    $this->db->where('id', $id);
    $this->db->delete('berita');
 }

}
