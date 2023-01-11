<?php

//session_start();

// if(isset($_SESSION['id'])){

//     header('location: ../index.php');

// }

?>



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->

    <!-- <link rel="stylesheet" href="../vendors/owl-carousel/css/owl.carousel.min.css"> -->

    <!-- <link rel="stylesheet" href="../vendors/owl-carousel/css/owl.theme.default.css"> -->

    <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">

    <!-- <link rel="stylesheet" href="../vendors/aos/css/aos.css"> -->

    <link rel="stylesheet" href="../css/style.min.css">










    <style>
    .navbar .navbar-toggler .mdi-menu {

        font-size: 30px
    }



    .w-100 {

        width: 100% !important
    }



    .d-flex {

        display: flex !important
    }



    body.sidebar-open .fixed-top .navbar-brand-wrapper img {

        display: none
    }



    .container {

        width: 100%;

        padding-right: 15px;

        padding-left: 15px;

        margin-right: auto;

        margin-left: auto
    }



    @media (min-width:576px) {

        .container {

            max-width: 540px
        }

    }



    @media (min-width:768px) {

        .container {

            max-width: 720px
        }

    }



    @media (min-width:992px) {

        .container {

            max-width: 960px
        }

    }



    @media (min-width:1200px) {

        .container {

            max-width: 1140px
        }

    }



    .container-fluid {

        width: 100%;

        padding-right: 15px;

        padding-left: 15px;

        margin-right: auto;

        margin-left: auto
    }



    .navbar {

        position: relative;

        padding: .5rem 1rem
    }



    .navbar,

    .navbar>.container,

    .navbar>.container-fluid {

        display: flex;

        flex-wrap: wrap;

        align-items: center;

        justify-content: space-between
    }



    .navbar-brand {

        display: inline-block;

        padding-top: .3125rem;

        padding-bottom: .3125rem;

        margin-right: 1rem;

        font-size: 1.25rem;

        line-height: inherit;

        white-space: nowrap
    }



    .navbar-brand:focus,

    .navbar-brand:hover {

        text-decoration: none
    }



    .navbar-nav {

        display: flex;

        flex-direction: column;

        padding-left: 0;

        margin-bottom: 0;

        list-style: none
    }



    .navbar-nav .nav-link {

        padding-right: 0;

        padding-left: 0
    }



    .navbar-nav .dropdown-menu {

        position: static;

        float: none
    }



    .navbar-text {

        display: inline-block;

        padding-top: .5rem;

        padding-bottom: .5rem
    }



    .navbar-collapse {

        flex-basis: 100%;

        flex-grow: 1;

        align-items: center
    }



    .navbar-toggler {

        padding: .25rem .75rem;

        font-size: 1.25rem;

        line-height: 1;

        background-color: transparent;

        border: 1px solid transparent;

        border-radius: .1875rem
    }



    .navbar-toggler:focus,

    .navbar-toggler:hover {

        text-decoration: none
    }



    .navbar-toggler-icon {

        display: inline-block;

        width: 1.5em;

        height: 1.5em;

        vertical-align: middle;

        content: "";

        background: no-repeat 50%;

        background-size: 100% 100%
    }



    @media (max-width:575.98px) {



        .navbar-expand-sm>.container,

        .navbar-expand-sm>.container-fluid {

            padding-right: 0;

            padding-left: 0
        }

    }



    @media (min-width:576px) {

        .navbar-expand-sm {

            flex-flow: row nowrap;

            justify-content: flex-start
        }



        .navbar-expand-sm .navbar-nav {

            flex-direction: row
        }



        .navbar-expand-sm .navbar-nav .dropdown-menu {

            position: absolute
        }



        .navbar-expand-sm .navbar-nav .nav-link {

            padding-right: .5rem;

            padding-left: .5rem
        }



        .navbar-expand-sm>.container,

        .navbar-expand-sm>.container-fluid {

            flex-wrap: nowrap
        }



        .navbar-expand-sm .navbar-collapse {

            display: flex !important;

            flex-basis: auto
        }



        .navbar-expand-sm .navbar-toggler {

            display: none
        }

    }



    @media (max-width:767.98px) {



        .navbar-expand-md>.container,

        .navbar-expand-md>.container-fluid {

            padding-right: 0;

            padding-left: 0
        }

    }



    @media (min-width:768px) {

        .navbar-expand-md {

            flex-flow: row nowrap;

            justify-content: flex-start
        }



        .navbar-expand-md .navbar-nav {

            flex-direction: row
        }



        .navbar-expand-md .navbar-nav .dropdown-menu {

            position: absolute
        }



        .navbar-expand-md .navbar-nav .nav-link {

            padding-right: .5rem;

            padding-left: .5rem
        }



        .navbar-expand-md>.container,

        .navbar-expand-md>.container-fluid {

            flex-wrap: nowrap
        }



        .navbar-expand-md .navbar-collapse {

            display: flex !important;

            flex-basis: auto
        }



        .navbar-expand-md .navbar-toggler {

            display: none
        }

    }



    @media (max-width:991.98px) {



        .navbar-expand-lg>.container,

        .navbar-expand-lg>.container-fluid {

            padding-right: 0;

            padding-left: 0
        }

    }



    @media (min-width:992px) {

        .navbar-expand-lg {

            flex-flow: row nowrap;

            justify-content: flex-start
        }



        .navbar-expand-lg .navbar-nav {

            flex-direction: row
        }



        .navbar-expand-lg .navbar-nav .dropdown-menu {

            position: absolute
        }



        .navbar-expand-lg .navbar-nav .nav-link {

            padding-right: .5rem;

            padding-left: .5rem
        }



        .navbar-expand-lg>.container,

        .navbar-expand-lg>.container-fluid {

            flex-wrap: nowrap
        }



        .navbar-expand-lg .navbar-collapse {

            display: flex !important;

            flex-basis: auto
        }



        .navbar-expand-lg .navbar-toggler {

            display: none
        }

    }



    @media (max-width:1199.98px) {



        .navbar-expand-xl>.container,

        .navbar-expand-xl>.container-fluid {

            padding-right: 0;

            padding-left: 0
        }

    }



    @media (min-width:1200px) {

        .navbar-expand-xl {

            flex-flow: row nowrap;

            justify-content: flex-start
        }



        .navbar-expand-xl .navbar-nav {

            flex-direction: row
        }



        .navbar-expand-xl .navbar-nav .dropdown-menu {

            position: absolute
        }



        .navbar-expand-xl .navbar-nav .nav-link {

            padding-right: .5rem;

            padding-left: .5rem
        }



        .navbar-expand-xl>.container,

        .navbar-expand-xl>.container-fluid {

            flex-wrap: nowrap
        }



        .navbar-expand-xl .navbar-collapse {

            display: flex !important;

            flex-basis: auto
        }



        .navbar-expand-xl .navbar-toggler {

            display: none
        }

    }



    .navbar-expand {

        flex-flow: row nowrap;

        justify-content: flex-start
    }



    .navbar-expand>.container,

    .navbar-expand>.container-fluid {

        padding-right: 0;

        padding-left: 0
    }



    .navbar-expand .navbar-nav {

        flex-direction: row
    }



    .navbar-expand .navbar-nav .dropdown-menu {

        position: absolute
    }



    .navbar-expand .navbar-nav .nav-link {

        padding-right: .5rem;

        padding-left: .5rem
    }



    .navbar-expand>.container,

    .navbar-expand>.container-fluid {

        flex-wrap: nowrap
    }



    .navbar-expand .navbar-collapse {

        display: flex !important;

        flex-basis: auto
    }



    .navbar-expand .navbar-toggler {

        display: none
    }



    .navbar-light .navbar-brand,

    .navbar-light .navbar-brand:focus,

    .navbar-light .navbar-brand:hover {

        color: rgba(0, 0, 0, .9)
    }



    .navbar-light .navbar-nav .nav-link {

        color: rgba(0, 0, 0, .5)
    }



    .navbar-light .navbar-nav .nav-link:focus,

    .navbar-light .navbar-nav .nav-link:hover {

        color: rgba(0, 0, 0, .7)
    }



    .navbar-light .navbar-nav .nav-link.disabled {

        color: rgba(0, 0, 0, .3)
    }



    .navbar-light .navbar-nav .active>.nav-link,

    .navbar-light .navbar-nav .nav-link.active,

    .navbar-light .navbar-nav .nav-link.show,

    .navbar-light .navbar-nav .show>.nav-link {

        color: rgba(0, 0, 0, .9)
    }



    .navbar-light .navbar-toggler {

        color: rgba(0, 0, 0, .5);

        border-color: rgba(0, 0, 0, .1)
    }



    .navbar-light .navbar-toggler-icon {

        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
    }



    .navbar-light .navbar-text {

        color: rgba(0, 0, 0, .5)
    }



    .navbar-light .navbar-text a,

    .navbar-light .navbar-text a:focus,

    .navbar-light .navbar-text a:hover {

        color: rgba(0, 0, 0, .9)
    }



    .navbar-dark .navbar-brand,

    .navbar-dark .navbar-brand:focus,

    .navbar-dark .navbar-brand:hover {

        color: #fff
    }



    .navbar-dark .navbar-nav .nav-link {

        color: hsla(0, 0%, 100%, .5)
    }



    .navbar-dark .navbar-nav .nav-link:focus,

    .navbar-dark .navbar-nav .nav-link:hover {

        color: hsla(0, 0%, 100%, .75)
    }



    .navbar-dark .navbar-nav .nav-link.disabled {

        color: hsla(0, 0%, 100%, .25)
    }



    .navbar-dark .navbar-nav .active>.nav-link,

    .navbar-dark .navbar-nav .nav-link.active,

    .navbar-dark .navbar-nav .nav-link.show,

    .navbar-dark .navbar-nav .show>.nav-link {

        color: #fff
    }



    .navbar-dark .navbar-toggler {

        color: hsla(0, 0%, 100%, .5);

        border-color: hsla(0, 0%, 100%, .1)
    }



    .navbar-dark .navbar-toggler-icon {

        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
    }



    .navbar-dark .navbar-text {

        color: hsla(0, 0%, 100%, .5)
    }



    .navbar-dark .navbar-text a,

    .navbar-dark .navbar-text a:focus,

    .navbar-dark .navbar-text a:hover {

        color: #fff
    }





    body.sidebar-open .fixed-top .navbar-brand-wrapper img {

        display: none
    }



    .header-small .navbar {

        background: #fff;

        padding: 18px 0;

        box-shadow: 0 0 30px 0 rgba(0, 0, 0, .2)
    }



    .header-small .navbar.fixed-top {

        top: -50px;

        margin-top: 50px;

        transition: margin-top 1s ease
    }



    @media (min-width:992px) {

        .header-small .navbar .btn {

            padding: 5px 10px;

            margin-left: 20px
        }

    }



    .owl-nav {

        font-size: 30px;

        text-align: center;

        color: #6e6e6e
    }



    .navbar {

        background-color: #f7f8fa;

        padding: 20px 0 20px
    }



    .navbar .navbar-toggler {

        line-height: inherit
    }



    .navbar .navbar-toggler .mdi-menu {

        font-size: 30px
    }



    .navbar .navbar-toggler .mdi-close {

        font-size: 20px
    }



    .navbar .navbar-menu-wrapper .navbar-nav .btn-contact-us {

        margin-left: 148px;

        white-space: nowrap
    }



    @media (max-width:992px) {

        .navbar .navbar-menu-wrapper .navbar-nav .btn-contact-us {

            margin-left: 0
        }

    }



    .navbar .navbar-menu-wrapper .navbar-nav .nav-link {

        font-size: .9375rem;

        padding: 0 17px;

        font-weight: 500;

        color: #111
    }



    .navbar .navbar-menu-wrapper .navbar-nav .nav-link:hover {

        color: blue;

        transition: all .3s ease
    }



    .navbar .navbar-menu-wrapper .navbar-nav .nav-link.active {

        color: blue
    }



    .navbar .navbar-collapse-logo {

        display: none
    }



    .ml-auto,

    .mx-auto {

        margin-left: auto !important
    }



    @media (max-width:992px) {

        .navbar .navbar-menu-wrapper .navbar-nav .nav-link {

            font-size: 16px
        }



        .navbar .navbar-menu-wrapper.navbar-collapse {

            position: fixed;

            top: 0;

            right: 0;

            background: #fff;

            z-index: 20;

            height: 100vh;

            padding: 50px 0;

            width: 250px;

            transform: translateX(100%);

            transition: transform .25s ease-in-out
        }



        .navbar .navbar-menu-wrapper.navbar-collapse.show {

            transform: translateX(0)
        }



        .navbar .navbar-menu-wrapper.navbar-collapse ul li {

            padding: 10px
        }



        .navbar .navbar-collapse-logo {

            display: block
        }

        .nva-link:hover {

            color: #77D2EF;

        }

    }
    </style>

</head>



<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">

    <header id="header-section">

        <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">

            <div class="container">

                <div class="navbar-brand-wrapper d-flex w-100">

                    <img src="../images/PictureLogo.png" height="45px" width="35px" alt="">

                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">

                        <span class="mdi mdi-menu navbar-toggler-icon"></span>

                    </button>

                </div>

                <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">

                    <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">

                        <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">

                            <div class="navbar-collapse-logo">

                                <img src="../images/Group2.svg" alt="">

                            </div>

                            <button class="navbar-toggler close-button" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">

                                <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>

                            </button>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="../index.php">Home</a>

                        </li>

                        <?php if (!isset($_SESSION['username'])) : ?>

                        <li class="nav-item btn-contact-us pl-4 pl-lg-0">

                            <button class="btn btn-info" onclick="location.href='login.php';">Login

                            </button>

                        </li>

                        <?php endif; ?>

                        <?php if (isset($_SESSION['username'])) : ?>

                        <li class="nav-item btn-contact-us pl-4 pl-lg-0">

                            <button class="btn btn-opacity-light mr-1" onclick="location.href='logout.php';">logout

                            </button>

                        </li>

                        <?php endif; ?>



                    </ul>

                </div>

            </div>

        </nav>

    </header>

</body>

<script src="../vendors/jquery/jquery.min.js"></script>

<script src="../vendors/bootstrap/bootstrap.min.js"></script>

<script src="../vendors/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../vendors/aos/js/aos.js"></script>

<script src="../js/landingpage.js"></script>