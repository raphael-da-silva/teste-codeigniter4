<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Area restrita - Logado</title>
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
        .content{
            max-width: 1024px;
        }
    </style>
</head>

<body>
    <div class="bg-dark p-2 text-white mb-2">
        Area logada - Teste Codeigniter / Raphael da Silva

        <a href="/logout" class="btn-warning btn-sm btn">
            sair / logout
        </a>
    </div>

    <div class="content m-auto">
        <?php $this->renderSection('content'); ?>
    </div>
</body>
</html>
