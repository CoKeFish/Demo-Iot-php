<?php
include("db.php");
include("includes/header.php");
//include("testJson.php")
?>



<div class="container p-4 ">

    <div class="row  justify-content-center align-items-center">
        <div class="col-auto w-25">
            <div class="card card-body ">

                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Nombre de usuario" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Contraseña">
                    </div>
                    <input type="submit" class="btn btn-success btn-block w-100" name="signUp" value="Registrarse">
                </form>

            </div>
        </div>

    </div>

</div>




<?php include("includes/footer.php") ?>