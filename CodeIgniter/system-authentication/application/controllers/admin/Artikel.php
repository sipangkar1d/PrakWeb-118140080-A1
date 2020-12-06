<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("artikel_model");
        $this->load->library('form_validation');
        $this->load->model("user_model");
		if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["artikel"] = $this->artikel_model->getAll();
        $this->load->view("admin/artikel/list", $data);
    }

    public function add()
    {
        $artikel = $this->artikel_model;
        $validation = $this->form_validation;
        $validation->set_rules($artikel->rules());

        if ($validation->run()) {
            $artikel->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/artikel/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/artikel');
        
        $artikel = $this->artikel_model;
        $validation = $this->form_validation;
        $validation->set_rules($artikel->rules());

        if ($validation->run()) {
            $artikel->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["artikel"] = $artikel->getById($id);
        if (!$data["artikel"]) show_404();
        
        $this->load->view("admin/artikel/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->artikel_model->delete($id)) {
            redirect(site_url('admin/artikel'));
        }
    }
}