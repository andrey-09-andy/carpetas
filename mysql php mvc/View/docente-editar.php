
<div class="container p-4">
<div class="well well-sm text-right">
    <a href="inicio.php" class="btn btn-info">ISER</a>
    <a class="btn btn-info" href="?c=Docente&a=Crud">Agregar Docente</a>
    <a class="btn btn-info" href="?c=Vinculacion&a=Crud">Agregar vinculaciones</a>
	<a href="login/php/salir.php" class="btn btn-info">Salir del sistema</a>
    
</div>
</div>

<h1 class="page-header">
    <?php echo $alm->doc_id != null ? $alm->nombre : 'Registar Docentes'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Docente">Docentes</a></li>
  <li class="active"><?php echo $alm->doc_id != null ? $alm->nombre : 'Registar Docentes'; ?></li>
</ol>

<form action="?c=Docente&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="doc_id" value="<?php echo $alm->doc_id ?>" />

    

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $alm->nombre; ?>" class="form-control" placeholder="Ingrese su nombre" />
    </div>
    
    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="apellido" value="<?php echo $alm->apellido; ?>" class="form-control" placeholder="Ingrese su Apellido" />
    </div>
       
    <div class="form-group">
        <label>fecha</label>
        <input type="date" name="fecha" value="<?php echo $alm->fecha; ?>" class="form-control" placeholder="Ingrese su fecha" />
    </div>
    
    <div class="form-group">
        <label>salario</label>
        <input type="text" name="salario" value="<?php echo $alm->salario; ?>" class="form-control" placeholder="Ingrese el salario"/>
    </div>
    <div class="form-group">
        <label>vinculacion</label>
        <input type="text" name="vinc_id" value="<?php echo $alm->vinc_id; ?>" class="form-control" placeholder="Ingrese la vinculacion" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
