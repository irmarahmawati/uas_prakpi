<?php
class model_posting extends ci_model{
    
    
    function tampil_data()
    {
        $query= "SELECT * FROM blog_post";
        return $this->db->query($query);
    }
    
    function post($data)
    {
        $this->db->insert('blog_post',$data);
    }
    
    function get_one($id)
    {
        $param  =   array('id_blog'=>$id);
        return $this->db->get_where('blog_post',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_blog',$id);
        $this->db->update('blog_post',$data);
    }
    
    
    function delete($id)
    {
        $this->db->where('id_blog',$id);
        $this->db->delete('blog_post');
    }
}