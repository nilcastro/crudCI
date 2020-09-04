<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/4/united/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
    <br>
    <br>

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    add new 
</button>
<br>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form method="post" action="CrudController/create">
            <div class="form-group">
                <label for="exampleInputEmail1">Tittle</label>
                <input type="text" class="form-control" name="tittle" aria-describedby="emailHelp">   
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <input type="text" class="form-control" name="description" aria-describedby="emailHelp">     
            </div>
            <button type="submit" class="btn btn-primary" value="save">Submit</button>
        </form>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" >guardar</button>
      </div>
    </div>
  </div>
</div>
<br>
        
<table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">Titulo</th>
      <th scope="col">Descricion</th>
      <th scope="col">Creado</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php if(isset($task)){
        foreach($task as $row){
    ?>
    <tr>
    
      <td><?=$row["tittle"]?></td>
      <td><?=$row["description"]?></td>
      <td><?=$row["creadted-at"]?></td>
      <td>
          <div class="text-center">
              <a href="/cifw/public/CrudController/edit/<?=$row["id"]?>" class="btn btn-dark">
                  <i class="fas fa-pen"></i>
              </a>
              
              <a href="/cifw/public/CrudController/delete/<?=$row["id"]?>" class="btn btn-danger">
                  <i class="fas fa-trash"></i>
              </a>
          </div>
      </td>
    </tr>  

    <?php
          }
        }
        ?>
  </tbody>
</table>

        </div>
    </body>
</html>