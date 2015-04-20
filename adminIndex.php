<html>
    <head>
        <title>Hem</title>
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
                    <div class="slideshow">
                        <ul>
                            <li><img src="img/giraffslideshow.jpg" alt="slideshow1" height="450"></li>
                            <li><img src="img/vattenslideshow.jpg" alt="slideshow2"></li>
                            <li><img src="img/zebraslideshow.jpg" alt="slideshow3"></li>
                            <li><img src="img/bergslideshow.jpg" alt="slideshow4"></li>
                            <li><img src="img/dimmaslideshow.jpg" alt="slideshow5"></li>
                        </ul>

                    </div>

                    <div class="text">
                        <div class="text1">
                            <img src="img/elefant.jpg" alt="liten">
                            <form method="POST" action="doIndexInlog.php">
                                <textarea rows="40" cols="27" name="redigera1" form="p1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes</textarea>
                            <input type="submit" name="uppdateraInd1" value="Uppdatera">
                            </form> 
                        </div>

                        <div class="text2">
                            <img src="img/bil.jpg" alt="liten">
                            <form method="POST" action="doIndexInlog.php">
                                <textarea rows="40" cols="27" name="redigera2" form="p2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes</textarea>
                            <input type="submit" name="uppdateraInd2" value="Uppdatera">
                            </form>                        
                        </div>

                        <div class="text3">
                            <img src="img/giraff.jpg" alt="liten">
                            <form method="POST" action="doIndexInlog.php">
                                <textarea rows="40" cols="27" name="redigera3" form="p3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes</textarea>
                            <input type="submit" name="uppdateraInd3" value="Uppdatera">
                            </form>
                        </div>

                        <div class="text4">
                            <img src="img/sand.jpg" alt="liten">
                            <form method="POST" action="doIndexInlog.php">
                                <textarea rows="40" cols="27" name="redigera4" form="p4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes</textarea>
                                <input type="submit" name="uppdateraInd4" value="Uppdatera">
                            </form>
                        </div>
                    </div>
                    
                </article>
            </section>
            <!--Kolla logga ut-->
            <div id="footer"><p>Denna sida är ett skolprojekt, alltså inte tillgänglig.
                    <a href="login.php" id="login">Logga ut</a> 
                </p>

            </div>
            </div>

        </div>


        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="http://unslider.com/unslider.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.slideshow').unslider();
            });
        </script>
    </body>

</html>
