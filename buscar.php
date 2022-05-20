<?php 
    include("conexion.php");
    $con=conectar();

    $cod_vuelo=$_POST['cod_vuelo'];

    $sql="SELECT *  FROM vuelos where codigo_vuelo = '$cod_vuelo'";
    $query=mysqli_query($con,$sql);
    if($query == null){
        Header("Location: error.php");
    }else {
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Consulta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Número de pasaporte</th>
                                        <th>código de vuelo</th>
                                        <th>aeropuerto salido</th>
                                        <th>aeropuerto entrada</th>
                                        <th>Fecha y Hora salida </th>
                                        <th>Fecha y hora Ingreso</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
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
                                                <th>
                                                <a href="excel.php?id=<?php  echo $row['id_vuelo']?>" class="btn btn-success">Exportar Excel</a>
                                               
                                                
                                                </th>                                  
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                       
                    </div>  
            </div>
    </body>
</html>