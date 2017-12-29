<?php

class TelefoniaModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function insertarPortabilidad($tiposolicitud, $modalidadservicio, $tiposervicio, $proveedor, $numero1, $numero2, $numero3,
            $numero4, $numero5, $numero6, $razonsocial, $rutrazonsocial, $numrazonsocial, $direccion, $email, $rutrepresentante,
            $numrepresentante, $nombresolicit, $rutsolicit, $ciudadsolicit, $paissolicit, $emailsolicit, $telefonosolicit, $documentos) {
        $datos = array("tiposolicitud"=>$tiposolicitud,
            "modalidadservicio"=>$modalidadservicio,
            "tiposervicio"=>$tiposervicio,
            "proveedor"=>$proveedor,
            "numero1"=>$numero1,
            "numero2"=>$numero2,
            "numero3"=>$numero3,
            "numero4"=>$numero4,
            "numero5"=>$numero5,
            "numero6"=>$numero6,
            "razonsocial"=>$razonsocial,
            "rutrazonsocial"=>$rutrazonsocial,
            "numrazonsocial"=>$numrazonsocial,
            "direccion"=>$direccion,
            "email"=>$email,
            "rutrepresentante"=>$rutrepresentante,            
            "numrepresentante"=>$numrepresentante,
            "nombresolicit"=>$nombresolicit,
            "rutsolicit"=>$rutsolicit,
            "ciudadsolicit"=>$ciudadsolicit, 
            "paissolicit"=>$paissolicit,
            "emailsolicit"=>$emailsolicit,
            "telefonosolicit"=>$telefonosolicit,
            "documentos"=>$documentos);
        $this->db->insert("portabilidad", $datos);     
    }

}
