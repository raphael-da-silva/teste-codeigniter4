<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Area restrita - Logado</title>
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.10.3/jquery.mask.min.js"></script>

    <style>
        .content{
            max-width: 1024px;
        }
    </style>

    <script>
        var GetAddressByCEP = function(CEP){
            $.getJSON("https://viacep.com.br/ws/"+ CEP +"/json/?callback=?", function(result){
                if ("erro" in result){
                    alert('Não foi possivel encontrar o endereço');
                    return;
                }

                var addressString = result.logradouro + ' - bairro ' + result.bairro + ' - ' + result.uf;
                $('#address').val(addressString);
            });
        };

        var SearchAddress = function(){
            $('#search').on('click', function(){
                var CEP = $('#CEP-search').val();
                GetAddressByCEP(CEP);
            });
        };

        $(function($){
            $('#phone').mask('(00) 0 0000-0000', {reverse: true});
            $('#CEP-search').mask('00000000', {reverse: true});

            SearchAddress();
        });
    </script>
</head>

<body>
    <div class="bg-dark p-2 text-white mb-2">
        Area logada - Teste Codeigniter / Raphael da Silva

        <hr class="m-1">

        <a href="/clientes" class="btn-info btn-sm btn">
            início / dashboard
        </a>

        <a href="/logout" class="btn-warning btn-sm btn">
            sair / logout
        </a>
    </div>

    <div class="content m-auto">
        <?php $this->renderSection('content'); ?>
    </div>
</body>
</html>
