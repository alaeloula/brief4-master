<?php 
session_start();
if (!$_SESSION['login']) {
    header("Location: ./login.php");
    exit();
}
include 'config.php';
function prod_temp($id, $nom, $desc, $qtty, $prix, $img)
{
    return "<div class='card' style='width: 18rem;'>
        <img src='$img' class='card-img-top' alt='...'>
        <div class='card-body'>
            <h5 class='card-title'>$nom</h5>
            <p class='card-text'>$desc</p>
            <p> <span class='prixQu' style='margin-right: 70%; font-weight: 800;'> $prix <span style='color: orange;'>$</span></span> <span style='font-weight: 800;'> x$qtty </span></p>
            <div class='gaping text-start' style='display: flex; justify-content: space-between;'>
                <a href='#' class='btn btn-outline-light'>Purchase</a>
                <a href='#' class='btn btn-outline-light'>Add to cart</a>
            </div>
        </div>
    </div>";
}



?>
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- icons -->
    <script src="https://kit.fontawesome.com/c123859339.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="backg cen">
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

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categorie
                            </a>
                            <?php
                            $sql = "SELECT * FROM `categorie` ";
                            $resultat = $connect->prepare($sql);
                            $resultat->execute();
                            $row = $resultat->fetchAll();

                            ?>
                            <ul class="dropdown-menu">
                                <?php
                                foreach ($row as $key) {
                                    $id = $key['id'];
                                ?>
                                    <li><a class="dropdown-item" href="filtre.php?id=<?= $id ?>"><?= $key['nom'] ?></a></li>
                                <?php } ?>
                                
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">All Categories</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                    <div class="text-end ">
                        <a class="nav-link deco" href="deconnexion.php" style="margin-left: 30px;">Deconnexion</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Fin de barre de navigation -->
        <span>.</span>
        <section class="trending">
            <h1>Trending</h1>
            <div class="cadre">
                <div class="allcards">
                    <div class="card" style="width: 18rem; align-items: center;">
                        <img src="images/abhipsa-pal-ILra9AOaXOE-unsplash-removebg-preview.png" class="card-img-top" alt="..." style="width: 17rem;">
                        <div class="card-body">
                            <h5 class="card-title">Title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p> <span class="prixQu" style="margin-right: 70%; font-weight: 800;"> 100 <span style="color: orange;">$</span></span> <span style="font-weight: 800;"> x12 </span></p>
                            <div class="gaping text-start" style="display: flex; justify-content: space-between;">
                                <a href="#" class="btn btn-outline-light">Purchase</a>
                                <a href="#" class="btn btn-outline-light">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem; align-items: center;">
                        <img src="images/abhipsa-pal-ILra9AOaXOE-unsplash-removebg-preview.png" class="card-img-top" alt="..." style="width: 17rem;">
                        <div class="card-body">
                            <h5 class="card-title">Title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p> <span class="prixQu" style="margin-right: 70%; font-weight: 800;"> 100 <span style="color: orange;">$</span></span> <span style="font-weight: 800;"> x12 </span></p>
                            <div class="gaping text-start" style="display: flex; justify-content: space-between;">
                                <a href="#" class="btn btn-outline-light">Purchase</a>
                                <a href="#" class="btn btn-outline-light">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem; align-items: center;">
                        <img src="images/abhipsa-pal-ILra9AOaXOE-unsplash-removebg-preview.png" class="card-img-top" alt="..." style="width: 17rem;">
                        <div class="card-body">
                            <h5 class="card-title">Title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p> <span class="prixQu" style="margin-right: 70%; font-weight: 800;"> 100 <span style="color: orange;">$</span></span> <span style="font-weight: 800;"> x12 </span></p>
                            <div class="gaping text-start" style="display: flex; justify-content: space-between;">
                                <a href="#" class="btn btn-outline-light">Purchase</a>
                                <a href="#" class="btn btn-outline-light">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Products -->
        <!-- <section class="Products" id="Products">
            <h1>Products</h1>
            <div class="cadre">
                <div class="allcards">
                    <div class="card" style="width: 18rem; align-items: center;">
                        <img src="images/abhipsa-pal-ILra9AOaXOE-unsplash-removebg-preview.png" class="card-img-top" alt="..." style="width: 17rem;">
                        <div class="card-body">
                            <h5 class="card-title">Title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p> <span class="prixQu" style="margin-right: 70%; font-weight: 800;"> 100 <span style="color: orange;">$</span></span> <span style="font-weight: 800;"> x12 </span></p>
                            <div class="gaping text-start" style="display: flex; justify-content: space-between;">
                                <a href="#" class="btn btn-outline-light">Purchase</a>
                                <a href="#" class="btn btn-outline-light">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem; align-items: center;">
                        <img src="images/abhipsa-pal-ILra9AOaXOE-unsplash-removebg-preview.png" class="card-img-top" alt="..." style="width: 17rem;">
                        <div class="card-body">
                            <h5 class="card-title">Title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p> <span class="prixQu" style="margin-right: 70%; font-weight: 800;"> 100 <span style="color: orange;">$</span></span> <span style="font-weight: 800;"> x12 </span></p>
                            <div class="gaping text-start" style="display: flex; justify-content: space-between;">
                                <a href="#" class="btn btn-outline-light">Purchase</a>
                                <a href="#" class="btn btn-outline-light">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem; align-items: center;">
                        <img src="images/abhipsa-pal-ILra9AOaXOE-unsplash-removebg-preview.png" class="card-img-top" alt="..." style="width: 17rem;">
                        <div class="card-body">
                            <h5 class="card-title">Title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p> <span class="prixQu" style="margin-right: 70%; font-weight: 800;"> 100 <span style="color: orange;">$</span></span> <span style="font-weight: 800;"> x12 </span></p>
                            <div class="gaping text-start" style="display: flex; justify-content: space-between;">
                                <a href="#" class="btn btn-outline-light">Purchase</a>
                                <a href="#" class="btn btn-outline-light">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="allcards">
                    <div class="card" style="width: 18rem; align-items: center;">
                        <img src="images/abhipsa-pal-ILra9AOaXOE-unsplash-removebg-preview.png" class="card-img-top" alt="..." style="width: 17rem;">
                        <div class="card-body">
                            <h5 class="card-title">Title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p> <span class="prixQu" style="margin-right: 70%; font-weight: 800;"> 100 <span style="color: orange;">$</span></span> <span style="font-weight: 800;"> x12 </span></p>
                            <div class="gaping text-start" style="display: flex; justify-content: space-between;">
                                <a href="#" class="btn btn-outline-light">Purchase</a>
                                <a href="#" class="btn btn-outline-light">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem; align-items: center;">
                        <img src="images/abhipsa-pal-ILra9AOaXOE-unsplash-removebg-preview.png" class="card-img-top" alt="..." style="width: 17rem;">
                        <div class="card-body">
                            <h5 class="card-title">Title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p> <span class="prixQu" style="margin-right: 70%; font-weight: 800;"> 100 <span style="color: orange;">$</span></span> <span style="font-weight: 800;"> x12 </span></p>
                            <div class="gaping text-start" style="display: flex; justify-content: space-between;">
                                <a href="#" class="btn btn-outline-light">Purchase</a>
                                <a href="#" class="btn btn-outline-light">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem; align-items: center;">
                        <img src="images/abhipsa-pal-ILra9AOaXOE-unsplash-removebg-preview.png" class="card-img-top" alt="..." style="width: 17rem;">
                        <div class="card-body">
                            <h5 class="card-title">Title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p> <span class="prixQu" style="margin-right: 70%; font-weight: 800;"> 100 <span style="color: orange;">$</span></span> <span style="font-weight: 800;"> x12 </span></p>
                            <div class="gaping text-start" style="display: flex; justify-content: space-between;">
                                <a href="#" class="btn btn-outline-light">Purchase</a>
                                <a href="#" class="btn btn-outline-light">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="allcards">
                    <div class="card" style="width: 18rem; align-items: center;">
                        <img src="images/abhipsa-pal-ILra9AOaXOE-unsplash-removebg-preview.png" class="card-img-top" alt="..." style="width: 17rem;">
                        <div class="card-body">
                            <h5 class="card-title">Title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p> <span class="prixQu" style="margin-right: 70%; font-weight: 800;"> 100 <span style="color: orange;">$</span></span> <span style="font-weight: 800;"> x12 </span></p>
                            <div class="gaping text-start" style="display: flex; justify-content: space-between;">
                                <a href="#" class="btn btn-outline-light">Purchase</a>
                                <a href="#" class="btn btn-outline-light">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem; align-items: center;">
                        <img src="images/abhipsa-pal-ILra9AOaXOE-unsplash-removebg-preview.png" class="card-img-top" alt="..." style="width: 17rem;">
                        <div class="card-body">
                            <h5 class="card-title">Title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p> <span class="prixQu" style="margin-right: 70%; font-weight: 800;"> 100 <span style="color: orange;">$</span></span> <span style="font-weight: 800;"> x12 </span></p>
                            <div class="gaping text-start" style="display: flex; justify-content: space-between;">
                                <a href="#" class="btn btn-outline-light">Purchase</a>
                                <a href="#" class="btn btn-outline-light">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem; align-items: center;">
                        <img src="images/abhipsa-pal-ILra9AOaXOE-unsplash-removebg-preview.png" class="card-img-top" alt="..." style="width: 17rem;">
                        <div class="card-body">
                            <h5 class="card-title">Title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p> <span class="prixQu" style="margin-right: 70%; font-weight: 800;"> 100 <span style="color: orange;">$</span></span> <span style="font-weight: 800;"> x12 </span></p>
                            <div class="gaping text-start" style="display: flex; justify-content: space-between;">
                                <a href="#" class="btn btn-outline-light">Purchase</a>
                                <a href="#" class="btn btn-outline-light">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-outline-light" type="submit" style="width: 150px; height: 50px;">See More</button>
        </section> -->
        <section class="trending" id="Products">
            <h1>Products</h1>
            <div class="cadre text-center">
                <div class="allcards">
                    <?php
                    $sql1 = "SELECT * FROM `produit`";
                    $resultat1 = $connect->prepare($sql1);
                    $resultat1->execute();
                    $row1 = $resultat1->fetchAll();
                    foreach ($row1 as $key) {
                        $id = $key['id'];
                        echo prod_temp($key['id'], $key['nom'], $key['description'], $key['qte'], $key['prix'], $key['image']);
                    }
                    ?>

                </div>
                <!-- <button class="btn btn-outline-light" type="submit" style="width: 150px; height: 50px; margin-bottom: 20px;">See More</button> -->
        </section>
        <!-- End of products -->


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

</html>