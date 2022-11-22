<?php 
session_start();
if (!$_SESSION['login']) {
    header("Location: ./login.php");
    exit();
}
include 'config.php'; ?>
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

    <link rel="stylesheet" href="admin.Css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- icons -->
    <script src="https://kit.fontawesome.com/c123859339.js" crossorigin="anonymous"></script>
</head>

<body>
    <span></span>
    
    <div class="backg cen">
        <!-- Barre de navigation -->
        <!-- style="position: fixed; width:100%; z-index: 2;" -->
        <nav class="navbar navbar-expand-lg bg-dark fixed-top" >
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
                            <a class="nav-link" href="#">Contact</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categorie
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Phone</a></li>
                                <li><a class="dropdown-item" href="#">Console</a></li>
                                <li><a class="dropdown-item" href="#">Laptop</a></li>
                                <li><a class="dropdown-item" href="#">PC</a></li>
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
        <br><br>
        <?php 
    if(isset($_SESSION['modifierpd'])){
        echo $_SESSION['modifierpd'];
        $_SESSION['modifierpd']="";
    }
    ?>
    <?php 
    if(isset($_SESSION['modifiercat'])){
        echo $_SESSION['modifiercat'];
        $_SESSION['modifiercat']="";
    }
    ?>
    <?php 
    if(isset($_SESSION['deletepd'])){
        echo $_SESSION['deletepd'];
        $_SESSION['deletepd']="";
    }
    ?>
    <?php 
    if(isset($_SESSION['deletecat'])){
        echo $_SESSION['deletecat'];
        $_SESSION['deletecat']="";
    }
    ?>
    <?php 
    if(isset($_SESSION['ajouterpd'])){
        echo $_SESSION['ajouterpd'];
        $_SESSION['ajouterpd']="";
    }
    ?>
    <?php 
    if(isset($_SESSION['ajoutercat'])){
        echo $_SESSION['ajoutercat'];
        $_SESSION['ajoutercat']="";
    }
    ?>
        <div class="Buttons">
            <button class="btn btn-outline-light" type="submit" style="width: 150px; height: 50px;" onclick="ajoutP()">Add Product</button>
            <button class="btn btn-outline-light" type="submit" style="width: 150px; height: 50px;" onclick="ajoutC()">Add Category</button>
            <button class="btn btn-outline-light" type="submit" style="width: 150px; height: 50px;" onclick="modifierC()">Edit Category</button>
            <button class="btn btn-outline-light" type="submit" style="width: 170px; height: 50px;" onclick="supprimerC()">Delete Category</button>
        </div>

        <!-- Add Product -->
        <div class="operation op1" id="ajouterProd">
            <h1 style="font-size: 40px;">Add Product</h1>
            <form class="row g-3" action="trtpd.php" method="post" enctype="multipart/form-data" novalidate>
                <div class="col-md-4">
                    <label for="validationDefault01" class="form-label">Title</label>
                    <input type="text" class="form-control" id="validationDefault01" value="" name="nom" required style="border: 1px solid;">
                </div>
                <div class="col-md-4 mt-5">
                    <label for="" class="form-label">IMAGE</label>
                    <input type="file" name="fileToUpload" class="form-control" id="fileToUpload" required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault01" class="form-label">description</label>
                    <input type="text" class="form-control" id="validationDefault01" value="" name="description" required style="border: 1px solid;">
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Prix</label>
                    <input type="text" class="form-control" id="validationDefault02" value="" name="prix" required style="border: 1px solid;">
                </div>
                <div class="col-md-4">
                    <label for="validationDefaultUsername" class="form-label">Quantity</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="validationDefaultUsername" name="qte" aria-describedby="inputGroupPrepend2" required style="border: 1px solid;">
                    </div>
                </div>
                <?php
                $sql = "SELECT * FROM `categorie` ";
                $resultat = $connect->prepare($sql);
                $resultat->execute();
                $raw = $resultat->fetchAll();

                ?>
                <div class="col-md-3">
                    <label for="validationDefault04" class="form-label">Category</label>
                    <select name="cat" class="form-select" id="validationDefault04" required style="border: 1px solid;">
                        <option selected disabled value="">Select a Category</option>
                        <?php foreach ($raw as $key) {
                            echo "<option value=" . $key['id'] . ">" . $key['nom'] . "</option>";
                        } ?>

                    </select>
                </div>
                <div class="col-12">
                    <button class="btn btn-success" type="submit">Add Product</button>
                </div>
            </form>
        </div>


        <!-- add Category -->
        <div class="operation" id="ajouterCat">
            <h1 style="font-size: 40px;">Add Category</h1>
            <form class="row g-3" action="trtcat.php" method="post">
                <div class="col-md-4">
                    <label for="validationDefault01" class="form-label">Name</label>
                    <input type="text" class="form-control" id="validationDefault01" name="nom" value="" required style="border: 1px solid;">
                </div>
                <div class="col-12">
                    <button class="btn btn-success" type="submit">Add Category</button>
                </div>
            </form>
        </div>


        <!-- Edit Category -->
        <div class="operation" id="modifierCat">
            <h1 style="font-size: 40px;">Edit Category</h1>
            <form action="updatcat.php" method="post" class="row g-3">
                <div class="col-md-3">
                    <label for="validationDefault04" class="form-label">Category</label>
                    <select name="cat" class="form-select" id="validationDefault04" required style="border: 1px solid;">
                        <option selected disabled value="">Select a Category</option>
                        <?php
                        $sql = "SELECT * FROM `categorie` ";
                        $resultat = $connect->prepare($sql);
                        $resultat->execute();
                        $raw = $resultat->fetchAll();
                        foreach ($raw as $key) {
                            echo "<option value=" . $key['id'] . ">" . $key['nom'] . "</option>";
                        }
                        ?>

                    </select>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault01" class="form-label">New Name</label>
                    <input type="text" class="form-control" id="validationDefault01" value="" name="newname" required style="border: 1px solid;">
                </div>
                <div class="col-12">
                    <button class="btn btn-warning" type="submit" style="color: white;">Edit Category</button>
                </div>
            </form>
        </div>

        <!-- Delete Cate -->
        <div class="operation" id="supprimerCat">
            <h1 style="font-size: 40px;">Delete Category</h1>
            <form class="row g-3" method="POST" action="deletecat.php">
                <div class="col-md-3">
                    <label for="validationDefault04" class="form-label">Category</label>
                    <select class="form-select" id="validationDefault04" name="cat" required style="border: 1px solid;">
                    <?php
                        $sql = "SELECT * FROM `categorie` ";
                        $resultat = $connect->prepare($sql);
                        $resultat->execute();
                        $raw = $resultat->fetchAll();
                        foreach ($raw as $key) {
                            echo "<option value=" . $key['id'] . ">" . $key['nom'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-12">
                    <button class="btn btn-danger" type="submit" style="background-color: red;">Delete Category</button>
                </div>
            </form>
        </div>

        <!-- Products -->
        <section class="Products" id="Products">
            <h1>Products</h1>
            <div class="cadre text-center">
                <div class="allcards">
                    <?php
                    $sql1 = "SELECT * FROM `produit`";
                    $resultat1 = $connect->prepare($sql1);
                    $resultat1->execute();
                    $raw1 = $resultat1->fetchAll();
                    foreach ($raw1 as $key) {
                        $id = $key['id'];
                    ?>
                        <div class="card" style="width: 18rem; ">
                            <img src="<?php echo $key['image'] ?>" class="card-img-top" alt="error a boQal" style="width: 17rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $key['nom'] ?></h5>
                                <p class="card-text"><?php echo $key['description'] ?></p>
                                <p> <span class="prixQu" style="margin-right: 70%; font-weight: 800;"> <?php echo $key['prix'] ?> <span style="color: orange;">$</span></span> <span style="font-weight: 800;"> x<?php echo $key['qte'] ?> </span></p>
                                <div class="gaping text-start" style="display: flex; justify-content: space-between;">
                                    <?php echo "<a class='btn btn-outline-success' href='modifierpd.php?id=$id'>Edit</a>" ?>
                                    <?php echo "<a class='btn btn-outline-danger' href='deletepd.php?id=$id'>Delete</a>" ?>
                                    <!-- <a href="#" class="btn btn-outline-success">Edit</a>
                                <a href="#" class="btn btn-outline-danger">Delete</a> -->
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <!-- <button class="btn btn-outline-light" type="submit" style="width: 150px; height: 50px; margin-bottom: 20px;">See More</button> -->
        </section>

        <!-- End of products -->

    
    </div>
    

    <script>
        function ajoutC() {
            var disp = document.getElementsByClassName("operation");
            disp[0].style.display = "none";
            for (let i = 2; i < disp.length; i++) {
                disp[i].style.display = "none";
            }
            document.getElementById("ajouterCat").style.display = "block";
        }

        function ajoutP() {
            var disp = document.getElementsByClassName("operation");
            for (let i = 1; i < disp.length; i++) {
                disp[i].style.display = "none";
            }
            document.getElementById("ajouterProd").style.display = "block";
        }

        function modifierC() {
            var disp = document.getElementsByClassName("operation");
            disp[3].style.display = "none";
            for (let i = 0; i < 2; i++) {
                disp[i].style.display = "none";
            }
            document.getElementById("modifierCat").style.display = "block";
        }

        function supprimerC() {
            var disp = document.getElementsByClassName("operation");
            for (let i = 0; i < 3; i++) {
                disp[i].style.display = "none";
            }
            document.getElementById("supprimerCat").style.display = "block";
        }
    </script>

</body>

</html>