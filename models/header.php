<?php
function headerss()
{
    $url = $_SERVER['REQUEST_URI'];
    echo 'REQUEST_URI : ' . $url;
    $urlTrimer = ltrim($url, '/Commerce_Electronique2/projet2_Dekkal/pages/');
    echo '<br/> REQUEST_URI trimer : ' . $urlTrimer;

    $targetPageIndex = '';
    $targetPageLogin = '';
    $targetPageRegister = '';

    if ($urlTrimer === "Login.php") {
        $targetPageIndex = "../";
        $targetPageLogin = "./";
        $targetPageRegister = "./Register.php";
    } else if ($urlTrimer === "Register.php") {
        $targetPageIndex = "../";
        $targetPageLogin = "./Login.php";
        $targetPageRegister = "./";
    } else if ($urlTrimer === "") {
        $targetPageIndex = "./";
        $targetPageLogin = "./pages/Login.php";
        $targetPageRegister = "./pages/Register.php";
    }


?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo $targetPageIndex; ?>">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo $targetPageLogin; ?>">connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $targetPageRegister; ?>">Inscription</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?php

}
?>