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
	  <h3 class="align-center display-2 style= margin-bottom: 15px;">Proceso Estratégico de Planeación</h3>
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
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-CA-DI-01.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-CA-DI-01 Ficha de Proceso Estratégico de Planeación (solo lectura)</a>
		</td>
    </tr> 
	<tr>
		<td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-CA-DI-01.docx" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-CA-DI-01 Ficha de Proceso Estratégico de Planeación</a>
		</td>
    </tr> 
	<tr>
      <td colspan="4" class="w3-indigo w3-card-4"><div align="center"><i>ITPAC-PL-PO-001 COMUNICACIÓN Y DIFUSIÓN INSTITUCIONAL</i> </div></td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-001/ITPAC-PL-PO-001.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-001 Procedimiento para la Comunicación y Difusión (solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento</span>--></a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-001/ITPAC-PL-PO-001-01.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-001-01 Plan de Comunicación Institucional (solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento</span>--></a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-001/ITPAC-PL-PO-001-01.docx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-001-01 Plan de Comunicación Institucional
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento</span>--></a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-001/ITPAC-PL-PO-001-02.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-001-02 Formato de Solicitud de Servicios de Comunicación y Difusión (solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento</span>--></a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-001/ITPAC-PL-PO-001-02.docx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-001-02 Formato de Solicitud de Servicios de Comunicación y Difusión
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento</span>--></a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-001/ITPAC-PL-PO-001-03.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-001-03 Bitácora de Comunicación Institucional (solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento</span>--></a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-001/ITPAC-PL-PO-001-03.docx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-001-03 Bitácora de Comunicación Institucional
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento</span>--></a>
		</td>
    </tr>
			
	<tr>
      <td colspan="4" class="w3-indigo w3-card-4"><div align="center"><i>ITPAC-PL-PO-003 PROCEDIMIENTO PARA LA ELABORACIÓN, EVALUACIÓN Y SEGUIMIENTO DEL PTA</i> </div></td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-003/ITPAC-PL-PO-003.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-003 Procedimiento para la Elaboración, Evaluación y Seguimiento del PTA (solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-003/ITPAC-PL-PO-003-01.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-003-01 Formato de Asistencia a junta del Programa de Trabajo Anual (solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-003/ITPAC-PL-PO-003-01.docx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-003-01 Formato de Asistencia a junta del Programa de Trabajo Anual
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-003/ITPAC-PL-PO-003-02.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-003-02 Formato para la Elaboración e Integración del Programa de Trabajo Anual (PTA) (solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-003/ITPAC-PL-PO-003-02.xlsx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-003-02 Formato para la Elaboración e Integración del Programa de Trabajo Anual (PTA)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-003/ITPAC-PL-PO-003-03.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-003-03 Formato para el Seguimiento y Evaluación del Programa de Trabajo Anual (PTA) (solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-003/ITPAC-PL-PO-003-03.xlsx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-003-03 Formato para el Seguimiento y Evaluación del Programa de Trabajo Anual (PTA)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 1</span>--></a>
		</td>
    </tr>
	<tr>
	<!-- <tr>
      <td colspan="4"><a href="PROCESO ESTRATÉGICO DE PLANEACIÓN/planeacion, programacion y presupuestacion/ITPAC-PL-PO-003-04.xlsx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; ITPAC-PL-PO-003-04 Formato para el Seguimiento y Evaluación de los Indicadores<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento</span></a></td>
    </tr> -->
			
	<tr>
      <td colspan="4" class="w3-indigo w3-card-4"><div align="center"><i>ITPAC-PL-PO-004 PROCEDIMIENTO PARA LA ELABORACIÓN, EVALUACIÓN Y SEGUIMIENTO DEL POA</i> </div></td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-004/ITPAC-PL-PO-004.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-004 Procedimiento para la Elaboración, Evaluación y Seguimiento del POA (solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 0</span>--></a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-004/ITPAC-PL-PO-004-01.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-004-01 Formato para Captar Ingresos Propios mediante Techo Presupuestal (solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 0</span>--></a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-004/ITPAC-PL-PO-004-01.xlsx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-004-01 Formato para Captar Ingresos Propios mediante Techo Presupuestal
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 0</span>--></a>
		</td>
    </tr>
	<tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-004/ITPAC-PL-PO-004-03.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-004-03 Formato para la Determinación de la Captación de los Ingresos Propios (solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 0</span>--></a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-004/ITPAC-PL-PO-004-03.xlsx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-004-03 Formato para la Determinación de la Captación de los Ingresos Propios
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 0</span>--></a>
		</td>
    </tr>
			
	<tr>
      <td colspan="4" class="w3-indigo w3-card-4"><div align="center"><i>ITPAC-PL-PO-005 PROCEDIMIENTO PARA LA INTEGRACIÓN DE LA ELABORACIÓN DE ANTEPROYECTO DE INVERSIÓN</i> </div></td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-005/ITPAC-PL-PO-005.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-005 Procedimiento para la Integración de la Elaboración de Anteproyecto de Inversión (solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Rev. 0</span>--></a>
		</td>
    </tr>
	<tr>
	  <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-005/ITPAC-PL-PO-005.docx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-005 Procedimiento para la Integración de la Elaboración de Anteproyecto de Inversión
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Rev. 0</span>--></a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-005/ITPAC-PL-PO-005-01.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-005-01 Formato para la Integración de Anteproyecto de Inversión (solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 0</span>--></a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-005/ITPAC-PL-PO-005-01.xlsx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-005-01 Formato para la Integración de Anteproyecto de Inversión
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 0</span>--></a>
		</td>
    </tr>
	<tr>
      
    <tr>
      <td colspan="4" class="w3-indigo w3-card-4"><div align="center"><i>ITPAC-PL-PO-006 PROCEDIMIENTO PARA LA GESTIÓN DE RIESGOS Y OPORTUNIDADES</i> </div></td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-006/ITPAC-PL-PO-006.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-006 Procedimiento para la Gestión de Riesgos y Oportunidades (solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 0</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-006/ITPAC-PL-PO-006-01.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-006-01 Matriz Institucional de Riesgos y Oportunidades (registro)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 0</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-006/ITPAC-PL-PO-006-01.xlsx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-006-01 Matriz Institucional de Riesgos y Oportunidades
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 0</span>--></a>
		</td>
    </tr>
			<tr>
			  <td colspan="4"><i><u><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-006/Registro ITPAC-PL-PO-006-01.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
				  Registro ITPAC-PL-PO-006-01 Matriz Institucional de Riesgos y Oportunidades
				  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">REGISTRO</span></a></u></i>
				</td>
			</tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-006/ITPAC-PL-PO-006-02.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-006-02 Análisis FODA Instituto Tecnológico de Pachuca (registro)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 0</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-006/ITPAC-PL-PO-006-02.xlsx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-006-02 Análisis FODA Instituto Tecnológico de Pachuca
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 0</span>--></a>
		</td>
    </tr>
			<tr>
			  <td colspan="4"><i><u><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-006/Registro ITPAC-PL-PO-006-02.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
				  Registro ITPAC-PL-PO-006-02 Análisis FODA Instituto Tecnológico de Pachuca
				  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">REGISTRO</span></a></u></i>
				</td>
			</tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-006/ITPAC-PL-PO-006-03.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-006-03 Registro Maestro de Partes Interesadas (registro)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 0</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-006/ITPAC-PL-PO-006-03.xlsx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-PL-PO-006-03 Registro Maestro de Partes Interesadas
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento Ver. 0</span>--></a>
		</td>
    </tr>
			<tr>
			  <td colspan="4"><i><u><a href="SGC/proceso estrategico de planeacion/ITPAC-PL-PO-006/ITPAC-PL-PO-006-03-REGISTRO.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
				  Registro ITPAC-PL-PO-006-03 Registro Maestro de Partes Interesadas
				  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">REGISTRO</span></a></u></i>
				</td>
			</tr>
    
  </table>
		</div>
		
    </div>
	
	<!-- Termina contenido de pagina -->

<?php
	include("src/footer.html");
?>
