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
        <body>

          
            
            <header>
                
                <h1>Catálogo de Autos</h1>

            </header>  
            
            <main>

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
            <input class="form-check-input" type="radio" name="tema" id="claro" value="claro">
            <label class="form-check-label" for="claro">Claro</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="tema" id="oscuro" value="oscuro">
            <label class="form-check-label" for="oscuro">Oscuro</label>
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary">filtrar</button>
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
        
        <?php }else if($eleccion=="" && $seleccion =="camioneta"){?>
            <?php for ($i = 0; $i < count($listaCamionetas); $i++){ ?>
                <div class="card" style="width: 18rem;">
                    <img src="<?= $listaCamionetas[$i]->imagen ?>" class="card-img-top" alt="<?= $listaCamionetas[$i]->titulo ?>">
                    
                    <div class="card-body">
                        <h5 class="card-title"><?= $listaCamionetas[$i]->titulo ?></h5>
                        <p class="card-text"><?= $listaCamionetas[$i]->descripcion ?></p>
                        <a href="#" class="btn btn-primary">COTIZAR</a>
                    </div>
                </div>
            <?php } ?>  
        
        <?php }else if($eleccion=="" && $seleccion =="auto"){?>
            <?php for ($i = 0; $i < count($listaCategoriaAutos); $i++){ ?>
                <?php for ($j = 0; $j < count($listaCategoriaAutos[$i]); $j++){ ?>
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $listaCategoriaAutos[$i][$j]->imagen ?>" class="card-img-top" alt="<?= $listaCategoriaAutos[$i][$j]->titulo ?>">
                        
                        <div class="card-body">
                            <h5 class="card-title"><?= $listaCategoriaAutos[$i][$j]->titulo ?></h5>
                            <p class="card-text"><?= $listaCategoriaAutos[$i][$j]->descripcion ?></p>
                            <a href="#" class="btn btn-primary">COTIZAR</a>
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

                    

            <footer>Auto</footer>  
        
        
        
        </body>
</html>