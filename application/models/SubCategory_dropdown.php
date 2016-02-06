<?php 

class SubCategory_dropdown extends CI_Model{
    
    
    function dropdown_1(){
$query = $this->db->query('SELECT Category_Id,Category_Name FROM category');
    $array=array();
         foreach($query->result() as $row)
    {
        $array[$row->Category_Id] = $row->Category_Name;
             
         }
  return $array;      
}
    
    function dropdown_2(){
        $query = $this->db->query('SELECT SubCategory_Id,SubCategory_Name FROM subcategory');
    $array1=array();
         foreach($query->result() as $row)
    {
        $array1[$row->SubCategory_Id] = $row->SubCategory_Name;
             
         }
  return $array1;      
    }
    
    function dropdown_3(){
         $query = $this->db->query('SELECT Product_Id,Product_Name FROM product ');
               
    $array2=array();
         foreach($query->result() as $row)
    {
        $array2[$row->Product_Id] = $row->Product_Name;
             $query1 = $this->db->query('SELECT Product_Id,Product_Name FROM relation WHERE  ');
             
         }
  return $array2;      
    }
}
  ?>  