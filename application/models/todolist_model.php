<?php
class todolist_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
   
    public function getAll()
    {
        $query=$this->db
                ->select("id_tarea, tarea, fecha")
                ->from("tareas")
                ->order_by("id_tarea","desc")
                ->get();       
        return $query->result();            
    }
    
    public function getAllPorId($id_tarea)
    {
        $query=$this->db
                ->select("id_tarea, tarea, fecha")
                ->from("tareas")
                ->where(array("id_tarea"=>$id_tarea))
                ->get();      
        return $query->result();            
    }
    public function insertar($data=array())
    {
        $this->db->insert('tareas',$data);
        return $this->db->insert_id();
    }
    public function delete($id_tarea)
    {
        $this->db->where('id_tarea',$id_tarea);
        $this->db->delete('tareas');
    }
    
}

