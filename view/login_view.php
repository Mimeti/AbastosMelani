

<style>
    body 
{
    background-image: url(img/abashto.jpg);

    background-repeat: no-repeat;

    background-size: cover;

    background-attachment: fixed;

   
}


</style>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario.css">
    <link rel="stylesheet" href="css/notification.css">
    <title>Abastos Melani</title>
</head>
<body>

<div class="container">
    <div class="row justify-content-center pt-5 mt-5 mr-1">
    <div class="col-md-4 formulario">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="bg-light p-5">       


    <div class="form">
      <div class="title">Bienvenido</div>
      <div class="subtitle">Porfavor inicie sesion</div>
      <div class="input-container ic1">
        <input id="name_user" class="input" type="text" name="name_user" placeholder=" " />
        <div class="cut"></div>
        <label for="name_user" class="placeholder">Nombre de usuario</label>
      </div>
      <div class="input-container ic2">
        <input id="cont_user" class="input" type="password" name="cont_user"  placeholder=" " />
        <div class="cut"></div>
        <label for="cont_user" class="placeholder">Contraseña</label>
      </div>
      <div class="form-group mx-sm-4  text-center pb-4">
        <?php if (!empty($errores) )  {?>

            <div class="col-sm-12">
        <div class="alert fade alert-simple alert-warning alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert">
          <button type="button" class="close font__size-18" data-dismiss="alert">
									<span aria-hidden="true">
										<i class="fa fa-times warning"></i>
									</span>
									<span class="sr-only">Close</span>
								</button>
          <i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i>
          <strong class="font__weight-semibold"><?php echo $errores; ?></strong> Better check yourself, you're not looking too good.
        </div>
      </div>


        <?php } ?>

      <button type="text" class="submit">submit</button>
    </div>




</form>
    </div>
</div>
</div>



<?php include('shared/footer.php'); ?>