<?php

include_once 'ApiFactura_prov_cabe.php';

$api = new apifacturas_prov_cabe();

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        if(is_numeric($id)){
            $api->getById($id);
        }else{
            $api->error('El id es incorrecto');
        }
    }else{
        $api->getAll();
    }

?>