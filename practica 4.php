<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 4 </title>
</head>

<body>
    <div>
        <h3>EJERCICIO 6</h3>
        <pre>
            <?php
            $autos = array('UBN6338' => array(
                'auto' => array(
                    'marca' => "mitsubishi",
                    'modelo' => "2011",
                    'tipo' => "convertible"
                ),
                'propietario' => array(
                    'nombre' => 'Pancho',
                    'ciudad' => 'Puebla',
                    'direccion' => 'solilaridad'
                )
            ), 'UBN635639' => array(
                'auto' => array(
                    'marca' => "Honda",
                    'modelo' => "2018",
                    'tipo' => "deportivo"
                ),
                'propietario' => array(
                    'nombre' => 'Jesus',
                    'ciudad' => 'Puebla',
                    'direccion' => 'Col. Balcones del Sur'
                )
            ), 'HTC635638' => array(
                'auto' => array(
                    'marca' => "Toyota",
                    'modelo' => "2011",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Juan',
                    'ciudad' => 'Puebla',
                    'direccion' => 'Col. villa frontera'
                )
            ), 'UHN65634638' => array(
                'auto' => array(
                    'marca' => "Nissan",
                    'modelo' => "2019",
                    'tipo' => "deportivo"
                ),
                'propietario' => array(
                    'nombre' => 'Elias',
                    'ciudad' => 'Puebla',
                    'direccion' => 'Col. Angelopolis'
                )
            ), 'UTT633699' => array(
                'auto' => array(
                    'marca' => "Nissan",
                    'modelo' => "2011",
                    'tipo' => "convertible"
                ),
                'propietario' => array(
                    'nombre' => 'Julian',
                    'ciudad' => 'monterrey',
                    'direccion' => 'Col. Valles'
                )
            ), 'YUT1345234' => array(
                'auto' => array(
                    'marca' => "Toyota",
                    'modelo' => "2013",
                    'tipo' => "Senda"
                ),
                'propietario' => array(
                    'nombre' => 'Juan',
                    'ciudad' => 'Hidalgo',
                    'direccion' => 'Col. san isidro'
                )
            ), 'UBP6334577' => array(
                'auto' => array(
                    'marca' => "Nissan",
                    'modelo' => "2020",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Jose',
                    'ciudad' => 'Puebla',
                    'direccion' => 'Col. animas'
                )
            ), 'UYH845338' => array(
                'auto' => array(
                    'marca' => "Honda",
                    'modelo' => "2006",
                    'tipo' => "Hachback"
                ),
                'propietario' => array(
                    'nombre' => 'Elias',
                    'ciudad' => 'Veracruz',
                    'direccion' => 'Col. mira flores'
                )
            ), 'TRH455647' => array(
                'auto' => array(
                    'marca' => "Crevrolet",
                    'modelo' => "2020",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Dolores',
                    'ciudad' => 'Chihuahua',
                    'direccion' => 'Col. el pancho'
                )
            ), 'UBN845888' => array(
                'auto' => array(
                    'marca' => "Toyota",
                    'modelo' => "2014",
                    'tipo' => "Sedan"
                ),
                'propietario' => array(
                    'nombre' => 'Alberto',
                    'ciudad' => 'Aguascalientes',
                    'direccion' => 'Col. Del Rio'
                )
            ), 'HDR735838' => array(
                'auto' => array(
                    'marca' => "Honda",
                    'modelo' => "2021",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Aqua',
                    'ciudad' => 'Puebla',
                    'direccion' => 'Col. La Playa'
                )
            ), 'UPO994588' => array(
                'auto' => array(
                    'marca' => "Nissan",
                    'modelo' => "2015",
                    'tipo' => "Sedan"
                ),
                'propietario' => array(
                    'nombre' => 'Xochitl',
                    'ciudad' => 'Puebla',
                    'direccion' => 'Col. La Loma'
                )
            ), 'CHT563458' => array(
                'auto' => array(
                    'marca' => "Chevrolet",
                    'modelo' => "2019",
                    'tipo' => "Hachback"
                ),
                'propietario' => array(
                    'nombre' => 'Maria',
                    'ciudad' => 'Veracruz',
                    'direccion' => 'Col. Cerrito'
                )
            ), 'UTL33487' => array(
                'auto' => array(
                    'marca' => "Toyota",
                    'modelo' => "2012",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Miguel Angel',
                    'ciudad' => 'Oaxaca',
                    'direccion' => 'Col. Ranchito Alto'
                )
            ), 'UBO8458' => array(
                'auto' => array(
                    'marca' => "Honda",
                    'modelo' => "2001",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Odette',
                    'ciudad' => 'Chihuahua',
                    'direccion' => 'Col. El Rio'
                )
            ));

            $m = $_POST["matricula"];

            if ($m == "ALL") {
                print_r($autos);
            } else {

                echo $m.'<br>';
                print_r($autos[$m]);
            }

            ?>
        </pre>
    </div>
</body>

</html>