<?php 

$eleccion = $_GET['marca'] ;
$seleccion = $_GET['seleccion'];

//Lista  Peugeot

$peugeot208=(object)[
    "titulo"=>"peugeot 208",
    "categoria" => "automovil",
    "descripcion" =>"lorem impsum",
    "imagen" => "https://www.media.stellantis.com/cache/a/d/d/4/5/add452e8f9f21b8c6903d8bbadc40f169a0bac6c.jpeg",
    "precio" => "14,500,000",
    "motor" => "1.6",
    "potencia"=>"??",
    "transmicion"=>"automatica"
];
$peugeot2008=(object)[
    "titulo"=>"peugeot 208",
    "categoria" => "camioneta",
    "descripcion" =>"lorem impsum",
    "imagen" => "https://cuyomotor.com.ar/wp-content/uploads/2023/05/peugeot-e-2008-2024-002-1140x570.jpg",
    "precio" => "14,500,000",
    "motor" => "1.6",
    "potencia"=>"??",
    "transmicion"=>"automatica"

];

$peugeot308=(object)[
    "titulo"=>"peugeot 208",
    "categoria" => "automovil",
    "descripcion" =>"lorem impsum",
    "imagen" => "https://resizer.glanacion.com/resizer/v2/peugeot-308-s-gt-con-toda-la-HPIGYVE2PZA6RFDGAYQUTHIUEE.jpg?auth=af9e8a8c1f083ce6907d492942e94878f42b1cd162ab9c0d17386470f64689e3&width=1280&height=854&quality=70&smart=true",
    "precio" => "14,500,000",
    "motor" => "1.6",
    "potencia"=>"??",
    "transmicion"=>"automatica"
];

//Lista  Volkswagen

$VolkswagenPolo=(object)[
    "titulo"=>"peugeot 208",
    "categoria" => "automovil",
    "descripcion" =>"lorem impsum",
    "imagen" => "https://autoenaccion.com.ar/wp-content/uploads/2024/02/vw-polo-track-argentina-delantera-1.jpg",
    "precio" => "14,500,000",
    "motor" => "1.6",
    "potencia"=>"??",
    "transmicion"=>"automatica"
];

$VolkswagenAmarok=(object)[
    "titulo"=>"peugeot 208",
    "categoria" => "camioneta",
    "descripcion" =>"lorem impsum",
    "imagen" => "https://cdn.motor1.com/images/mgl/VzzEOR/s1/vw-amarok-2022.jpg",
    "precio" => "14,500,000",
    "motor" => "1.6",
    "potencia"=>"??",
    "transmicion"=>"automatica"
];

$volkswagenTrend=(object)[
    "titulo"=>"Volkswagen Trend",
    "categoria" => "automovil",
    "descripcion" =>"lorem impsum",
    "imagen" => "https://cdn.motor1.com/images/mgl/LQMmG/s1/oficial-todo-sobre-los-nuevos-volkswagen-gol-trend-y-voyage-2016.webp",
    "precio" => "14,500,000",
    "motor" => "1.6",
    "potencia"=>"??",
    "transmicion"=>"automatica"
];


// Lists Ford


$fordFiesta=(object)[
    "titulo"=>"ford Fiesta",
    "categoria" => "automovil",
    "descripcion" =>"lorem impsum",
    "imagen" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRye3Ssm7dgmG91h3iDRCdz3fbRPHO8MBLEtw&s",
    "precio" => "14,500,000",
    "motor" => "1.6",
    "potencia"=>"??",
    "transmicion"=>"automatica"
];

$fordRaptor=(object)[
    "titulo"=>"ford Raptor",
    "categoria" => "camioneta",
    "descripcion" =>"lorem impsum",
    "imagen" => "https://acroadtrip.blob.core.windows.net/catalogo-imagenes/m/RT_V_9527866fefb84e3e840b1fd28e2a23c0.jpg",
    "precio" => "14,500,000",
    "motor" => "1.6",
    "potencia"=>"??",
    "transmicion"=>"automatica"
];

$fordFocus=(object)[
    "titulo"=>"ford Focus",
    "categoria" => "automovil",
    "descripcion" =>"lorem impsum",
    "imagen" => "https://www.ford.es/content/dam/guxeu/rhd/central/cars/2021-focus/dse/column-cards/ford-focus-eu-Column_Card_Focus-ST-Line-X-3x2-1000x667-front-view.jpg",
    "precio" => "14,500,000",
    "motor" => "1.6",
    "potencia"=>"??",
    "transmicion"=>"automatica"
];

//Lista por marca

$listaPeugeot=[$peugeot208,$peugeot2008,$peugeot308];

$listaVolskgawen=[$VolkswagenPolo,$VolkswagenAmarok,$volkswagenTrend];

$listaFord=[$fordFiesta,$fordRaptor,$fordFocus];

//Lista por Categoria "autos"

$ListaAutosPeugeot=[$peugeot208,$peugeot308];

$ListaAutosVolkswagen=[$VolkswagenPolo,$volkswagenTrend];

$ListaAutosFord=[$fordFiesta,$fordFocus];

//Lista por Categoria "Camioneta"

//Listas completas

$ListaCompleta=[$listaPeugeot,$listaVolskgawen,$listaFord];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../parcial-1-p2-acn2bv-Yedro-Zabala/estilos.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>  Autos </title>


</head>
<body>
    <header>
        
        <h1>Catálogo de Autos</h1>

    </header>  
    
    <main>

    <form action="index.php" method="GET">
        <div>
            <label for="marca">Marca personalizada:</label>
            <input type="text" name="marca" id="marca" placeholder="Ej: volkswagen,peugeot,ford,etc">
        </div>
        
        <div>
            <label for="seleccion">Categoria</label>
            <select name="seleccion" id="seleccion">
                <option value="sinSeleccion">-- Elegi la categoria --</option>
                <option value="camioneta">Camioneta</option>
                <option value="auto">Auto</option>
            </select>
        </div>
        
        <button type="submit">Buscar auto</button>
    </form>

    
        
    <?php if($eleccion=="ford" && $seleccion=="sinSeleccion"){?> 
            
                <?php for($i=0;$i <count($listaFord);$i++) {?>

                    <div class="card" style="width: 18rem;">
                        <img src="<?= $listaFord [$i]->imagen ?>" class="card-img-top" alt="<?= $listaFord [$i]->imagen ?>">
                        
                        <div class="card-body">
                            <h5 class="card-title"><?= $listaFord [$i]->titulo ?></h5>
                            <p class="card-text"><?= $listaFord [$i]->descripcion ?></p>
                            <a href="#" class="btn btn-primary">COTIZAR</a>
                        </div>
                    </div>

                <?php }?>
        
    <?php }else if($eleccion=="ford" && $seleccion=="camioneta"){?>
                
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $fordRaptor->imagen ?>" class="card-img-top" alt="<?= $fordRaptor->imagen ?>">
                        
                        <div class="card-body">
                            <h5 class="card-title"><?= $fordRaptor->titulo ?></h5>
                            <p class="card-text"><?= $fordRaptor->descripcion ?></p>
                            <a href="#" class="btn btn-primary">COTIZAR</a>
                        </div>
                    </div>
                

    
    <?php }else if($eleccion=="ford" && $seleccion=="auto"){?>    

                <div class="card" style="width: 18rem;">
                        <img src="<?= $fordFiesta->imagen ?>" class="card-img-top" alt="<?= $fordFiesta->imagen ?>">
                        
                        <div class="card-body">
                            <h5 class="card-title"><?= $fordFiesta->titulo ?></h5>
                            <p class="card-text"><?= $fordFiesta->descripcion ?></p>
                            <a href="#" class="btn btn-primary">COTIZAR</a>
                        </div>
                    </div>
                    
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $fordFocus->imagen ?>" class="card-img-top" alt="<?= $fordFocus->imagen ?>">
                        
                        <div class="card-body">
                            <h5 class="card-title"><?= $fordFocus->titulo ?></h5>
                            <p class="card-text"><?= $fordFocus->descripcion ?></p>
                            <a href="#" class="btn btn-primary">COTIZAR</a>
                        </div>
                    </div>
    
    
    <?php }else if($eleccion=="peugeot" && $seleccion=="sinSeleccion"){?>
    
                <?php for($i=0;$i <count($listaPeugeot);$i++) {?>

                    <div class="card" style="width: 18rem;">
                        <img src="<?= $listaPeugeot [$i]->imagen ?>" class="card-img-top" alt="<?= $listaPeugeot [$i]->imagen ?>">
                        
                        <div class="card-body">
                            <h5 class="card-title"><?= $listaPeugeot [$i]->titulo ?></h5>
                            <p class="card-text"><?= $listaPeugeot[$i]->descripcion ?></p>
                            <a href="#" class="btn btn-primary">COTIZAR</a>
                        </div>
                    </div>

                <?php }?>
    
    <?php }else if($eleccion=="peugeot" && $seleccion=="camioneta"){?>
                
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $peugeot2008->imagen ?>" class="card-img-top" alt="<?= $peugeot2008->imagen ?>">
                        
                        <div class="card-body">
                            <h5 class="card-title"><?= $peugeot2008->titulo ?></h5>
                            <p class="card-text"><?= $peugeot2008 ->descripcion ?></p>
                            <a href="#" class="btn btn-primary">COTIZAR</a>
                        </div>
                    </div>



    <?php }else if($eleccion=="peugeot" && $seleccion=="auto"){?>    

                    <div class="card" style="width: 18rem;">
                            <img src="<?= $peugeot208->imagen ?>" class="card-img-top" alt="<?= $peugeot208->imagen ?>">
                            
                            <div class="card-body">
                                <h5 class="card-title"><?= $peugeot208->titulo ?></h5>
                                <p class="card-text"><?= $peugeot208->descripcion ?></p>
                                <a href="#" class="btn btn-primary">COTIZAR</a>
                            </div>
                        </div>
                        
                        <div class="card" style="width: 18rem;">
                            <img src="<?= $peugeot308->imagen ?>" class="card-img-top" alt="<?= $peugeot308->imagen ?>">
                            
                            <div class="card-body">
                                <h5 class="card-title"><?= $peugeot308->titulo ?></h5>
                                <p class="card-text"><?= $peugeot308->descripcion ?></p>
                                <a href="#" class="btn btn-primary">COTIZAR</a>
                            </div>
                        </div>
    
    <?php }else if($eleccion=="volkswagen" && $seleccion=="sinSeleccion"){?>

                    <?php for($i=0;$i <count($listaVolskgawen);$i++) {?>

                        <div class="card" style="width: 18rem;">
                            <img src="<?= $listaVolskgawen [$i]->imagen ?>" class="card-img-top" alt="<?= $listaVolskgawen[$i]->imagen ?>">
                            
                            <div class="card-body">
                                <h5 class="card-title"><?= $listaVolskgawen [$i]->titulo ?></h5>
                                <p class="card-text"><?= $listaVolskgawen [$i]->descripcion ?></p>
                                <a href="#" class="btn btn-primary">COTIZAR</a>
                            </div>
                        </div>

                    <?php }?>

    <?php }else if($eleccion=="volkswagen"&& $seleccion =="camioneta"){?>
                    
                        <div class="card" style="width: 18rem;">
                        
                            <img src="<?= $VolkswagenAmarok->imagen ?>" class="card-img-top" alt="<?= $VolkswagenAmarok->imagen ?>">
                            
                            <div class="card-body">
                                <h5 class="card-title"><?= $VolkswagenAmarok->titulo ?></h5>
                                <p class="card-text"><?= $VolkswagenAmarok->descripcion ?></p>
                                <a href="#" class="btn btn-primary">COTIZAR</a>
                            </div>
                        </div>
                
        
    <?php }else if($eleccion=="volkswagen"&& $seleccion =="auto"){?>
        
        
                        <div class="card" style="width: 18rem;">
                            <img src="<?= $VolkswagenPolo->imagen ?>" class="card-img-top" alt="<?= $VolkswagenPolo->imagen ?>">
                            
                            <div class="card-body">
                                <h5 class="card-title"><?= $VolkswagenPolo->titulo ?></h5>
                                <p class="card-text"><?= $VolkswagenPolo->descripcion ?></p>
                                <a href="#" class="btn btn-primary">COTIZAR</a>
                            </div>
                        </div>
                        
                        <div class="card" style="width: 18rem;">
                            <img src="<?= $volkswagenTrend->imagen ?>" class="card-img-top" alt="<?= $volkswagenTrend->imagen ?>">
                            
                            <div class="card-body">
                                <h5 class="card-title"><?= $volkswagenTrend->titulo ?></h5>
                                <p class="card-text"><?= $volkswagenTrend->descripcion ?></p>
                                <a href="#" class="btn btn-primary">COTIZAR</a>
                            </div>
                        </div>
                

        
    <?php }else {?>
        
        <?php for($i = 0; $i < count($ListaCompleta); $i++){?>
            
            <?php for($j = 0; $j < count($ListaCompleta); $j++) { ?>
                
                <div class="card" style="width: 18rem;">
                    <img src="<?= $ListaCompleta [$i][$j]->imagen ?>" class="card-img-top" alt="<?= $ListaCompleta [$i][$j]->imagen ?>">
                    
                    <div class="card-body">
                        <h5 class="card-title"><?= $ListaCompleta [$i][$j]->titulo ?></h5>
                        <p class="card-text"><?= $ListaCompleta [$i][$j]->descripcion ?></p>
                        <a href="#" class="btn btn-primary">COTIZAR</a>
                    </div>
                </div>
            
            <?php }?>
        
        <?php }?>
    
    <?php } ?>

        

    </main>



    <footer></footer>  
</body>
</html>