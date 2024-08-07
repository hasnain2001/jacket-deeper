<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>


  <body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-transparent">
      <div class="container-fluid">
          <a class="navbar-brand mx-auto" href="#">
              <img src="path/to/your/logo.png" alt="Logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03"
              aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarColor03">
              <ul class="navbar-nav me-auto">
                  <li class="nav-item">
                      <a class="nav-link active" href="/">Home
                          <span class="visually-hidden">(current)</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" href="{{ route('product.home') }}">Product</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" href="{{{ route('blog') }}}">Blog</a>
                  </li>
                  @foreach ($categories as $item)
                  <li>
                      <a class="nav-link active" href="{{ route('category_details', ['slug' => Str::slug($item->slug)]) }}">{{ $item->title }}</a>
                  </li>
                      
                  @endforeach
                 
                 
              </ul>
              <form class="d-flex">
                  <input class="form-control me-sm-2" type="search" placeholder="Search">
                  <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
              </form>
          </div>
      </div>
  </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>