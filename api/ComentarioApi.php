<?php
  require_once('api.php');
  require_once('../models/ComentarioModel.php');

  class ComentarioApi extends Api {

    private $model;

    public function __construct($request) {

      parent::__construct($request);
      $this->model = new ComentarioModel();
    }

    protected function comentario($argumentos) {

      switch ($this->method) {
        case 'GET':
            if(count($argumentos)>0){
              $comentarios = $this->model->getComentariosPorProducto($argumentos[0]);
              $error['Error'] = "Error";
              return ($comentarios) ? $comentarios : $error;
            }
          break;
        case 'DELETE':
            if(count($argumentos)>0){
              $error['Error'] = "El comentario no existe";
              $success['Success'] = "El comentario se borro";
              $filasAfectadas = $this->model->eliminarComentario($argumentos[0]);
              return ($filasAfectadas == 1) ? $success : $error;
            }
          break;
          case 'POST':
              if(count($argumentos)==0){
                $error['Error'] = "El comentario no se creo";
                $id_comentario = $this->model->createComentario($_POST['comentario'],$_POST['puntaje'],$_POST['id_producto']);
                return ($id_comentario > 0) ? $this->model->getComentario($id_comentario) : $error;
              }
            break;
        default:
             return "Only accepts GET";
          break;
      }
    }
  }

?>
