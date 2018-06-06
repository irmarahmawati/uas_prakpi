<?php
class Model_kategori extends CI_Model{
    
    
    
    function tampilkan_data(){
        
        return $this->db->get('blog_kategori');
    }
    
  function tampilkan_data_paging($halaman,$batas)
  {
      return $this->db->query("select * from blog_kategori");
  }
    
    function post(){
        $data=array(
           'nama_kategori'=>  $this->input->post('kategori')
                    );
        $this->db->insert('blog_kategori',$data);
    }
    
    
    function edit()
    {
        $data=array(
           'nama_kategori'=>  $this->input->post('kategori')
                    );
        $this->db->where('kategori_id',$this->input->post('id'));
        $this->db->update('blog_kategori',$data);
    }
    
    function get_one($id)
    {
        $param  =   array('id_kategori'=>$id);
        return $this->db->get_where('blog_kategori',$param);
    }
    
    
    function delete($id)
    {
        $this->db->where('id_kategori',$id);
        $this->db->delete('blog_kategori');
    }
}