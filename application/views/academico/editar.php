<div class="container">
<!--    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
		<th>Nombre</th>
                <th>Apellidos</th>
		<th>RUT</th>
            </tr>
	</thead>
        <tbody>
            <?php   
                //foreach ($query as $query):?>
                <tr>    
                    <td><?php //echo $query->id_academico; ?></td>
                    <td><?php //echo $query->nombre_academico; ?></td>
                    <td><?php //echo $query->apellidos_academico; ?></td>
                    <td><?php //echo $query->rut_academico; ?></td>
                </tr>
          <?php //endforeach; ?>
        </tbody>
    </table>-->
    
    <?php
        $id_academico = $query->id_academico;
        $nombre_academico = $query->nombre_academico;
        $apellidos_academico = $query->apellidos_academico;
        $rut_academico = $query->rut_academico;
        $id = array(
            'type' => 'hidden',
            'id' => 'id',
            'name' => 'id',
            'value' => $id_academico
        );
        $nombre = array(
            'type' => 'text',
            'id' => 'nombre',
            'name' => 'nombre',
            'class' =>'form-control',
            'value' => $nombre_academico 
        );
        $apellidos = array(
            'type' => 'text',
            'id' => 'apellidos',
            'name' => 'apellidos',
            'class' => 'form-control',
            'value' => $apellidos_academico
        );
        $rut = array(
            'id' => 'rut',
            'name' => 'rut',
            'class' =>'form-control',
            'value' => $rut_academico
        );
        $button = array(
            'class' => 'btn btn-primary',
            'value' => 'Modificar'
        );
        echo form_open(base_url('/index.php/academico/editar'));
        echo form_fieldset('Nuevo Academico');
            echo form_label('Nombre:');
            echo form_input($nombre);
            echo form_label('Apellidos:');
            echo form_input($apellidos);
            echo form_label('RUT:');
            echo form_input($rut);
            echo form_input($id);
            echo form_submit($button);
        echo form_fieldset_close();
        echo form_close();
    ?>
</div>