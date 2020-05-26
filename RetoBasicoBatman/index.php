<?php 
require_once "./lib/arraysDatos.php";
?>
<?php 
require_once "./template/head.php";
?>
<?php 
    require_once "./db_conexion.php";
?>

<body>

  <div class="container">
    <div class="row">

      <?php
          foreach ($carta as $value) { 
          echo "<div class='col s4 l4'>";
          foreach ($value as $key => $value2) {
              if($key === 'Titulo'){
                  echo "<div><h5>$value2</h5>";
              }
              if($key === 'Comensales'){
                  echo "<p>$key:  <span>$value2</span></p>";
              }
              if($key === 'Tipo'){
                  echo "<p>$key:  <span>$value2</span></p></div>";
              }
              if($key === 'Ingredientes'){
                  foreach ($value2 as $key => $value3) {
                      echo "<div><p>$key </p><span>$value3</span></div>";
                  }
              }
          }

          echo "</div>";
        }
      ?>
    </div>
  </div>

<?php 
require_once "./template/footer.php";
?>

</body>
</html>

