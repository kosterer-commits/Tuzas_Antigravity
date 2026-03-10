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
	  <h3 class="align-center display-2 style= margin-bottom: 15px;">Proceso Estratégico de Vinculación</h3>
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
      <td colspan="4" class="w3-indigo w3-card-4"><div align="center"><i>FICHA DE PROCESO</i> </div></td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-CA-DI-01 Ficha de Proceso - Vinculación.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  Ficha de Proceso Estratégico de Vinculación (Solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento</span>--></a>
		</td>
    </tr>
			
    <tr>
      <td colspan="4" class="w3-indigo w3-card-4"><div align="center"><i>ITPAC-VI-PO-001 PROCEDIMIENTO PARA VISITAS A EMPRESAS</i> </div></td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-001/ITPAC-VI-PO-001.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-001 Procedimiento para visitas a empresas (Solo lectura)</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-001/ITPAC-VI-PO-001-01.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-001-01 Solicitud de visitas a empresas (Solo lectura)</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-001/ITPAC-VI-PO-001-01.docx" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-001-01 Solicitud de visitas a empresas</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-001/ITPAC-VI-PO-001-02.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-001-02 Oficio de solicitud de visita a empresas (Solo lectura)</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-001/ITPAC-VI-PO-001-02.docx" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-001-02 Oficio de solicitud de visita a empresas</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-001/ITPAC-VI-PO-001-03.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-001-03 Control de visitas a empresas (Solo lectura)</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-001/ITPAC-VI-PO-001-03.doc" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-001-03 Control de visitas a empresas</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-001/ITPAC-VI-PO-001-04.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-001-04 Carta de presentación y agradecimiento de visitas a empresas (Solo lectura)</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-001/ITPAC-VI-PO-001-04.docx" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-001-04 Carta de presentación y agradecimiento de visitas a empresas</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-001/ITPAC-VI-PO-001-05.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-001-05 Reporte de resultados e incidentes en visitas (Solo lextura)</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-001/ITPAC-VI-PO-001-05.doc" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-001-05 Reporte de resultados e incidentes en visitas</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-001/ITPAC-VI-PO-001-06.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-001-06 Lista autorizada de estudiantes que asistirán a la visita (Solo lectura)</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-001/ITPAC-VI-PO-001-06.doc" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-001-06 Lista autorizada de estudiantes que asistirán a la visita</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-001/ITPAC-VI-PO-001-07.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-001-07 Formato de constancia visitas a empresas (Solo lectura)</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-001/ITPAC-VI-PO-001-07.docx" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-001-07 Formato de constancia visitas a empresas</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-001/ITPAC-VI-PO-001-08.pdf" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-001-08 Solicitud de transporte (Solo lectura)</a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-001/ITPAC-VI-PO-001-08.doc" class="w3-text-black" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-001-08 Solicitud de transporte</a>
		</td>
    </tr>
    
    <!--<tr>
      <td colspan="4" class="w3-indigo w3-card-4"><div align="center"><i>ITPAC-VI-PO-002 SERVICIO SOCIAL PROCEDIMIENTO * Anterior a Agosto 2019</i> </div></td>
    </tr>
    <tr>
      <td colspan="4"><a href="PROCESO ESTRATÉGICO DE VINCULACIÓN/ITPAC-VI-PO-002 SERVICIO SOCIAL PROCEDIMIENTO/ITPAC-VI-PO-002 PROCEDIMIENTO PARA SERVICIO SOCIAL.pdf" class="w3-text-black" style="text-decoration: none">&#8226; ITPAC-VI-PO-002 Procedimiento para servicio social (solo lectura)</a></td>
    </tr>
    <tr>
      <td colspan="4"><a href="PROCESO ESTRATÉGICO DE VINCULACIÓN/ITPAC-VI-PO-002 SERVICIO SOCIAL PROCEDIMIENTO/ITPAC-VI-PO-002-01 SOLICITUD DE SERVICIO SOCIAL.pdf" class="w3-text-black" style="text-decoration: none">&#8226; ITPAC-VI-PO-002-01 Solicitud de servicio social (solo lectura)</a></td>
    </tr>
    <tr>
      <td colspan="4"><a href="PROCESO ESTRATÉGICO DE VINCULACIÓN/ITPAC-VI-PO-002 SERVICIO SOCIAL PROCEDIMIENTO/ITPAC-VI-PO-002-01 SOLICITUD DE SERVICIO SOCIAL.doc" class="w3-text-black" style="text-decoration: none">&#8226; ITPAC-VI-PO-002-01 Solicitud de servicio social</a></td>
    </tr>
    <tr>
      <td colspan="4"><a href="PROCESO ESTRATÉGICO DE VINCULACIÓN/ITPAC-VI-PO-002 SERVICIO SOCIAL PROCEDIMIENTO/ITPAC-VI-PO-002-02 CARTA COMPROMISO SERV. SOCIAL rev8.pdf" class="w3-text-black" style="text-decoration: none">&#8226; ITPAC-VI-PO-002-02 Formato para carta compromiso de servicio social (solo lectura)</a></td>
    </tr>
    <tr>
      <td colspan="4"><a href="PROCESO ESTRATÉGICO DE VINCULACIÓN/ITPAC-VI-PO-002 SERVICIO SOCIAL PROCEDIMIENTO/ITPAC-VI-PO-002-02 CARTA COMPROMISO SERV. SOCIAL .doc" class="w3-text-black" style="text-decoration: none">&#8226; ITPAC-VI-PO-002-02 Formato para carta compromiso de servicio social</a></td>
    </tr>
    <tr>
      <td colspan="4"><a href="PROCESO ESTRATÉGICO DE VINCULACIÓN/ITPAC-VI-PO-002 SERVICIO SOCIAL PROCEDIMIENTO/ITPAC-VI-PO-002-03 CARTA DE PRESENTACION DE SERV. SOCIAL rev8.pdf" class="w3-text-black" style="text-decoration: none">&#8226; ITPAC-VI-PO-002-03 Formato para carta de presentación de servicio social (solo lectura)</a></td>
    </tr>
    <tr>
      <td colspan="4"><a href="PROCESO ESTRATÉGICO DE VINCULACIÓN/ITPAC-VI-PO-002 SERVICIO SOCIAL PROCEDIMIENTO/ITPAC-VI-PO-002-03 CARTA DE PRESENTACION DE SERV. SOCIAL .doc" class="w3-text-black" style="text-decoration: none">&#8226; ITPAC-VI-PO-002-03 Formato para carta de presentación de servicio social</a></td>
    </tr>
    <tr>
      <td colspan="4"><a href="PROCESO ESTRATÉGICO DE VINCULACIÓN/ITPAC-VI-PO-002 SERVICIO SOCIAL PROCEDIMIENTO/ITPAC-VI-PO-002-04 REPORTE BIMESTRAL SERV. SOCIAL .pdf" class="w3-text-black" style="text-decoration: none">&#8226; ITPAC-VI-PO-002-04 Formato para reporte bimestral de servicio social (solo lectura)</a></td>
    </tr>
    <tr>
      <td colspan="4"><a href="PROCESO ESTRATÉGICO DE VINCULACIÓN/ITPAC-VI-PO-002 SERVICIO SOCIAL PROCEDIMIENTO/ITPAC-VI-PO-002-04 REPORTE BIMESTRAL SERV. SOCIAL .doc" class="w3-text-black" style="text-decoration: none">&#8226; ITPAC-VI-PO-002-04 Formato para reporte bimestral de servicio social</a></td>
    </tr>
    <tr>
      <td colspan="4"><a href="PROCESO ESTRATÉGICO DE VINCULACIÓN/ITPAC-VI-PO-002 SERVICIO SOCIAL PROCEDIMIENTO/ITPAC-VI-PO-002-05 CONSTANCIA DE TERMINACIÓN SERV. SOCIAL.pdf" class="w3-text-black" style="text-decoration: none">&#8226; ITPAC-VI-PO-002-05 Formato para carta de terminación de servicio social (solo lectura)</a></td>
    </tr>
    <tr>
      <td colspan="4"><a href="PROCESO ESTRATÉGICO DE VINCULACIÓN/ITPAC-VI-PO-002 SERVICIO SOCIAL PROCEDIMIENTO/ITPAC-VI-PO-002-05 CONSTANCIA DE TERMINACIÓN SERV. SOCIAL.doc" class="w3-text-black" style="text-decoration: none">&#8226; ITPAC-VI-PO-002-05 Formato para carta de terminación de servicio social</a></td>
    </tr>
    <tr>
      <td colspan="4"><a href="PROCESO ESTRATÉGICO DE VINCULACIÓN/ITPAC-VI-PO-002 SERVICIO SOCIAL PROCEDIMIENTO/ITPAC-VI-PO-002-06 CONVOCATORIA PARA REALIZACIÓN DE SERVICIO SOCIAL  .pdf" class="w3-text-black" style="text-decoration: none">&#8226; ITPAC-VI-PO-002-06 Formato para convocatoria de servicio social (solo lectura)</a></td>
    </tr>
    <tr>
      <td colspan="4"><a href="PROCESO ESTRATÉGICO DE VINCULACIÓN/ITPAC-VI-PO-002 SERVICIO SOCIAL PROCEDIMIENTO/ITPAC-VI-PO-002-06 CONVOCATORIA PARA REALIZACIÓN DE SERVICIO SOCIAL  .docx" class="w3-text-black" style="text-decoration: none">&#8226; ITPAC-VI-PO-002-06 Formato para convocatoria de servicio social </a></td>
    </tr>
    <tr>
      <td colspan="4"><a href="PROCESO ESTRATÉGICO DE VINCULACIÓN/ITPAC-VI-PO-002 SERVICIO SOCIAL PROCEDIMIENTO/ITPAC-VI-PO-002-07 SOLICITUD DE PRESTADORES DE SERVICIO SOCIAL .pdf" class="w3-text-black" style="text-decoration: none">&#8226; ITPAC-VI-PO-002-07 Formato para solicitar prestadores de servicio social (solo lectura)</a></td>
    </tr>
    <tr>
      <td colspan="4"><a href="PROCESO ESTRATÉGICO DE VINCULACIÓN/ITPAC-VI-PO-002 SERVICIO SOCIAL PROCEDIMIENTO/ITPAC-VI-PO-002-07 SOLICITUD DE PRESTADORES DE SERVICIO SOCIAL .docx" class="w3-text-black" style="text-decoration: none">&#8226; ITPAC-VI-PO-002-07 Formato para solicitar prestadores de servicio social</a></td>
    </tr>
    <tr>
      <td colspan="4"><a href="PROCESO ESTRATÉGICO DE VINCULACIÓN/ITPAC-VI-PO-002 SERVICIO SOCIAL PROCEDIMIENTO/ITPAC-VI-PO-002-08 FORMATO PARA REGISTRO DE SERVICIO SOCIAL.pdf" class="w3-text-black" style="text-decoration: none">&#8226; ITPAC-VI-PO-002-08 Formato para registro de servicio social (solo lectura)</a></td>
    </tr>
    <tr>
      <td colspan="4"><a href="PROCESO ESTRATÉGICO DE VINCULACIÓN/ITPAC-VI-PO-002 SERVICIO SOCIAL PROCEDIMIENTO/ITPAC-VI-PO-002-08 FORMATO PARA REGISTRO DE SERVICIO SOCIAL.docx" class="w3-text-black" style="text-decoration: none">&#8226; ITPAC-VI-PO-002-08 Formato para registro de servicio social</a></td>
    </tr>
    <tr>
      <td colspan="4"><a href="PROCESO ESTRATÉGICO DE VINCULACIÓN/ITPAC-VI-PO-002 SERVICIO SOCIAL PROCEDIMIENTO/ITPAC-VI-PO-002-09 PLAN DE TRABAJO PARA SERVICIO SOCIAL.pdf" class="w3-text-black" style="text-decoration: none">&#8226; ITPAC-VI-PO-002-09 Formato para plan de trabajo de servicio social (solo lectura)</a></td>
    </tr>
    <tr>
      <td colspan="4"><a href="PROCESO ESTRATÉGICO DE VINCULACIÓN/ITPAC-VI-PO-002 SERVICIO SOCIAL PROCEDIMIENTO/ITPAC-VI-PO-002-09 PLAN DE TRABAJO PARA SERVICIO SOCIAL..docx" class="w3-text-black" style="text-decoration: none">&#8226; ITPAC-VI-PO-002-09 Formato para plan de trabajo de servicio social</a></td>
    </tr>
    <tr>
      <td colspan="4"><a href="PROCESO ESTRATÉGICO DE VINCULACIÓN/ITPAC-VI-PO-002 SERVICIO SOCIAL PROCEDIMIENTO/ITPAC-VI-PO-002-10 FORMATO DE EVALUCAIÓN.pdf" class="w3-text-black" style="text-decoration: none">&#8226; ITPAC-VI-PO-002-10 Formato para evaluación de servicio social (solo lectura)</a></td>
    </tr>
    <tr>
      <td colspan="4"><a href="PROCESO ESTRATÉGICO DE VINCULACIÓN/ITPAC-VI-PO-002 SERVICIO SOCIAL PROCEDIMIENTO/ITPAC-VI-PO-002-10 FORMATO DE EVALUCAIÓN.docx" class="w3-text-black" style="text-decoration: none">&#8226; ITPAC-VI-PO-002-10 Formato para evaluación de servicio social</a></td>
    </tr>
    <tr>
      <td colspan="4"><a href="PROCESO ESTRATÉGICO DE VINCULACIÓN/ITPAC-VI-PO-002 SERVICIO SOCIAL PROCEDIMIENTO/ITPAC-VI-PO-002-11 REPORTE FINAL.pdf" class="w3-text-black" style="text-decoration: none">&#8226; ITPAC-VI-PO-002-11 Formato para reporte final de servicio social (solo lectura)</a></td>
    </tr>
    <tr>
      <td colspan="4"><a href="PROCESO ESTRATÉGICO DE VINCULACIÓN/ITPAC-VI-PO-002 SERVICIO SOCIAL PROCEDIMIENTO/ITPAC-VI-PO-002-11 REPORTE FINAL.docx" class="w3-text-black" style="text-decoration: none">&#8226; ITPAC-VI-PO-002-11 Formato para reporte final de servicio social</a></td>
    </tr>-->
			
	<tr>
      <td colspan="4" class="w3-indigo w3-card-4"><div align="center"><i>ITPAC-VI-PO-002 SERVICIO SOCIAL PROCEDIMIENTO * A partir de Agosto 2019</i> </div></td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-002/ITPAC-VI-PO-002.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-002 Procedimiento para servicio social (solo lectura)
		  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 1</span></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-002/ITPAC-VI-PO-002-01.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-002-01 Solicitud de servicio social (solo lectura)
		  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 0</span></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-002/ITPAC-VI-PO-002-01.doc" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-002-01 Solicitud de servicio social
		  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 0</span></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-002/ITPAC-VI-PO-002-02.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-002-02 Formato para carta compromiso de servicio social (solo lectura)
		  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 0</span></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-002/ITPAC-VI-PO-002-02.doc" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-002-02 Formato para carta compromiso de servicio social
		  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 0</span></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-002/ITPAC-VI-PO-002-03.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-002-03 Formato para carta de presentación de servicio social (solo lectura)
		  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 1</span></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-002/ITPAC-VI-PO-002-03.doc" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-002-03 Formato para carta de presentación de servicio social
		  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 1</span></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-002/ITPAC-VI-PO-002-04.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-002-04 Formato para reporte bimestral de servicio social (solo lectura)
		  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 0</span></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-002/ITPAC-VI-PO-002-04.doc" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-002-04 Formato para reporte bimestral de servicio social
		  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 0</span></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-002/ITPAC-VI-PO-002-05.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-002-05 Formato para constancia de terminación de servicio social (solo lectura)
		  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 0</span></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-002/ITPAC-VI-PO-002-05.doc" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-002-05 Formato para constancia de terminación de servicio social
		  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 0</span></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-002/ITPAC-VI-PO-002-09.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-002-09 Formato para plan de trabajo de servicio social (solo lectura)
		  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 0</span></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-002/ITPAC-VI-PO-002-09.docx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-002-09 Formato para plan de trabajo de servicio social
		  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 0</span></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-002/ITPAC-VI-PO-002-10.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-002-10 Formato para evaluación cualitativa del prestador de servicio social (solo lectura)
		  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 0</span></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-002/ITPAC-VI-PO-002-10.doc" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-002-10 Formato para evaluación cualitativa del prestador de servicio social
		  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 0</span></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-002/ITPAC-VI-PO-002-11.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-002-11 Formato de autoevaluación cualitativa del prestador de servicio social (solo lectura)
		  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 0</span></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-002/ITPAC-VI-PO-002-11.docx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-002-11 Formato de autoevaluación cualitativa del prestador de servicio social
		  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 0</span></a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-002/ITPAC-VI-PO-002-12.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-002-12 Formato de evaluación de las actividades por el prestador de servicio social (solo lectura)
		  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 0</span></a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-002/ITPAC-VI-PO-002-12.doc" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-002-12 Formato de evaluación de las actividades por el prestador de servicio social
		  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 0</span></a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-002/ITPAC-VI-PO-002-13.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-002-13 Formato para reporte final de servicio social (solo lectura)
		  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 0</span></a>
		</td>
    </tr>
	<tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-002/ITPAC-VI-PO-002-13.docx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-002-13 Formato para reporte final de servicio social
		  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 0</span></a>
		</td>
    </tr>
    
    <tr>
      <td colspan="4" class="w3-indigo w3-card-4"><div align="center"><i>ITPAC-VI-PO-003 PROCEDIMIENTO PARA LA FORMACIÓN CULTURAL, DEPORTIVA Y CÍVICA</i> </div></td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-003/ITPAC-VI-PO-003.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-003 Procedimiento para promoción cultural, deportiva y cívica (Solo lectura)
		  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 3</span></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-003/ITPAC-VI-PO-003-01.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-003-01 Formato para el registro de participantes de actividades culturales, deportiva y/o cívica (Solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 0</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-003/ITPAC-VI-PO-003-01.doc" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-003-01 Formato para el registro de participantes de actividades culturales, deportiva y/o cívica
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 0</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-003/ITPAC-VI-PO-003-02.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-003-02 Informe de actividad cultural, deportiva y/o cívica (Solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 0</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-003/ITPAC-VI-PO-003-02.doc" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-003-02 Informe de actividad cultural, deportiva y/o cívica
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 0</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-003/ITPAC-VI-PO-003-04.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-003-04 Constancia de acreditación de actividades extraescolares (Solo lectura)
		  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 1</span></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-003/ITPAC-VI-PO-003-04.doc" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-003-04 Constancia de acreditación de actividades extraescolares
		  <span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 1</span></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-003/ITPAC-VI-PO-003-05.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-003-05 Lista de asistencia de alumnos (Solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 0</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-003/ITPAC-VI-PO-003-05.docx" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-003-05 Lista de asistencia de alumnos
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 0</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-003/ITPAC-VI-PO-003-06.pdf" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-003-06 Evaluación al Desempeño de la Actividad Extraescolar (Solo lectura)
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 0</span>--></a>
		</td>
    </tr>
    <tr>
      <td colspan="4"><a href="SGC/proceso estrategico de vinculacion/ITPAC-VI-PO-003/ITPAC-VI-PO-003-06.doc" class="w3-text-black w3-tooltip" style="text-decoration: none">&#8226; 
		  ITPAC-VI-PO-003-06 Evaluación al Desempeño de la Actividad Extraescolar
		  <!--<span style="position:absolute;right:0;bottom:18px" class="w3-text w3-tag w3-red w3-round-medium w3-animate-opacity">Nuevo Documento SGC Ver. 0</span>--></a>
		</td>
    </tr>
    
    
  </table>
		</div>
		
    </div>
	
	<!-- Termina contenido de pagina -->

<?php
	include("src/footer.html");
?>
