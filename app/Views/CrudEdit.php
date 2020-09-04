<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>crud </title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://bootswatch.com/4/united/bootstrap.min.css">
    <link rel="stylesheet" href="../../estilos/estilos.css">

</head>
<body>

<div class="container mt-4">
    <div class="card text-white bg-dark">
  <div class="card-header">Editar titulo</div>
  <div class="card-body">
    <h4 class="card-title">Editar la descripcion</h4>
        <form method="post" action="http://localhost/cifw/public/CrudController/editaction" >
                <input type="hidden" name="id" value="<?=$id?>">
                <div class="form-group">
                    <label for="tittle">Titulo</label>
                    <input type="text" class="form-control" id="tittle" name="tittle"
                        value="<?= $tittle ?>"
                    >
                    

                <div class="form-group">
                    <label for="description">Descripcion</label>
                    <input type="text" class="form-control" id="description" name="description"
                        value="<?= $description ?>"
                    >
                    
                </div>
                
                <button type="submit" class="btn btn-success mr-2">Editar</button>
                <a href="/cifw/public/" class="btn btn-danger">Cancelar</a>

        </form>
  </div>
</div>
</div>