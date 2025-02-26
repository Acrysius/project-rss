<!DOCTYPE html><!DOCTYPE html>
<html lang="en">
<head>
    <title>Registracija ekip in projektov</title>
    <?php include 'src/head-include.html' ?>
    <?php include 'src/mysqli-insert.php' ?>
</head>
<body class="container text-center">
    <img class="img-fluid" style="width:35rem" src="src/images/wheel-of-luck_cropped.webp">
    <div class="row">
    <h1>REGISTRACIJA EKIP IN DODELITEV PROJEKTA</h1>
    <p>Tukaj bo vpisana vaša skupina. Nato bo dodeljen projekt z opisom. Projekti se ne
        ponavljajo in vsaka skupina ima možnost 1 ponovitev žrebanja.
    </p>
    </div>
    <form action="index.php" method="POST">
        <div class="row mb-3">
            <label for="clan1" class="form-label">ČLAN 1 - <b>VODJA</b></label>
            <div class="col-6">
                <input type="text" name="clan1" id="clan1" placeholder="ime vodje" required class="form-control">
            </div>
            <div class="col-6">
                <input type="text" name="clan1p" id="clan1p" placeholder="priimek vodje" required class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <label for="clan2" class="form-label">ČLAN 2</label>
            <div class="col-6">
                <input type="text" name="clan2" id="clan2" placeholder="ime 2" required class="form-control">
            </div>
            <div class="col-6">
                <input type="text" name="clan2p" id="clan2p" placeholder="priimek 2" required class="form-control">
            </div>
        </div>
        <div class="row mb3">
            <label for="clan3" class="form-label">ČLAN 3 (če je)</label>
            <div class="col-6">
                <input type="text" name="clan3" id="clan3" placeholder="ime 3, če je član" class="form-control">
            </div>
            <div class="col-6">
                <input type="text" name="clan3p" id="clan3p" placeholder="priimek 3, če je član" class="form-control">
            </div>
        </div>
        <div>
            <hr>
            <button class="btn btn-primary" type="submit" name="loterija">POTRDI VNOS IN IZBERI PROJEKT</button>
        </div>
    </form>
    <?php 
        if($repeatStudent==true){
            echo "<div class='alert alert-danger'><h2>POZOR! En od študentov je že vpisan v skupino!</h2></div>";
        }
    ?>
    <?php if(isset($projectResult)){
        echo "<div class='alert alert-primary'><h2>".$projectResult['pr']."</h2></div>";
        if($rerollControl==true){
            include 'src/project-reroll.php';
        } else {
            echo "<div class='row mb3'><h2>To je to.</h2></div>";
        }
        
    }?>
</body>
</html>