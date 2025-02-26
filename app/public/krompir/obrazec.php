<!DOCTYPE html>
<html lang="en">
<head>
    <title>Naroči krompir</title>
    <?php include 'includes/head.html';?>
</head>
<body>
<?php include 'includes/navbar.html';?>


   <section class="container-fluid bg-tertiary py-5">
        <article class="container">
            <h1 class="text-center text-secondary fw-bold">NAROČI VREČO KROMPIRJA</h1>
            <hr>
            <form class="container" action="izpis.php" method="POST">
                <div class="mb-3">
                    <label for="ime" class="form-label">Ime</label>
                    <input type="text" class="form-control" id="ime" name="ime" required>
                </div>
                <div class="mb-3">
                    <label for="priimek" class="form-label">Priimek</label>
                    <input type="text" name="priimek" id="priimek" class="form-control" required>
                </div>
                <div class="row mb-3">
                    <div class="col-5">
                        <label for="naslov">Naslov</label>
                        <input class="form-control" type="text" name="naslov" id="naslov" required>
                    </div>
                    <div class="col-1">
                        <label for="hisna-st">Hišna št.</label>
                        <input class="form-control" type="text" name="hisna-st" id="hisna-st" required>
                    </div>
                    <div class="col-4">
                        <label for="mesto">Mesto</label>
                        <input class="form-control" type="text" name="mesto" id="mesto" required>
                    </div>
                    <div class="col-2">
                        <label for="postna">Poštna številka</label>
                        <input class="form-control" type="number" min="1000" max="9999" name="postna" id="postna" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="eposta" class="form-label">E-pošta</label>
                    <input type="email" name="eposta" id="eposta" class="form-control" required>
                </div>
                <div class="row mb-3">
                    <div class="col-10">
                        <label for="vrsta" class="form-label">Vrsta krompirja</label>
                        <select name="vrsta" id="vrsta" class="form-select" aria-label="Disabled select example" required>
                            <option selected disabled>Izberi vrsto krompirja</option>
                            <option value="sladki">Sladki krompir</option>
                            <option value="beli">Beli krompir</option>
                            <option value="russet">Russet krompir</option>
                            <option value="rumeni">Rumeni krompir</option>
                            <option value="mladi">Mladi krompir</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label class="form-label" for="teza">Teža v KG</label>
                        <input class="form-control" type="number" name="teza" id="teza" min="1" max="10" required>
                    </div>
                    
                </div>
                <div class="mb-3">
                    <label for="vsebina" class="form-label">Sporočilo</label>
                    <textarea name="vsebina" id="vsebina" rows="10" class="form-control"></textarea>
                </div>
                <div>
                    <button type="submit" name="krompir" class="btn btn-success mb-3">Naroči krompir</button>
                </div>
            </form>
        </article>
        <article class="container">
            <h1 class="text-center text-secondary fw-bold">PODATKOMETER</h1>
            <p class="fs-4">Podajte svoje podatke. Prisežemo, da jih bomo varno shranili.</p>
            <hr>
            <form class="container" action="izpis.php" method="GET">
                <div class="mb-3">
                    <label for="uporabnik" class="form-label">Uporabniško ime</label>
                    <input type="text" name="uporabnik" id="uporabnik" class="form-control" required>
                </div>
                <div>
                    <label for="geslo" class="form-label"></label>
                    <input type="password" name="geslo" id="geslo" class="form-control" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success mb-3">Potrdi podatke</button>
                </div>
            </form>
        </article>
        
   </section>

   <?php include 'includes/footer.html';?>
</body>
</html>