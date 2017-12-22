<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Yilver Molina Hurtatiz</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="http://yilvermolinah.com/fotos/Foto_YilverMH.jpg" />
</head>

<body>
<?php

//areglo (unidemensional) de habilidades
$habilidades = array("Javascript ", "C#", "HTML", "Java", "Ionic", "AngularJS", "Typescript");

$nombre = "Yilver Estiven Molina Hurtatiz";
$ocupacion = "Desarrollador de Software";
$url_foto = "http://yilvermolinah.com/fotos/Foto_YilverMH.jpg";
$comentario = "El éxito nunca llega solo; hay que trabajar arduamente para conseguirlo";

$fnacimiento = '1996-10-28';
$edad = 0;

//Arreglo (multidimensional) de experiencia laboral
$experiencia = array
    (
    array("Universidad de la Amazonia", "Florencia, Caquetá, Colombia", "Desarrollador Web y Móvil", "Feb 2017 - Hoy"),
    array("Spider Apps", "Florencia, Caquetá, Colombia", "Desarrollador Web y Móvil", "Mar 2017 - Hoy"),
    array("Gas Caquetá S.A.S", "Florencia, Caquetá, Colombia", "Desarrollador Web", "Sept 2016"),
    array("El Independiente - Guía Telefónica Comercial del Caquetá", "Florencia, Caquetá, Colombia", "Desarrollador Web y Móvil", "Jun - Oct 2016"),
    array("PITE Punto de Información Telefónica", "Florencia, Caquetá, Colombia", "Desarrollador Web", "Jul - Ago 2015"),
);

//arreglo (multidimensional) de formaciones académicas
$formaciones = array(
    0 => array(
        0 => "Ingeniería de Sistemas",
        1 => "Universidad de la Amazonia, 2017",
        2 => "Florencia, Caquetá, Colombia",
        3 => "Finalizado",
        4 => "success",
    ),
    1 => array(
        0 => "Curso: VARIABLES Y ESTRUCTURAS DE CONTROL EN LA PROGRAMACIÓN ORIENTADA A OBJETOS",
        1 => "Servicio Nacional de Aprendizaje SENA, 2012",
        2 => "Florencia, Caquetá, Colombia",
        3 => "Finalizado",
        4 => "success",
    ),
    2 => array(
        0 => "Diplomado: APRENDIZAJE EN INGLÉS: VOCABULARIO, ESTRUCTURA GRAMATICAL Y COMPRENSIÓN PARA LA PARTICIPACIÓN EN LAS MARATONES DE PROGRAMACIÓN NACIONALES",
        1 => "Universidad de la Amazonia, 2016",
        2 => "Florencia, Caquetá, Colombia",
        3 => "Finalizado",
        4 => "success",
    ),
    3 => array(
        0 => "Diplomado en Realidad aumentada y desarrollo de aplicaciones móviles",
        1 => "Universidad de la Amazonia, 2017",
        2 => "Florencia, Caquetá, Colombia",
        3 => "Finalizado",
        4 => "success",
    ),
    4 => array(
        0 => "Master Universitario en Ingeniería de Software y Sistemas Informáticos",
        1 => "Universidad Internacional de la Rioja, 2017",
        2 => "La Rioja, España",
        3 => "En curso",
        4 => "warning",
    ),
);

//arreglo (multidimensional) de publicaciones
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
        3 => "Publicado",
        4 => "#",
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
    $nacim = new DateTime($fnacimiento);
    $hoy = new DateTime();
    $edad = $hoy->diff($nacim);

    return $edad->y;
}

//Función para mostrar cada uno de los tags de las 'habilidades', con color intercalado (azul para las posiciones impares y verde para las pares)
function consultarHabilidades($habilidades)
{
    $result = "";
    $i = 1;
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

?>

    <div id="main">
        <div class="panel-left">
            <div class="panel-photo">
            <?php
print("<img src='$url_foto' alt='Foto' />");
?>

            </div>
            <div class="panel-name text-center">
                <hr/>
                <?php
echo "<h2>$nombre</h2>";
echo "<p>$ocupacion</p>";
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
print("<p><i>\"$comentario\"</p></i>");
?>
                </div>
            </div>
        </div>
        <div class="panel-right">
            <div class="panel-tabs">
                <ul class="list-tabs">
                    <li class="tab-active" id="tab-info-general" onclick="activateTab(this.id, 'panel-info-general')"><a href="#">Sobre mí</a></li>
                    <li class="tab-inactive" id="tab-formacion" onclick="activateTab(this.id, 'panel-formacion')"><a href="#">Formación</a></li>
                    <li class="tab-inactive" id="tab-experiencia" onclick="activateTab(this.id, 'panel-experiencia')"><a href="#" onclick="activateTab()">Experiencia</a></li>
                    <li class="tab-inactive" id="tab-publicaciones" onclick="activateTab(this.id, 'panel-publicaciones')"><a href="#" onclick="activateTab()">Publicaciones</a></li>
                    <li class="tab-inactive" id="tab-contacto" onclick="activateTab(this.id, 'panel-contacto')"><a href="#" onclick="activateTab()">Contacto</a></li>
                </ul>
                <div id="panel-info-general" class="tab-content">
                    <p class="text-justify">
                        Mi nombre es Yilver Molina, tengo

                        <?php
echo consultarEdad($fnacimiento);
?>

años y soy <b>Ingeniero de Sistemas</b>, egresado de la Universidad de la Amazonia, en Florencia, Caquetá, Colombia.
                        <br/><br/>Actualmente me desempeño como <b>Desarrollador de Software</b>, participando en la ejecución de proyectos multiplataforma (web y móvil).
                        <br/><br/>Mi pasión es el Desarrollo de Software, generar soluciones innovadoras para hacer más eficiente una tarea.
                    </p>
                    <div>
                        <br/>
                        <p class="text-justify">
                            Mis <b>habilidades</b>:
                        </p>
                        <?php
echo consultarHabilidades($habilidades);
?>
<br/>
                    </div>
                </div>
                <div id="panel-formacion" class="tab-content" hidden="hidden">
                    <ul>
                    <?php
for ($row = 0; $row < count($formaciones); $row++) {
    echo "<li>";
    echo $formaciones[$row][0] . ". <i>" . $formaciones[$row][1] . "</i>. " . $formaciones[$row][2] . ".";
    echo "<br/><span class='tag tag-" . $formaciones[$row][4] . "'>" . $formaciones[$row][3] . "</span> <br/><br/>";
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
$row = 0;

do {
    echo "<li>";
    echo "<i><b>" . $publicaciones[$row][0] . "</b></i>";
    echo "<br/><br/><i class='fa fa-link icon'></i>" . $publicaciones[$row][1];
    echo "<br/><i class='fa fa-map-marker icon'></i>" . $publicaciones[$row][2];
    echo "<br/><span class='tag tag-success'>" . $publicaciones[$row][3] . "</span>";
    echo "<a class='tag tag-primary' href='" . $publicaciones[$row][4] . "' target='_blank'><i class='fa fa-file-pdf-o icon'></i>Ver artículo</a>";
    echo "<br/><br/>";
    echo "</li>";
    $row++;
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
                                        <i class="fa fa-envelope icon"></i> yestiben-19@hotmail.com
                                    </td>
                                    <td>
                                        <i class="fa fa-phone icon"></i>(095) 345 - 5645
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
        var activateTab = function(id_tab, id_panel) {
            var panels = ["panel-info-general", "panel-formacion", "panel-experiencia", "panel-publicaciones", "panel-contacto"];
            var tabs = ["tab-info-general", "tab-formacion", "tab-experiencia", "tab-publicaciones", "tab-contacto"];
            for (var i = 0; i < panels.length; i++) {
                document.getElementById(panels[i]).style.display = panels[i] === id_panel ? "block" : "none";

                var gh = document.getElementById(panels[i]);

                if (id_tab === tabs[i]) {
                    $("#" + tabs[i]).removeClass('tab-inactive');
                    $("#" + tabs[i]).addClass('tab-active');
                } else {
                    $("#" + tabs[i]).removeClass('tab-active');
                    $("#" + tabs[i]).addClass('tab-inactive');
                }
            }
        }
    </script>
</body>

</html>