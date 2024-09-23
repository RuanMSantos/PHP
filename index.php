<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA PHP</title>
</head>
<body style="font-family: Arial, Helvetica, sans-serif;">
    <form  style="display: flex; flex-direction: column; width: 400px; background-color: silver; padding: 10px; border-radius: 20px; border: 1px solid black; box-shadow: 0px 0px 12px 8px silver; margin-top: 300px; margin-left: 750px; width: 500px; height: 300px" action="script.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Zé">
        <label style="margin-top: 10px;" for="nota1">Nota1</label>
        <input type="number" min="0" max="10" name="nota1" id="nota1">
        <label style="margin-top: 10px;" for="nota2">Nota2</label>
        <input type="number" min="0" max="10" name="nota2" id="nota2">
        <label style="margin-top: 10px;" for="nota3">Nota3</label>
        <input type="number" min="0" max="10" name="nota3" id="nota3">
        <label style="margin-top: 10px;" for="nota4">Nota4</label>
        <input type="number" min="0" max="10" name="nota4" id="nota4">
        <button style="margin-top: 20px; text-align: center; width: 80px; margin-left: 220px; height: 40px; border-radius: 20px; border: 1px solid black; font-size: 15px" type="submit">Enviar</button>
    </form>
</body>
</html>