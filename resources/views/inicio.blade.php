<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Virtual al aire libre</title>
    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        header {
            background-color: #886092;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #c681e0;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: #260236;
            text-decoration: none;
            margin: 0 15px;
        }

        main {
            width: 90%;
            max-width: 1100px;
            margin: 40px auto;
        }

        .bienvenida {
            background-color: #d9b0eb;
            padding: 40px;
            text-align: center;
            border-radius: 10px;
        }

        .boton {
            display: inline-block;
            background-color: #ffb3e8;
            color: #380346;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        footer {
            margin-top: 50px;
            padding: 20px;
            text-align: center;
            background-color: #886092;
            color: white;
        }
    </style>
</head>
<body>
    <header>
    <h1>Mi Tienda Virtual</h1>
    <p>Tienda virtual para que compres todos tus productos</p>
    </header>
    <nav>
        <a href="/">Inicio</a>
        <a href="/Productos">Productos</a>
        <a href="#">Categorias</a>
        <a href="#">Contactos</a>
    </nav>
    <main>
        <section class="bienvenida">
            <h2>¡Bienvenido a nuestra tienda!</h2>
            <p>
                Encuentra los mejores productos en un solo lugar
            </p>
            <a href="/Productos" class="boton"> Ver productos </a>
        </section>
    </main>
    <footer> 
        <p>
            2026 Tienda virtual-Todos los derechos reservados 
        </p>
    </footer>
</body>
</html>