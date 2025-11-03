<h1>Cadastrar Venda</h1>
<form action="?page=salvar-venda" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Data da Venda
            <input type="date" name="data_venda" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Valor da Venda
            <input type="text" name="valor_venda" class="form-control">
        </label>
</form>