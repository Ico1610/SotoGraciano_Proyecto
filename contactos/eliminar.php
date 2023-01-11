<?php
   include_once("sesiones.php");

   $id=$_REQUEST['id'];

   include_once("conexion.php");
   $consulta="delete from personas where id='$id'";
   $resultado=mysqli_query($con,$consulta);

   if ($resultado){
        echo "<script>
                alert('Registro eliminado con Éxito');
                location.href='administrar.php';
             </script>";
   }
   else{
        echo "<script>
                alert('Registro NO eliminado... VERIFIQUE');
                location.href='administrar.php';
              </script>";

   }

?>