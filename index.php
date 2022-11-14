<?php
session_start();
if (!$_SESSION['login']) {
    header("Location: ./login.php");
    exit();
}
include 'config.php'; ?>
<?php include 'header.php'; 
?>
<div class="backg">
    <div class="first-page">
        <div class="text-box">
            <h1>
                Play With Us
            </h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> A assumenda delectus aliquid.
            </p>
            <button class="btn btn-outline-light" type="submit">Start Now</button>
        </div>
        <div class="taille">
            <img src="images/vadim-bogulov-ZHFIR2oAPnM-unsplash-removebg-preview.png" class="img-thumbnail bg" alt="error">
        </div>
    </div>



    <section class="second-section">
        <h1>Top Products</h1>
        <div class="allcards">
            <div class="card" style="width: 18rem; align-items: center;">
                <img src="images/abhipsa-pal-ILra9AOaXOE-unsplash-removebg-preview.png" class="card-img-top" alt="..." style="width: 17rem;">
                <div class="card-body">
                    <h5 class="card-title">Title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-light">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem; align-items: center;">
                <img src="images/abhipsa-pal-ILra9AOaXOE-unsplash-removebg-preview.png" class="card-img-top" alt="..." style="width: 17rem;">
                <div class="card-body">
                    <h5 class="card-title">Title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-light">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem; align-items: center;">
                <img src="images/abhipsa-pal-ILra9AOaXOE-unsplash-removebg-preview.png" class="card-img-top" alt="..." style="width: 17rem;">
                <div class="card-body">
                    <h5 class="card-title">Title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-light">Go somewhere</a>
                </div>
            </div>
        </div>
    </section>
        <?php include 'footer.php'; ?>