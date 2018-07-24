

<?php //if(isset($_GET['token']))  ?>


<!Doctype html>
<?php
if($_SESSION || !isset($_GET['token'])) header("Location: http://example2.com/");
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
    <h2>Zmień Hasło</h2>
    <form class="" action="/reset/usr?token=<?=$_GET['token']?>" method="post">
        <div class="form-group">
            <input type="password" name="password" id="password" class="form-control" placeholder="Nowe Hasło" required>
        </div>

        <div class="form-group">
            <input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control" placeholder="Potwierdź hasło" required>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Zaloguj">

        </div>



    </form>

</div>

<br>
<footer class="form-group">
    <p align="center"><a href="/">Return</a></p>
</footer>


</body>

</html>
