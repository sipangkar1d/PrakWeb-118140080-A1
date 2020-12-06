<?php

class User_model extends CI_Model
{
    private $_table = "user";

    public $id;
    public $username;
    public $password;
    public $fname;

    public function rules()
    {
        return [
            ['field' => 'id',
            'label' => 'Id',
            'rules' => 'required'],
            
            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required|min_length[3]'],
            
            ['field' => 'fname',
            'label' => 'Fullname',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["user_id" => $id])->row();
    }

    public function doLogin(){
		$post = $this->input->post();

        $this->db->where('username', $post["username"]);
        $user = $this->db->get($this->_table)->row();

        if($user){
            if($post["password"] == $user->password){
                $this->session->set_userdata(['user_logged' => $user]);
                return true;
            }
		}
		return false;
    }

    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }
}
