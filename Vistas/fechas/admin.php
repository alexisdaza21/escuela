<!DOCTYPE html>
<html>
<head>

	<title>Listado de usuarios</title>


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

</form> 
			

            <button href="#" id="showModal"  type="submit">registrar</button>
         
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
                                <select name="Usuarios[tipo]" required>
                                    <option value="">Seleccione</option>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Empleado">Empleado</option>
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
                            <input type="password" name="Usuarios[pass]" id="dummyText" class="form-control" value="" required/>
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
  <h3><b><center> Listado De fechas</b></center></h3> 

 
         <input id="searchTerm" type="text" onkeyup="doSearch()"  
         placeholder="Escriba para buscar..." style="float: right;" />
<br><br>
    <p>
        <table id="datos" align="center" width="80%">
            <tr>
                <th style="text-align:center">Id</th>
                <th style="text-align:center">Nombres</th>
                <th style="text-align:center">Apellidos</th>
                <th style="text-align:center">Documento</th>
                <th style="text-align:center">tipo</th>
                <th style="text-align:center" colspan="2">Acciones</th>
            </tr>
            <?php foreach($fechas as $fechas) {?>
		<tr>
			<td align="center" scope="row"><?= $fechas->id_fechas; ?></td>
			<td align="center" ><?= $fechas->nombres; ?></td>
			<td align="center" ><?= $fechas->apellidos; ?></td>
			<td align="center" ><?= $fechas->documento; ?></td>
			<td align="center" ><?= $fechas->tipo; ?></td>
			<td align="center">
            <button style="height:20px; line-height:2px; margin-left; " onclick="editar(<?= $fechas->id_fechas; ?>)">Editar</button>
      				
                    <button style="height:20px; line-height:2px; margin-right:; margin-left: 10px;"  onclick="eliminar(<?= $fechas->id_fechas; ?>)">Eliminar</button>

                </td>
                </tr>
			<?php } ?>
            

	</table>

		
            <script type="text/javascript" >
            function eliminar(id){
                swal({
                    title: "Esta seguro?",
                    text: "Este usuario se eliminara!",
                    icon: "error",
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
             function editar(id,nombres){
                swal({
                    title: "Quieres editar al usuario",
                    text: "<?= $usuario->nombres; ?>",
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

  <script type="text/javascript">
        function doSearch()
        {
            var tableReg = document.getElementById('datos');
            var searchText = document.getElementById('searchTerm').value.toLowerCase();
            var cellsOfRow="";
            var found=false;
            var compareWith="";
 
            // Recorremos todas las filas con contenido de la tabla
            for (var i = 1; i < tableReg.rows.length; i++)
            {
                cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
                found = false;
                // Recorremos todas las celdas
                for (var j = 0; j < cellsOfRow.length && !found; j++)
                {
                    compareWith = cellsOfRow[j].innerHTML.toLowerCase();
                    // Buscamos el texto en el contenido de la celda
                    if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1))
                    {
                        found = true;
                    }
                }
                if(found)
                {
                    tableReg.rows[i].style.display = '';
                } else {
                    // si no ha encontrado ninguna coincidencia, esconde la
                    // fila de la tabla
                    tableReg.rows[i].style.display = 'none';
                }
            }
        }
  </script>

</body>
</html>