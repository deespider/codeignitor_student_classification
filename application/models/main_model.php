<?php  
 class Main_model extends CI_Model  
 {
    public function __construct()
	{
		parent::__construct();
	}
      function test_main()  
      {  
           echo "This is model function";  
      } 
      
      
      function can_login($username, $password)  
      {  
           $this->db->where('username', $username);  
           $this->db->where('password', $password);  
           $query = $this->db->get('users');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      }



      function insert_data($data)  
      {  
           $this->db->insert("school_info", $data);  
      }  
      function fetch_data()  
      {  
           //$query = $this->db->get("tbl_user");  
           //select * from tbl_user  
           //$query = $this->db->query("SELECT * FROM tbl_user ORDER BY id DESC");  
           $this->db->select("*");  
           $this->db->from("school_info");  
           $query = $this->db->get();  
           return $query;  
      }  
        
        
        
 } 