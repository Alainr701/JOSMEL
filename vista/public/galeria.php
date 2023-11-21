<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Snippet - GoSNippets</title>
    <link href='' rel='stylesheet'>
    <link href='' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    *:focus {
        outline: 0;
    }

    html {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    body {
        align-items: center;
        background-color: #212121;
        display: flex;
        justify-content: center;
        min-height: 100vh;
    }

    .title {
        color: #ffffff;
        font-size: 24px;
        text-align: center;
        text-transform: uppercase;
        margin-bottom: 20px;
    }

    .box {
        display: grid;
        grid-gap: 2.5rem;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        margin: 1rem auto;
        max-width: 1200px;
        width: 90%;
    }

    .box .card:before,
    .box .card:after {
        background-color: #ffffff;
        border-radius: 4px;
        content: '';
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        transition: box-shadow 0.5s ease,
            transform 0.5s ease;
        width: 100%;
        z-index: -1;
    }

    .box .card:hover:before {
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        transform: rotateZ(20deg);
    }

    .box .card {
        background-color: #ffffff;
        border-radius: 4px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        height: 300px;
        margin: 1.5rem auto;
        position: relative;
        width: 300px;
    }

    .box .card:hover:after {
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        transform: rotateZ(10deg);
    }

    .box .card .img-box {
        background-color: #222222;
        bottom: 10px;
        left: 10px;
        position: absolute;
        right: 10px;
        top: 10px;
        transition: bottom 0.5s ease;
        z-index: 1;
    }

    .box .card:hover .img-box {
        bottom: 80px;
    }

    .box .card .img-box img {
        height: 100%;
        left: 0;
        -o-object-fit: cover;
        object-fit: cover;
        position: absolute;
        top: 0;
        width: 100%;
    }

    .box .card .details {
        bottom: 10px;
        height: 60px;
        left: 10px;
        position: absolute;
        right: 10px;
        text-align: center;
    }

    .box .card .details h2 {
        color: #777777;
        font: 600 20px 'Poppins', sans-serif;
        text-transform: uppercase;
    }

    .box .card .details h2 span {
        color: #f38695;
        display: block;
        font: 500 1rem 'Poppins', sans-serif;
        margin-top: -5px;
    }

    .title {
        color: #fff;
        text-align: center;
        width: 100%;
    }

    .container {
        width: 80%;
        margin: 0 auto;
    }

    main {
        margin-top: 80px;
    }
    </style>
    <script type='text/javascript' src=''></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src=''></script>
</head>

<body oncontextmenu='return false' class='snippet-body'>
    <div class="container">

        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
                    <a class="navbar-brand" href="#">Inicio</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="registrarProveedores.php">Registrar Proveedores</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="registrarCleintes.php">Registrar Clientes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="registrarProductos.php">Registrar Productos</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h1 class="title">Personas Famosas</h1>
                <div class="box">



                    <div class="card">
                        <div class="img-box">
                            <img src="https://images.pexels.com/photos/598917/pexels-photo-598917.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                                alt="Person" title="Person">
                        </div>

                        <div class="details">
                            <h2>
                                Someone Famous

                                <br>

                                <span>
                                    Photographer
                                </span>
                            </h2>
                        </div>
                    </div>

                    <div class="card">
                        <div class="img-box">
                            <img src="https://images.pexels.com/photos/1694348/pexels-photo-1694348.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                alt="Person" title="Person">
                        </div>

                        <div class="details">
                            <h2>
                                Someone Famous

                                <br>

                                <span>
                                    Hacker
                                </span>
                            </h2>
                        </div>
                    </div>

                    <div class="card">
                        <div class="img-box">
                            <img src="https://images.pexels.com/photos/2065805/pexels-photo-2065805.png?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                                alt="Person" title="Person">
                        </div>

                        <div class="details">
                            <h2>
                                Someone Famous

                                <br>

                                <span>
                                    Producer
                                </span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                
                <div class="box">



                    <div class="card">
                        <div class="img-box">
                            <img src="https://images.pexels.com/photos/598917/pexels-photo-598917.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                                alt="Person" title="Person">
                        </div>

                        <div class="details">
                            <h2>
                                Someone Famous

                                <br>

                                <span>
                                    Photographer
                                </span>
                            </h2>
                        </div>
                    </div>

                    <div class="card">
                        <div class="img-box">
                            <img src="https://images.pexels.com/photos/1694348/pexels-photo-1694348.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                alt="Person" title="Person">
                        </div>

                        <div class="details">
                            <h2>
                                Someone Famous

                                <br>

                                <span>
                                    Hacker
                                </span>
                            </h2>
                        </div>
                    </div>

                    <div class="card">
                        <div class="img-box">
                            <img src="https://images.pexels.com/photos/2065805/pexels-photo-2065805.png?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                                alt="Person" title="Person">
                        </div>

                        <div class="details">
                            <h2>
                                Someone Famous

                                <br>

                                <span>
                                    Producer
                                </span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script type='text/javascript'></script>
</body>

</html>