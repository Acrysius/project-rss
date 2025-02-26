<!DOCTYPE html>
<html lang="en">
<head>
    <title>Krompirjevi oboževalci</title>
    <?php include 'includes/head.html';?>
</head>
<body>
<?php include 'includes/navbar.html';?>
    <?php if($_SERVER['REQUEST_METHOD']==='POST'){
        include 'includes/mysqli-insert.php';
    }
    ?>

   <section class="container-fluid bg-tertiary py-5">
        <article class="container text-center">
            <?php if($_SERVER['REQUEST_METHOD']==='POST'){
                include 'includes/narocilo.php'; 
            }?>
                
        </article>
        <article class="row">
            <?php include 'includes/mysqli-fetch.php';?>

        </article>
        
    </section>


</body>
</html>