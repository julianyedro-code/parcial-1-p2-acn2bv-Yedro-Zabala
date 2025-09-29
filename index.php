<?php 
$pageTittle="Autos";

$peugeot208=(object)[
    "nombre"=>"peugeot 208",
    "categoria" => "automovil",
    "descripcion" =>"lorem impsum",
    "imagen" => "https://www.media.stellantis.com/cache/a/d/d/4/5/add452e8f9f21b8c6903d8bbadc40f169a0bac6c.jpeg",
    "precio" => "14,500,000",
    "motor" => "1.6",
    "potencia"=>"??",
    "transmicion"=>"automatica"
];
$peugeot2008=(object)[
    "nombre"=>"peugeot 208",
    "categoria" => "automovil",
    "descripcion" =>"lorem impsum",
    "imagen" => "https://www.media.stellantis.com/cache/a/d/d/4/5/add452e8f9f21b8c6903d8bbadc40f169a0bac6c.jpeg",
    "precio" => "14,500,000",
    "motor" => "1.6",
    "potencia"=>"??",
    "transmicion"=>"automatica"

];

$peugeot308=(object)[
    "nombre"=>"peugeot 208",
    "categoria" => "automovil",
    "descripcion" =>"lorem impsum",
    "imagen" => "https://www.media.stellantis.com/cache/a/d/d/4/5/add452e8f9f21b8c6903d8bbadc40f169a0bac6c.jpeg",
    "precio" => "14,500,000",
    "motor" => "1.6",
    "potencia"=>"??",
    "transmicion"=>"automatica"
];


$listaPeugeot=[$peugeot208,$peugeot2008,$peugeot308];
$cardsCount=count($listaPeugeot);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>     <?= $pageTittle?>  </title>


</head>
<body>
    <header>
        
        <h1>Catálogo de Películas</h1>

    </header>  
    
    <main>
        <?php for($i=0 ; $i<$cardsCount ;$i++) { ?>
           
           <div class="card" style="width: 18rem;">
                
                <img src="<?=$listaPeugeot[$i]->imagen?>" class="card-img-top" alt="...">
            
                <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
            </div>

        <?php } ?>
    </main>



    <footer></footer>  
</body>
</html>