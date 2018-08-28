
    <div class="panel-primary">
	<div class="panel-heading">
		<h1>Lista de Tareas</h1>
	</div>
	<div class="panel-body">
		<?php 
		if($this->session->flashdata('mensaje')!='')
            {
               ?>
               <div class="alert alert-<?php echo $this->session->flashdata('css')?>"><?php echo $this->session->flashdata('mensaje')?></div>
               <?php 
            }
        ?>
		<div class="button col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <a class="btn btn-primary col-lg-4 col-md-4 col-sm-6 col-xs-6" href="<?php echo base_url('index.php/todolist/add') ?>"><i class="fa fa-plus"></i> Tarea</a>
            <a class="btn btn-success col-lg-4 col-md-4 col-sm-6 col-xs-6 disabled" href="<?php echo base_url('index.php/todolist') ?>" disabled><i class="fa fa-home"></i> Inicio</a>
        </div>
		<table class="table table-striped table-responsive" id="table-data">
			<thead>
				<th>Tarea</th>
				<th>Fecha</th>
				<th>Acciones</th>
			</thead>
			<tbody>
				<?php foreach ($data as $dato) { ?>
					<tr>
					<td>
						<?php echo $dato->tarea ?>
					</td>
					<td>
						<?php echo $dato->fecha ?>
					</td>
					<td>
                        <a href="javascript:void(0);" class="btn btn-danger" onclick="eliminar('<?php echo base_url()?>index.php/todolist/delete/<?php echo $dato->id_tarea ?>')"><span class="fa fa-trash" aria-hidden="true"></span></a>
					</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	</div>
