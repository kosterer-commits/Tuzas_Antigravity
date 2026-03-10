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
	  <h3 class="align-center display-2 style= margin-bottom: 15px;">Proceso Estratégico de Seguridad</h3>
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

		</div>
		</p>
     
    </div>
	
	<!-- Termina contenido de pagina -->

<?php
	include("src/footer.html");
?>
