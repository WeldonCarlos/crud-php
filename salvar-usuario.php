<?php

switch ($_REQUEST["acao"]) {


    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
        $data_nasc = $_POST["data_nasc"];


        $sql = "INSERT INTO usuarios
        (nome, email, senha, data_nasc) VALUES ('$nome',' $email','$senha',' $data_nasc')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Usuário cadastrado com sucesso'); </script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possivel cadastrar o usuário'); </script>";
            print "<script>location.href='index.php';</script>";
        }

        break;

    case 'editar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
        $data_nasc = $_POST["data_nasc"];

        $sql = "UPDATE usuarios SET 
                nome= '$nome',
                email='$email',
                senha='$senha',
                data_nasc='$data_nasc'
                WHERE id=" .$_REQUEST['id'] ;

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Usuário editado com sucesso'); </script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possivel editar o usuário'); </script>";
            print "<script>location.href='index.php';</script>";
        }
        break;

        case 'deletar':
           
            $sql = "DELETE FROM  usuarios WHERE id=" .$_REQUEST['id'] ;
    
            $res = $conn->query($sql);
    
            if ($res == true) {
                print "<script>alert('Usuário excluido com sucesso'); </script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possivel excluir o usuário'); </script>";
                print "<script>location.href='index.php';</script>";
            }
            break;
    



}
;
$conn->close();