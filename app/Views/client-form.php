<?= $this->extend('default') ?>
<?= $this->section('content') ?>

<h3>
    Dados do cliente
</h3>

<hr>

<div class="bg-info p-2">
    <form action="" method="post">
        <div class="mb-2">
            <label>Nome:</label>
            <input type="text" class="form-control">
        </div>

        <div class="mb-2">
            <label>E-mail:</label>
            <input type="email" class="form-control">
        </div>

        <div class="mb-2">
            <label>Telefone:</label>
            <input type="phone" class="form-control">
        </div>

        <div class="">
            <label>Endereço:</label>
            <input type="text" class="form-control">
        </div>

        <hr>

        <input type="submit" class="btn btn-success btn-lg" value="Salvar">
    </form>
</div>

<?= $this->endSection() ?>