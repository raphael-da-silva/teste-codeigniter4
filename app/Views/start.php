<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teste com CodeIgniter 4!</title>
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <style>
       
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php if($error){ ?>
                <div class="bg-danger p-2 text-white">
                    <?php echo $error; ?>
                </div>
            <?php } ?>

            <div class="card mt-4">
                <div class="card-header">Entrar no sistema - Teste Codeigniter</div>

                <?php if(session()->get('loggedUser') != null){ ?>
                    <div class="bg-success p-1 text-white text-center">
                        Você já está logado.

                        <a href="/clientes" class="text-warning">
                            voltar para área restrita
                        </a>
                    </div>
                <?php } ?>

                <div class="card-body">
                    <form method="POST" action="/login-access">
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">
                                E-mail:
                            </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">
                                Senha:
                            </label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    login / entrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
