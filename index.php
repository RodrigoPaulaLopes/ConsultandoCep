<?php include "./utils/cabecalho.php" ?>

<body>

    <div class="container">
        <form method="POST" action="">
            <h1 class="text-center">Consultando via Cep</h1>
            <div class="form-group">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" maxlength="9" id="cep" require>
                <small class="text-muted">Ex: xxxxx-xxx</small>
            </div>
            <div class="form-group">
                <label for="Logradouro">Logradouro</label>
                <input type="text" class="form-control" id="logradouro" require>
                <small class="text-muted">Ex: Av. Paulista</small>
            </div>
            <div class="form-group">
                <label for="Bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro" require>
                <small class="text-muted">Ex: Nova America</small>
            </div>
            <div class="form-group">
                <label for="Localidade">Localidade</label>
                <input type="text" class="form-control" id="localidade" require>
                <small class="text-muted">Ex: Nova Iguaçu</small>
            </div>
            <div class="form-group">
                <label for="UF">UF</label>
                <input type="text" class="form-control" id="uf" require>
                <small class="text-muted">Ex: RJ</small>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">Enviar formulario</button>
            </div>
        </form>
    </div>

    <?php include "./utils/jsebootstrap.php" ?>
    <script src="./public/src/cep.js"></script>

</body>

</html>