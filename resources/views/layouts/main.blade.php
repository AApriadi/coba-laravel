<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Simple Web | {{$title}}</title>
    <link rel="icon" type="image/x-icon" href="../favicon.ico"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../styles.css" rel="stylesheet"/>
    <!-- Bootsrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
@include('layouts.navbar')
<!-- Page Header-->
<header class="masthead" style="background-image: url('../img/{{ $img }}')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    @if ($title==="Home")
                        <h1>Sample</h1>
                        <span class="subheading">A Simple Web</span>
                    @elseif ($title==="About")
                        <h1>About</h1>
                        <span class="subheading">This is what i do</span>
                    @elseif ($title==="All Post")
                        <h1>Blog</h1>
                        <span class="subheading">My Blog</span>
                    @elseif (str_contains($title, "Single Post"))
                        <h1>Single Post</h1>
                        <span class="subheading">Single Post</span>
                    @elseif (str_contains($title, "Post Categories"))
                        <h1>Post Categories</h1>
                        <span class="subheading">post categories</span>
                    @elseif (str_contains($title, "in"))
                        <h1>Category</h1>
                        <span class="subheading">category</span>
                    @elseif (str_contains($title, "Post Authors"))
                        <h1>Post Authors</h1>
                        <span class="subheading">post authors</span>
                    @elseif (str_contains($title, "by"))
                        <h1>Author</h1>
                        <span class="subheading">author</span>
                    @elseif ($title==="Contact")
                        <h1>Contact</h1>
                        <span class="subheading">Get in touch</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        @yield('container')
    </div>
</main>
<!-- Footer-->
<footer class="border-top">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                </ul>
                <div class="small text-center text-muted fst-italic">Copyright &copy; Simple Web 2021</div>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="../scripts.js"></script>
</body>
</html>
