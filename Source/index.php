<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Yilver Molina Hurtatiz</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- referenciar el archivo css propio -->
    <link rel="stylesheet" href="style.css">

    <!-- Consultar este archivo css de fuentes con iconos, para personalizar la página -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="http://yilvermolinah.com/fotos/Foto_YilverMH.jpg" />
</head>

<body>
<?php

//areglo (unidemensional) de habilidades
$habilidades = array("Javascript ", "C#", "HTML", "Java", "Ionic", "AngularJS", "Typescript");

$nombre = "Yilver Estiven Molina Hurtatiz"; //variable nombre de la persona
$correo = "yestiben-19@hotmail.com"; //variable correo de la persona
$telefono = "(095) 345 - 5645"; //variable telefono de la persona
$ocupacion = "Desarrollador de Software"; //variable ocupación de la persona
$profesion = "Ingeniero de Sistemas"; //variable profesión de la persona
$url_foto = "http://yilvermolinah.com/fotos/Foto_YilverMH.jpg"; //url de la foto de la persona
$comentario = "El éxito nunca llega solo; hay que trabajar arduamente para conseguirlo"; //comentario o pensamiento de la persona

$fnacimiento = '1996-10-28'; //fecha de nacimiento de la persona

//Arreglo (multidimensional) de experiencia laboral
$experiencia = array
    (
    array("Universidad de la Amazonia", "Florencia, Caquetá, Colombia", "Desarrollador Web y Móvil", "Feb 2017 - Hoy"),
    array("Spider Apps", "Florencia, Caquetá, Colombia", "Desarrollador Web y Móvil", "Mar 2017 - Hoy"),
    array("Gas Caquetá S.A.S", "Florencia, Caquetá, Colombia", "Desarrollador Web", "Sept 2016"),
    array("El Independiente - Guía Telefónica Comercial del Caquetá", "Florencia, Caquetá, Colombia", "Desarrollador Web y Móvil", "Jun - Oct 2016"),
    array("PITE Punto de Información Telefónica", "Florencia, Caquetá, Colombia", "Desarrollador Web", "Jul - Ago 2015"),
);

//arreglo (multidimensional) de formaciones académicas, en este caso probando los arrays mixtos, pues se accede a ´
//cada formación académica por un índice (0,1,2...) y a sus atributos específicos por su nombre (cadena). Ej: Titulo, Institucion, etc.
$formaciones = array(
    0 => array(
        "Titulo" => "Ingeniería de Sistemas",
        "Institucion" => "Universidad de la Amazonia, 2017",
        "Ciudad" => "Florencia, Caquetá, Colombia",
        "Estado" => "Finalizado",
    ),
    1 => array(
        "Titulo" => "Curso: VARIABLES Y ESTRUCTURAS DE CONTROL EN LA PROGRAMACIÓN ORIENTADA A OBJETOS",
        "Institucion" => "Servicio Nacional de Aprendizaje SENA, 2012",
        "Ciudad" => "Florencia, Caquetá, Colombia",
        "Estado" => "Finalizado",
    ),
    2 => array(
        "Titulo" => "Diplomado: APRENDIZAJE EN INGLÉS: VOCABULARIO, ESTRUCTURA GRAMATICAL Y COMPRENSIÓN PARA LA PARTICIPACIÓN EN LAS MARATONES DE PROGRAMACIÓN NACIONALES",
        "Institucion" => "Universidad de la Amazonia, 2016",
        "Ciudad" => "Florencia, Caquetá, Colombia",
        "Estado" => "Finalizado",
    ),
    3 => array(
        "Titulo" => "Diplomado en Realidad aumentada y desarrollo de aplicaciones móviles",
        "Institucion" => "Universidad de la Amazonia, 2017",
        "Ciudad" => "Florencia, Caquetá, Colombia",
        "Estado" => "Finalizado",
    ),
    4 => array(
        "Titulo" => "Master Universitario en Ingeniería de Software y Sistemas Informáticos",
        "Institucion" => "Universidad Internacional de la Rioja, 2017",
        "Ciudad" => "La Rioja, España",
        "Estado" => "En curso",
    ),
);

//arreglo (multidimensional) de publicaciones, en este caso probando los arrays escaleres (posición numérica)
$publicaciones = array(
    0 => array(
        0 => "Desarrollo Dirigido por Modelos como una estrategia para la industrialización de software: experiencia Universidad de la Amazonia.",
        1 => "VII Congreso Internacional de Computación CICOM 2017 ",
        2 => "Universidad Distrital Francisco José de Caldas, Bogotá Colombia. ",
        3 => "Publicado",
        4 => "http://cicom.udistrital.edu.co/memorias-del-evento/",
    ),
    1 => array(
        0 => "Aquariam: Sistema de información para monitoreo de pH y temperatura en el laboratorio limnología.",
        1 => "Revista Ingenierías & Amazonia 2016 ",
        2 => "Universidad de la Amazonia, Florencia Caquetá Colombia.",
        3 => "En proceso",
        4 => "",
    ),
    2 => array(
        0 => "Uso de la programación competitiva como aporte a la enseñanza de la Lógica Algorítmica. Experiencia Universidad de la Amazonia.",
        1 => "Primer Congreso Internacional TIC para la Amazonia 2016",
        2 => "Universidad de la Amazonia, Florencia Caquetá Colombia. ",
        3 => "Publicado",
        4 => "http://revistas.udistrital.edu.co/ojs/index.php/revcie/article/view/11097",
    ),
    3 => array(
        0 => "Sistemas Tutores Inteligentes como apoyo en el proceso de aprendizaje.",
        1 => "Revista Redes De Ingeniería ",
        2 => "Universidad Distrital Francisco José de Caldas, Bogotá Colombia. ",
        3 => "Publicado",
        4 => "http://revistas.udistrital.edu.co/ojs/index.php/REDES/article/view/8246/10508",
    ),
);

?>

<?php

//Función para consultar la edad de la persona
function consultarEdad($fnacimiento)
{
    $nacim = new DateTime($fnacimiento); //fecha de nacimiento
    $hoy = new DateTime(); //fecha actual
    $edad = $hoy->diff($nacim); //diferencia entre fechas para obtener la edad

    return $edad->y; //retornar la edad en anios
}

//Función para mostrar cada uno de los tags de las 'habilidades', con color intercalado (azul para las posiciones impares y verde para las pares)
function consultarHabilidades($habilidades)
{
    $result = "";
    $i = 1;
    //los tags es las posiciones impares se muestran de color azul (1,3,5...)
    //los tags es las posiciones pares se muestran de color verde (2,4,6...)
    foreach ($habilidades as $habilidad) {
        if ($i % 2 == 0) {
            $result .= "<span class='tag tag-success'>$habilidad</span>";
        } else {
            $result .= "<span class='tag tag-primary'>$habilidad</span>";
        }
        $i++;
    }
    return $result;
}

//Consultar el estado de una formación académica para determinar el color de la etiqueta
function consultarEstadoFormacion($estado)
{
    $result = "";
    switch (strtolower($estado)) { //validar el estado independiente de si está escrito con letras mayúsculas o minúsculas
        case "finalizado":
            $result = "<span class='tag tag-success'>" . $estado . "</span>"; //success: para etiqueta de color verde
            break;
        case "en curso":
            $result = "<span class='tag tag-warning'>" . $estado . "</span>"; //warning: para etiqueta de color amarillo
            break;
        case "cancelado":
            $result = "<span class='tag tag-danger'>" . $estado . "</span>"; //danger: para etiqueta de color rojo
            break;
    }
    return $result; //retornar el html
}

//Consultar el estado de una publicación para determinar el color de la etiqueta
function consultarEstadoPublicacion($estado, $enlace)
{
    switch (strtolower($estado)) { //validar el estado independiente de si está escrito con letras mayúsculas o minúsculas
        case "publicado":

            echo "<br/><span class='tag tag-success'>" . $estado . "</span>"; //success: para etiqueta de color verde
            break;
        case "en proceso":

            echo "<br/><span class='tag tag-warning'>" . $estado . "</span>"; //warning: para etiqueta de color amarillo
            break;
    }
    //verificar si hay enlace del artículo publicado, para así mostrar o no el link en la página
    if (strlen($enlace) > 0) {
        echo "<a class='tag tag-primary' href='" . $enlace . "' target='_blank'><i class='fa fa-file-pdf-o icon'></i>Ver artículo</a>";
    }
}

?>

    <div id="main">
        <div class="panel-left">
            <div class="panel-photo">
            <?php
print("<img src='$url_foto' alt='Foto' />"); //Agregar la foto de la persona en el html
?>

            </div>
            <div class="panel-name text-center">
                <hr/>
                <?php
echo "<h2>$nombre</h2>"; //Agregar el nombre de la persona en el html
echo "<p>$ocupacion</p>"; //Agregar la ocupación de la persona en el html
 ?>
                <div>
                    <a href="http://yilvermolinah.com" target="_blank" class="btn btn-default" title="Página web personal">
                        <i class="fa fa-link"></i>
                    </a>
                    <a href="https://github.com/YilverMolina" target="_blank" class="btn btn-default" title="Github">
                        <i class="fa fa-github"></i>
                    </a>
                    <a href="https://twitter.com/YilverMH" target="_blank" class="btn btn-default" title="Twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                </div>
                <hr class="separator" />
                <div class="say">
                <?php
print("<p><i>\"$comentario\"</p></i>"); //Agregar el comentario de la persona en el html
?>
                </div>
            </div>
        </div>
        <div class="panel-right">
            <div class="panel-tabs">
                <ul class="list-tabs">
                    <li class="tab-active" id="tab-info-general" onclick="activateTab('info-general')"><a href="#">Sobre mí</a></li>
                    <li class="tab-inactive" id="tab-formacion" onclick="activateTab('formacion')"><a href="#">Formación</a></li>
                    <li class="tab-inactive" id="tab-experiencia" onclick="activateTab('experiencia')"><a href="#" onclick="activateTab()">Experiencia</a></li>
                    <li class="tab-inactive" id="tab-publicaciones" onclick="activateTab('publicaciones')"><a href="#" onclick="activateTab()">Publicaciones</a></li>
                    <li class="tab-inactive" id="tab-contacto" onclick="activateTab('contacto')"><a href="#" onclick="activateTab()">Contacto</a></li>
                </ul>
                <div id="panel-info-general" class="tab-content">
                    <p class="text-justify">
                        Mi nombre es Yilver Molina, tengo

                        <?php

//Agregar la edad de la persona en el html
echo consultarEdad($fnacimiento);
?>
 años y soy
<?php
echo "<b>$profesion</b>";
?>
                        , egresado de la Universidad de la Amazonia, en Florencia, Caquetá, Colombia.
                        <br/><br/>Actualmente me desempeño como
                        <?php
echo "<b>$ocupacion</b>";
?>
                        , participando en la ejecución de proyectos multiplataforma (web y móvil).
                        <br/><br/>Mi pasión es el Desarrollo de Software, generar soluciones innovadoras para hacer más eficiente una tarea.
                    </p>
                    <div>
                        <br/>
                        <p class="text-justify">
                            Mis <b>habilidades</b>:
                        </p>
                        <?php
echo consultarHabilidades($habilidades); //agregar los tags de habilidades de la persona
 ?>
<br/>
                    </div>
                </div>
                <div id="panel-formacion" class="tab-content" hidden="hidden">
                    <ul>
                    <?php

//agregar las formaciones académicas de la persona
for ($row = 0; $row < count($formaciones); $row++) {
    echo "<li>";
    echo $formaciones[$row]["Titulo"] . ". <i>" . $formaciones[$row]["Institucion"] . "</i>. " . $formaciones[$row]["Ciudad"] . ".";
    echo "<br/>" . consultarEstadoFormacion($formaciones[$row]["Estado"]) . "<br/><br/>";
    echo "</li>";
}
?>
                    </ul>
                </div>
                <div id="panel-experiencia" class="tab-content" hidden="hidden">
                    <div class="table-responsive">
                        <table class="text-justify">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>
                                        <i class="fa fa-home icon"></i> Empresa
                                    </th>
                                    <th>
                                        <i class="fa fa-tasks icon"></i>Ocupación
                                    </th>
                                    <th class="date">
                                        <i class="fa fa-calendar icon"></i>Fecha
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
//agregar la experiencia laboral de la persona
$row = 0;
while ($row < count($experiencia)) {
    echo "<tr>";
    echo "<td>" . ($row + 1) . "</td>";
    echo "<td>" . $experiencia[$row][0] . " - <i>" . $experiencia[$row][1] . "</td>";
    echo "<td>" . $experiencia[$row][2] . "</td>";
    echo "<td><span class='tag tag-primary'>" . $experiencia[$row][3] . "</span></td>";
    echo "</tr>";

    $row++;
}
?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="panel-publicaciones" class="tab-content" hidden="hidden">
                    <ol>
<?php
//agregar la lista de publicaciones (artículos) de la persona
$row = 0;

do {
    echo "<li>";
    echo "<i><b>" . $publicaciones[$row][0] . "</b></i>";
    echo "<br/><br/><i class='fa fa-link icon'></i>" . $publicaciones[$row][1];
    echo "<br/><i class='fa fa-map-marker icon'></i>" . $publicaciones[$row][2];
    consultarEstadoPublicacion($publicaciones[$row][3], $publicaciones[$row][4]);
    echo "<br/><br/>";
    echo "</li>";
    $row++;
    //Operador ternario para saber si se puede continuar o no, agregando filas a la tabla
    $continuar = $row < count($publicaciones) ? true : false;
} while ($continuar);

?>
                    </ol>
                </div>
                <div id="panel-contacto" class="tab-content" hidden="hidden">
                    <div class="table-responsive">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <i class="fa fa-envelope icon"></i>
                                        <?php
echo $correo;
?>
                                    </td>
                                    <td>
                                        <i class="fa fa-phone icon"></i>
                                        <?php
echo $telefono;
?>
                                    </td>
                                    <td class="date">
                                        <i class="fa fa-link icon"></i><a href="http://yilvermolinah.com/" class="tag tag-primary" target="_blank">Vísita mi página</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <hr class="separator" />
                        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.222975890052!2d-75.60725708570385!3d1.620327398818437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e244e1db2f7e2ff%3A0x59f1685594ac4ad!2sUniversidad+De+La+Amazonia!5e0!3m2!1ses!2sco!4v1513896590572"
                            height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                </div>
            </div>
            <hr class="separator" />
            <div class="panel-footer text-center">
                <p><b>Máster Universitario en Ingeniería del Software y Sistemas Informáticos</b></p>
                <p><i>Universidad Internacional de la Rioja, España - 2017</i></p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        var activateTab = function(name) {
            var names = ["info-general", "formacion", "experiencia", "publicaciones", "contacto"];
            for (var i = 0; i < names.length; i++) {

                document.getElementById("panel-" + names[i]).style.display = names[i] === name ? "block" : "none";

                if (name === names[i]) {
                    $("#tab-" + names[i]).removeClass('tab-inactive');
                    $("#tab-" + names[i]).addClass('tab-active');
                } else {
                    $("#tab-" + names[i]).removeClass('tab-active');
                    $("#tab-" + names[i]).addClass('tab-inactive');
                }
            }
        }
    </script>
</body>

</html>