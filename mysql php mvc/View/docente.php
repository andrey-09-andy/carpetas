<h1 class="page-header">Docentes</h1>


<div class="well well-sm text-right">
    <a href="inicio.php" class="btn btn-info">ISER</a>
    <a class="btn btn-info" href="?c=Docente&a=Crud">Agregar Docente</a>
    <a class="btn btn-info" href="?c=Vinculacion&a=Crud">Agregar vinculaciones</a>
	<a href="login/php/salir.php" class="btn btn-info">Salir del sistema</a>
    
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >codigo</th>
            <th>nombre</th>
            <th>apellido</th>
            <th >fecha</th>
            <th >salario</th>
            <th >vinculacion</th>
            <th >Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->doc_id; ?></td>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->apellido; ?></td>
            <td><?php echo $r->fecha; ?></td>
            <td><?php echo $r->salario; ?></td>

            <?php 
            //Vinculacion vdao= new Venculacion();

            
            ?>
            <?php foreach($this->model->Listar() as $v):?>
            <td><?php echo $v->nombre; ?></td>
            <?php endforeach; ?>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=Docente&a=edit&doc_id=<?php echo $r->doc_id; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=Docente&a=Eliminar&doc_id=<?php echo $r->doc_id; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 


