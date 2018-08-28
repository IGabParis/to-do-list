    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1>Agregar nueva tarea</h1>
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
            <?php echo form_open(null,array("class"=>"form","name"=>"form"));?>
                
                <?php
                $errors=validation_errors('<li>','</li>');
                if($errors!="")
                {
                    ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php echo $errors;?>
                        </ul>
                    </div>
                    <?php
                }
                ?>

                <div class="button col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <a class="btn btn-primary col-lg-4 col-md-4 col-sm-6 col-xs-6 disabled" href="<?php echo base_url('index.php/todolist/add') ?>" disabled><i class="fa fa-plus"></i> Tarea</a>
                    <a class="btn btn-success col-lg-4 col-md-4 col-sm-6 col-xs-6" href="<?php echo base_url('index.php/todolist') ?>"><i class="fa fa-home"></i> Inicio</a>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h5>Ingrese nueva tarea</h5>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label for="tarea">Tarea:</label>
                        <input type="text" name="tarea" id="tarea" class="form-control" value="<?php echo set_value_input(array(),'tarea','tarea')?>" />
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label for="fecha">Fecha para realizar la tarea:</label>
                        <input type="date" min="<?php echo date('Y-m-d') ?>" id="fecha" name="fecha" class="form-control" value="<?php echo set_value_input(array(),'fecha','fecha')?>" />
                    </div>
                </div>
                <hr />
                <input type="submit" value="Enviar" class="btn btn-success" />
                <a href="<?php echo base_url('index.php/todolist') ?>" class="btn btn-default">Regresar</a>
               
            <?php echo form_close();?>
        </div>
        
    </div>
