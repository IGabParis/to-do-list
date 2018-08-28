<?php
/**
 * Reglas de validacion para formularios
 */
$config = array(
       
        
        
         /**
         * add_categoria
         * */
        'add_tarea'
        => array(
            
            array('field' => 'tarea','label' => 'Tarea','rules' => 'required|is_string|trim|max_length[500]'),
            array('field' => 'fecha','label' => 'Fecha','rules' => 'required'),
            
        ), 



   //éste es el final      
);
