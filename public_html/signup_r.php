<?php

include("db.php");


if (isset($_POST['signUp'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT username FROM info_login WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            //echo 'found!';
            $_SESSION['message'] = "'$username' ya se encuetra registrado";
            $_SESSION['mesagge_type'] = 'danger';
            header("Location: signUp.php");
        } else {
            echo 'not found';
            $query = "INSERT INTO info_login (username, user_password) VALUES ('$username', '$password')";
            $result = mysqli_query($conn, $query);

            if (!$result) {
                die("No funciona");
            }

            //echo 'Guardado';
            $_SESSION['message'] = "Se ha registrado correctamente";
            $_SESSION['mesagge_type'] = 'success';
            header("Location: signUp.php");


        }
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
}
