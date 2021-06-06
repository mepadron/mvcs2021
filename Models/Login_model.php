
<?php 

class Login_Model{
    

    public function __construct()
    {
        // echo "soy el modelo, e sido llamado";
    }

    public function recibirDatos($d)
    {
        echo "este dato viene de controller {$d}";
    }

    public function validarDatos($l,$c)
    {
        // ! ser BD
        $dato = Array();
        $dato['nombre']="Miguel";
        $dato['edad']=53;
        $dato['status']="usted esta LOGUEADO";
        $dato['code']=200;

        if($l=='mp' and $c==1234){
            return $dato;       
            
        }else{
            echo "NOOOOOOO esta LOGUEADO";       

        }

    }

    
}
