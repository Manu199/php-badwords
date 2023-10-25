<?php


$testo = isset($_POST['testo']) ? $_POST['testo'] : "Nessun Testo";



$lngttxt =  strlen($testo);

$newtesto = " ";


function noswear($testo)
{
    if ($testo)
    {       
        $bad = array("crap", "accipigna", "dannazione", "miseria");

        $good = array( "***", "****" );

        $newtesto = str_replace($bad, $good, $testo);     

        return $newtesto;
    }
    echo noswear("I see bad words coming!");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atterraggio Form in POST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>
    
<div class="container my-5">
    <div class="row">
        <div class="col-6">
            <h2>Atterraggio Form in POST</h2>
            <h2 class='text-success-emphasis p-3'>Risposta: <?php echo $newtesto ?></h2>
            <h5 class='text-warning-emphasis border-primary-subtle p-3'>Lunghezza della frase: <?php echo $lngttxt ?> caratteri</h5>

        </div>
    </div>
</div>

</body>
</html>