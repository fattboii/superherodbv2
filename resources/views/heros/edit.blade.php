<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- <link href="../resources/css/title.css" rel="stylesheet" type="text/css"/> -->
    <title>Edit</title>
</head>
    <body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="greeting">
            <h2>Edit This SuperHero</h2>
        </div>
        <form action="{{ url('/heros/' .$hero->id ) }}" method="post" enctype="multipart/form-data"
        style="margin-left: 130px;">
            @csrf
            {{ method_field('PATCH')}}
            @include('heros.form')
        </form>
        <!-- returns to the home page -->
        <div style="
            display: grid;
            place-items: center;
        ">
        <button class ="return_btn"
        style="
        margin-top: 10px;
        width: 120px;
        height: 50px;
        "
        ><a href="{{ url('heros') }}" 
        style="
        text-decoration: none;
        color: black;
        ">Return</a></button>
        </div>
    </div>
        @endsection
    </body>
</html>