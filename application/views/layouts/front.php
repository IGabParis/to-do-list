<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ToDoList</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>">
    <!-- Jquery UI Datatables -->
    <link rel="stylesheet" href="<?= base_url('assets/css/jquery.dataTables.min.css') ?>">
    <!-- My customs CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
</head>
<body>
<div class="wrapper">
  <div class="container">
    <div class="todolist">
    <?php echo $content_for_layout;?>
    </div>
  </div>
</div>
<!-- /.content-wrapper -->
  <footer class="">
    <div class="">
      <div class="container">
      Iliana Paris 2018. ToDoList
      </div>
    </div>
  </footer>

</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.0 -->
<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
<!-- Bootstrap -->
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<!-- Datatables -->
<script src="<?= base_url('assets/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/js/dataTables.buttons.min.js') ?>"></script>
<!-- moment js -->
<script src="<?= base_url('assets/js/moment.js') ?>"></script>
<!-- Custom -->
<script src="<?= base_url('assets/js/custom.js') ?>"></script>
<script type="text/javascript">
        $(document).ready(function () {
                $("#table-data").DataTable({
                  "lengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "Todos"]],
                  "sort": true,
                  "order": [[1,"asc"]],
                  "searching": true,
                  "language": {
                      "sProcessing":     "Procesando...",
                      "sLengthMenu":     "Mostrar _MENU_ registros",
                      "sZeroRecords":    "No se encontraron resultados",
                      "sEmptyTable":     "Ningún dato disponible en esta tabla",
                      "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                      "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                      "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                      "sInfoPostFix":    "",
                      "sSearch":         "Buscar:",
                      "sUrl":            "",
                      "sInfoThousands":  ",",
                      "sLoadingRecords": "Cargando...",
                      "oPaginate": {
                          "sFirst":    "Primero",
                          "sLast":     "Último",
                          "sNext":     "Siguiente",
                          "sPrevious": "Anterior"
                      },
                      "oAria": {
                          "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                          "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                      }
                  }
                });
            });
            function eliminar(url)
            {
                if(confirm('Realmente desea eliminar este registro?'))
                {
                    window.location=url;
                }
            }
          </script>
</body>
</html>
