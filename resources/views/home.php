<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Correa Consultores</title>

        <style>
            body,h1,h2,h3,h4,h5,h6,p
            {
                margin: 0;
                padding: 0;
            }

            body
            {
                font-family: calibri;
                min-width: 1000px;
            }
            a.text_link
            {
                font-family: calibri;
                text-decoration: none;
            }
            a.text_link:hover
            {
                text-decoration: underline;
            }
            #header,#footer
            {
                background-color: #181f1a;
                color: #FFFFFF;
            }
            #content
            {
                margin-left: 50px;
                margin-top: 50px;
                text-align: center;
            }
            #header
            {
                padding-top: 20px;
                padding-bottom: 20px;
            }
            #header > h1
            {
                color: #FFFFFF;
                display: inline-block;
                margin-left: 50px;
            }
            #header_home
            {
                margin-left: 500px;
            }
            #header_briefcase
            {
                margin-left: 50px;
            }
            #header_prize
            {
                margin-left: 50px;
            }
            #header > a
            {
                color: #FFFFFF;
                display: inline-block;
                font-size: 18px;
            }
            #main_image
            {
                display: inline-block;
                width: 500px;
            }
            #main_content
            {
                display: inline-block;
                margin-left: 50px;
                text-align: left;
                vertical-align: top;
                width: 400px;
            }
            #second_p
            {
                margin-top: 50px;
            }
            #second_p > a
            {
                color: #0077ff;
            }
            #detail
            {
                margin-top: 50px;
                text-align: center;
            }
            .detail_column
            {
                display: inline-block;
                margin-left: 50px;
                text-align: center;
                width: 300px;
            }
            .detail_column > img
            {
                display: inline-block;
                width: 100px;
            }
            .detail_column > a
            {
                margin-top: 20px;
            }
            .button_link
            {
                background-color: #00b567;
                color: #FFFFFF;
                display: inline-block;
                padding: 5px 20px;
                font-family: calibri;
                text-decoration: none;
            }
            #footer
            {
                height: 50px;
                margin-top: 50px;
                padding-top: 30px;
            }
            #footer > span
            {
                color: #FFFFFF;
                margin-left: 50px;
            }
            #footer > a
            {
                color: #FFFFFF;
                margin-left: 500px;
            }
        </style>
    </head>
    <body>
        <div id='header'>
            <h1>Correa Consultores</h1>
            <a href='/' id='header_home' class='text_link'>Inicio</a>
            <a href='/portafolio' id='header_briefcase' class='text_link'>Portafolio</a>
            <a href='/cotizar' id='header_prize' class='text_link'>Cotizar</a>
        </div>
        <div id='content'>
            <img src='/home-building.jpg' id='main_image' />
            <div id='main_content'>
                <p><strong>Correa Consultores</strong> es una agencia de desarrollo web. Hacemos el sitio web que necesites a tu medida.</p>
                <p id='second_p'>Si necesitas que trabajemos en tu proyecto, escríbenos un correo a <a href='mailto:ismael.correa.castro@gmail.com' class='text_link'>ismael.correa.castro@gmail.com</a> y te haremos un presupuesto.</p>
            </div>
        </div>
        <div id='detail'>
            <div class='detail_column'>
                <img src='/icon-functionality.png' />
                <p>Todos nuestros trabajos pueden tener cualquier número de funcionalidades.</p>
                <a href='/ejemplos-funcionalidad' class='button_link'>Ver ejemplos</a>
            </div>
            <div class='detail_column'>
                <img src='/icon-graphic-design.png' />
                <p>Cada uno de nuestros trabajos tiene un buen acabado gráfico.</p>
                <a href='/ejemplos-graficos' class='button_link'>Ver ejemplos</a>
            </div>
            <div class='detail_column'>
                <img src='/icon-originality.png' />
                <p>Hacemos trabajos originales que destaquen por su creatividad.</p>
                <a href='/ejemplos-originalidad' class='button_link'>Ver ejemplos</a>
            </div>
        </div>
        <div id='footer'>
            <span>© 2020 Todos los derechos reservados</span>
            <a href='/contacto' class='text_link'>Contacto</a>
        </div>
    </body>
</html>
