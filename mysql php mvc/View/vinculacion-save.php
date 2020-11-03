<?php include("header.php") ?>

<br>
<b>
<div class="container p-4">
<div class="well well-sm text-right">
    <a href="inicio.php" class="btn btn-info">ISER</a>
    <a class="btn btn-info" href="?c=Docente&a=Crud">Agregar Docente</a>
    <a class="btn btn-info" href="?c=Vinculacion&a=Crud">Agregar vinculaciones</a>
	<a href="login/php/salir.php" class="btn btn-info">Salir del sistema</a>
    
</div>
</div>
        
<h1 class="page-header">
    <?php echo 'Registar Vinculaciones'; ?>
</h1>
<div class="container p-4">
<div class="row">
    <div class="col-md-4">

    <div class="card card-body">

<form action="?c=Vinculacion&a=registro" method="post" enctype="multipart/form-data">
    <input type="hidden" name="vinc_id" value="<?php echo $alm->vinc_id ?>" />

    <div class="form-group">
        <input type="text" name="vinc_id" value="<?php echo $alm->vinc_id; ?>" class="form-control" placeholder="Ingrese  Codigo" />
    </div>

    <div class="form-group">
        <input type="text" name="nombre" value="<?php echo $alm->nombre; ?>" class="form-control" placeholder="Ingrese nombre" />
    </div>
    
    <div class="text-right">
        <button class="btn btn-success btn-block">Guardar</button>
    </div>
</form>
</div>
</div>

<div class="col-md-8">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>codigo</th>
            <th>nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->ListarV() as $v): ?>
        <tr>
            <td><?php echo $v->vinc_id; ?></td>
            <td><?php echo $v->nombre; ?></td>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=Vinculacion&a=edit&vinc_id=<?php echo $v->vinc_id; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=Vinculacion&a=Eliminar&vinc_id=<?php echo $v->vinc_id; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>

</div>
<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
<?php //include("include/footer.php") ?>
