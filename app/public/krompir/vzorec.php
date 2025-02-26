<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    <div class="container p-2 m-3 fs-4 text-start text-break">
        <p><span class="fw-bold">Ime in priimek: </span><?php echo $izpis['ime'].' '.$izpis['priimek'];?></p>
        <p><span class="fw-bold">E-poštni naslov: </span><?php echo $izpis['eposta']?></p>
        <p><span class="fw-bold">Naslov: </span><?php echo $izpis['kraj'].' '.$izpis['hisna_st'];?></p>
        <p><span class="fw-bold">Pošta: </span><?php echo $izpis['postna_stevilka'].' '.$izpis['mesto'];?></p>
        <p><span class="fw-bold">Naročilo: </span><?php echo $izpis['vrsta'].' krompir, '.$izpis['teza'].' KG';?></p>
        <?php if($izpis['sporocilo']!==NULL){
            ?><p><span class="fw-bold">Sporočilo: </span><?php echo $izpis['sporocilo'];?></p><?php
        }?>
        

    </div>
</div>