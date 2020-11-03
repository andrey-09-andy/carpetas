<?php
require_once 'Model/Vinculacion.php';

class VinculacionController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Vinculacion();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/vinculacion.php';
        require_once 'View/footer.php';
    }
    
    public function edit(){
        $alm = new Vinculacion();
        
        if(isset($_REQUEST['vinc_id'])){
            $alm = $this->model->getting($_REQUEST['vinc_id']);
        }
        
        require_once 'View/header.php';
        require_once 'View/vinculacion-editar.php';
        require_once 'View/footer.php';
    }
    public function Crud(){
        $alm = new Vinculacion();
        
        if(isset($_REQUEST['vinc_id'])){
            $alm = $this->model->getting($_REQUEST['vinc_id']);
        }
        
        //require_once 'View/header.php';
        require_once 'View/vinculacion-save.php';
        require_once 'View/footer.php';
    }
    
    
    public function Guardar(){//actualizar
        $alm = new Vinculacion();
        
        $alm->vinc_id = $_REQUEST['vinc_id'];
        $alm->nombre = $_REQUEST['nombre'];
    
    $this->model->Actualizar($alm);
        
        
        header('Location: inicio.php');
    }
    public function registro(){
        $alm = new Vinculacion();
        
        $alm->vinc_id = $_REQUEST['vinc_id'];
        $alm->nombre = $_REQUEST['nombre'];
    
        $this->model->Registrar($alm); 
        
        
        header('Location: inicio.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['vinc_id']);
        header('Location: inicio.php');
    }
}