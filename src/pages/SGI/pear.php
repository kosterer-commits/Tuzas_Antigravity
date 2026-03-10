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
	  <h3 class="align-center display-2 style= margin-bottom: 15px;">Proceso Estratégico Administración de Recursos</h3>
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
      <td colspan="4" class="w3-indigo w3-card-4"><div align="center"><i>ITPAC-CA-DI-01 FICHA DE PROCESO</i> </div></td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-CA-DI-01 Ficha de Proceso - Administración de Recursos.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-CA-DI-01 Ficha de Proceso Estratégico de Administración de Recursos (solo lectura)</a>
		</td>
    </tr>   
    <tr>
      <td colspan="4" class="w3-indigo w3-card-4"><div align="center"><i>ITPAC-AD-PO-001 MANTENIMIENTO DE INFRAESTRUCTURA</i> </div></td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-001/ITPAC-AD-PO-001.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-001 Procedimiento para el mantenimiento preventivo y/o correctivo de la infraestructura (solo lectura)</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-001/ITPAC-AD-PO-001-01.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-001-01 Formato para la lista de verificación de infraestructura (solo lectura)</a>
		</td>
    </tr>
     <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-001/ITPAC-AD-PO-001-01.doc" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-001-01 Formato para la lista de verificación de infraestructura</a>
		 </td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-001/ITPAC-AD-PO-001-02.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-001-02 Formato para programa de mantenimiento preventivo (solo lectura)</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-001/ITPAC-AD-PO-001-02.doc" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-001-02 Formato para programa de mantenimiento preventivo</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-001/ITPAC-AD-PO-001-03.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-001-03 Formato para solicitud de mantenimiento correctivo (solo lectura)</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-001/ITPAC-AD-PO-001-03.doc" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-001-03 Formato para solicitud de mantenimiento correctivo</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-001/ITPAC-AD-PO-001-04.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-001-04 Formato para orden de trabajo de mantenimiento (solo lectura)</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-001/ITPAC-AD-PO-001-04.doc" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-001-04 Formato para orden de trabajo de mantenimiento</a>
		</td>
    </tr>
    
    <tr>
      <td colspan="4" class="w3-indigo w3-card-4"><div align="center"><i>ITPAC-AD-PO-002 INGRESOS PROPIOS</i> </div></td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-002/ITPAC-AD-PO-002.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-002 Procedimiento para la captación de ingresos propios (solo lectura)</a>
		</td>
    </tr>
    
    <tr>
      <td colspan="4" class="w3-indigo w3-card-4"><div align="center"><i>ITPAC-AD-PO-003 SELECCIÓN DEL PERSONAL</i> </div></td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-003/ITPAC-AD-PO-003.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-003 Procedimiento para el reclutamiento, selección y contratación de personal (solo lectura)</a>
		</td>
    </tr>
    
    <tr>
      <td colspan="4" class="w3-indigo w3-card-4"><div align="center"><i>ITPAC-AD-PO-004 MANTENIMIENTO DE EQUIPO DE CÓMPUTO</i> </div></td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-004/ITPAC-AD-PO-004.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-004 Procedimiento para el mantenimiento preventivo y/o correctivo de equipo de cómputo (solo lectura)</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-004/ITPAC-AD-PO-004-01.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-004-01 Formato para la lista de verificación de equipo de cómputo (solo lectura)</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-004/ITPAC-AD-PO-004-01.docx" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-004-01 Formato para la lista de verificación de equipo de cómputo</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-004/ITPAC-AD-PO-004-02.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-004-02 Formato para programa de mantenimiento preventivo (solo lectura)</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-004/ITPAC-AD-PO-004-02.docx" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-004-02 Formato para programa de mantenimiento preventivo</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-004/ITPAC-AD-PO-004-03.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-004-03 Formato para solicitud de mantenimiento correctivo (solo lectura)</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-004/ITPAC-AD-PO-004-03.docx" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-004-03 Formato para solicitud de mantenimiento correctivo </a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-004/ITPAC-AD-PO-004-04.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-004-04 Formato para orden de trabajo de mantenimiento (solo lectura)</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-004/ITPAC-AD-PO-004-04.docx" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-004-04 Formato para orden de trabajo de mantenimiento</a>
		</td>
    </tr>
    
    <tr>
      <td colspan="4" class="w3-indigo w3-card-4"><div align="center"><i>ITPAC-AD-PO-007 AMBIENTE DE TRABAJO</i> </div></td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-007/ITPAC-AD-PO-007.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-007 Procedimiento para determinar y gestionar el ambiente de trabajo (solo lectura)
		  <!-- <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-007/ITPAC-AD-PO-007-01.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-007-01 Formato de encuesta para determinar el ambiente de trabajo</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-007/ITPAC-CA-FE-10.xlsx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-AD-CA-FE-10 Formato electrónico para captura de resultados
		  <!-- <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento</span>--></a>
		</td>
    </tr>
    
    <tr>
      <td colspan="4" class="w3-indigo w3-card-4"><div align="center"><i>ITPAC-AD-PO-009 FORMACIÓN Y ACTUALIZACIÓN PROFESIONAL DOCENTE</i> </div></td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-009/ITPAC-AD-PO-009.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-009 Procedimiento para la Formación y Actualización Profesional Docente (solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-009/ITPAC-AD-PO-009-01.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-009-01 Formato para el Diagnóstico de Necesidades de Formación y Actualización Docente y Profesional (solo lectura) 
		  <!-- <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-009/ITPAC-AD-PO-009-01.doc" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-009-01 Formato para el Diagnóstico de Necesidades de Formación y Actualización Docente y Profesional 
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-009/ITPAC-AD-PO-009-02.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-009-02 Formato para Programa Institucional de Formación y Actualización Docente y Profesional (solo lectura) 
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-009/ITPAC-AD-PO-009-02.doc" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; ITPAC-AD-PO-009-02 Formato para Programa Institucional de Formación y Actualización Docente y Profesional 
		  <!-- <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-009/ITPAC-AD-PO-009-03.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-009-03 Cédula de Registro (solo lectura) 
		  <!-- <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-009/ITPAC-AD-PO-009-03.ppt" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-009-03 Cédula de Registro 
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-009/ITPAC-AD-PO-009-04.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-009-04 Lista de Asistencia (solo lectura) 
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-009/ITPAC-AD-PO-009-04.doc" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-009-04 Lista de Asistencia 
		  <!-- <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-009/ITPAC-AD-PO-009-05.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-009-05 Criterios para Seleccionar Facilitadores Internos y/o Externos (solo lectura) 
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-009/ITPAC-AD-PO-009-05.doc" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-009-05 Criterios para Seleccionar Facilitadores Internos y/o Externos 
		  <!-- <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-009/ITPAC-AD-PO-009-06.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-009-06 Encuesta de Opinion (solo lectura) 
		  <!-- <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-009/ITPAC-AD-PO-009-06.xls" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-009-06 Encuesta de Opinion 
		  <!-- <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-009/ITPAC-AD-PO-009-07.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-009-07 Matriz de Competencias (solo lectura) 
		  <!-- <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-009/ITPAC-AD-PO-009-07.xlsx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-009-07 Matriz de Competencias 
		  <!-- <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-009/ITPAC-AD-PO-009-08.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-009-08 Cédula de Entrevista (solo lectura) 
		  <!-- <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-009/ITPAC-AD-PO-009-08.xlsx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-009-08 Cédula de Entrevista 
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-009-09 Justificante de inasistencia rev 0 CON INSTRUCCIONES.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-009-09 Justificante de inasistencia por debajo del mínimo permitido
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-009-09 Justificante de inasistencia rev 0 CON INSTRUCCIONES.xls" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-009-09 Justificante de inasistencia por debajo del mínimo permitido
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-009/ITPAC-AD-PO-009-10.docx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-009-10 Carta descriptiva
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-009/ITPAC-AD-PO-009-10.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-009-10 Carta descriptiva (solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-009/ITPAC-AD-PO-009-11.docx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-009-11 Curriculum del Instructor
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-PO-009/ITPAC-AD-PO-009-11.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-AD-PO-009-11 Curriculum del Instructor (solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
    
    <tr>
      <td colspan="4" class="w3-indigo w3-card-4"><div align="center"><i>ITPAC-AD-IT-01 COMPRAS DIRECTAS</i> </div></td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-IT-01.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-IT-01 Instructivo de trabajo para la realizacion de Adquisiciones, Arrendamientos y Servicios (solo lectura)</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-IT-01/ITPAC-AD-FO-001.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-FO-01 Formato para selección de proveedores (solo lectura)</a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-IT-01/ITPAC-AD-FO-001.doc" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-FO-01 Formato para selección de proveedores</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-IT-01/ITPAC-AD-FO-02.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-FO-02 Formato para evaluación y re-evaluación de proveedores (solo lectura)</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-IT-01/ITPAC-AD-FO-02.doc" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-FO-02 Formato para evaluación y re-evaluación de proveedores</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-IT-01/ITPAC-AD-FO-03.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-FO-03 Formato para requisición de bienes y servicios (solo lectura)</a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-IT-01/ITPAC-AD-FO-03.doc" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-FO-03 Formato para requisición de bienes y servicios</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-IT-01/ITPAC-AD-FO-04.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-FO-04 Formato para catálogo de proveedores aprobados (solo lectura)</a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-IT-01/ITPAC-AD-FO-04.doc" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-FO-04 Formato para catálogo de proveedores aprobados</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-IT-01/ITPAC-AD-FO-05.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-FO-05 Formato para órden de compra del bien o servicio (solo lectura)</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-IT-01/ITPAC-AD-FO-05.docx" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-FO-05 Formato para órden de compra del bien o servicio</a>
		</td>
    </tr>
    <tr>
      <td colspan="4" class="w3-indigo w3-card-4"><div align="center"><i>ITPAC-AD-TI-03 CONTRATACIÓN DE SERVICIOS PROFESIONALES</i> </div></td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico administracion de recursos/ITPAC-AD-TI-03/ITPAC-AD-TI-03.docx" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-AD-TI-03 Procedimiento para la Contratación de Servicios Profesionales</a>
		</td>
    </tr>
    
  </table>
		</div>
		
    </div>
	
	<!-- Termina contenido de pagina -->

<?php
	include("src/footer.html");
?>
