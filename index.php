<?php include_once ("configs.php"); ?>
<!DOCTYPE html>
    <head>
        <!--Website by Jen Daniels-Knuuti of WickedKitten.com for E.D.W.W.-->
        <title>Esteemedhelga Artwork Design</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="css/reset.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=EB+Garamond|Oswald">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" type="text/css" href="css/main.css"/>

        
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <!-- <script type="text/javascript" src="js/public/main.js"></script> -->

        <script>
                $(document).ready(function(){
                    AOS.init();

                    $(".galleryImage").bind("contextmenu", function(e) {
                        return false;
                    });

                    $(".galleryImage").mousedown(function(event) {
                        window.alert("<?php echo $dont_copy_js ?>");
                    });
                    
                    $(window).scroll(function(){
                        var bottomOfHero = $(".hero-image").position().top + $(".hero-image").outerHeight(true) - $("nav").height();
                        if ($(window).scrollTop() <= bottomOfHero){
                            $("nav").addClass("bg_transparentWhite").removeClass("smallMenu");                        
                        }
                        else{
                            $("nav").removeClass("bg_transparentWhite").addClass("smallMenu");
                        }
                    });
                   
                    $(".galleryImage").append($("<p>").html("edww"));
                   
                });
        </script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">EDWW day_dae (Esteemedhelga) &trade;</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="#about" class="nav-link">Welcome</a></li>
                        <li class="nav-item"><a href="#gallery" class="nav-link">Gallery</a></li>
                        <li class="nav-item"><a href="#contact" class="nav-link">Artistry Warehouse</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="content">
            <div class="hero-image">
                <div class="hero-text">
                    <h1>Esteemedhelga </h1>
                    <h2>Artwork Design</h2>
                </div>
            </div>
        
            <main>
                <div class="container">
                    <a name="about" class="anchor"></a>
                    <section class="row about">
                        <div class="col-md-4">
                            <div class="square">
                                <img src="images/about.jpg" class="img-fluid" title="Photography Copyright 2018 Esteemedhelga E.D.W.W." alt="Photography Copyright 2018, Esteemedhelga E.D.W.W.">
                            </div>  
                        </div>
                        <div class="col-md-8">
                            <h2>Hello & Welcome!</h2>
                            <p>
                            "Who are you," you ask? I see myself as a coastal-country personality. I enjoy nature, gardens, parks and wildlife. This interest/love in the environment has provided considerable inspiration in my, "artistic endeavors." I have a Visual and Performing Arts degree from an accredited college in the heart of the beautiful Appalachian Mountains/New River Valley and have tooled in many venues: Historian - Photographer - Writer - Poet - Documentaries - Chronicler - Archivist - Curator - Information Specialist - Proud Geek 24/7 - Day Dreamer.
                            </p>
                    </div>
                    </section>

                    <a name="gallery" class="anchor"></a>
                    <section class="row gallery">
                        <div class="col-12">
                            <h2>E.D.W.W. Gallery</h2>
                        </div>

                        <?php for ($i=1; $i<9; $i++) { ?>
                            <div class="col-md-3">
                                <div id="galleryImage<?php echo $i ?>" class="square galleryImage" data-aos="fade-up" data-aos-delay="<?php echo $i ?>00"></div>
                                <script>
                                    $("#galleryImage<?php echo $i ?>").css("background-image", "url('images/gallery/gallery<?php echo $i?>.jpg')");
                                    // .css("animation-delay", "<?php echo ($i * .25)?>s")
                                </script>
                            </div>
                        <?php } ?>
                    </section>

                    <a name="contact" class="anchor"></a>
                    <section class="contact">
                        <div class="row">
                            <div class="col-12">
                                <h2>Photography/Artistry Warehouse</h2>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-2"><i class="fab fa-flickr"></i><a href="http://flickr.com/photos/esteemedhelga" target="new">Flickr</a></div>
                            <div class="col-md-2"><i class="fab fa-youtube"></i><a href="http://youtube.com/user/esteemedhelga/videos" target="new">YouTube</a></div>
                            <div class="col-md-2"><i class="fab fa-twitter"></i><a href="http://twitter.com/Esteemedhelga" target="new">Twitter</a></div>
                            <div class="col-md-2"><i class="fab fa-google-plus"></i><a href="http://plus.google.com/+EDWWdaydaeEsteemedhelga" target="new">Google Plus</a></div>
                            <div class="col-md-2"><a href="http://inktale.com/esteemedhelga-planet" target="new">Inktale (purchase)</a></div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-2"><i class="fab fa-instagram"></i><a href="http://instagram.com/esteemedhelga" target="new">Instagram</a></div>
                            <div class="col-md-2"><i class="fab fa-pinterest"></i><a href="http://pinterest.com/esteemedhelga" target="new">Pinterest</a></div>
                            <div class="col-md-2"><i class="fab fa-facebook"></i><a href="http://facebook.com/esteemedhelga" target="new">Facebook</a></div>
                            <div class="col-md-2"><i class="fab fa-tumblr"></i><a href="http://esteemedhelga.tumblr.com/" target="new">Tumblr</a></div>
                            <div class="col-md-2"><a href="http://blurb.com/user/day_dae" target="new">Blurb (purchase)</a></div>
                        </div>
                    </section>
                </div>
            </main>

            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <p><?php echo $dont_copy ?></p>
                        </div>
                        <!-- <div class="col-md-4">

                        </div> -->
                        <div class="col-md-4 text-right">
                            <ul class="list-inline ml-auto">
                                <li class="list-inline-item"><a href="http://twitter.com/Esteemedhelga" target="new"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="http://facebook.com/esteemedhelga" target="new"><i class="fab fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="http://instagram.com/esteemedhelga" target="new"><i class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="http://youtube.com/user/esteemedhelga/videos" target="new"><i class="fab fa-youtube"></i></a></li>
                                <li class="list-inline-item"><a href="http://pinterest.com/esteemedhelga" target="new"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>