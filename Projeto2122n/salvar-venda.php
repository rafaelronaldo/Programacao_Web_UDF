<?php

switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $data = $_POST['data_venda'];
        $valor = $_POST['valor_venda'];
        
        $sql = "INSERT INTO venda
        (data_venda, valor_venda) 
        VALUES ('{$data}', '{$valor}')";

        $res = $conn->query($sql);

        if($res==true){
            print"<script>alert('Cadastrou com sucesso');</script>";
            print"<script>location.href='?page=listar-venda';</script>";
        }
        else {
            print"<script>alert('Não cadastrou');</script>";
            print"<script>location.href='?page=listar-venda';</script>";
        }
        break;

    case 'editar':

        break;

    case 'excluir':

        break;
}