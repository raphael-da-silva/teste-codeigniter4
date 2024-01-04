<?= $this->extend('default') ?>
<?= $this->section('content') ?>

<div>
    <h4>
        Lista de clientes
    </h4>

    <hr>

    <a href="/clientes/adicionar" class="btn btn-success">
        Cadastrar novo cliente
    </a>

    <hr>

    <div>
        <?php if(count ($list) > 0){ ?>

            <table class="table">
                <thead>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Ação / gerenciar</th>
                </thead>

                <tbody>
                    <?php foreach($list as $client){ ?>
                        <tr>
                            <td><?php echo $client->name ?></td>
                            <td><?php echo $client->email ?></td>
                            <td><?php echo $client->phone ?></td>
                            <td><?php echo $client->address ?></td>

                            <td class="btn-group text-center">
                                <a href="/clientes/editar/<?php echo $client->id ?>" class="btn btn-info">editar</a>
                                <a href="/clientes/remover/<?php echo $client->id ?>" class="btn btn-danger">remover</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            
        <?php }else{ ?>
            <div class="alert alert-warning">
                Nenhum cliente encontrado.
            </div>
        <?php } ?>
    </div>
</div>

<?= $this->endSection() ?>