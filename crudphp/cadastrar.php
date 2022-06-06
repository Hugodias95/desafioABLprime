<h1>Cadastrar Morador</h1>

<form method="POST" action="cadastrar_action.php">
    <label>
        Nome: <input type="text" name="nome"/>
    </label>
    <label>
        Email: <input type="email" name ="email"/>
    </label>
    <label>
        Contato: <input type="text" name ="contato"/>
    </label>
    <label>
        Unidade: <input type="text" name ="unidade"/>
    </label>
    <input type="submit" value="Salvar dados"
    <?php header("Loocation: index.php");?>/>
    
</form>

