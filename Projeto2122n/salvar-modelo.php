<?php

switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $nome = $_POST['nome_modelo'];
        $cor = $_POST['cor_modelo'];
        $ano = $_POST['ano_modelo'];
        $tipo = $_POST['tipo_modelo'];

        $sql = "INSERT INTO modelos 
        (nome_modelo, cor_modelo, ano_modelo, tipo_modelo) 
        VALUES ('{$nome}', '{$cor}', '{$ano}', '{$tipo}')";

        $res = $conn->query($sql);

        if($res==true){
            print"<script>alert('Cadastrou com sucesso');</script>";
            print"<script>location.href='?page=listar-modelo';</script>";
        }
        else {
            print"<script>alert('Não cadastrou');</script>";
            print"<script>location.href='?page=listar-modelo';</script>";
        }
        break;

    case 'editar':

        break;

    case 'excluir':

        break;
}