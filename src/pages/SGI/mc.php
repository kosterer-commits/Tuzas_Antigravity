<?php
	include("src/header.html");
	menua();
	menub();
?>
<br></br>			
<!--BreadCumb--> 
<nav aria-label="breadcrumb"> 
  <ol class="breadcrumb"> 
  <li class="breadcrumb-item" ><a href="pea.php">P. E. Académico</a></li> 
  <li class="breadcrumb-item" ><a href="pear.php">P. E. Administración de Recursos</li>
  <li class="breadcrumb-item" ><a href="pec.php">P. E. de Calidad</a></li>
  <li class="breadcrumb-item" ><a href="pep.php">P. E. de Planeación</a></li>
  <li class="breadcrumb-item" ><a href="pev.php">P. E. de Vinculación</a></li>
  <li class="breadcrumb-item" ><a href="peam.php">P. E. Ambiental</a></li>
  <li class="breadcrumb-item" ><a href="pes.php">P. E. de Seguridad</a></li>
  <li class="breadcrumb-item" ><a href="pee.php">P. E. de Energía</a></li>
  <li class="breadcrumb-item" ><a href="dr.php">Documentos de Referencia</a></li>
  <li class="breadcrumb-item" ><a href="mc.php">Manual del SGI</a></li>
  <li class="breadcrumb-item" ><a href="difusion_sgi.php">Difusión del SGI</a></li>
  <li class="breadcrumb-item" ><a href="logout.php"><i>Salir del SGI</i></a></li>
  </ol> 
</nav> 

	<br>
<!-- contenido de pagina -->	
	<div style="margin: auto; text-align: center; width: 100%; padding: 2%;">
      
	  <h1 class="align-center  display-2 style= margin-bottom: 15px;">Sistema de Gestión Integrado</h1>
	  <h3 class="align-center display-2 style= margin-bottom: 15px;">Manual del SGI</h3>
	  <hr>
		<!-- <img class="dir w3-circle w3-card-4" style="width:20%" src="images/director.jpg" alt="Ing. Francisco Rafael Saldaña Ibarra"> -->
        
		
		<p style="text-align: justify; font-family: Book Antiqua;font-size:2rem;">
            <!--busqueda de documentos-->
		<div class="w3-container">
			<b><input class="w3-input w3-card-2 w3-text-black" type="text" placeholder="Búsqueda por documento ..." id="myInput" onKeyUp="myFunction()"></b>
		<script>
		function myFunction() {
		  var input, filter, table, tr, td, i, th;
		  input = document.getElementById("myInput");
		  filter = input.value.toUpperCase();
		  table = document.getElementById("PEA");
		  tr = table.getElementsByTagName("tr");
		  for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[0];
			if (td) {
			  if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
			  } else {
				tr[i].style.display = "none";
			  }
			}
		  }
		}
		</script> 
<!--fin script de busqueda--><br>		
<table class="w3-table-all w3-hoverable w3-card-2" id="PEA">
    <tr>
      <td colspan="4"><a href="SGC/manual de calidad/ITPAC-CA-MC-001-Ver 7.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-CA-MC-001 Manual del SGI (Solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 02</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/manual de calidad/Anexo 1.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  Anexo 1 organigrama del Instituto (Solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
    <!-- <tr>
      <td colspan="4"><a href="Manual de Calidad/Anexo - 1 Organigrama del Instituto- Rev 0.docx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; Anexo 1 organigrama del Instituto<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento</span></a></td>
    </tr>-->
     <tr>
      <td colspan="4"><a href="SGC/manual de calidad/Anexo 2.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  Anexo 2 Matriz de responsabilidades (solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 2</span>--></a>
		 </td>
    </tr>
    <!-- <tr>
      <td colspan="4"><a href="Manual de Calidad/Anexo 2 - Matriz de Responsabilidades - Rev 2.xlsx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; Anexo 2 Matriz de responsabilidades<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento</span></a></td>
    </tr> -->
    <tr>
      <td colspan="4"><a href="SGC/manual de calidad/REGISTRO ANEXO 3-PLAN PARA EL LOGRO DE OBJETIVOS.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  Anexo 3 Plan para el logro de objetivos del sistema de gestión de calidad (solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td> 
    </tr>
    <!-- <tr>
      <td colspan="4"><a href="Manual de Calidad/ANEXO 3 PLAN PARA EL LOGRO DE OBJETIVOS -Rev 1A.xlsx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; Anexo 3 Plan para el logro de objetivos del sistema de gestión de calidad<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento</span></a></td>
    </tr> -->   
    <tr>
      <td colspan="4"><a href="SGC/manual de calidad/4. Anexo 4 Plan de Calidad del Servicio Educativo 29 de marzo.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  Anexo 4 Plan de calidad del servicio educativo (solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/manual de calidad/Anexo 5.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  Anexo 5 Mapa e interacción de procesos (solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 3</span>--></a>
		</td>
    </tr>
    <!-- <tr>
      <td colspan="4"><a href="Manual de Calidad/Anexo 5.docx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; Anexo 5 Mapa e interacción de procesos<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 3</span></a></td>
	</tr> -->
    <tr>
      <td colspan="4"><a href="SGC/manual de calidad/5. ANEXO 6 Organigrama, Responsabilidades y Autoridades del Comité.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  Anexo 6 Comité de calidad (solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 0</span>--></a>
		</td>
    </tr>
    
    
  </table>
		</div>
		</p>
     
    </div>
	
	<!-- Termina contenido de pagina -->

<?php
	include("src/footer.html");
?>
