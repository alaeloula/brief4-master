<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Register Today</h3>
                        <p>Fill in the data below.</p>
                        <form class="requires-validation" action="trtregister.php" method="post" novalidate>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="cin" placeholder="cin" required>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="fname" placeholder="First Name" required>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="lname" placeholder="last Name" required>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="username" placeholder="UserName" required>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="password" name="password" placeholder="Password" required>
                            </div>


                            <div class="form-button mt-3">
                                <button id="submit" name="register" type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>

