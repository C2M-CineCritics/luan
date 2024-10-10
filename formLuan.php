<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action = "processa_form.php" method = "POST">
        <label for = "nome"> Nome: </label>
        <Input type = "text" name = "nome" required> <br>
        <label for = "cargo"> Cargo: </label>
        <Input type = "text" name = "cargo" required> <br>
        <label for = "salario"> Salário: </label>
        <Input type = "boolean" name = "salario" required> <br>
        <input type = "date" name="data_contratacao" required> <br>
        <input type = "submit">
    </form>
</body>
</html>