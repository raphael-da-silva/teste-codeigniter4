<?= $this->extend('default') ?>
<?= $this->section('content') ?>

<h3>
    Dados do cliente
</h3>

<hr>

<?php helper(['form']); ?>

<div class="p-1 bg-danger text-white">
    <?= validation_list_errors() ?>
</div>

<?php
    $name = $client->name ?? null;
    $email = $client->email ?? null;
    $phone = $client->phone ?? null;
    $address = $client->address ?? null;
?>

<div class="bg-info p-2">
    <form action="/insert" method="post">
        <?php if(isset($client)){ ?>
            <input type="hidden" name="id" value="<?php echo $client->id; ?>">
        <?php } ?>

        <div class="mb-2">
            <label>Nome:</label>
            <input type="text" name="name" class="form-control" value="<?php echo set_value('name', $name); ?>">
        </div>

        <div class="mb-2">
            <label>E-mail:</label>
            <input type="email" name="email" class="form-control" value="<?php echo set_value('email', $email); ?>">
        </div>

        <div class="mb-2">
            <label>Telefone:</label>
            <input type="phone" name="phone" class="form-control" value="<?php echo set_value('phone', $phone); ?>">
        </div>

        <div class="">
            <label>Endereço:</label>
            <input type="text" name="address" class="form-control" value="<?php echo set_value('address', $address); ?>">
        </div>

        <hr>

        <input type="submit" class="btn btn-success btn-lg" value="Salvar">
    </form>
</div>

<?= $this->endSection() ?>