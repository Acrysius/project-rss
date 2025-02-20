<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija ekip in projektov</title>
</head>
<body>
    <h1>REGISTRACIJA EKIP IN DODELITEV PROJEKTA</h1>
    <p>Tukaj bo vpisana vaša skupina. Nato bo dodeljen projekt z opisom. Projekti se ne
        ponavljajo in vsaka skupina ima možnost 1 ponovitev žrebanja.
    </p>
    <form>
        <div>
            <label for="clan1">ČLAN 1 - <b>VODJA</b></label>
            <input type="text" name="clan1" id="clan1" required>
        </div>
        <div>
            <label for="clan2">ČLAN 2</label>
            <input type="text" name="clan2" id="clan2" required>
        </div>
        <div>
            <label for="clan3">ČLAN 3 (če je)</label>
            <input type="text" name="clan3" id="clan3">
        </div>
        <div>
            <button type="submit">POTRDI VNOS IN IZBERI PROJEKT</button>
        </div>
    </form>
</body>
</html>