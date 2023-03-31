@extends('layouts.adminlte')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('../csscarucel/carucel.css') }}">

  <head>


  </head>

<body>
  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src='../img2/1.jpg' class="d-block w-100"  style="width: 25%;">
      </div>
      <div class="carousel-item">
        <img src='../img2/2.jpg' class="d-block w-100" style="width: 25%;">
      </div>
      <div class="carousel-item">
        <img src='../img2/1.jpg' class="d-block w-100" style="width: 25%;">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <center>
    <div class="container">
      <div class="container">
        <div class="container text-center">
          <div class="row">
            <div class="col">
              <button class="boton-imagen">Calculadora</button>
            </div>
            <div class="col">
              <button class="boton-imagen">Aprendices</button>
            </div>
            <div class="col">
              <button class="boton-imagen">Eventos</button>
            </div>
          </div>
          <style>
            .boton-imagen {
              width: 1700px;
              height: 200px;
              border: none;
              border-radius: 5px;
              transition: all 0.3s ease;
              background-image: url('../img2/1.jpg');
            }

            .boton-imagen:hover {
              width: 1700px;
              background-image: url('../img2/2.jpg');
              background-repeat: no-repeat;
              background-position: center;
              background-size: cover;
              cursor: pointer;
            }
          </style>
          <script>
            const botonImagen = document.querySelector('.boton-imagen');

            botonImagen.addEventListener('mouseover', () => {
              botonImagen.style.width = '1700px';
              botonImagen.style.backgroundImage = "url(../img2/1.jpg)";
              botonImagen.style.backgroundRepeat = 'no-repeat';
              botonImagen.style.backgroundPosition = 'center';
              botonImagen.style.backgroundSize = 'cover';
              botonImagen.style.cursor = 'pointer';
            });

            botonImagen.addEventListener('mouseout', () => {
              botonImagen.style.width = '1100px';
              botonImagen.style.backgroundImage = 'none';
              botonImagen.style.cursor = 'default';
            });
          </script>

        </div>

      </div>










      <br>

      <br>

  </center>
</body>
@endsection