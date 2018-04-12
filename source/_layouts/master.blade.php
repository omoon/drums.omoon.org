<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>
<div class="container">

    <div class="row">
        <h1><a href="{{ $page->baseUrl }}">Site Title</a></h1>
    </div>

    <div class="row">
        <div class="col-md-3">
            <ul>
                <li><a href="{{ $page->baseUrl }}/gear">Gear</a></li>
                <li><a href="{{ $page->baseUrl }}/blog">Blog</a></li>
            </ul>
        </div>
        <div class="col-md-9">
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
