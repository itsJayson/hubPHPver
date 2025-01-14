<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="jayson p!!!" />
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
    <link rel="stylesheet" href="./styles.css" />
</head>

<body>
    <!--navbar-->
    <nav></nav>
    <!--header-->
    <header></header>

    <!--categories-->
    <div class="d-lg-none sticky-top">
        <div class="dropdown dropDownMainCateg">
            <button class="btn dropdown-toggle w-100 mb-2 mx-2 dropDown dropButton" type="button" id="navbarDropdown"
                data-bs-toggle="dropdown" aria-expanded="false">
                Product & Services
            </button>
            <ul class="dropdown-menu w-100 mx-2" aria-labelledby="navbarDropdown">
                <li>
                    <a class="dropdown-item navbarItems ProdFont" href="#">Desktop Packages</a>
                </li>
                <li>
                    <a class="dropdown-item navbarItems ProdFont" href="#">Peripherals</a>
                </li>
                <li>
                    <a class="dropdown-item navbarItems ProdFont" href="#">Computer Components</a>
                </li>
                <li>
                    <a class="dropdown-item navbarItems ProdFont" href="#">Intel Builder</a>
                </li>
                <li>
                    <a class="dropdown-item navbarItems ProdFont" href="#">Amd Builder</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="divider col-auto col-lg-auto">
        <div class="list-group prodCategBig">
            <h2 class="list-group-item bgcolor" aria-current="true">
                Product & Services
            </h2>
            <a href="#" class="list-group-item list-group-item-action ProdFont">Desktop Packages
            </a>
            <a href="#" class="list-group-item list-group-item-action ProdFont">Peripherals
            </a>
            <a href="#" class="list-group-item list-group-item-action ProdFont">Computer Components</a>
            <a href="#" class="list-group-item list-group-item-action ProdFont">Intel Builder</a>
            <a href="#" class="list-group-item list-group-item-action ProdFont">Amd Builder</a>
        </div>
        <!--carousel-->
        <div id="carouselExampleAutoplaying" class="carousel slide carouselCont" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img loading="eager" src="./HUB imgs/HUBposter.jpg" class="d-block w-100" alt="HUB POSTER" />
                </div>
                <div class="carousel-item">
                    <img loading="eager" src="./product img/carousel photo/carousel img.jpg" class="d-block w-100"
                        alt="Graphics Card" />
                </div>
                <div class="carousel-item">
                    <img loading="eager" src="./product img/carousel photo/carousel img2.jpg" class="d-block w-100"
                        alt="Motherboard" />
                </div>
                <div class="carousel-item">
                    <img loading="eager" src="./product img/carousel photo/carousel img3.png" class="d-block w-100"
                        alt="Keyboard" />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <!--jsnpiquero@gmail.com-->
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!--deals-->
        <div class="card border-0 deals">
            <div class="card-body dealsItem1">
                <a href="#">
                    <h5 class="card-title">Special Offers!</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">
                        Limited Time Only!
                    </h6>
                    <p class="card-text dealstxt">
                        "Unbeatable Deals Await – Shop Now and Save!"
                    </p>
                    <p class="pShop">
                        Shop now <i class="bi bi-arrow-right-circle-fill iconArrow"></i>
                    </p>
                </a>
            </div>
            <!--promos-->
            <div class="card-body dealsItem1">
                <a href="#">
                    <h5 class="card-title">Best Selling!</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">
                        Grab Them While They Last!
                    </h6>
                    <p class="card-text dealstxt">
                        "Top Picks: Explore Our Best-Selling Computer Parts!"
                    </p>
                    <p class="pShop">
                        Shop now <i class="bi bi-arrow-right-circle-fill iconArrow"></i>
                    </p>
                </a>
            </div>
        </div>
    </div>
    <!--PC Componenets Category-->
    <div class="pcComponentsCategMain">
        <div class="pcComponentsCateg">
            <div class="pcItem">
                <a href="">
                    <img src="./icon img/cpu carousel.png" alt="cpu img" />
                    <span class="categTitle">Processor</span>
                </a>
            </div>
            <div class="pcItem">
                <a href="#">
                    <img class="moboImg" src="./icon img/mobo carousel.png" alt="motherboard img" />
                    <span class="categTitle">Motherboard</span>
                </a>
            </div>
            <div class="pcItem">
                <a href="#">
                    <img src="./icon img/gpu carousel.png" alt="gpu img" />
                    <span class="categTitle gputxt">GPU</span>
                </a>
            </div>
            <div class="pcItem">
                <a href="#">
                    <img src="./icon img/ram carousel.png" alt="ram img" />
                    <span class="categTitle ramtxt">RAM</span>
                </a>
            </div>
            <div class="pcItem">
                <a href="#">
                    <img src="./icon img/ssd carousel.png" alt="ssd img" />
                    <span class="categTitle ssdtxt">SSD</span>
                </a>
            </div>
            <div class="pcItem">
                <a href="#">
                    <img src="./icon img/hdd carousel.png" alt="hdd img" />
                    <span class="categTitle hddtxt">HDD</span>
                </a>
            </div>
            <div class="pcItem">
                <a href="#">
                    <img src="./icon img/case carousel.png" alt="computer case img" />
                    <span class="categTitle casetxt">Case</span>
                </a>
            </div>
            <div class="pcItem">
                <a href="#">
                    <img src="./icon img/keyboard carousel.png" alt="keyboard img" class="peripImg" />
                    <span class="categTitle">Peripherals</span>
                </a>
            </div>
        </div>
    </div>

    <!--Products Displayed-->
    <div class="productsDisplayContMain">
        <div class="productsDisplayCont">
            <div class="card prodDisplayItem" data-category="Processor">
                <a href="#" class="hrefColor">
                    <img src="./product img/gpu/gpu.jpg" class="card-img-top" alt="..." />
                    <div class="card-body prodCategMain">
                        <h6 class="card-title prodCateg" id="ProductCategory">
                            Processor
                        </h6>
                        <h5 class="prodName card-text" id="productName">
                            GALAX RTX 4070 2x OC 12GB GDDR6X 192bit
                        </h5>
                        <div class="priceCartCont">
                            <p class="card-text" id="price">₱34,950</p>
                            <i class="bi bi-cart3 cartProd"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card prodDisplayItem" data-category="Processor">
                <a href="#" class="hrefColor">
                    <img src="./product img/gpu/gpu.jpg" class="card-img-top" alt="..." />
                    <div class="card-body prodCategMain">
                        <h6 class="card-title prodCateg" id="ProductCategory">
                            Processor
                        </h6>
                        <h5 class="prodName card-text" id="productName">
                            GALAX RTX 4070 2x OC 12GB GDDR6X 192bit
                        </h5>
                        <div class="priceCartCont">
                            <p class="card-text" id="price">₱34,950</p>
                            <i class="bi bi-cart3 cartProd"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card prodDisplayItem" data-category="Processor">
                <a href="#" class="hrefColor">
                    <img src="./product img/gpu/gpu.jpg" class="card-img-top" alt="..." />
                    <div class="card-body prodCategMain">
                        <h6 class="card-title prodCateg" id="ProductCategory">
                            Processor
                        </h6>
                        <h5 class="prodName card-text" id="productName">
                            GALAX RTX 4070 2x OC 12GB GDDR6X 192bit
                        </h5>
                        <div class="priceCartCont">
                            <p class="card-text" id="price">₱34,950</p>
                            <i class="bi bi-cart3 cartProd"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card prodDisplayItem" data-category="Processor">
                <a href="#" class="hrefColor">
                    <img src="./product img/gpu/gpu.jpg" class="card-img-top" alt="..." />
                    <div class="card-body prodCategMain">
                        <h6 class="card-title prodCateg" id="ProductCategory">
                            Processor
                        </h6>
                        <h5 class="prodName card-text" id="productName">
                            GALAX RTX 4070 2x OC 12GB GDDR6X 192bit
                        </h5>
                        <div class="priceCartCont">
                            <p class="card-text" id="price">₱34,950</p>
                            <i class="bi bi-cart3 cartProd"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card prodDisplayItem" data-category="Processor">
                <a href="#" class="hrefColor">
                    <img src="./product img/gpu/gpu.jpg" class="card-img-top" alt="..." />
                    <div class="card-body prodCategMain">
                        <h6 class="card-title prodCateg" id="ProductCategory">
                            Processor
                        </h6>
                        <h5 class="prodName card-text" id="productName">
                            GALAX RTX 4070 2x OC 12GB GDDR6X 192bit
                        </h5>
                        <div class="priceCartCont">
                            <p class="card-text" id="price">₱34,950</p>
                            <i class="bi bi-cart3 cartProd"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card prodDisplayItem" data-category="Processor">
                <a href="#" class="hrefColor">
                    <img src="./product img/gpu/gpu.jpg" class="card-img-top" alt="..." />
                    <div class="card-body prodCategMain">
                        <h6 class="card-title prodCateg" id="ProductCategory">
                            Processor
                        </h6>
                        <h5 class="prodName card-text" id="productName">
                            GALAX RTX 4070 2x OC 12GB GDDR6X 192bit
                        </h5>
                        <div class="priceCartCont">
                            <p class="card-text" id="price">₱34,950</p>
                            <i class="bi bi-cart3 cartProd"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card prodDisplayItem" data-category="Processor">
                <a href="#" class="hrefColor">
                    <img src="./product img/gpu/gpu.jpg" class="card-img-top" alt="..." />
                    <div class="card-body prodCategMain">
                        <h6 class="card-title prodCateg" id="ProductCategory">
                            Processor
                        </h6>
                        <h5 class="prodName card-text" id="productName">
                            GALAX RTX 4070 2x OC 12GB GDDR6X 192bit
                        </h5>
                        <div class="priceCartCont">
                            <p class="card-text" id="price">₱34,950</p>
                            <i class="bi bi-cart3 cartProd"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card prodDisplayItem" data-category="Processor">
                <a href="#" class="hrefColor">
                    <img src="./product img/gpu/gpu.jpg" class="card-img-top" alt="..." />
                    <div class="card-body prodCategMain">
                        <h6 class="card-title prodCateg" id="ProductCategory">
                            Processor
                        </h6>
                        <h5 class="prodName card-text" id="productName">
                            GALAX RTX 4070 2x OC 12GB GDDR6X 192bit
                        </h5>
                        <div class="priceCartCont">
                            <p class="card-text" id="price">₱34,950</p>
                            <i class="bi bi-cart3 cartProd"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card prodDisplayItem" data-category="Processor">
                <a href="#" class="hrefColor">
                    <img src="./product img/gpu/gpu.jpg" class="card-img-top" alt="..." />
                    <div class="card-body prodCategMain">
                        <h6 class="card-title prodCateg" id="ProductCategory">
                            Processor
                        </h6>
                        <h5 class="prodName card-text" id="productName">
                            GALAX RTX 4070 2x OC 12GB GDDR6X 192bit
                        </h5>
                        <div class="priceCartCont">
                            <p class="card-text" id="price">₱34,950</p>
                            <i class="bi bi-cart3 cartProd"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card prodDisplayItem" data-category="Processor">
                <a href="#" class="hrefColor">
                    <img src="./product img/gpu/gpu.jpg" class="card-img-top" alt="..." />
                    <div class="card-body prodCategMain">
                        <h6 class="card-title prodCateg" id="ProductCategory">
                            Processor
                        </h6>
                        <h5 class="prodName card-text" id="productName">
                            GALAX RTX 4070 2x OC 12GB GDDR6X 192bit
                        </h5>
                        <div class="priceCartCont">
                            <p class="card-text" id="price">₱34,950</p>
                            <i class="bi bi-cart3 cartProd"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card prodDisplayItem" data-category="Processor">
                <a href="#" class="hrefColor">
                    <img src="./product img/gpu/gpu.jpg" class="card-img-top" alt="..." />
                    <div class="card-body prodCategMain">
                        <h6 class="card-title prodCateg" id="ProductCategory">
                            Processor
                        </h6>
                        <h5 class="prodName card-text" id="productName">
                            GALAX RTX 4070 2x OC 12GB GDDR6X 192bit
                        </h5>
                        <div class="priceCartCont">
                            <p class="card-text" id="price">₱34,950</p>
                            <i class="bi bi-cart3 cartProd"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card prodDisplayItem" data-category="Processor">
                <a href="#" class="hrefColor">
                    <img src="./product img/gpu/gpu.jpg" class="card-img-top" alt="..." />
                    <div class="card-body prodCategMain">
                        <h6 class="card-title prodCateg" id="ProductCategory">
                            Processor
                        </h6>
                        <h5 class="prodName card-text" id="productName">
                            GALAX RTX 4070 2x OC 12GB GDDR6X 192bit
                        </h5>
                        <div class="priceCartCont">
                            <p class="card-text" id="price">₱34,950</p>
                            <i class="bi bi-cart3 cartProd"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card prodDisplayItem" data-category="Processor">
                <a href="#" class="hrefColor">
                    <img src="./product img/gpu/gpu.jpg" class="card-img-top" alt="..." />
                    <div class="card-body prodCategMain">
                        <h6 class="card-title prodCateg" id="ProductCategory">
                            Processor
                        </h6>
                        <h5 class="prodName card-text" id="productName">
                            GALAX RTX 4070 2x OC 12GB GDDR6X 192bit
                        </h5>
                        <div class="priceCartCont">
                            <p class="card-text" id="price">₱34,950</p>
                            <i class="bi bi-cart3 cartProd"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card prodDisplayItem" data-category="Processor">
                <a href="#" class="hrefColor">
                    <img src="./product img/gpu/gpu.jpg" class="card-img-top" alt="..." />
                    <div class="card-body prodCategMain">
                        <h6 class="card-title prodCateg" id="ProductCategory">
                            Processor
                        </h6>
                        <h5 class="prodName card-text" id="productName">
                            GALAX RTX 4070 2x OC 12GB GDDR6X 192bit
                        </h5>
                        <div class="priceCartCont">
                            <p class="card-text" id="price">₱34,950</p>
                            <i class="bi bi-cart3 cartProd"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card prodDisplayItem" data-category="Processor">
                <a href="#" class="hrefColor">
                    <img src="./product img/gpu/gpu.jpg" class="card-img-top" alt="..." />
                    <div class="card-body prodCategMain">
                        <h6 class="card-title prodCateg" id="ProductCategory">
                            Processor
                        </h6>
                        <h5 class="prodName card-text" id="productName">
                            GALAX RTX 4070 2x OC 12GB GDDR6X 192bit
                        </h5>
                        <div class="priceCartCont">
                            <p class="card-text" id="price">₱34,950</p>
                            <i class="bi bi-cart3 cartProd"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card prodDisplayItem" data-category="Processor">
                <a href="#" class="hrefColor">
                    <img src="./product img/gpu/gpu.jpg" class="card-img-top" alt="..." />
                    <div class="card-body prodCategMain">
                        <h6 class="card-title prodCateg" id="ProductCategory">
                            Processor
                        </h6>
                        <h5 class="prodName card-text" id="productName">
                            GALAX RTX 4070 2x OC 12GB GDDR6X 192bit
                        </h5>
                        <div class="priceCartCont">
                            <p class="card-text" id="price">₱34,950</p>
                            <i class="bi bi-cart3 cartProd"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!--footer-->
    <footer></footer>
    <!--scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="./script.js"></script>
</body>

</html>