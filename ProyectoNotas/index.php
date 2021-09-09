<?php
    include_once 'config/config.php';
    include_once 'model/user.php';
      
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
    <div class="row">
        <div class="col-12">
        <main class="form-signin">
  <form action="" method="POST">
    <h1 class="h3 mb-3 fw-normal">Por favor inicie sesion</h1>

    <div class="form-floating">
      <input type="text"   id="document" name="document" required class="form-control"  placeholder="documento de identidad">
      <label for="floatingInput">Usuario</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" name="password" required placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

  
    <button   type="submit" value="Iniciar sesion" id="iniciar" name="iniciar" class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <div class="alert alert-danger" id="alert" role="alert">
Usuario y/o contrasena, INVALIDOS
</div>
  </form>
</main>
        </div>
       

    </div>

</div>


       <script>
           function showalert(){  
               document.getElementById("alert").style.display="block";
           }
           

       </script>
       
    </body>
</html>

<?php



    if (!empty($_POST['iniciar'])) {
        

        $document = $_POST['document'];
        $password = $_POST['password'];
       
    
        if($document != null && $password != null){
                    
            $sqlUser = 'SELECT id_user, name, lastname, document, type_document, email, password, name_rol  FROM users u inner join db_pe.rol r on (u.id_rol = r.id_rol) WHERE document="'.$document.'" AND password="'.$password.'"';
            $resUser = $mysql->query($sqlUser);
           
                                
            if($resUser->num_rows > 0){
               // var_dump($resUser);
                $arregloUser = array();
                foreach($resUser as $key => $value){
                        $arregloUser[] = array( 
                            'name'=>$value->name,
                             'rol'=>$value->name_rol
                        );
                    
                }
             $_SESSION['id_Login'] = $document['document'];
               //$_SESSION['id_rol'] = $resUser['name'];
               header("Location:cuenta.php");
                 var_dump($arregloUser);
            }else{
                echo "<script type='text/javascript'>showalert();</script>";
            }

        }

    } 

    
    $mysql->close();
?>
