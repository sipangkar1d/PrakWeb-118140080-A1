<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model
{
    private $_table = "artikel";

    public $id_artikel;
    public $judul;
    public $isi;
    public $id_user;

    public function rules()
    {
        return [

            ['field' => 'judul',
            'label' => 'Judul',
            'rules' => 'required'],
            
            ['field' => 'isi',
            'label' => 'Isi',
            'rules' => 'required']

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_artikel" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_artikel = $post["id_artikel"];
        $this->judul = $post["judul"];
		$this->isi = $post["isi"];
		$this->id_user = $post["id_user"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_artikel = $post["id"];
        $this->judul = $post["judul"];
        $this->isi = $post["isi"];
        $this->id_user = $post["id_user"];
        $this->db->update($this->_table, $this, array('id_artikel' => $post["id"]));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_artikel" => $id));
	}
}
