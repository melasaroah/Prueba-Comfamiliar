<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class=" bg-body-secondary text-secondary ">

    <nav class="nav bg-warning-subtle">
        <a class="nav-link active" aria-current="page" href="{{route('products.index')}}">Products</a>
        <a class="nav-link" href="{{route('products.create')}}">Create</a>
      </nav>

    <main class="text-center justify">
        @yield('content')
    </main>
    
  </body>
</html>