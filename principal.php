<!DOCTYPE html>
<html lang="en">
    <head>
        <title>VUELOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
</head>
<body>
<div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese su código de vuelo</h1>
                                <form action="buscar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="cod_vuelo" placeholder="cod vuelo">
                                    <input type="submit" class="btn btn-primary" value="Consultar">

                                </form>
                                <div>
                                
                        <a style="margin-top: 10px;" class="btn btn-danger" href="principal.php" target="myframe">Limpiar</a>
                    
                                </div>
                        </div>
                    </div>
</div>
</html>