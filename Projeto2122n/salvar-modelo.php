<?php

switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $nome = $_POST['nome_modelo'];
        $cor = $_POST['cor_modelo'];
        $ano = $_POST['ano_modelo'];
        $tipo = $_POST['tipo_modelo'];
        $marca = intval($_POST['marca_id_marca']); 

        if ($marca <= 0) {
            print "<script>alert('Selecione uma marca válida!');</script>";
            print "<script>location.href='?page=cadastrar-modelo';</script>";
            exit;
        }

        $sql = "INSERT INTO modelo 
        (nome_modelo, cor_modelo, ano_modelo, tipo_modelo, marca_id_marca) 
        VALUES ('{$nome}', '{$cor}', '{$ano}', '{$tipo}', '{$marca}')";

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