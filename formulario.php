<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Convertir Unidades</title>
</head>
<body>
    <div class="container">
        <br>
        <div class="card">
            <div class="card-header">
                Convertir Unidades
            </div>
            <div class="card-body">
                <form action="convertir.php" method="post">
                    <div class="mb-3">
                        <?php
                            if (isset($_GET["error"])) {
                                echo htmlspecialchars($_GET["error"]);
                                echo "<br>";
                            }
                        ?>
                        <label for="cantidad" class="form-label">Cantidad:</label>
                        <input type="text" class="form-control" id="cantidad" name="cantidad">
                    </div>
                    <div class="mb-3">
                        <label for="conversion" class="form-label">Conversión:</label>
                        <select id="conversion" name="conversion" class="form-control">
                            <option value="0">Selecciona una opción</option>
                            <option value="1">Mililitros a Onzas Fluidas</option>
                            <option value="2">Metros a Yardas</option>
                            <option value="3">Gramos a Libras</option>
                            <option value="4">Celcius a Farenheit</option>
                            <option value="5">Kilometros a Millas</option>
                            <option value="6">Pesos a Libras Esterlinas</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <br>
                    <div class="form-group">
                        <br>
                        <label for="resultado">Resultado:</label>
                        <?php
                            if (isset($_GET["resultado"])) {
                                $mostrar = htmlspecialchars($_GET["resultado"]);
                            }
                        
                        echo "<input type=\"text\" id=\"resultado\" class=\"form-control\" placeholder=\"$mostrar\">";
                        ?>
                    </div>
                </form>
                <br>
                <a href="http://www.diego.puebla.com.mx/creditos.php" class="btn btn-primary">Créditos</a>
                <a href="http://www.diego.puebla.com.mx/" class="btn btn-primary">Inicio</a>
            </div>
        </div>
    </div>
</body>
</html>