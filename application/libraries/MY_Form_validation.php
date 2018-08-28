<?php
class MY_Form_validation extends CI_Form_validation
{
	public $_error_array			= array();
	public $_field_data;



public function valida_url($url){

    if(filter_var($url, FILTER_VALIDATE_URL))

    {

        return true;

    }else

    {

        return false;

    }

}
/**
 * validar que en un select haya sido elegida una opción
 * */ 
public function validaSelect($valor)
{
    if($valor==0)
    {
        return false;
    }else
    {
        return true;
    }
}

/**
 * validar que en un select haya sido elegida una opción
 * */ 
public function validaSelectEspecial($valor)
{
    if($valor==0 or $valor==1 )
    {
        return true;
    }else
    {
        return false;
    }
}

    
}
