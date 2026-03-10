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
	
	
<!-- contenido de pagina -->	
	<div style="margin: auto; text-align: center; width: 100%; padding: 5%;">
      
	  <h1 class="align-center  display-2 style= margin-bottom: 15px;">Sistema de Gestión Integrado</h1>
	  <h3 class="align-center display-2 style= margin-bottom: 15px;">Documentos de Referencia</h3>
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
      <td colspan="4"><a href="SGC/documentos de referencia/ISO 9000-2015.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ISO 9000:2015 Sistemas de Gestión de Calidad - Fundamentos y Vocabulario
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento</span>-->
		  </a>
   </td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/documentos de referencia/NORMA ISO 9001.2015 IMNC.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ISO 9001:2015 IMNC Sistemas de Gestión de la Calidad - Requisitos
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento</span>-->
		  </a>
   </td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/documentos de referencia/ISO 19011 2018.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ISO 19011:2018 Directrices para la Auditoria de los Sistemas de Gestión
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento</span>-->
		  </a>		
   </td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/documentos de referencia/16.. Manual Servicos Escolares 2007.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  Manual Servicos Escolares 2007</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/documentos de referencia/17. Manual Normativo Academico-Administrativo.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  Manual Normativo Academico-Administrativo</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/documentos de referencia/18. MANUAL DE PROC. P LA ACREED. DE A..pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  Manual de procedimientos para la acreditación de asignaturas de los planes de estudios en los Institutos Tecnológicos</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/documentos de referencia/19. MANUAL DE ORGANIZACION DEL INSTITUTO TECNOLOGICO.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  Manual de organización del Instituto Tecnológico</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/documentos de referencia/20. REGLAMENTO  DE TRABAJO DEL PERSONAL DOCENTE.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  Reglamento de trabajo del personal docente</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/documentos de referencia/21. REGLAMENTO  DE TRABAJO DEL PERSONAL NO DOCENTE.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  Reglamento de trabajo del personal no docente</a>
		</td>
    </tr>
    <tr> 
      <td colspan="4"><a href="SGC/documentos de referencia/513-PR-14 Autorización del programa operativo anual.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  513-PR-14 Autorización del programa operativo anual</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/documentos de referencia/513-PR-34_Procedimiento_de_Capacitacion_y_Desarrollo_SNEST.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  513-PR-34 Procedimiento de capacitacion y desarrollo SNEST</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/documentos de referencia/ConcentradoPorPrograma.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  Concentrado por programa y proyecto Institucional</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/documentos de referencia/Constitución Política de los Estados Unidos Mexicanos.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  Constitución Política de los Estados Unidos Mexicanos</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/documentos de referencia/Ley federal del trabajo.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  Ley Federal del Trabajo</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/documentos de referencia/linconvestudios.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  Lineamiento para la convalidación de estudios</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/documentos de referencia/Lineamiento para la Evaluación y Acreditación de Asignaturas.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  Lineamiento para la evaluación y acreditación de asignaturas</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/documentos de referencia/Lineamiento para la Operación y Acreditación de la Residencia Profesional.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  Lineamiento para la operación y acreditación de la residencia profesional</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/documentos de referencia/Lineamiento para la Operación y Acreditación del Servicio Social.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  Lineamiento para la operación y acreditación del servicio social</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/documentos de referencia/Lineamiento para la Titulacion Integral.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  Lineamiento para la titulacion integral</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/documentos de referencia/Manual de Lineamientos 2015 TecNM.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  Manual de lineamientos 2015 TecNM</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/documentos de referencia/Manual de los procesos de evaluación de la docencia e ingreso a la educación superior tecnológica 2006-2007.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  Manual de los procesos de evaluación de la docencia e ingreso a la educación superior tecnológica 2006-2007</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/documentos de referencia/Manual de sistemas de ingresos propios de planteles educativos SECRETARIA DE EDUCACION PÚBLICA.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  Manual de sistemas de ingresos propios de planteles educativos SEP</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/documentos de referencia/MANUAL para la obtención del título_DE_LA_DGEST.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  Manual para la obtención del título de la DGEST</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/documentos de referencia/manual_ingresos_propios_para_planteles.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  Manual de sistemas de ingresos propios de los planteles educativos</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/documentos de referencia/manual-de-procedimientos-para-la-obtencin-del-ttulo-profesional del año 1999(1).pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  Manual de procedimientos para la obtención del título profesional del año 1999</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/documentos de referencia/PIID_2013-2018_TECNM_Final.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  Programa Institucional de Innovación y Desarrollo 2013-2018 TecNM</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/documentos de referencia/PDI-TecNM-2019-2024_2oct2020.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  Programa de Desarrollo Institucional PDI 2019-2014 </a>
		</td>
    </tr> 
    <tr>
      <td colspan="4"><a href="SGC/documentos de referencia/ReporteLiberacionPIA.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  Reporte de liberación PIA</a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/documentos de referencia/PDI-ITP-2019-2024.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  Programa de Desarrollo Institucional 2019-2024</a>
		</td>
    </tr>
    
  </table>
		</div>
		
    </div>
	
	<!-- Termina contenido de pagina -->

<?php
	include("src/footer.html");
?>
