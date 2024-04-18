<h1 style="color: #343433; font-size: 28px; margin-bottom:30px; text-decoration: underline; font-weight: bold;">Editar Usuário</h1>


<!--Realizando a query expecifica no id que foi chamado no parametro -->
<?php 
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();


?>

<form action="?page=salvar" method="POST" class="form-post">

    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id;?>">
    
    <div class="mb-3">
        <label for="inputNome" class="col-sm-2 col-form-label">Nome</label>
        <div class="col-sm-8">
            <input type="text" name="nome" class="form-control" 
            value="<?php print $row->nome;?>" id="inputNome">
        </div>
    </div>
    <div class="mb-3">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-8">
            <input type="email" name="email" class="form-control"value="<?php print $row->email;?>"  id="inputEmail">
        </div>
    </div>

    <div class="mb-3">
        <label for="inputPassword" class="col-sm-2 col-form-label" " >Senha</label>
            <div class=" col-sm-8">
            <input type="password" name="senha" class="form-control" id="inputPassword " >
    </div>
    </div>

    <div class="mb-3">
        <label for="inputDate" class="col col-form-label">Data Nascimento</label>
        <div class="col-sm-8">
            <input type="date" name="data_nasc" class="form-control" value="<?php print $row->data_nasc;?>" id="inputDate">
        </div>
    </div>



    <div class="d-grid gap-3 col-sm-8  ">
        <button class="btn btn-primary" type="submit">Enviar</button>
    </div>


</form>