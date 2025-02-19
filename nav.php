<!--navbar-->
<nav class="py-2 bg-body-tertiary border-bottom insertNav">
    <div class="container dropDownMargin">
        <div class="d-lg-none">
            <div class="dropdown dropDownMain">
                <button class="btn w-auto dropDown dropButton" type="button" id="navbarDropdown"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-list iconz"></i>
                </button>
                <ul class="dropdown-menu w-50 navbarDrop" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item navbarItems" href="./index.php">Home</a>
                    </li>
                    <li>
                        <a class="dropdown-item navbarItems" href="./FAQs.php">FAQs</a>
                    </li>
                    <li><a class="dropdown-item navbarItems" href="#">History</a></li>
                    <li>
                        <a class="dropdown-item navbarItems" href="./contact.php">Contact Us</a>
                    </li>
                    <li>
                        <a class="dropdown-item navbarItems" href="./about.php">About Us</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item navbarItems" href="#">Login</a></li>
                    <li><a class="dropdown-item navbarItems" href="#">Sign up</a></li>
                </ul>
            </div>
        </div>

        <div class="d-none d-lg-flex flex-wrap">
            <ul class="nav me-auto ulNav">
                <li class="nav-item">
                    <a href="./index.php" class="nav-link link-body-emphasis px-2 hovAnim" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a href="./FAQs.php" class="nav-link link-body-emphasis px-2 hovAnim">FAQs</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link link-body-emphasis px-2 hovAnim">History</a>
                </li>
                <li class="nav-item">
                    <a href="./contact.php" class="nav-link link-body-emphasis px-2 hovAnim">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a href="./about.php" class="nav-link link-body-emphasis px-2 hovAnim">About Us</a>
                </li>
            </ul>
            <ul class="nav">
                <li class="nav-item">
                    <a href="#" class="nav-link link-body-emphasis px-2 hovAnim">Login</a>
                    <a href="#" class="nav-link link-body-emphasis px-2 hovAnim profIcon"><i
                            class="bi bi-person"></i></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link link-body-emphasis px-2 hovAnim">Sign up</a>

                    <a href="#" class="nav-link link-body-emphasis px-2 hovAnim cartIcon"><i
                            class="bi bi-cart3"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container" id="logoHidden">
        <a href="./index.php"
            class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
            <img src="./HUB imgs/HUB LOGO 2023.png" alt="hub logo" class="bi me-2 logoImg" width="50" height="32" />

            <span class="fs-4 logoName" id="logoName">Hanap.Usap.Build</span>
        </a>
    </div>
</nav>