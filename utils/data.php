<?php 

$eleccion = $_GET['marca'] ;
$seleccion = $_GET['seleccion'];
$tema = $_GET['tema'] ;


//Lista  Peugeot

$peugeot208 = (object)[
    "titulo" => "Peugeot 208",
    "categoria" => "automovil",
    "descripcion" => "Compacto urbano con diseño vanguardista y tecnología avanzada",
    "imagen" => "https://www.media.stellantis.com/cache/a/d/d/4/5/add452e8f9f21b8c6903d8bbadc40f169a0bac6c.jpeg",
    "precio" => "14,500,000",
    "motor" => "1.2L PureTech",
    "potencia" => "75 HP",
    "transmision" => "manual 5 velocidades"
];

$peugeot2008 = (object)[
    "titulo" => "Peugeot 2008",
    "categoria" => "camioneta",
    "descripcion" => "SUV compacto con líneas deportivas y amplio espacio interior",
    "imagen" => "https://cuyomotor.com.ar/wp-content/uploads/2023/05/peugeot-e-2008-2024-002-1140x570.jpg",
    "precio" => "18,200,000",
    "motor" => "1.6L THP",
    "potencia" => "120 HP",
    "transmision" => "automática 6 velocidades"
];

$peugeot308 = (object)[
    "titulo" => "Peugeot 308",
    "categoria" => "automovil",
    "descripcion" => "Sedán premium con interior refinado y excelente confort de marcha",
    "imagen" => "https://resizer.glanacion.com/resizer/v2/peugeot-308-s-gt-con-toda-la-HPIGYVE2PZA6RFDGAYQUTHIUEE.jpg?auth=af9e8a8c1f083ce6907d492942e94878f42b1cd162ab9c0d17386470f64689e3&width=1280&height=854&quality=70&smart=true",
    "precio" => "16,800,000",
    "motor" => "1.6L HDi",
    "potencia" => "115 HP",
    "transmision" => "automática 8 velocidades"
];

// Lista Volkswagen
$VolkswagenPolo = (object)[
    "titulo" => "Volkswagen Polo",
    "categoria" => "automovil",
    "descripcion" => "Hatchback alemán con calidad de construcción superior y bajo consumo",
    "imagen" => "https://autoenaccion.com.ar/wp-content/uploads/2024/02/vw-polo-track-argentina-delantera-1.jpg",
    "precio" => "13,900,000",
    "motor" => "1.0L TSI",
    "potencia" => "95 HP",
    "transmision" => "manual 5 velocidades"
];

$VolkswagenAmarok = (object)[
    "titulo" => "Volkswagen Amarok",
    "categoria" => "camioneta",
    "descripcion" => "Pick-up robusta con capacidad off-road y amplia versatilidad",
    "imagen" => "https://cdn.motor1.com/images/mgl/VzzEOR/s1/vw-amarok-2022.jpg",
    "precio" => "25,500,000",
    "motor" => "2.0L TDI",
    "potencia" => "180 HP",
    "transmision" => "automática 8 velocidades"
];

$volkswagenTrend = (object)[
    "titulo" => "Volkswagen Trend",
    "categoria" => "automovil",
    "descripcion" => "Modelo económico con mantenimiento accesible y gran durabilidad",
    "imagen" => "https://cdn.motor1.com/images/mgl/LQMmG/s1/oficial-todo-sobre-los-nuevos-volkswagen-gol-trend-y-voyage-2016.webp",
    "precio" => "9,800,000",
    "motor" => "1.6L MSI",
    "potencia" => "101 HP",
    "transmision" => "manual 5 velocidades"
];

// Lista Ford
$fordFiesta = (object)[
    "titulo" => "Ford Fiesta",
    "categoria" => "automovil",
    "descripcion" => "Compacto ágil con manejo deportivo y eficiencia energética",
    "imagen" => "https://cdn.autobild.es/sites/navi.axelspringer.es/public/bdc/dc/fotos/Ford_Fiesta_2022_02.jpg?tf=3840x",
    "precio" => "12,300,000",
    "motor" => "1.5L Ti-VCT",
    "potencia" => "120 HP",
    "transmision" => "automática 6 velocidades"
];

$fordRaptor = (object)[
    "titulo" => "Ford Raptor",
    "categoria" => "camioneta",
    "descripcion" => "Pick-up de alto rendimiento con suspensión especial para terrenos difíciles",
    "imagen" => "https://acroadtrip.blob.core.windows.net/catalogo-imagenes/m/RT_V_9527866fefb84e3e840b1fd28e2a23c0.jpg",
    "precio" => "38,900,000",
    "motor" => "3.5L EcoBoost V6",
    "potencia" => "450 HP",
    "transmision" => "automática 10 velocidades"
];

$fordFocus = (object)[
    "titulo" => "Ford Focus",
    "categoria" => "automovil",
    "descripcion" => "Sedán familiar con tecnología SYNC y excelente seguridad",
    "imagen" => "https://www.ford.es/content/dam/guxeu/rhd/central/cars/2021-focus/dse/column-cards/ford-focus-eu-Column_Card_Focus-ST-Line-X-3x2-1000x667-front-view.jpg",
    "precio" => "15,700,000",
    "motor" => "1.5L EcoBoost",
    "potencia" => "150 HP",
    "transmision" => "automática 8 velocidades"
];
 


//Lista por marca

$listaPeugeot=[$peugeot208,$peugeot2008,$peugeot308];

$listaVolskgawen=[$VolkswagenPolo,$VolkswagenAmarok,$volkswagenTrend];

$listaFord=[$fordFiesta,$fordRaptor,$fordFocus];

//Lista por Categoria "autos"

$ListaAutosPeugeot=[$peugeot208,$peugeot308];

$ListaAutosVolkswagen=[$VolkswagenPolo,$volkswagenTrend];

$ListaAutosFord=[$fordFiesta,$fordFocus];

//Lista por Categoria "Autos"

$listaCategoriaAutos=[$ListaAutosFord,$ListaAutosPeugeot,$ListaAutosVolkswagen];

//Lista por Categoria "Camioneta"

$listaCamionetas=[$fordRaptor,$VolkswagenAmarok,$peugeot2008];
//Listas completas

$ListaCompleta=[$listaPeugeot,$listaVolskgawen,$listaFord];

?>