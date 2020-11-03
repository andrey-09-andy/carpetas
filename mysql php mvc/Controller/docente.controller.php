<?php
require_once 'Model/Docente.php';
//require_once 'Model/Vinculacion.php';
//require_once 'View/docente-save.php';

class DocenteController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Docente();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/docente.php';
        require_once 'View/footer.php';
    }
    
    
    public function edit(){
        $alm = new Docente();
        
        if(isset($_REQUEST['doc_id'])){
            $alm = $this->model->getting($_REQUEST['doc_id']);
        }
        
        require_once 'View/header.php';
        require_once 'View/docente-editar.php';
        require_once 'View/footer.php';
    }
    public function Crud(){
        $alm = new Docente();
        
        if(isset($_REQUEST['doc_id'])){
            $alm = $this->model->getting($_REQUEST['doc_id']);
        }
        
        //require_once 'View/header.php';
        require_once 'View/docente-save.php';
        //require_once 'View/footer.php';
    }
    public function Guardar(){//actualizar
        $alm = new Docente();
        
        $alm->doc_id = $_REQUEST['doc_id'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->apellido = $_REQUEST['apellido'];
        $alm->fecha = $_REQUEST['fecha'];
        $alm->salario = $_REQUEST['salario'];
        $alm->vinc_id = $_REQUEST['vinc_id'];
    
            $this->model->Actualizar($alm);
        
        
        header('Location: inicio.php');
    }
    public function registro(){
        $alm = new Docente();
        
        $alm->doc_id = $_REQUEST['doc_id'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->apellido = $_REQUEST['apellido'];
        $alm->fecha = $_REQUEST['fecha'];
        $alm->salario = $_REQUEST['salario'];
        $alm->vinc_id = $_REQUEST['vinc_id'];
    
           $this->model->Registrar($alm); 
        
        
        header('Location: inicio.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['doc_id']);
        header('Location: inicio.php');
    }
}
