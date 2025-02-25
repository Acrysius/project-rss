<!DOCTYPE html><!DOCTYPE html>
<html lang="en">
<head>
    <title>Registracija ekip in projektov</title>
    <?php include 'src/head-include.html' ?>
    <?php include 'src/mysqli-insert.php' ?>
</head>
<body>
    <a href="private/src.php">Click me to load a new page</a>
    <h1>REGISTRACIJA EKIP IN DODELITEV PROJEKTA</h1>
    <p>Tukaj bo vpisana vaša skupina. Nato bo dodeljen projekt z opisom. Projekti se ne
        ponavljajo in vsaka skupina ima možnost 1 ponovitev žrebanja.
    </p>
    <form action="index.php" method="POST">
        <div>
            <label for="clan1">ČLAN 1 - <b>VODJA</b></label>
            <input type="text" name="clan1" id="clan1" placeholder="ime vodje" required>
            <input type="text" name="clan1p" id="clan1p" placeholder="priimek vodje" required>
        </div>
        <div>
            <label for="clan2">ČLAN 2</label>
            <input type="text" name="clan2" id="clan2" placeholder="ime 2" required>
            <input type="text" name="clan2p" id="clan2p" placeholder="priimek 2" required>
        </div>
        <div>
            <label for="clan3">ČLAN 3 (če je)</label>
            <input type="text" name="clan3" id="clan3" placeholder="ime 3, če je član">
            <input type="text" name="clan3p" id="clan3p" placeholder="priimek 3, če je član">
        </div>
        <div>
            <button type="submit" name="loterija">POTRDI VNOS IN IZBERI PROJEKT</button>
        </div>
    </form>
</body>
</html>