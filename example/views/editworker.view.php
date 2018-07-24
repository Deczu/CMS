<?php

if(!isset($_SESSION)){
    header("Location: http://example2.com/");
}

?>
<html>
    <head>
        <meta charset="utf-8">
        <title>CMS</title>
        <link rel="stylesheet" href="../css/bootstrap.css" media="all" charset="UTF-8">
    </head>

    <body>
    <br>
        <div class="container">
            <h2>Edycja danych pracownika: <?= $worker->imie ?></h2>
            <form class="" action="/edit/worker/execute?workerid=<?= $id ?>" method="post">
                <div class="form-group">
                    <input type="text" name="imie_handlowca" id="imie_handlowca" class="form-control" placeholder="Imie" value="<?= $worker->imie ?>" required>
                </div>

                <div class="form-group">
                    <input type="email" name="email_handlowca" id="email_handlowca" class="form-control" placeholder="Email" value="<?= $worker->email?>" required>
                </div>
                <div class="form-group">
                    <input type="text" name="telefon" id="telefon" class="form-control" placeholder="Telefon" value="<?= $worker->telefon ?>" required>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Edytuj!">

                </div>


            </form>

        </div>


    </body>

</html>