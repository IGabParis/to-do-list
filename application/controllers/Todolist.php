<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todolist extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout("front");
    }
 
	public function index()
	{
        $data=$this->todolist_model->getAll();
        $this->layout->view("index",compact('data'));     
	}

    public function add()
    {
        if($this->input->post())
        {
            if($this->form_validation->run('add_tarea'))
            {
                    $data=array
                    (
                        'tarea'=>$this->input->post('tarea',true),
                        'fecha'=>$this->input->post('fecha',true),
                    );
                    $insertar=$this->todolist_model->insertar($data);
                    $this->session->set_flashdata('css','success');
                    $this->session->set_flashdata('mensaje','La tarea se ha creado exitosamente');
                    redirect(base_url('index.php/todolist/')."index");
            } 
              
        }

        $this->layout->view("add");

    }
    

    public function delete($id_tarea=null)
    {
        if(!$id_tarea){show_404();}
        $datos=$this->todolist_model->getAllPorId($id_tarea);
        if(sizeof($datos)==0){show_404();}
        $this->todolist_model->delete($id_tarea);
        $this->session->set_flashdata('css','success');
        $this->session->set_flashdata('mensaje','El registro se ha eliminado exitosamente');
         redirect(base_url('index.php/todolist/')."index");
    }


}

