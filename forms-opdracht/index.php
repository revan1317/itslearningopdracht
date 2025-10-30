<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form {
            margin-top: 30px;
            margin-right: 1200px;
            margin-left: 30px
        }

        .btn-primary {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <form class="form" action="calc.php" method="POST">
        <label for="getal" class="form-label">Getal</label>
        <input type="getal" class="form-control" id="getal" placeholder="Voer getal in" name="getal">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>