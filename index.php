<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- IMPORTACIONES -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>Gestor de Vehículos</title>
</head>
<body>
    
<!-- CONTENEDOR GLOBAL -->
    <div class="container">
    <!-- FORMULARIO -->
        <form action="index.php" method="POST">
            <fieldset>
                <legend>Formulario</legend>
                <div>
                <!-- SELECTOR DE MARCA -->
                    <select class="form-select" aria-label="Default select example" name="selectorMarca" required>
                        <option value="1">Abarth</option>
                        <option value="2">Audi</option>
                        <option value="3">Bmw</option>
                        <option value="4">Ford</option>
                        <option value="5">Fiat</option>
                        <option value="6">Hyundai</option>
                        <option value="7">Renault</option>
                        <option value="8">Seat</option>
                        <option value="9">Tesla</option>
                        <option value="10">Toyota</option>
                        <option value="11">Volkswagen</option>
                    </select>
                </div>
                <div>
                    <input type="number" class="form-control" name="anoMatriculacion" placeholder="Introduzca año de matriculación"
                    min="1970" max="2022" step="1" required>
                </div>
                <div>
                    <input type="number" class="form-control" name="potencia" id="" placeholder="Introduzca potencia 'CV'"
                    min="70" max="220" step="1" required>
                </div>
                <div>
                    <select class="form-select" aria-label="Default select example" name="selectorPuertas" required>
                            <option selected>Seleccione el número puertas</option>
                            <option value="1">4 puertas</option>
                            <option value="2">5 puertas</option>
                    </select>
                </div>
                <div>
                    <button type="submit" name="btnSubmit" class="btn btn-success">Enviar</button>
                </div>
                <div>
                    <?php
                        include('php/vehiculo.php');
                    ?>
                </div>
            </fieldset>
        </form>
    <!-- FIN DEL FORMULARIO -->    
    </div>
<!-- FIN DEL CONTENEDOR -->

</body>
</html>