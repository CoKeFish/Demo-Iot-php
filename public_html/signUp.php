<?php
include("db.php");
include("includes/header.php");
//include("testJson.php")
?>



<div class="container p-4 ">

    <div class="row  justify-content-center align-items-center">
        <div class="col-auto w-25">

            <?php
            if (isset($_SESSION['message'])) { ?>

                <div class="alert alert-<?= $_SESSION['mesagge_type'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            <?php session_unset(); } ?>

            <div class="card card-body ">

                <form action="signup_r.php" method="POST">
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