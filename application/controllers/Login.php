<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	

    
     function index()
    {
        $this->load->view('admin_option');
    }
    
   function Create()
   {   
      $id =$this->input->post('crud');
       
       if($id==1)
       $this->load->view('create_option');
       
             
       else  if($id==2)
       {
           
       $this->load->view('read');
       }
       else  if($id==3)
       
       $this->load->view('update');
       
       else
       {    
           
        $this->load->model('delete_product');
        $this->load->view('delete_view1',array("arr"=>$this->delete_product->delete_product_list()));
       }
   }
    function delete_1()
    {

        $this->load->model('delete_product');
    }
    function delrec($id) {
        $this->load->model('delete_product');
        $this->delete_product->delete_record($id);
        $this->load->view('delete_view1',array("arr"=>$this->delete_product->delete_product_list()));
    }
    function Create_1()
    {
         
      $id =$this->input->post('opt');
       
       if($id==1)
       $this->load->view('Add_Category');
     
       
       else 
       {
           $this->load->model('SubCategory_dropdown');
        $this->load->model('insert_model');
             $config =  array(
                  'upload_path'     => "./uploads/",
                  'allowed_types'   => "gif|jpg|png|jpeg|pdf",
                  'overwrite'       => TRUE,
                  'max_size'        => "2048000",  // Can be set to particular file size
                  'max_height'      => "768",
                  'max_width'       => "1024"  
                );    
				$this->load->library('upload', $config);
				$this->upload->do_upload();
				$data = array('upload_data' => $this->upload->data());
					
				
        $this->load->view('Add_Product',array("subcat"=>$this->SubCategory_dropdown->dropdown_1(),
                                              "prod"=>$this->SubCategory_dropdown->dropdown_2()));
       }
      
    }
    
    function Create_2()
    {   
         $this->load->model('SubCategory_dropdown');
        $this->load->model('insert_model');
          $config =  array(
                  'upload_path'     => "./uploads/",
                  'allowed_types'   => "gif|jpg|png|jpeg|pdf",
                  'overwrite'       => TRUE,
                  //'max_size'        => "2048000",  // Can be set to particular file size
                  'max_height'      => "768",
                  'max_width'       => "1024"  
                );    
				$this->load->library('upload', $config);
				if($this->upload->do_upload())
                {
                    $data = array('upload_data' => $this->upload->data());
                    $this->load->view('msg',$data);
                }
                else
                {
                    $error = array('upload_data' => $this->upload->display_errors());
                    $this->load->view('msg', $error);
                }
					
			
         $data1 = array(
                'Product_Name' => $this->input->post('pname'),
                'Product_Description' => $this->input->post('pdes'),
               
            );
         $this->insert_model->form_product($data1);
        $data2= array(
            
                'Product_Id' =>$this->input->post('pro'),
                'Category_Id' =>$this->input->post('pro'),
               'SubCategory_Id'=>$this->input->post('sub')
        );
        
          $this->insert_model->form_relation($data2);
        
        $this->load->view('Add_Product',array("subcat"=>$this->SubCategory_dropdown->dropdown_1(),
                                              "prod"=>$this->SubCategory_dropdown->dropdown_2()));
       
    }
    
  
    function Insertion_model()
    {   $this->load->model('insert_model');
         $data = array(
                'Category_Name' => $this->input->post('catname'),
                'Category_Description' => $this->input->post('catdes'),
               
            );
        
         $this->insert_model->form_insert($data);
       $this->load->model('SubCategory_dropdown');
        $this->load->view('Add_SubCategory',array("subcat"=>$this->SubCategory_dropdown->dropdown_1()));
    }
    
    function Insert_Subcategory()
    {  $this->load->model('insert_model');
         $data = array(
                'Category_Id' => $this->input->post('sub'),
                'SubCategory_Name' => $this->input->post('subname'),
               
            );
        $this->insert_model->form_insertsub($data);
       $this->load->model('SubCategory_dropdown');
        $this->load->view('Add_SubCategory',array("subcat"=>$this->SubCategory_dropdown->dropdown_1()));
        
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */