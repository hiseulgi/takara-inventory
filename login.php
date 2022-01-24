<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <title>Takara - Login</title>
</head>

<body>
    <section class="vh-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="card" style="max-width: 720px;">
                    <div class="background"></div>
                    <div class="row foreground">
                        <div class="col-md-8 px-3 justify-content-center align-self-center">
                            <div class="card-body">
                                <div id="card-title">
                                    <h1 class="text-body text-center font-weight-bold mb-3">Takara Inventory</h1>
                                </div>
                                <form method="POST" class="form">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="user" placeholder="Username" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" id="password" placeholder="Password" required>
                                    </div>
                                    <input class="my-3 btn btn-login btn btn-block btn-lg rounded-pill" id="submit-btn" type="submit" name="submit" value="Login" />
                                </form>
                            </div>

                        </div>
                        <div class="col-md-4 my-2 p-3 pr-5 d-md-block d-none">
                            <img src="img/tohru-takara.png" class="card-img" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>