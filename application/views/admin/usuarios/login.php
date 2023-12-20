<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Hello, world!</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box
        }

        body {
            background-color: #eee;
            height: 100vh;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to top, #fff 10%, rgba(93, 42, 141, 0.4) 90%) no-repeat
        }

        .wrapper {
            max-width: 500px;
            border-radius: 10px;
            margin: 50px auto;
            padding: 30px 40px;
            box-shadow: 20px 20px 80px rgb(206, 206, 206)
        }

        .h2 {
            font-family: 'Kaushan Script', cursive;
            font-size: 3.5rem;
            font-weight: bold;
            color: #400485;
            font-style: italic
        }

        .h4 {
            font-family: 'Poppins', sans-serif
        }

        .input-field {
            border-radius: 5px;
            padding: 5px;
            display: flex;
            align-items: center;
            cursor: pointer;
            border: 1px solid #400485;
            color: #400485
        }

        .input-field:hover {
            color: #7b4ca0;
            border: 1px solid #7b4ca0
        }

        input {
            border: none;
            outline: none;
            box-shadow: none;
            width: 100%;
            padding: 0px 2px;
            font-family: 'Poppins', sans-serif
        }

        .fa-eye-slash.btn {
            border: none;
            outline: none;
            box-shadow: none
        }

        a {
            text-decoration: none;
            color: #400485;
            font-weight: 700
        }

        a:hover {
            text-decoration: none;
            color: #7b4ca0
        }

        .option {
            position: relative;
            padding-left: 30px;
            cursor: pointer
        }

        .option label.text-muted {
            display: block;
            cursor: pointer
        }

        .option input {
            display: none
        }

        .checkmark {
            position: absolute;
            top: 3px;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 50%;
            cursor: pointer
        }

        .option input:checked~.checkmark:after {
            display: block
        }

        .option .checkmark:after {
            content: "";
            width: 13px;
            height: 13px;
            display: block;
            background: #400485;
            position: absolute;
            top: 48%;
            left: 53%;
            border-radius: 50%;
            transform: translate(-50%, -50%) scale(0);
            transition: 300ms ease-in-out 0s
        }

        .option input[type="radio"]:checked~.checkmark {
            background: #fff;
            transition: 300ms ease-in-out 0s;
            border: 1px solid #400485
        }

        .option input[type="radio"]:checked~.checkmark:after {
            transform: translate(-50%, -50%) scale(1)
        }

        .btn.btn-block {
            border-radius: 20px;
            background-color: #400485;
            color: #fff
        }

        .btn.btn-block:hover {
            background-color: #55268be0
        }

        @media(max-width: 575px) {
            .wrapper {
                margin: 10px
            }
        }

        @media(max-width:424px) {
            .wrapper {
                padding: 30px 10px;
                margin: 5px
            }

            .option {
                position: relative;
                padding-left: 22px
            }

            .option label.text-muted {
                font-size: 0.95rem
            }

            .checkmark {
                position: absolute;
                top: 2px
            }

            .option .checkmark:after {
                top: 50%
            }

            #forgot {
                font-size: 0.95rem
            }
        }
    </style>
</head>

<body>
    <div class="wrapper bg-white">
        <div class="h2 text-center">Blancos Hoteleros</div>
        <div class="h4 text-muted text-center pt-2">Ingresar al administrador</div>
        <form class="pt-3" id="loginForm">
            <div class="form-group py-2">
                <div class="input-field"> <span class="far fa-user p-2"></span>
                    <input type="text" id="usuario" placeholder="Ingresa su usuario" required class="">
                </div>
            </div>
            <div class="form-group py-1 pb-2">
                <div class="input-field">
                    <span class="fas fa-lock p-2"></span>
                    <input type="password" placeholder="Ingresa tu contraseña" id="contrasena" required class="">
                    <button class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span> </button>
                </div>
            </div>
            <button class="btn btn-block text-center my-3" id="ingresar">Ingresar</button>
            <div class="text-center pt-3 text-muted">Desarrollado por Marco A. Cardona<br><a href="#">www.creandopixeles.com.mx</a></div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#loginForm').submit(function(event) {
                event.preventDefault();

                const usuario = $('#usuario').val().trim();
                const contrasena = $('#contrasena').val().trim();

                // Verificar si el usuario y contraseña no contienen espacios en blanco
                if (usuario.includes(' ') || contrasena.includes(' ')) {
                    alert('El usuario y la contraseña no pueden contener espacios en blanco.');
                    return;
                }

                // Enviar datos al controlador de CodeIgniter usando AJAX
                $.ajax({
                    url: 'validar_sesion',
                    method: 'POST',
                    data: {
                        usuario: usuario,
                        contrasena: contrasena
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            // Si la respuesta es exitosa, redireccionar a una nueva página
                            window.location.href = 'productos/lista';
                        } else {
                            // Si la respuesta no es exitosa, mostrar mensaje de error
                            alert(response.message);
                        }
                    },
                    error: function() {
                        alert('Se produjo un error al procesar la solicitud.');
                    }
                });
            });
        });
    </script>
</body>

</html>