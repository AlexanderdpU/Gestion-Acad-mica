<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset=utf-8>
    <title>Historial</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
<!-- Navs -->
<nav class="nav ">
    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Welcome</a>
    <a class="nav-link" href="{{ url('/home') }}">Home</a>
    <a class="nav-link" href="{{ url('/alumno') }}">Matricula</a>
</nav>
<div class="row">
    <!-- Datos alumno -->
    <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item">Alumno:</li>
            <li class="list-group-item">Alexander Dominguez Pilco</li>
        </ul>
    </div>
    <!-- Table -->
    <div class="col-md-9">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Cursos llevados</th>
                <th scope="col">Semestre</th>
                <th scope="col"># veces llevados</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Redes y Telecomunicaciones I</td>
                <td>V</td>
                <td>1</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Calculo I</td>
                <td>VI</td>
                <td>2</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Lenguaje de Programacion</td>
                <td>VIII</td>
                <td>1</td>
            </tr>
    </div>
    </tbody>
    </table>
</div>

</body>
</html>
