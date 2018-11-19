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
        <link rel="stylesheet" type="text/css" href="css/main.css"/>

        
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- <script type="text/javascript" src="js/public/main.js"></script> -->

        <script>
                $(document).ready(function(){
                    $("img").bind("contextmenu", function(e) {
                        return false;
                    });
                    // $("img").addClass('watermark');
                    $('img').click(function(event) {
                        window.alert("<?php echo $dont_copy ?>");
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
                    $('.portfolio .square').addClass('animated slideInUp delay-1s');
                   
                });
        </script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">Esteemedhelga</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="#about" class="nav-link">About Me</a></li>
                        <li class="nav-item"><a href="#portfolio" class="nav-link">My Portfolio</a></li>
                        <li class="nav-item"><a href="#contact" class="nav-link">Contact Me</a></li>
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
                    <a name="about"></a>
                    <section class="row about">
                        <div class="col-md-4">
                            <div class="square">
                                <img src="images/about.jpg" class="img-fluid" title="Photography Copyright 2018 Esteemedhelga E.D.W.W." alt="Photography Copyright 2018, Esteemedhelga E.D.W.W.">
                            </div>  
                        </div>
                        <div class="col-md-8">
                            <h2>A Bit About Me</h2>
                            <p>
                                Hello and welcome. "Who are you," you ask? I see myself as a coastal-country personality. 
                                I enjoy nature, gardens, parks and wildlife. This interest/love in the environment has 
                                provided considerable inspiration in my, "artistic endeavors."
    
                                I have a theatre (historian) degree from an accredited college in the heart of the 
                                beautiful Appalachian Mountains/New River Valley and have tooled in many venues: 
                                Historian - Photographer - Writer - Poet - Documentaries - Chronicler - Archivist - 
                                Curator - Information Specialist - Proud Geek 24/7 - Day Dreamer.
                            </p>
                    </div>
                    </section>

                    <a name="portfolio"></a>
                    <section class="row portfolio">
                        <div class="col-12">
                        <h2>My Portfolio</h2>
                        </div>
                        
                        <?php for ($i=1; $i<9; $i++) { ?>
                            <div class="col-md-3">
                                <div class="square">
                                <img src="images/portfolio/portfolio<?php echo $i ?>.jpg" class="img-fluid" alt="Portfolio Image">
                                </div>
                            </div>
                        <?php } ?>
                    </section>

                    <a name="contact"></a>
                    <section class="row contact">
                        <div class="col-md-8">
                            <h2>Contact Me</h2>
                            <p>words go here words go here words go here words go here words go here words go here words go here words go here words go here words go here words go here words go here words go here words go here </p>
                            <!-- <div class="square">
                                <img src="images/logo.jpg" class="img-fluid">
                            </div> -->
                        </div>
                        <div class="col-md-4 contacts">
                            <ul>
                                <li>Email - <a href="mailto:email@email.com">email@email.com</a></li>
                                <li>sdjf ds fnkaadsjhf </li>
                                <li>sdjf ds fnkaadsjhf </li>
                            </ul>   
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
                                <li class="list-inline-item"><a href="https://twitter.com/Esteemedhelga" target="new"><i class="fab fa-2x fa-twitter-square"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.facebook.com/esteemedhelga/" target="new"><i class="fab fa-2x fa-facebook-square"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.instagram.com/esteemedhelga/" target="new"><i class="fab fa-2x fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>