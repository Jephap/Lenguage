<?php
     
     include 'conexion_be.php';

     $nombre_completo = $_POST['nombre_completo'];
     $numero = $_POST['numero'];
     
     $razon = $_POST ['razon'];
    
     
    

      $query = "INSERT INTO razon(nombre_completo, numero,razon) 
                   VALUES('$nombre_completo','$numero','$razon')";

      $ejecutar = mysqli_query($conexion , $query);

      if($ejecutar){
            echo'
                  <script>
                        alert("Petición enviada!");
                        window.location ="../inicio.html";
                  </script>
            ';
      }

      mysqli_close($conexion);

     
      

?>