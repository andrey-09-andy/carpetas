
<div class="container p-4">
<div class="well well-sm text-right">
    <a href="inicio.php" class="btn btn-info">ISER</a>
    <a class="btn btn-info" href="?c=Docente&a=Crud">Agregar Docente</a>
    <a class="btn btn-info" href="?c=Vinculacion&a=Crud">Agregar vinculaciones</a>
	<a href="login/php/salir.php" class="btn btn-info">Salir del sistema</a>
    
</div>
</div>

<h1 class="page-header">
    <?php echo $alm->vinc_id != null ? $alm->nombre : 'Actualizar'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Vinculacion&a=Crud">Vinculacion</a></li>
  <li class="active"><?php echo $alm->vinc_id != null ? $alm->nombre : 'Actualizar'; ?></li>
</ol>

<form action="?c=Vinculacion&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="vinc_id" value="<?php echo $alm->vinc_id ?>" />

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $alm->nombre; ?>" class="form-control" placeholder="Ingrese nombre" />
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