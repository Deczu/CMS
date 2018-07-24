<?php
/**
 * Created by PhpStorm.
 * User: deczu
 * Date: 23.07.18
 * Time: 12:30
 */

//echo "tutaj jest dodawanie pracownika do firmy";
//var_dump($_SESSION);
//var_dump($companies);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>cmSS</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="../css/index.css" rel="stylesheet">
</head>

<body>


<div class="container">
    <h2>Dodaj Handlowca</h2>
    <form class="" action="/add/worker/execute" method="post">
        <div class="form-group">
            <input type="text" name="imie_pracownika" id="imie_pracownika" class="form-control" placeholder="Imie i Nazwisko" required>
        </div>

        <div class="form-group">
            <input type="email" name="email_pracownika" id="email_pracownika" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="text" name="telefon_pracownika" id="telefon_pracownika" class="form-control" placeholder="Telefon" required>
        </div>
        <div class="form-group">
            <select name="id_firmy" class="form-control ">
                <?php

                foreach ($companies as $company)
                {
                    echo "<option value='$company->id'>$company->nazwa</option>";
                }

                ?>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Dodaj!">

        </div>


    </form>

</div>

</body>