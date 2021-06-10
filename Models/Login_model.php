
<?php

class Login_Model
{

    public function __construct()
    {
        // echo "soy el modelo, e sido llamado";
    }

    public function recibirDatos($d)
    {
        echo "este dato viene de controller {$d}";
    }

    public function validarDatos($l, $c)
    {
        // ! ser BD
        $dato = array();
        $dato['nombre'] = "Miguel";
        $dato['edad'] = 53;
        $dato['status'] = "usted esta LOGUEADO";
        $dato['code'] = 200;
        $dato['rol'] = 'Admin';
        $dato['loginBD'] = 'mp';
        $dato['claveBD'] = 1234;
        $dato['codigo'] = true;
        $dato['rol'] = 'Administrador';

        // ! ser BD
        $dato2 = array();
        $dato2['nombre'] = "Maria";
        $dato2['edad'] = 36;
        $dato2['status'] = "usted esta LOGUEADO";
        $dato2['code'] = 200;
        $dato2['loginBD2'] = 'ma';
        $dato2['claveBD2'] = 123456;
        $dato2['rol'] = 'Gerente';
        $dato2['codigo'] = true;
        $dato2['rol'] = 'Gerente';

        if ($l == $dato['loginBD'] and $c == $dato['claveBD']) {
            return $dato;

        } elseif ($l == $dato2['loginBD2'] and $c == $dato2['claveBD2']) {
            return $dato2;

        } else {
            echo "NOOOOOOO esta LOGUEADO {$dato['loginBD2']} {$dato['claveBD2']}";

        }

    }

}
