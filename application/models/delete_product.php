<?php

class Delete_product extends CI_Model{

  function delete_product_list(){
    $query = $this->db->query('SELECT * FROM relation');
    $array=array();
    $i=1; 
    foreach($query->result() as $row)
    {
        $array[$i] = array();
        $array[$i]['id'] = $row->Id;     
        $pid=$row->Product_Id;
        $cid=$row->Category_Id;
        $sid=$row->SubCategory_Id;
        $this->db->where('Product_Id', $pid);
        $query1 = $this->db->get('product');
        $row1 = $query1->row();
        $array[$i]['name'] = $row1->Product_Name;
        $query2 = $this->db->query('SELECT Category_Name FROM category WHERE Category_Id='.$cid);
        $row2 = $query2->row();
        $array[$i]['cat'] = $row2->Category_Name;
        $query3 = $this->db->query('SELECT SubCategory_Name FROM subcategory WHERE SubCategory_Id='.$sid);
        $row3 = $query3->row();
        $array[$i]['scat'] = $row3->SubCategory_Name;
        $i++;     
    }
    $array[0]=$i;
    return $array;  
  }

    function delete_record($id) {
        $this->db->where('Id', $id);
        $this->db->delete('relation'); 
    }
 
}