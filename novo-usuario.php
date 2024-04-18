<h1 style="color: #343433; font-size: 28px; margin-bottom:30px; text-decoration: underline; font-weight: bold;">Novo Usuário</h1>



<form action="?page=salvar" method="POST" class="form-post">

    <input type="hidden" name="acao" value="cadastrar">
    
    <div class="mb-3">
        <label for="inputNome" class="col-sm-2 col-form-label">Nome</label>
        <div class="col-sm-8">
            <input type="text" name="nome" class="form-control" id="inputNome">
        </div>
    </div>
    <div class="mb-3">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-8">
            <input type="email" name="email" class="form-control" id="inputEmail">
        </div>
    </div>

    <div class="mb-3">
        <label for="inputPassword" class="col-sm-2 col-form-label" " >Senha</label>
            <div class=" col-sm-8">
            <input type="password" name="senha" class="form-control" id="inputPassword ">
    </div>
    </div>

    <div class="mb-3">
        <label for="inputDate" class="col col-form-label">Data Nascimento</label>
        <div class="col-sm-8">
            <input type="date" name="data_nasc" class="form-control" id="inputDate">
        </div>
    </div>



    <div class="d-grid gap-3 col-sm-8  ">
        <button class="btn btn-primary" type="submit">Enviar</button>
    </div>


</form>