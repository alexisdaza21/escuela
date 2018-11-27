<html>
<head>

	<title>Listado de usuarios</title>
  <style>
  .custom-combobox {
    position: relative;
    display: inline-block;
  }
  .custom-combobox-toggle {
    position: absolute;
    top: 0;
    bottom: 0;
    margin-left: -1px;
    padding: 0;
  }
  .custom-combobox-input {
    margin: 0;
    padding: 5px 10px;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


 <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


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
                <form class="form-horizontal" action="index.php?c=fechas&a=create" method="post">
                
                    
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
                            <label for="dummyText" class="control-label col-xs-4">fecha</label>
                            <div class="input-group col-xs-7">
                            <input type="date" name="Fechas[fecha]" id="dummyText" class="form-control" value="" required/>
                        </div>
                            <!-- fechas[fecha]-->
                        </div>
                        <div class="form-group">
                            <label for="dummyText" class="control-label col-xs-4">Hora</label>
                            <div class="input-group col-xs-7">
                            <input type="time" name="Fechas[hora]" id="dummyText" class="form-control" value="" required/>
                             </div>
                        </div>
                        <div class="form-group">

                        </div>
                    
                        <div class="ui-widget">
                          <label>Seleccione el equipo visitante </label>
                          <select id="combobox" name="Fechas[local]">
                             <option value="">Seleccion local...</option>
                            <?php foreach($equipos as $equipos1) {?>
                           
                            <option value="<?= $equipos1->id_equipos; ?>"><?= $equipos1->equipo; ?></option>  
                                <?php } ?>
                          </select>
                        </div>
                        




                          <div class="ui-widget">
                            <label>Seleccione el equipo visitante </label>
                            <select id="combobox2"  name="Fechas[visitante]">
                               <option value="">Seleccion visitante...</option>
                              <?php foreach($equipos as $equipos2) {?>
                             
                              <option value="<?= $equipos2->id_equipos; ?>"><?= $equipos2->equipo; ?></option>  
                                  <?php } ?>
                            </select>
                          </div>
                          
                          <div class="form-group">
                            <label for="dummyText" class="control-label col-xs-4">goles local</label>
                            <div class="input-group col-xs-7">
                            <input type="text" name="Fechas[goles_local]" id="dummyText" class="form-control" value="" required/>
                        </div>                        <div class="form-group">
                            <label for="dummyText" class="control-label col-xs-4">goles visitante</label>
                            <div class="input-group col-xs-7">
                            <input type="text" name="Fechas[goles_visitante]" id="dummyText" class="form-control" value="" required/>
                        </div>
                      
                        <br>
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
                <th style="text-align:center">fecha</th>
                <th style="text-align:center">hora</th>
                <th style="text-align:center">local</th>
                <th style="text-align:center">visitante</th>
                <th style="text-align:center">goles local</th>
                <th style="text-align:center">goles visitante</th>
                <th style="text-align:center" colspan="2">Acciones</th>
            </tr>
            <?php foreach($fechas as $fechas) {?>
		<tr>
			<td align="center" scope="row"><?= $fechas->id_fechas; ?></td>
			<td align="center" ><?= $fechas->fecha; ?></td>
			<td align="center" ><?= $fechas->hora; ?></td>
			<td align="center" ><?= $fechas->local; ?></td>
			<td align="center" ><?= $fechas->visitante; ?></td>
      <td align="center" ><?= $fechas->goles_local; ?></td>
      <td align="center" ><?= $fechas->goles_visitante; ?></td>
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
                    text: "",
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

  <script>
  $( function() {
    $.widget( "custom.combobox", {
      _create: function() {
        this.wrapper = $( "<span>" )
          .addClass( "custom-combobox" )
          .insertAfter( this.element );
 
        this.element.hide();
        this._createAutocomplete();
        this._createShowAllButton();
      },
 
      _createAutocomplete: function() {
        var selected = this.element.children( ":selected" ),
          value = selected.val() ? selected.text() : "";
 
        this.input = $( "<input>" )
          .appendTo( this.wrapper )
          .val( value )
          .attr( "title", "" )
          .addClass( "custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left" )
          .autocomplete({
            delay: 0,
            minLength: 0,
            source: $.proxy( this, "_source" )
          })
          .tooltip({
            classes: {
              "ui-tooltip": "ui-state-highlight"
            }
          });
 
        this._on( this.input, {
          autocompleteselect: function( event, ui ) {
            ui.item.option.selected = true;
            this._trigger( "select", event, {
              item: ui.item.option
            });
          },
 
          autocompletechange: "_removeIfInvalid"
        });
      },
 
      _createShowAllButton: function() {
        var input = this.input,
          wasOpen = false;
 
        $( "<a>" )
          .attr( "tabIndex", -1 )
          .attr( "title", "Ver todos los equipos" )
          .tooltip()
          .appendTo( this.wrapper )
          .button({
            icons: {
              primary: "ui-icon-triangle-1-s"
            },
            text: false
          })
          .removeClass( "ui-corner-all" )
          .addClass( "custom-combobox-toggle ui-corner-right" )
          .on( "mousedown", function() {
            wasOpen = input.autocomplete( "widget" ).is( ":visible" );
          })
          .on( "click", function() {
            input.trigger( "focus" );
 
            // Close if already visible
            if ( wasOpen ) {
              return;
            }
 
            // Pass empty string as value to search for, displaying all results
            input.autocomplete( "search", "" );
          });
      },
 
      _source: function( request, response ) {
        var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
        response( this.element.children( "option" ).map(function() {
          var text = $( this ).text();
          if ( this.value && ( !request.term || matcher.test(text) ) )
            return {
              label: text,
              value: text,
              option: this
            };
        }) );
      },
 
      _removeIfInvalid: function( event, ui ) {
 
        // Selected an item, nothing to do
        if ( ui.item ) {
          return;
        }
 
        // Search for a match (case-insensitive)
        var value = this.input.val(),
          valueLowerCase = value.toLowerCase(),
          valid = false;
        this.element.children( "option" ).each(function() {
          if ( $( this ).text().toLowerCase() === valueLowerCase ) {
            this.selected = valid = true;
            return false;
          }
        });
 
        // Found a match, nothing to do
        if ( valid ) {
          return;
        }
 
        // Remove invalid value
        this.input
          .val( "" )
          .attr( "title", value + " didn't match any item" )
          .tooltip( "open" );
        this.element.val( "" );
        this._delay(function() {
          this.input.tooltip( "close" ).attr( "title", "" );
        }, 2500 );
        this.input.autocomplete( "instance" ).term = "";
      },
 
      _destroy: function() {
        this.wrapper.remove();
        this.element.show();
      }
    });
 
    $( "#combobox" ).combobox();
    $( "#toggle" ).on( "click", function() {
      $( "#combobox" ).toggle();
    });
    $( "#combobox2" ).combobox();
    $( "#toggle2" ).on( "click", function() {
      $( "#combobox2" ).toggle2();
    });
  } );
  </script>






 
  
</body>
</html>
</body>
</html>