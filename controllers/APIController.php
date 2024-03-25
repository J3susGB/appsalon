<?php 

namespace Controllers;

use Model\Cita;
use Model\CitaServicio;
use Model\Servicio;

class APIController {
    public static function index() {
        $servicios = Servicio::all();
        echo json_encode($servicios);
    }

    public static function guardar() {
        
        //Almacena la cita y devuelve el Id:
        $cita = new Cita($_POST);
        $resultado = $cita->guardar();

        $id = $resultado['id'];

        //Almacena los resultados con el id de la cita:
        $idServicios = explode(",", $_POST['servicios']);
        foreach($idServicios as $idServicio) {
            $args = [
                'citaId' => $id,
                'servicioId' => $idServicio
            ];

            $citaServicio = new CitaServicio($args);
            $citaServicio->guardar();
        }

        echo json_encode(['resultado' => $resultado]);
    }

    public static function eliminar() {

        if ( $_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id']; //Lee el id
            $cita = Cita::find($id); // Encuentra el id
            $cita->eliminar(); //Lo elimina
            header('Location:' .$_SERVER['HTTP_REFERER']); //Redirecciona a la página de la que veníamos
        }
    }
}