<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset=utf-8>
    <title>Administrador</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div id="container">
    <header>
        <h1>Administrador</h1>
        <nav>
            <ul>
                <li><a href="#">Welcome</a></li>
                <li><a href="#">Home</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <div class="row">
            <!-- Datos alumno -->
            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item">Administrador:</li>
                    <li class="list-group-item">Pedro Salazar</li>
                </ul>
            </div>
            <!-- Table -->
            <div class="col-md-9">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Curso</th>
                        <th scope="col">Semestre</th>
                        <th scope="col">Docente</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Redes y Telecomunicaciones I</td>
                        <td>V</td>
                        <td>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Seleccione docente</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Calculo I</td>
                        <td>VI</td>
                        <td>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Seleccione docente</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Lenguaje de Programacion</td>
                        <td>VIII</td>
                        <td>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Seleccione docente</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </td>
                    </tr>
            </div>
            </tbody>
            </table>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="button" class="btn btn-outline-primary">Guardar</button>
            </div>
    </section>
    <footer>
        <p>Universidad de investigación y desarrollo</p>
    </footer>
</div>
</body>
</html>
