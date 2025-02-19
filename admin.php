<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="jayson p!!" />
    <title>Hanap Usap Build</title>
    <link rel="shortcut icon" type="x-icon" href="./HUB imgs/HUB LOGO up icon.png" />
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Bungee+Tint&family=Dosis:wght@200..800&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,423;1,423&family=New+Amsterdam&family=Roboto:wght@700&display=swap"
        rel="stylesheet" />
    <!--icons-->
    <script src="https://kit.fontawesome.com/f606e8e763.js" crossorigin="anonymous"></script>
    <!--frameworks-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="./admin.css" />
</head>
<!---->
<div class="container-fluid d-flex flex-row adminMainCont">
    <div class="container burger mt-2 ps-0">
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
            aria-controls="offcanvasExample">
            <i class="bi bi-list"></i>
        </button>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header pb-0">
                <a href="#"
                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <img src="./HUB imgs/HUB LOGO 2023.png" class="img-thumbnail bi pe-none me-2 logo" width="60"
                        height="60" alt="logo" />
                    <span class="fs-5 hub">Hanap Usap Build</span>
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body pt-0">
                <hr />
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link active" aria-current="page">
                            <i class="bi bi-speedometer2 pe-none me-2" width="16" height="16"></i>

                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-body-emphasis">
                            <i class="bi bi-grid pe-none me-2" width="16" height="16"></i>
                            All Categories
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-body-emphasis">
                            <i class="bi bi-box pe-none me-2" width="16" height="16"></i>
                            All Products
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-body-emphasis">
                            <i class="bi bi-plus-circle pe-none me-2" width="16" height="16"></i>
                            Add Category
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-body-emphasis">
                            <i class="bi bi-plus-circle pe-none me-2" width="16" height="16"></i>
                            Add Products
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-body-emphasis">
                            <i class="bi bi-basket pe-none me-2" width="16" height="16"></i>
                            Orders
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-body-emphasis">
                            <i class="bi bi-archive pe-none me-2" width="16" height="16"></i>
                            Order Generator Module
                        </a>
                    </li>
                </ul>
                <hr />
                <div class="dropdown mt-3">
                    <a href="#"
                        class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="./icon img/hamster.gif" alt="profile" width="32" height="32"
                            class="rounded-circle me-2" />
                        <strong>user</strong>
                    </a>
                    <ul class="dropdown-menu text-small shadow">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" id="sidebar" style="width: 280px; height: 100vh">
        <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <img src="./HUB imgs/HUB LOGO 2023.png" class="img-thumbnail bi pe-none me-2 logo" width="60" height="60"
                alt="logo" />
            <span class="fs-5 hub">Hanap Usap Build</span>
        </a>
        <hr />
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link active" aria-current="page">
                    <i class="bi bi-speedometer2 pe-none me-2" width="16" height="16"></i>

                    Dashboard
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-body-emphasis">
                    <i class="bi bi-grid pe-none me-2" width="16" height="16"></i>
                    All Categories
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-body-emphasis">
                    <i class="bi bi-box pe-none me-2" width="16" height="16"></i>
                    All Products
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-body-emphasis">
                    <i class="bi bi-plus-circle pe-none me-2" width="16" height="16"></i>
                    Add Category
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-body-emphasis">
                    <i class="bi bi-plus-circle pe-none me-2" width="16" height="16"></i>
                    Add Products
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-body-emphasis">
                    <i class="bi bi-basket pe-none me-2" width="16" height="16"></i>
                    Orders
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-body-emphasis">
                    <i class="bi bi-archive pe-none me-2" width="16" height="16"></i>
                    Order Generator Module
                </a>
            </li>
        </ul>
        <hr />
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img src="./icon img/hamster.gif" alt="profile" width="32" height="32" class="rounded-circle me-2" />
                <strong>user</strong>
            </a>
            <ul class="dropdown-menu text-small shadow">
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
    </div>

    <div class="content container-fluid"></div>
</div>

<!--scripts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>