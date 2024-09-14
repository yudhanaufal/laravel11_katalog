<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Catalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .custom-card {
            /* Customize the card size here */
            width: 100%;
            max-width: 250px; /* Optional: You can adjust the max width */
        }
        /* Optional: Spacing between cards for small screens */
        @media (max-width: 360px) {
            .custom-card {
                max-width: 100%; /* Ensure cards use full width in their column on small screens */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-light">
            <div class="container-fluid justify-content-center">
                <a class="navbar-brand" href="#">
                    <img src="img/logo.png" alt="" width="50" height="50" class="d-inline-block align-text-top">
                </a>
                <a class="navbar-brand ms-2" style="font-size: 14px;" href="#">RPA Frost</a>
                <a class="navbar-brand ms-2" style="font-size: 14px;" href="#">Home</a>
                <a class="navbar-brand ms-2" style="font-size: 14px;" href="#">Product</a>
            </div>
        </nav>
    </div>

    <div class="container my-4">
        <div id="carouselExampleControls" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/nugget.jpeg" class="d-block w-100" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="img/placeholder2.jpeg" class="d-block w-100" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img src="img/placeholder3.jpeg" class="d-block w-100" alt="Third slide">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container my-4">
        <div class="row justify-content-center gx-4">
            <div class="col-6 col-lg-3 d-flex justify-content-center mb-4">
                <div class="card custom-card">
                    <img src="img/nugget.jpeg" class="card-img-top" alt="Nugget">
                    <div class="card-body">
                        <h5 class="card-title">Nugget 1</h5>
                        <a href="#" class="btn btn-primary">More Product</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 d-flex justify-content-center mb-4">
                <div class="card custom-card">
                    <img src="img/nugget.jpeg" class="card-img-top" alt="Nugget">
                    <div class="card-body">
                        <h5 class="card-title">Nugget 2</h5>
                        <a href="#" class="btn btn-primary">More Product</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 d-flex justify-content-center mb-4">
                <div class="card custom-card">
                    <img src="img/nugget.jpeg" class="card-img-top" alt="Nugget">
                    <div class="card-body">
                        <h5 class="card-title">Nugget 3</h5>
                        <a href="#" class="btn btn-primary">More Product</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 d-flex justify-content-center mb-4">
                <div class="card custom-card">
                    <img src="img/nugget.jpeg" class="card-img-top" alt="Nugget">
                    <div class="card-body">
                        <h5 class="card-title">Nugget 4</h5>
                        <a href="#" class="btn btn-primary">More Product</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
