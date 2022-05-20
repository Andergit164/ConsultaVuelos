<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename= Consulta-Vuelo.xls");
?>
<table>
    <tr>
        <th>ID</th>
        <th>Numero de pasaporte</th>
        <th>codigo de vuelo</th>
        <th>aeropuerto salida</th>
        <th>aeropuerto entrada</th>
        <th>Fecha y Hora salida </th>
        <th>Fecha y hora Ingreso</th>
    </tr>

        <?php
            include("conexion.php");
            $con=conectar();
        
            $cod_vuelo=$_GET['id'];
        
            $sql="SELECT *  FROM vuelos where id_vuelo = '$cod_vuelo'";
            $query=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($query)){
        ?>
            <tr>
                <th><?php  echo $row['id_vuelo']?></th>
                <th><?php  echo $row['numero_Pasaporte']?></th>
                <th><?php  echo $row['codigo_vuelo']?></th>
                <th><?php  echo $row['aer_salida']?></th>     
                <th><?php  echo $row['aer_entrada']?></th>
                <th><?php  echo $row['fechahora_salida']?></th>
                <th><?php  echo $row['fechahora_entrada']?></th>                                 
            </tr>
        <?php 
            }
        ?>
</table>
