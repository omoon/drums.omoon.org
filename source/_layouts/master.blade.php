<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>drums.omoon.org</title>
    <link rel="stylesheet" href="/assets/css/main.css">
    <script src="/assets/js/main.js"></script>
</head>
<body>
<div class="container">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">Site Title</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ $page->baseUrl }}/gear">Gear</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ $page->baseUrl }}/blog">Blog</a></li>
            </ul>
        </div>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>

    <div class="row main-body">
        <div class="col-md-8 offset-2">
            <h2>
                @yield('page_title')
            </h2>
            @yield('body')

        </div>
    </div>
    <div class="footer">
        powered by <a href="http://jigsaw.tighten.co">JIGSAW</a>
    </div>
</div>

</body>
</html>
