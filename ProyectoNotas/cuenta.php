<?php
    include_once 'config/config.php';
    include_once 'model/user.php';
    

    $user = new usuario();

    $sql = 'SELECT id_user, name, lastname, document, type_document, email, password, name_rol FROM db_pe.users u 
    inner join db_pe.rol r on (u.id_rol = r.id_rol);';
    $resultado = $mysql->query($sql);

  
?>

<html>
    <head>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
   
    <title>Iniciar sesion</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link href="./assets/css/signin.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
     

 <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">DOCUMENTOS</th>
      <th scope="col">TIPO DOCUMENTO</th>
      <th scope="col">CORREO ELECTRONICO </th>
      <th scope="col">ROL</th>
    </tr>
  </thead>
  <tbody>
  <?php
                    while($row = $resultado->fetch_row()){
                        echo '<tr>';
                        echo '<td>'.$row[0].'</td>';
                        echo '<td>'.$row[1].'</td>';
                        echo '<td>'.$row[2].'</td>';
                        echo '<td>'.$row[3].'</td>';
                        echo '<td>'.$row[4].'</td>';
                        echo '<td>'.$row[5].'</td>';
                        echo '<td>'.$row[7].'</td>';
                        echo '</tr>';
                    }
                    //$mysql->close();
                ?>
  </tbody>
</table>

        </div>
   
    </body>
</html>