<?php
	include("src/header.html");
	menua();
	menub();
?>
nani?
<br></br>			
<!--BreadCumb--> 
<nav aria-label="breadcrumb" class="breadcrumb-container"> 
  <ol class="breadcrumb"> 
  <li class="breadcrumb-item"><a href="pea.php">P. E. Académico</a></li> 
  <li class="breadcrumb-item"><a href="pear.php">P. E. Administración de Recursos</a></li>
  <li class="breadcrumb-item"><a href="pec.php">P. E. de Calidad</a></li>
  <li class="breadcrumb-item"><a href="pep.php">P. E. de Planeación</a></li>
  <li class="breadcrumb-item"><a href="pev.php">P. E. de Vinculación</a></li>
  <li class="breadcrumb-item"><a href="peam.php">P. E. Ambiental</a></li>
  <li class="breadcrumb-item"><a href="pes.php">P. E. de Seguridad</a></li>
  <li class="breadcrumb-item"><a href="pee.php">P. E. de Energía</a></li>
  <li class="breadcrumb-item"><a href="dr.php">Documentos de Referencia</a></li>
  <li class="breadcrumb-item"><a href="mc.php">Manual del SGI</a></li>
  <li class="breadcrumb-item"><a href="difusion_sgi.php">Difusión del SGI</a></li>
  <li class="breadcrumb-item"><a href="logout.php"><i>Salir del SGI</i></a></li>
  </ol> 
</nav> 
<br>

<!-- contenido de pagina -->	
<div class="page-container">
      
  <div class="page-header">
    <h1 class="page-title">Sistema de Gestión Integrado</h1> 
    <h3 class="page-subtitle">Proceso Estratégico de Calidad</h3>
    <div class="header-divider"></div>
  </div>
		
  <!--busqueda de documentos-->
  <div class="search-container">
    <div class="search-box">
      <input type="text" placeholder="Búsqueda por documento..." id="myInput" onKeyUp="myFunction()">
    </div>
  </div>
  
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
  <!--fin script de busqueda-->
  
  <br>			
  <table class="documents-table" id="PEA">
    <thead>
    </thead>
    
    <tr class="section-header">
      <td colspan="4"><div align="center"><i>ITPAC-CA-DI-01 FICHA DE PROCESO</i></div></td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-DI/ITPAC-CA-DI-01.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-DI-01 Ficha de proceso, proceso estratégico de calidad (solo lectura)
        </a>
      </td>
    </tr>
			
	<tr class="section-header">
      <td colspan="4"><div align="center"><i>ITPAC-CA-IT-01 INSTRUCTIVO DE TRABAJO PARA ELABORAR PROCEDIMIENTOS</i></div></td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-IT-01/ITPAC-CA-IT-01.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-IT-01 Instructivo de trabajo para elaborar procedimientos (solo lectura)
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-IT-01/Plantilla procedimientos SGC.dotx" class="document-link">
          <span class="doc-bullet">•</span>
          Anexo 1 Plantilla para elaborar procedimientos del SGC
        </a>
      </td>
    </tr>
       
    <tr class="section-header">
      <td colspan="4"><div align="center"><i>ITPAC-CA-PO-001 CONTROL DE LA INFORMACIÓN DOCUMENTADA</i></div></td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-001/ITPAC-CA-PO-001.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-001 Procedimiento para el control de la información documentada (solo lectura)
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-001/ITPAC-CA-PO-001-02.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-001-02 Formato lista maestra de documentos internos controlados (solo lectura)
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-001/ITPAC-CA-PO-001-02.doc" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-001-02 Formato lista maestra de documentos internos controlados
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-001/ITPAC-CA-PO-001-03.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-001-03 Lista maestra de documentos de origen externo (solo lectura)
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-001/ITPAC-CA-PO-001-03.doc" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-001-03 Lista maestra de documentos de origen externo
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-001/ITPAC-CA-PO-001-05.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-001-05 Tabla de control de cambios (solo lectura)
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-001/ITPAC-CA-PO-001-05.docx" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-001-05 Tabla de control de cambios
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-001/ITPAC-CA-PO-001-06.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-001-06 Tabla de identificación y requerimientos mínimos (solo lectura)
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-001/ITPAC-CA-PO-001-06.docx" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-001-06 Tabla de identificación y requerimientos mínimos 
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-001/ITPAC-CA-PO-001-07.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-001-07 Tabla de aprobación y autorización de documentos (solo lectura)
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-001/ITPAC-CA-PO-001-07.docx" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-001-07 Tabla de aprobación y autorización de documentos
        </a>
      </td>
    </tr>
    
    <tr class="section-header">
      <td colspan="4"><div align="center"><i>ITPAC-CA-PO-002 CONTROL DE REGISTROS DE CALIDAD</i></div></td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-002/ITPAC-CA-PO-002.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-002 Procedimiento para control de registros de calidad (solo lectura)
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-002/ITPAC-CA-PO-002-01.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-002-01 Lista maestra para el control de registros de calidad del SGC (solo lectura)
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-002/ITPAC-CA-PO-002-01.doc" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-002-01 Lista maestra para el control de registros de calidad del SGC
        </a>
      </td>
    </tr>
    
    <tr class="section-header">
      <td colspan="4"><div align="center"><i>ITPAC-CA-PO-003 AUDITORÍA INTERNA</i></div></td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-003/ITPAC-CA-PO-003.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-003 Procedimiento para Auditoría Interna (solo lectura)
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-003/ITPAC-CA-PO-003-01.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-003-01 Formato para Calificacion de Auditores (solo lectura)
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-003/ITPAC-CA-PO-003-01.docx" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-003-01 Formato para calificacion de auditores
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-003/ITPAC-CA-PO-003-02.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-003-02 Formato para Plan de Auditoria (solo lectura)
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-003/ITPAC-CA-PO-003-02.docx" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-003-02 Formato para plan de auditoria
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-003/ITPAC-CA-PO-003-03.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-003-03 Formato para Reunion de Apertura (solo lectura)
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-003/ITPAC-CA-PO-003-03.docx" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-003-03 Formato para reunion de apertura
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-003/ITPAC-CA-PO-003-04.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-003-04 Formato para Informe de Auditoria (solo lectura)
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-003/ITPAC-CA-PO-003-04.docx" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-003-04 Formato para informe de auditoria
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-003/ITPAC-CA-PO-003-05.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-003-05 Formato para Reunion de Cierre (solo lectura)
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-003/ITPAC-CA-PO-003-05.docx" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-003-05 Formato para reunion de cierre
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-003/ITPAC-CA-PO-003-06.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-003-06 Programa Anual de Auditorias de Calidad (solo lectura)
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-003/ITPAC-CA-PO-003-06.docx" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-003-06 Programa Anual de Auditorias de Calidad
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-003/ITPAC-CA-PO-003-07.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-003-07 Criterios para Calificacion de Auditores (solo lectura)
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-003/ITPAC-CA-PO-003-07.docx" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-003-07 Criterios para Calificacion de Auditores
        </a>
      </td>
    </tr>
    
    <tr class="section-header">
      <td colspan="4"><div align="center"><i>ITPAC-CA-PO-004 Servicio No Conforme</i></div></td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-004/ITPAC-CA-PO-004.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-004 Procedimiento para el Control de Servicio No conforme (Solo lectura)
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-004/ITPAC-CA-PO-004-01.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-004-01 Formato para identificación, registro y control de Servicio No Conforme (solo lectura)
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-004/ITPAC-CA-PO-004-01.doc" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-004-01 Formato para identificación, registro y control de Servicio No Conforme.
        </a>
      </td>
    </tr>
    
    <tr class="section-header">
      <td colspan="4"><div align="center"><i>ITPAC-CA-PO-005 QUEJAS Y SUGERENCIAS</i></div></td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-005/ITPAC-CA-PO-005.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-005 Procedimiento para atención de quejas o sugerencias (Solo lectura)
          <span class="new-badge">Nuevo Documento</span>
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso%20estrategico%20de%20calidad/ITPAC-CA-PO-005/ITPAC-CA-PO-005-01.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-005-01 Informe de Quejas y Sugerencias (Solo lectura)
          <span class="new-badge">Nuevo Documento</span>
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-005/ITPAC-CA-PO-005-01.docx" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-005-01 Informe de Quejas y Sugerencias
          <span class="new-badge">Nuevo Documento</span>
        </a>
      </td>
    </tr>
           
    <tr class="section-header">
      <td colspan="4"><div align="center"><i>ITPAC-CA-PO-006 AUDITORIAS DE SERVICIO</i></div></td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-006/ITPAC-CA-PO-006.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-006 Procedimiento para auditorías de servicio (Solo lectura)
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-006/ITPAC-CA-PO-006-01.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-006-01 Formato para programa anual de auditorías de servicios (Solo lectura)
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-006/ITPAC-CA-PO-006-01.doc" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-006-01 Formato para programa anual de auditorías de servicios
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-006/ITPAC-CA-PO-006-02.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-006-02 Formato para encuestas de servicio (solo lectura)
          <span class="version-badge">Versión 4</span>
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-006/ITPAC-CA-PO-006-02.docx" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-006-02 Formato para encuestas de servicio
          <span class="version-badge">Versión 4</span>
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-006/ITPAC-CA-PO-006-03.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-006-03 Formato para el informe de resultados de la encuesta de servicio (Solo lectura)
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-006/ITPAC-CA-PO-006-03.doc" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-002-03 Formato para el informe de resultados de la encuesta de servicio
        </a>
      </td>
    </tr>
          
    <tr class="section-header">
      <td colspan="4"><div align="center"><i>ITPAC-CA-PO-007 EVALUACIÓN DOCENTE</i></div></td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-007/ITPAC-CA-PO-007.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-007 Procedimiento para la evaluación docente (Solo lectura)
        </a>
      </td>
    </tr>
          
     <tr class="section-header">
      <td colspan="4"><div align="center"><i>ITPAC-CA-PO-008 ACCIONES CORRECTIVAS</i></div></td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-008/ITPAC-CA-PO-008.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-008 Procedimiento para acciones correctivas (Solo lectura)
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-008/ITPAC-CA-PO-008-01.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-008-01 Formato para Requisición de Acciones Correctivas (solo lectura)
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-PO-008/ITPAC-CA-PO-008-01.docx" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-PO-008-01 Formato para Requisición de Acciones Correctivas
        </a>
      </td>
    </tr>
    
    <tr class="section-header">
      <td colspan="4"><div align="center"><i>ITPAC-CA-IT-02 CONTROL DE PROCESOS EXTERNOS</i></div></td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-IT-02/ITPAC-CA-IT-02.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-IT-02 Instructivo de trabajo para la identificación y control de los procesos externos
        </a>
      </td>
    </tr>
     <tr class="section-header">
      <td colspan="4"><div align="center"><i>ITPAC-CA-IT-03 INSTRUCTIVO REVISIÓN POR LA DIRECCIÓN</i></div></td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-IT-03/ITPAC-CA-IT-03.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-IT-03 Instructivo para la revisión por la dirección (Solo lectura)
        </a>
      </td>
    </tr>
     <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-IT-03/ITPAC-CA-IT-03-01.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-IT-03-01 Resultados de la revision por la direccion (solo lectura)
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-IT-03/ITPAC-CA-IT-03-01.docx" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-IT-03-01 Resultados de la revision por la direccion
        </a>
      </td>
    </tr>	
	<tr class="section-header">
      <td colspan="4"><div align="center"><i>DOCUMENTOS INTERNOS</i></div></td>
    </tr>
	<tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-DI/ITPAC-CA-DI-01Instrucciones.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-DI-01 Ficha de Proceso (solo lectura)
        </a>
      </td>
    </tr>
	<tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-DI/ITPAC-CA-DI-01.docx" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-DI-01 Ficha de Proceso
        </a>
      </td>
    </tr>
	<tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-DI/ITPAC-CA-DI-01.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-DI-01 Ficha de Proceso Estratégico de Calidad
        </a>
      </td>
    </tr>
	<tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-DI/ITPAC-CA-DI-02.xlsx" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-DI-02 Listado de Administración del Conocimiento (solo lectura)
        </a>
      </td>
    </tr>
	<tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-DI/ITPAC-CA-DI-02.xlsx" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-DI-02 Listado de Administración del Conocimiento
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-DI/ITPAC-CA-DI-04.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-DI-04 Proyecto de Mejora (solo lectura)
          <span class="version-badge">Ver. 1</span>
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-DI/ITPAC-CA-DI-04.docx" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-DI-04 Proyecto de Mejora
          <span class="version-badge">Ver. 1</span>
        </a>
      </td>
    </tr>
	<tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-DI/ITPAC-CA-DI-05.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-DI-05 Listado propiedad perteneciente a los clientes o proveedores externos (solo lectura)
        </a>
      </td>
    </tr>
	<tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-DI/ITPAC-CA-DI-05.xlsx" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-DI-05 Listado propiedad perteneciente a los clientes o proveedores externos
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-DI/ITPAC-CA-DI-06.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-DI-06 Matriz de Planificación de Cambios Ver. 0
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-DI/ITPAC-CA-DI-07.pdf" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-DI-07 Formato para Planificación y Control de Cambios Ver. 0 (solo lectura)
        </a>
      </td>
    </tr>
    <tr>
      <td colspan="4" class="document-item">
        <a href="SGC/proceso estrategico de calidad/ITPAC-CA-DI/ITPAC-CA-DI-07.docx" class="document-link">
          <span class="doc-bullet">•</span>
          ITPAC-CA-DI-07 Formato para Planificación y Control de Cambios Ver. 0
        </a>
      </td>
    </tr>
         
  </table>
</div>
	
<!-- Termina contenido de pagina -->

<style>
/* ===== ESTILOS GENERALES ===== */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.6;
    color: #333;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

/* ===== MEJORAS PARA EL BREADCRUMB ===== */
.breadcrumb-container {
    margin-bottom: 20px;
}

.breadcrumb {
    background-color: #e9ecef;
    border-radius: 6px;
    padding: 12px 20px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    margin-bottom: 20px;
    display: flex;
    flex-wrap: wrap;
    list-style: none;
}

.breadcrumb-item {
    margin-right: 8px;
}

.breadcrumb-item a {
    color: #495057;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.2s;
    font-size: 0.9rem;
}

.breadcrumb-item a:hover {
    color: #007bff;
}

.breadcrumb-item:last-child a {
    color: #6c757d;
    font-style: italic;
}

/* ===== MEJORAS PARA EL CONTENEDOR PRINCIPAL ===== */
.page-container {
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    padding: 25px;
    margin-bottom: 30px;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
}

.page-header {
    text-align: center;
    margin-bottom: 25px;
}

.page-title {
    font-weight: 600;
    margin-bottom: 10px;
    color: #1a5276;
    font-size: 2.2rem;
}

.page-subtitle {
    font-weight: 500;
    margin-bottom: 20px;
    color: #2874a6;
    font-size: 1.6rem;
}

.header-divider {
    border: 0;
    height: 1px;
    background: linear-gradient(to right, transparent, #2874a6, transparent);
    margin: 20px auto;
    width: 80%;
}

/* ===== MEJORAS PARA LA BARRA DE BÚSQUEDA ===== */
.search-container {
    margin-bottom: 25px;
    display: flex;
    justify-content: center;
}

.search-box {
    position: relative;
    width: 100%;
    max-width: 500px;
}

.search-box input {
    width: 100%;
    border-radius: 25px;
    padding: 12px 45px 12px 20px;
    border: 1px solid #ced4da;
    transition: all 0.3s;
    box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    font-size: 1rem;
}

.search-box input:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
    outline: none;
}

.search-icon {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #6c757d;
}

/* ===== MEJORAS PARA LA TABLA DE DOCUMENTOS ===== */
.documents-table {
    width: 100%;
    border-collapse: collapse;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    margin-bottom: 20px;
}

.section-header {
    background: linear-gradient(135deg, #3f51b5, #5c6bc0);
    color: white;
    font-weight: 600;
    text-align: center;
    padding: 12px !important;
    font-size: 1rem;
}

.section-header td {
    padding: 15px !important;
}

.documents-table tr {
    transition: background-color 0.2s;
    border-bottom: 1px solid #eaeaea;
}

.documents-table tr:hover {
    background-color: #f8fbff;
}

.document-item td {
    padding: 12px 16px;
}

/* ===== MEJORAS PARA LOS ENLACES ===== */
.document-link {
    color: #2c3e50;
    text-decoration: none;
    display: flex;
    align-items: flex-start;
    padding: 8px 0;
    transition: all 0.2s;
    position: relative;
}

.document-link:hover {
    color: #007bff;
}

.doc-bullet {
    color: #3498db;
    font-weight: bold;
    margin-right: 10px;
    flex-shrink: 0;
    margin-top: 1px;
}

/* ===== MEJORAS PARA LAS ETIQUETAS ===== */
.new-badge, .version-badge {
    border-radius: 12px;
    padding: 3px 10px;
    font-size: 0.7rem;
    font-weight: 600;
    margin-left: 10px;
    white-space: nowrap;
}

.new-badge {
    background-color: #e74c3c;
    color: white;
}

.version-badge {
    background-color: #f39c12;
    color: white;
}

/* ===== RESPONSIVIDAD ===== */
@media (max-width: 768px) {
    .breadcrumb {
        padding: 10px 15px;
        font-size: 0.8rem;
    }
    
    .page-title {
        font-size: 1.8rem;
    }
    
    .page-subtitle {
        font-size: 1.3rem;
    }
    
    .page-container {
        padding: 15px;
    }
    
    .documents-table {
        font-size: 0.9rem;
    }
    
    .section-header {
        font-size: 0.9rem;
        padding: 10px !important;
    }
    
    .document-link {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .new-badge, .version-badge {
        margin-left: 0;
        margin-top: 5px;
        align-self: flex-start;
    }
}

/* ===== ANIMACIONES ===== */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(5px); }
    to { opacity: 1; transform: translateY(0); }
}

.documents-table tr {
    animation: fadeIn 0.3s ease-out;
}
</style>

<?php
	include("src/footer.html");
?>