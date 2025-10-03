<?php 
    include_once("./utils/data.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../parcial-1-p2-acn2bv-Yedro-Zabala/estilos.css" rel="stylesheet" >

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <title>  Autos </title>


</head>

<body >
    
    <?php if($tema=="oscuro"){?>

        <style>   
        body {
            background-color: midnightblue;
            color: lavender;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        header {
            background-color: darkslateblue;
            color: lavenderblush;
            padding: 2rem 0;
            border-bottom: 1px solid mediumslateblue;
        }
        
        main {
            background-color: midnightblue;
            padding: 2rem 0;
        }
        
        .card {
            background-color: darkslategray;
            color: lightcyan;
            border: 1px solid steelblue;
            box-shadow: 0 4px 8px rgba(135, 206, 250, 0.1);
            transition: transform 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(135, 206, 250, 0.2);
        }
        
        .card-title {
            color: lightsteelblue;
        }
        
        .card-text {
            color: lightcyan;
        }
        
        .formulario {
            background-color: darkslateblue;
            padding: 2rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            border: 1px solid mediumslateblue;
        }
        
        .form-label {
            color: lavender;
        }
        
        .form-control, .form-select {
            background-color: darkslategray;
            color: lightcyan;
            border: 1px solid steelblue;
        }
        
        .form-control:focus, .form-select:focus {
            background-color: slategray;
            color: white;
            border-color: cornflowerblue;
            box-shadow: 0 0 0 0.2rem rgba(100, 149, 237, 0.25);
        }
        
        .form-check-label {
            color: lavender;
        }
        
        .btn-primary {
            background-color: royalblue;
            border-color: royalblue;
        }
        
        .btn-primary:hover {
            background-color: dodgerblue;
            border-color: dodgerblue;
        }
        
        footer {
            background-color: darkslateblue;
            color: lavender;
            padding: 1rem;
            border-top: 1px solid mediumslateblue;
        }
        
        .color-box {
            width: 100%;
            height: 80px;
            border-radius: 5px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            border: 1px solid #444;
        }
        
        .color-name {
            font-size: 0.9rem;
            text-align: center;
            margin-bottom: 0.5rem;
        }
        
        .color-light {
            color: black;
            text-shadow: 0 0 2px white;
        }
        
        .color-dark {
            color: white;
            text-shadow: 0 0 2px black;
        }
        
        .color-hex {
            font-size: 0.8rem;
            text-align: center;
            font-family: monospace;
        }
        
        .section-title {
            color: lightsteelblue;
            border-bottom: 1px solid steelblue;
            padding-bottom: 0.5rem;
            margin-bottom: 1.5rem;
        }
        
        .color-category {
            margin-bottom: 2.5rem;
        }
    </style>
    
    <?php }?>
            
        <header>
                
                <h1>Catálogo de Autos</h1>

        </header>  
            
        <main>
        

 
        <section class="formulario">
            <form action="index.php" method="GET">
                <div class="mb-3">
                    <label for="marca" class="form-label">Marca personalizada</label>
                    <input type="text" name="marca" id="marca" class="form-control" placeholder="Ej peugeot,volkswagen,etc">
                </div>

                <div class="mb-3">
                    <label for="seleccion" class="form-label">Categoria</label>
                    <select name="seleccion" id="seleccion" class="form-select">
                        <option value="sinSeleccion">-selecciona-</option>
                        <option value="camioneta">camioneta</option>
                        <option value="automovil">automovil</option>
                    </select>
                </div>

                <div class="mb-3">
                   
                    <h5>Tema</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tema" id="tema" value="claro">
                        <label class="form-check-label" for="tema">Claro</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tema" id="tema" value="oscuro">
                        <label class="form-check-label" for="tema">Oscuro</label>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">filtrar</button>
            </form>

        </section>
        <section class="tarjetas">
            
            <?php if($eleccion=="ford" && $seleccion=="sinSeleccion"){?> 
                        
                        <?php for($i=0;$i <count($listaFord);$i++) {?>
    
                            <div class="card" style="width: 18rem;">
                                <img src="<?= $listaFord [$i]->imagen ?>" class="card-img-top" alt="<?= $listaFord [$i]->imagen ?>">
                                
                                <div class="card-body">
                                    <h5 class="card-title"><?= $listaFord [$i]->titulo ?></h5>
                                    <p class="card-text"><?= $listaFord [$i]->descripcion ?></p>
                                    <p class="card-text"><small class="text-muted">
                                        Motor: <?= $listaFord[$i]->motor ?> | 
                                        Potencia: <?= $listaFord[$i]->potencia ?> | 
                                        Transmisión: <?= $listaFord[$i]->transmision ?>
                                    </small></p>
                                    <p class="card-text precio"><strong>Precio: $<?= $listaFord[$i]->precio ?></strong></p>
                                    <a href="#" class="btn btn-primary">ver mas</a>
                                </div>
                            </div>
    
                        <?php }?>
                
            <?php }else if($eleccion=="ford" && $seleccion=="camioneta"){?>
                        
                            <div class="card" style="width: 18rem;">
                                <img src="<?= $fordRaptor->imagen ?>" class="card-img-top" alt="<?= $fordRaptor->imagen ?>">
                                
                                <div class="card-body">
                                    <h5 class="card-title"><?= $fordRaptor->titulo ?></h5>
                                    <p class="card-text"><?= $fordRaptor->descripcion ?></p>
                                    <p class="card-text"><small class="text-muted">
                                        Motor: <?= $fordRaptor->motor ?> | 
                                        Potencia: <?= $fordRaptor->potencia ?> | 
                                        Transmisión: <?= $fordRaptor->transmision ?>
                                    </small></p>
                                    <p class="card-text precio"><strong>Precio: $<?= $fordRaptor->precio ?></strong></p>
                                    <a href="#" class="btn btn-primary">ver mas</a>
                                </div>
                            </div>
                        
    
            
            <?php }else if($eleccion=="ford" && $seleccion=="automovil"){?>    
    
                        <div class="card" style="width: 18rem;">
                                <img src="<?= $fordFiesta->imagen ?>" class="card-img-top" alt="<?= $fordFiesta->imagen ?>">
                                
                                <div class="card-body">
                                    <h5 class="card-title"><?= $fordFiesta->titulo ?></h5>
                                    <p class="card-text"><?= $fordFiesta->descripcion ?></p>
                                    <p class="card-text"><small class="text-muted">
                                        Motor: <?= $fordFiesta->motor ?> | 
                                        Potencia: <?= $fordFiesta->potencia ?> | 
                                        Transmisión: <?= $fordFiesta->transmision ?>
                                    </small></p>
                                    <p class="card-text precio"><strong>Precio: $<?= $fordFiesta->precio ?></strong></p>
                                    <a href="#" class="btn btn-primary">ver mas</a>
                                </div>
                            </div>
                            
                            <div class="card" style="width: 18rem;">
                                <img src="<?= $fordFocus->imagen ?>" class="card-img-top" alt="<?= $fordFocus->imagen ?>">
                                
                                <div class="card-body">
                                    <h5 class="card-title"><?= $fordFocus->titulo ?></h5>
                                    <p class="card-text"><?= $fordFocus->descripcion ?></p>
                                    <p class="card-text"><small class="text-muted">
                                        Motor: <?= $fordFocus->motor ?> | 
                                        Potencia: <?= $fordFocus->potencia ?> | 
                                        Transmisión: <?= $fordFocus->transmision ?>
                                    </small></p>
                                    <p class="card-text precio"><strong>Precio: $<?= $fordFocus->precio ?></strong></p>
                                    <a href="#" class="btn btn-primary">ver mas</a>
                                </div>
                            </div>
            
            
            <?php }else if($eleccion=="peugeot" && $seleccion=="sinSeleccion"){?>
            
                        <?php for($i=0;$i <count($listaPeugeot);$i++) {?>
    
                            <div class="card" style="width: 18rem;">
                                <img src="<?= $listaPeugeot [$i]->imagen ?>" class="card-img-top" alt="<?= $listaPeugeot [$i]->imagen ?>">
                                
                                <div class="card-body">
                                    <h5 class="card-title"><?= $listaPeugeot [$i]->titulo ?></h5>
                                    <p class="card-text"><?= $listaPeugeot[$i]->descripcion ?></p>
                                    <p class="card-text"><small class="text-muted">
                                        Motor: <?= $listaPeugeot[$i]->motor ?> | 
                                        Potencia: <?= $listaPeugeot[$i]->potencia ?> | 
                                        Transmisión: <?= $listaPeugeot[$i]->transmision ?>
                                    </small></p>
                                    <p class="card-text precio"><strong>Precio: $<?= $listaPeugeot[$i]->precio ?></strong></p>
                                    <a href="#" class="btn btn-primary">ver mas</a>
                                </div>
                            </div>
    
                        <?php }?>
            
            <?php }else if($eleccion=="peugeot" && $seleccion=="camioneta"){?>
                        
                            <div class="card" style="width: 18rem;">
                                <img src="<?= $peugeot2008->imagen ?>" class="card-img-top" alt="<?= $peugeot2008->imagen ?>">
                                
                                <div class="card-body">
                                    <h5 class="card-title"><?= $peugeot2008->titulo ?></h5>
                                    <p class="card-text"><?= $peugeot2008 ->descripcion ?></p>
                                    <p class="card-text"><small class="text-muted">
                                        Motor: <?= $peugeot2008->motor ?> | 
                                        Potencia: <?= $peugeot2008->potencia ?> | 
                                        Transmisión: <?= $peugeot2008->transmision ?>
                                    </small></p>
                                    <p class="card-text precio"><strong>Precio: $<?= $peugeot2008->precio ?></strong></p>
                                    <a href="#" class="btn btn-primary">ver mas</a>
                                </div>
                            </div>
    
    
            <?php }else if($eleccion=="peugeot" && $seleccion=="automovil"){?>    
    
                            <div class="card" style="width: 18rem;">
                                    <img src="<?= $peugeot208->imagen ?>" class="card-img-top" alt="<?= $peugeot208->imagen ?>">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $peugeot208->titulo ?></h5>
                                        <p class="card-text"><?= $peugeot208->descripcion ?></p>
                                        <p class="card-text"><small class="text-muted">
                                            Motor: <?= $peugeot208->motor ?> | 
                                            Potencia: <?= $peugeot208->potencia ?> | 
                                            Transmisión: <?= $peugeot208->transmision ?>
                                        </small></p>
                                        <p class="card-text precio"><strong>Precio: $<?= $peugeot208->precio ?></strong></p>
                                        <a href="#" class="btn btn-primary">ver mas</a>
                                    </div>
                                </div>
                                
                                <div class="card" style="width: 18rem;">
                                    <img src="<?= $peugeot308->imagen ?>" class="card-img-top" alt="<?= $peugeot308->imagen ?>">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $peugeot308->titulo ?></h5>
                                        <p class="card-text"><?= $peugeot308->descripcion ?></p>
                                        <p class="card-text"><small class="text-muted">
                                            Motor: <?= $peugeot308->motor ?> | 
                                            Potencia: <?= $peugeot308->potencia ?> | 
                                            Transmisión: <?= $peugeot308->transmision ?>
                                        </small></p>
                                        <p class="card-text precio"><strong>Precio: $<?= $peugeot308->precio ?></strong></p>
                                        <a href="#" class="btn btn-primary">ver mas</a>
                                    </div>
                                </div>
            
            <?php }else if($eleccion=="volkswagen" && $seleccion=="sinSeleccion"){?>
    
                            <?php for($i=0;$i <count($listaVolskgawen);$i++) {?>
    
                                <div class="card" style="width: 18rem;">
                                    <img src="<?= $listaVolskgawen [$i]->imagen ?>" class="card-img-top" alt="<?= $listaVolskgawen[$i]->imagen ?>">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $listaVolskgawen [$i]->titulo ?></h5>
                                        <p class="card-text"><?= $listaVolskgawen [$i]->descripcion ?></p>
                                        <p class="card-text"><small class="text-muted">
                                            Motor: <?= $listaVolskgawen[$i]->motor ?> | 
                                            Potencia: <?= $listaVolskgawen[$i]->potencia ?> | 
                                            Transmisión: <?= $listaVolskgawen[$i]->transmision ?>
                                        </small></p>
                                        <p class="card-text precio"><strong>Precio: $<?= $listaVolskgawen[$i]->precio ?></strong></p>
                                        <a href="#" class="btn btn-primary">ver mas</a>
                                    </div>
                                </div>
    
                            <?php }?>
    
            <?php }else if($eleccion=="volkswagen"&& $seleccion =="camioneta"){?>
                            
                                <div class="card" style="width: 18rem;">
                                
                                    <img src="<?= $VolkswagenAmarok->imagen ?>" class="card-img-top" alt="<?= $VolkswagenAmarok->imagen ?>">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $VolkswagenAmarok->titulo ?></h5>
                                        <p class="card-text"><?= $VolkswagenAmarok->descripcion ?></p>
                                        <p class="card-text"><small class="text-muted">
                                            Motor: <?= $VolkswagenAmarok->motor ?> | 
                                            Potencia: <?= $VolkswagenAmarok->potencia ?> | 
                                            Transmisión: <?= $VolkswagenAmarok->transmision ?>
                                        </small></p>
                                        <p class="card-text precio"><strong>Precio: $<?= $VolkswagenAmarok->precio ?></strong></p>
                                        <a href="#" class="btn btn-primary">ver mas</a>
                                    </div>
                                </div>
                        
                
            <?php }else if($eleccion=="volkswagen"&& $seleccion =="automovil"){?>
                
                
                                <div class="card" style="width: 18rem;">
                                    <img src="<?= $VolkswagenPolo->imagen ?>" class="card-img-top" alt="<?= $VolkswagenPolo->imagen ?>">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $VolkswagenPolo->titulo ?></h5>
                                        <p class="card-text"><?= $VolkswagenPolo->descripcion ?></p>
                                        <p class="card-text"><small class="text-muted">
                                            Motor: <?= $VolkswagenPolo->motor ?> | 
                                            Potencia: <?= $VolkswagenPolo->potencia ?> | 
                                            Transmisión: <?= $VolkswagenPolo->transmision ?>
                                        </small></p>
                                        <p class="card-text precio"><strong>Precio: $<?= $VolkswagenPolo->precio ?></strong></p>
                                        <a href="#" class="btn btn-primary">ver mas</a>
                                    </div>
                                </div>
                                
                                <div class="card" style="width: 18rem;">
                                    <img src="<?= $volkswagenTrend->imagen ?>" class="card-img-top" alt="<?= $volkswagenTrend->imagen ?>">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $volkswagenTrend->titulo ?></h5>
                                        <p class="card-text"><?= $volkswagenTrend->descripcion ?></p>
                                        <p class="card-text"><small class="text-muted">
                                            Motor: <?= $volkswagenTrend->motor ?> | 
                                            Potencia: <?= $volkswagenTrend->potencia ?> | 
                                            Transmisión: <?= $volkswagenTrend->transmision ?>
                                        </small></p>
                                        <p class="card-text precio"><strong>Precio: $<?= $volkswagenTrend->precio ?></strong></p>
                                        <a href="#" class="btn btn-primary">ver mas</a>
                                    </div>
                                </div>
            
            <?php }else if($eleccion=="" && $seleccion =="camioneta"){?>
                <?php for ($i = 0; $i < count($listaCamionetas); $i++){ ?>
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $listaCamionetas[$i]->imagen ?>" class="card-img-top" alt="<?= $listaCamionetas[$i]->titulo ?>">
                        
                        <div class="card-body">
                            <h5 class="card-title"><?= $listaCamionetas[$i]->titulo ?></h5>
                            <p class="card-text"><?= $listaCamionetas[$i]->descripcion ?></p>
                            <p class="card-text"><small class="text-muted">
                                Motor: <?= $listaCamionetas[$i]->motor ?> | 
                                Potencia: <?= $listaCamionetas[$i]->potencia ?> | 
                                Transmisión: <?= $listaCamionetas[$i]->transmision ?>
                            </small></p>
                            <p class="card-text precio"><strong>Precio: $<?= $listaCamionetas[$i]->precio ?></strong></p>
                            <a href="#" class="btn btn-primary">ver mas</a>
                        </div>
                    </div>
                <?php } ?>  
            
            <?php }else if($eleccion=="" && $seleccion =="automovil"){?>
                <?php for ($i = 0; $i < count($listaCategoriaAutos); $i++){ ?>
                    <?php for ($j = 0; $j < count($listaCategoriaAutos[$i]); $j++){ ?>
                        <div class="card" style="width: 18rem;">
                            <img src="<?= $listaCategoriaAutos[$i][$j]->imagen ?>" class="card-img-top" alt="<?= $listaCategoriaAutos[$i][$j]->titulo ?>">
                            
                            <div class="card-body">
                                <h5 class="card-title"><?= $listaCategoriaAutos[$i][$j]->titulo ?></h5>
                                <p class="card-text"><?= $listaCategoriaAutos[$i][$j]->descripcion ?></p>
                                <p class="card-text"><small class="text-muted">
                                    Motor: <?= $listaCategoriaAutos[$i][$j]->motor ?> | 
                                    Potencia: <?= $listaCategoriaAutos[$i][$j]->potencia ?> | 
                                    Transmisión: <?= $listaCategoriaAutos[$i][$j]->transmision ?>
                                </small></p>
                                <p class="card-text precio"><strong>Precio: $<?= $listaCategoriaAutos[$i][$j]->precio ?></strong></p>
                                <a href="#" class="btn btn-primary">ver mas</a>
                            </div>
                        </div>
                    <?php } ?>  
                <?php }?>
                
            <?php }else if($eleccion=="volkswagen"&& $seleccion =="camioneta"){?>
                            
                            <div class="card" style="width: 18rem;">
                            
                                <img src="<?= $VolkswagenAmarok->imagen ?>" class="card-img-top" alt="<?= $VolkswagenAmarok->imagen ?>">
                                
                                <div class="card-body">
                                    <h5 class="card-title"><?= $VolkswagenAmarok->titulo ?></h5>
                                    <p class="card-text"><?= $VolkswagenAmarok->descripcion ?></p>
                                    <p class="card-text"><small class="text-muted">
                                        Motor: <?= $VolkswagenAmarok->motor ?> | 
                                        Potencia: <?= $VolkswagenAmarok->potencia ?> | 
                                        Transmisión: <?= $VolkswagenAmarok->transmision ?>
                                    </small></p>
                                    <p class="card-text precio"><strong>Precio: $<?= $VolkswagenAmarok->precio ?></strong></p>
                                    <a href="#" class="btn btn-primary">ver mas</a>
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
                                <p class="card-text"><small class="text-muted">
                                    Motor: <?= $ListaCompleta[$i][$j]->motor ?> | 
                                    Potencia: <?= $ListaCompleta[$i][$j]->potencia ?> | 
                                    Transmisión: <?= $ListaCompleta[$i][$j]->transmision ?>
                                </small></p>
                                <p class="card-text precio"><strong>Precio: $<?= $ListaCompleta[$i][$j]->precio ?></strong></p>
                                <a href="#" class="btn btn-primary">ver mas</a>
                            </div>
                        </div>
                    
                    <?php }?>
                
                <?php }?>
            
            <?php } ?>
    
            </section>
        
    </main>

                    

    <footer class="text-center py-3">
         <p class="mb-0">Encuentra tu vehículo y vive la experiencia de conducir</p>
    </footer>
        
        
        </body>
</html>