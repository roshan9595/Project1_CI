<?php

class Insert_model extends CI_Model{
   
 function form_insert($data){
 //Inserting in Table(students) of Database(college) 
       $this->db->insert('category', $data);  
    }    
   
    function form_insertsub($data)
    {
        $this->db->insert('subcategory',$data);
    }
    
    function form_product($data1)
    {
         $this->db->insert('product',$data1);
    }
    
     function form_relation($data2)
    {
         $this->db->insert('relation',$data2);
    }
}

?>
