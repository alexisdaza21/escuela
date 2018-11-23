<!DOCTYPE html>
<html>
<head>
	<?php require("Vistas/home/header.php");?>
	<title>Listado de usuarios</title>
	<link rel="stylesheet" href="assets/css/main.css" />

	<style type="text/css">	
		 body{background: black;}
	</style>

	<link rel="stylesheet" href="https://unpkg.com/rmodal/dist/rmodal.css" type="text/css" />
    <script type="text/javascript" src="https://unpkg.com/rmodal/dist/rmodal.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <style type="text/css">
      .modal .modal-dialog {
        width: 400px;
      }
    </style>

    <script type="text/javascript">
        window.onload = function() {
            var modal = new RModal(document.getElementById('modal'), {
                //content: 'Abracadabra'
                beforeOpen: function(next) {
                    console.log('beforeOpen');
                    next();
                }
                , afterOpen: function() {
                    console.log('opened');
                }

                , beforeClose: function(next) {
                    console.log('beforeClose');
                    next();
                }
                , afterClose: function() {
                    console.log('closed');
                }
                // , bodyClass: 'modal-open'
                // , dialogClass: 'modal-dialog'
                // , dialogOpenClass: 'animated fadeIn'
                // , dialogCloseClass: 'animated fadeOut'

                // , focus: true
                // , focusElements: ['input.form-control', 'textarea', 'button.btn-primary']

                // , escapeClose: true
            });

            document.addEventListener('keydown', function(ev) {
                modal.keydown(ev);
            }, false);

            document.getElementById('showModal').addEventListener("click", function(ev) {
                ev.preventDefault();
                modal.open();
            }, false);

            window.modal = modal;
        }
    </script>
</head>
<body>
	 <br><br><br>
   
         <section id="cta" class="wrapper">
            <h3><b><center> Busqueda De Usuarios</center></b></h3>
            <div class="inner" >
<br>
<form action="index.php?c=usuarios&a=view" method="post"> <br>
<input type="text" name="nhab"  placeholder=""> <br>
<button style="center;" type="submit">consultar</button> 
	
</form> 
			
            <br>
            <div class="row">
            <div class="col-lg-12">
            <button href="#" id="showModal" class="btn btn-primary" type="submit">registrar</button>
            </div>
        	</div>
            
    <div id="modal" class="modal">
        <div class="modal-dialog animated">
            <div class="modal-content">
                <form class="form-horizontal" action="index.php?c=usuarios&a=create" method="post">
                
                    
                    </div>
                          <?php
							if (isset($_GET["error"])){
							echo "<script> 
							alert ('Esta persona ya existe'
							);
							</script>";
						}
					?>



                    <div class="modal-body">
                        <div class="form-group">
                            <label for="dummyText" class="control-label col-xs-4">Nombres</label>
                            <div class="input-group col-xs-7">
                            <input type="text" name="Usuarios[nombres]" id="dummyText" class="form-control" value="" required/>
                             </div>
                        </div>
                        <div class="form-group">
                            <label for="dummyText" class="control-label col-xs-4">Apellidos</label>
                            <div class="input-group col-xs-7">
                            <input type="text" name="Usuarios[apellidos]" id="dummyText" class="form-control" value="" required/>
                             </div>
                        </div>
                        <div class="form-group">
                                <label for="dummyText" class="control-label col-xs-4">Tipo:</label><br>
                                <select name="Usuarios[perfil]" required>
                                    <option value="">Seleccione</option>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Vendedor">Vendedor</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dummyText" class="control-label col-xs-4">Documento</label>
                            <div class="input-group col-xs-7">
                            <input type="text" name="Usuarios[documento]" id="dummyText" class="form-control" value="" required/>
                              </div>
                        </div>
                            <div class="form-group">
                            <label for="dummyText" class="control-label col-xs-4">Contraseña</label>
                            <div class="input-group col-xs-7">
                            <input type="password" name="Usuarios[contrasena]" id="dummyText" class="form-control" value="" required/>
                            </div><br>
                        </div><br>
                        
                        
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-default" type="button" onclick="modal.close();">Cancelar</button>
                        <button  class="btn btn-primary" type="submit">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
      
</form> 
  <h3><b><center> Listado De Usuarios</center></b></h3> 

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
            <?php foreach($usuario as $usuario) {?>
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
		</tbody>
	</table>
    
    <br><br><br><br>

			<!-- Modal -->
		



    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <br />
           
         
            </div>
        </div>
       
    </div>
                    </div>
</section>
    <?php  require("Vistas/home/footer.php");?>
</body>
</html>