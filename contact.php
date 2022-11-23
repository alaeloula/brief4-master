<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vigors</title>

     <!-- Poppins Font -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="style.Css">
    <link rel="stylesheet" href="contact.Css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- icons -->
    <script src="https://kit.fontawesome.com/c123859339.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="backg">
        <!-- Barre de navigation -->
        <nav class="navbar navbar-expand-lg bg-dark" style="position: fixed; width:100%; z-index: 2;">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="Gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="admin.php">Products</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        
                        
                        </li>
                    </ul>
                    <div class="text-end ">
                        <a class="nav-link deco" href="#">Deconnexion</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Fin de barre de navigation -->
        <span>.</span>
        
        <section class="location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53963
            .13911239477!2d-9.271712225962538!3d32.293145072739826!2m3!1f0!2f0!3f0!3
            m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac212049843597%3A0x6b618c47dfd85d40!
            2sSafi!5e0!3m2!1sfr!2sma!4v1649555341132!5m2!1sfr!2sma" width="600" height="450" 
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-
            when-downgrade"></iframe>
        </section>

        <section class="contactez-nous">
            <div class="row">
                <div class="contact-col">
                    <div>
                        <i class="fa fa-home"></i>
                        <span>
                            <h5>Jabal Tarik, Oued El Bacha</h5>
                            <p>Safi, Morocco</p>
                        </span>
                    </div>
                    <div>
                        <i class="fa fa-phone"></i>
                        <span>
                            <h5>+212 632367208</h5>
                            <p>Lundi au Samedi, 10AM au 6PM</p>
                        </span>
                    </div>
                    <div>
                        <i class="fa fa-envelope-o"></i>
                        <span>
                            <h5>adresse@gmail.com</h5>
                            <p>Envoyer un email</p>
                        </span>
                    </div>
                </div>
                <div class="contact-col">
                    <form action="">
                        <input type="text" class="ct" placeholder="Entrez Votre Nom" required>
                        <input type="email" class="ct" placeholder="Entrez Votre Email" required>
                        <input type="text" class="ct" placeholder="Entrez Votre Sujet" required>
                        <textarea rows="8" class="ct" placeholder="Message" required></textarea>
                        <button type="submit" class="btn1 orange-btn">Envoyer</button>
                    </form>
                </div>
            </div>
        </section>

        <hr>
        <section class="footer">
            <section class="footer-part1">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body" style="background: transparent;">
                                <h5 class="card-title">Contact Us</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-outline-light">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body" style="background: transparent;">
                                <h5 class="card-title">Visit Us</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-outline-light">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="footer-part2">
                    <h4>Follow Us</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias voluptatum <br> dolorem eum praesentium facilis at vel quisquam incidunt illo tempora, eos consequuntur</p>
                    <div class="icons">
                        <a href=""><i class="fa fa-facebook ic2"></i></a>
                        <a href=""><i class="fa fa-twitter ic2"></i></a>
                        <a href=""><i class="fa fa-linkedin ic2"></i></a>
                    </div>
                    <section class="container-fluid footer_section">
                        <p>
                        &copy; <span id="displayYear">2022</span> All Rights Reserved 
                        </p>
                    </section>
            </section>
        </section>

    </div>
</body>
