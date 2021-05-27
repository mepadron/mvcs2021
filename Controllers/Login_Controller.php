<?php 

include_once 'Models/Login_model.php';

class Login_Controller
{
    public $ejecModelo;

    public function __construct()
    {
        
        $this->ejecModelo = new Login_Model();
    }

    public function validarUsuario($l,$c)
    {

            $datosValidados = Array();

            $datosValidados= $this->ejecModelo->validarDatos($l,$c);
            return $datosValidados;       
        
    }





    public function __destruct()
    {
        
    }

}
