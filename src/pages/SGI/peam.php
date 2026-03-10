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
  <li class="breadcrumb-item" ><a href="pear.php">P. E. Administración de Recursos</a></li>
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
<div style="margin: auto; text-align: center; width: 100%; padding: 5%;">
  <h1 class="align-center display-2" style="margin-bottom: 15px;">Sistema de Gestión Integrado</h1>
  <h3 class="align-center display-2" style="margin-bottom: 15px;">Proceso Estratégico Ambiental</h3>
  <hr>
  <input id="searchInput" onkeyup="searchFunction()" class="w3-input w3-card-2 w3-text-black" type="text" placeholder="Búsqueda por documento ...">
  <br><br>
  
  <?php
    function listarArchivosDeDirectorios($directorioBase) {
        $items = scandir($directorioBase);
        $archivosRaiz = array();
        foreach ($items as $item) {
            if ($item !== '.' && $item !== '..' && is_file($directorioBase . "/" . $item)) {
                $archivosRaiz[] = $item;
            }
        }
        
        if (!empty($archivosRaiz)) {
            echo "<table class='w3-table-all w3-hoverable w3-card-2' style='margin-bottom:20px;'>";
              echo "<thead>
                      <tr class='w3-indigo w3-card-4'>
                        <th colspan='4'><div align='center'><i>FICHA DE PROCESO</i></div></th>
                      </tr>
                    </thead>";
              foreach ($archivosRaiz as $archivo) {
                  $rutaArchivo = $directorioBase . "/" . $archivo;
                  echo "<tr>
                          <td colspan='4'>
                            <a href='$rutaArchivo' class='w3-text-black' style='text-decoration: none;'>&#8226; $archivo</a>
                          </td>
                        </tr>";
              }
            echo "</table>";
        }
        
        $directorios = glob($directorioBase . "/*", GLOB_ONLYDIR);
        foreach ($directorios as $dir) {
            $nombreCarpeta = basename($dir);
            echo "<table class='w3-table-all w3-hoverable w3-card-2' style='margin-bottom:20px;'>";
              echo "<thead>
                      <tr class='w3-indigo w3-card-4'>
                        <th colspan='4'><div align='center'><i>$nombreCarpeta</i></div></th>
                      </tr>
                    </thead>";
              
              $archivos = array_diff(scandir($dir), array('.', '..'));
              foreach ($archivos as $archivo) {
                  $rutaArchivo = $dir . "/" . $archivo;
                  echo "<tr>
                          <td colspan='4'>
                            <a href='$rutaArchivo' class='w3-text-black' style='text-decoration: none;'>&#8226; $archivo</a>
                          </td>
                        </tr>";
              }
            echo "</table>";
        }
    }
    
    listarArchivosDeDirectorios("SGI_2025/Proceso Ambiental");
  ?>
</div>

<script>
function searchFunction() {
    var input, filter, tables, tr, td, i, j;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    tables = document.getElementsByClassName("w3-table-all");
    
    for (i = 0; i < tables.length; i++) {
        tr = tables[i].getElementsByTagName("tr");
        for (j = 0; j < tr.length; j++) {
            td = tr[j].getElementsByTagName("td")[0];
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[j].style.display = "";
                } else {
                    tr[j].style.display = "none";
                }
            }
        }
    }
}
</script>

<?php
  include("src/footer.html");
?>
