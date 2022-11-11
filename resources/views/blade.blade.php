<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blade Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<nav class="nav nav-pills flex-column flex-sm-row">
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="{{url('/')}}">Sales</a>
  </li>
  <a class="flex-sm-fill text-sm-center nav-link" href="{{url('/units')}}">Units</a>
  <a class="flex-sm-fill text-sm-center nav-link" href="{{url('/category')}}">Categories</a>
  <a class="flex-sm-fill text-sm-center nav-link" href="{{url('/merchandise')}}">Merchandises</a>
</nav>

<div class="container">
    @yield('content')
</div>

<style>
  .nav{
    font-size: larger;
    font-weight: bold;
    font-family: cursive;
    }
</style>
