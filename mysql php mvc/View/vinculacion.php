  
    <h4 class="text-center">vinculaciones</h4>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th>codigo</th>
            <th>nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $v): ?>
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

