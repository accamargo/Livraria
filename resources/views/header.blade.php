<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://bootswatch.com/4/cosmo/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<style>


</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="https://cdn2.iconfinder.com/data/icons/mixed-rounded-flat-icon/512/note-512.png"
      width="35" height="35"> OrbisBooks</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
      <form action = "/searchbrowse" method='post' class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" name ='search_box_browse'>
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        {{csrf_field()}}
      </form>
      <button class="btn btn-secondary my-2 my-sm-0"><i class="fa fa-user"></i> Login</button>
      <button class="btn btn-secondary my-2 my-sm-0"><i class="fa fa-shopping-cart"></i> Cart</button>
    </div>
  </nav>

</html>