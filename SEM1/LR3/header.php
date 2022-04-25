<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Collectors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link href = "assets/fonts/stylesheet.css" rel = "stylesheet" type = "text/css" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


</head>
<body>

<div >
    <nav class="navbar navbar-expand-lg navbar-light" id="navbarwrap" style="background-color:white;" >
        <div class="container-fluid">
            <a class="navbar-brand" href="main.php"> <img src="assets/images/logo.png" alt="" > </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-fill">
                    <li>
                        <a href="secret-page.php">  <span class="badge bg-success" id="catalog" > База данных </span>    </a>
                    </li>
                    <li>
                        <form class="d-flex" id="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <img class="gridimages"  src="assets/images/box.png" alt="" >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Заказы</a>
                    </li>
                    <li class="nav-item">
                        <img class="gridimages"  src="assets/images/heart.png" alt="" >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Избранное</a>
                    </li>

                    <li class="nav-item">
                        <img class="gridimages"  src="assets/images/shopping%20bag.png" alt="" >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Корзина</a>
                    </li>
                    <li class="nav-item">
                        <img class="gridimages"  src="assets/images/man.png" alt="" >
                    </li>

                    <?php
                    if (isset($_SESSION["userid"])) {

                        ?><a class="nav-link" >Вы авторизованы как <?php echo $_SESSION["email"] ?> </a>
                        <?php echo '<a class="nav-link" href="logout.php" >Выйти</a>';
                    }
                    else { ?>
                        <li class="nav-item">
                        <a class="nav-link" href="signup-page.php">Зарегистрироваться</a>
                    </li>
                    <li class="nav-item">
                        <img class="gridimages"  src="assets/images/login.png" alt="" >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login-page.php">Войти</a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container-fluid" id="gridwrap">
        <div class="row" id="gridwrapcontent ">
            <div class="col" >
                <a class="link-secondary" href="#"> Город: Москва</a>
            </div>

            <div class="col">
                <a class="link-secondary" href="#">  8(495) 127-71-81</a>
            </div>
            <div class="col" id="returncall">
                <a class="link-secondary" href="#">  Обратный звонок</a>
            </div>
            <div class="col">
                <a class="link-secondary" href="#">  О компании</a>
            </div>
            <div class="col">
                <a class="link-secondary" href="#">  Доставка и оплата </a>
            </div>
            <div class="col">
                <a class="link-secondary" href="#">  Бонусная система</a>
            </div>
            <div class="col">
                <a class="link-secondary" href="#"> Отзывы</a>
            </div>
            <div class="col">
                <a class="link-secondary" href="#"> Контакты </a>
            </div>
        </div>
    </div>

    <nav style="--bs-breadcrumb-divider: '-';" aria-label="breadcrumb" >
        <ol class="breadcrumb" id="bread">
            <li class="breadcrumb-item "><a class="breadcontent" href="#" >Домашняя страница</a></li>
            <li class="breadcrumb-item"><a class="breadcontent" href="#" style="width: 80px">Каталог</a></li>
            <li class="breadcrumb-item " ><a class="breadcontent"  href="#" style="width: 250px">Удобрения и регуляторы роста</a></li>
            <li class="breadcrumb-item"><a class="breadcontent"  href="#" style="width: 100px">Удобрения</a></li>
            <li class="breadcrumb-item active" aria-current="page" ><p href="#"style="width: 400px">Агрикола "Грин Бэлт" для комнатных растений 25г</p></li>

        </ol>
    </nav>
</div>