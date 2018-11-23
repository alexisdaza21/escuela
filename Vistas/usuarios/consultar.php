<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
  <?php require("Vistas/home/header.php");?>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
<a align='right' href="index.php?c=usuarios&a=admin">volver</a>
  <br><br>
  <br>  <section id="cta" class="wrapper">
        <div class="inner" >

<table style="float: right;">            
		<tbody>
            <tr>
                <th style="text-align:center">Id</th>
                <th style="text-align:center">Nombres</th>
                <th style="text-align:center">Apellidos</th>
                <th style="text-align:center">perfil</th>
                <th style="text-align:center">Documento</th>
                <th style="text-align:center" colspan="2">Acciones</th>
            </tr>
            <?php foreach($usuarios as $usuario) {?>
		<tr>
			<td scope="row"><?= $usuario->id_usuario; ?></td>
			<td ><?= $usuario->nombres; ?></td>
			<td ><?= $usuario->apellidos; ?></td>
			<td ><?= $usuario->perfil; ?></td>
			<td ><?= $usuario->documento; ?></td>
			<td>
            <button style="height:20px; line-height:2px; margin-left;" onclick="editar(<?= $usuario->id_usuario; ?>)">Editar</button>
      				&nbsp;&nbsp;&nbsp;<button style="height:20px; line-height:2px; margin-right:;"  onclick="eliminar(<?= $usuario->id_usuario; ?>)">Eliminar</button></td>
                </td>
                </tr>
			<?php } ?>
            
		</tbody>
	</table>
       <script type="text/javascript" >
            function eliminar(id){
                swal({
                    title: "Esta seguro?",
                    text: "Este usuario se eliminara!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true
                  }).then((willDelete) => {
                    if (willDelete) {
                        swal("Muy bien!", "Se ha eliminado","success");
                        setTimeout(function(){
                        location.href="index.php?c=usuarios&a=delete&id="+id;
                    }, 1000);
                    }
                  });
			}
			 function editar(id){
                swal({
                    title: "Esta seguro?",
                    text: "Quiere editar!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true
                  }).then((willDelete) => {
                    if (willDelete) {
                        swal("Muy bien!", "Espera un momento","success");
                        setTimeout(function(){
                        location.href="index.php?c=usuarios&a=update&id="+id;
                    }, 1000);
                    }
                  });
			}
  </script>
</section>
  <?php  require("Vistas/home/footer.php");?>
</body>
</html>