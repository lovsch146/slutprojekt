<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Kapstaden</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="sydafrika.css">
    </head>
    <body>


        <div id="wrapper">
            <div id="header">
                <div id="bildHeader">
                    <img src="img/gepard1.png" alt="gepard">

                </div>
            </div>

            <div id="loga"></div>

            <nav>
                <ul>
                    <li><a id="topleft" href="adminIndex.php">Hem</a></li> 
                    <li><p>Populära städer</p>
                        <ul>
                            <li><a href="adminKapstaden.php">Kapstaden</a></li>
                            <li><a href="adminKrygerparken.php">Krugerparken</a></li>
                        </ul>
                    </li>

                    <li><a href="adminOm.php">Om Sydafrika </a>
                    </li>
                    <li><a id="topright" href="adminKontakta.php">Kontakta</a></li>
                </ul>
            </nav>


            <section>
                <article>
                    <h1>Kapstaden</h1>
                    <div class="kapstadenbild">
                        <img id="kapstaden" src="img/kapstaden.jpg" alt="kapstaden">
                        <img id="kapstaden1" src="img/kapstaden1.jpg" alt="kapstaden1">

                    </div>

                    <div class="article" id="kapstaden4">
                        <img src="img/kapstaden4.jpg" alt="kapstaden4">
                        <form method="POST">
                                <textarea rows="40" cols="27" name="redigera5" form="p5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes</textarea>
                            <input type="submit" name="uppdateraKap1" value="Uppdatera">
                            </form>
                    </div>

                    <div class="article" id="kapstaden2">
                        <img src="img/kapstaden2.jpg" alt="kapstaden2">
                        <form method="POST">
                                <textarea rows="40" cols="27" name="redigera6" form="p6">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes</textarea>
                            <input type="submit" name="uppdateraKap2" value="Uppdatera">
                            </form>
                    </div>


                </article>
            </section>
            <div id="footer"><p>Denna sida är ett skolprojekt, alltså inte tillgänglig.</p></div>




        </div>





    </body>
</html>
