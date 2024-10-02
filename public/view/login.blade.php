<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="icon" href="../images/logoo.png" type="image/x-icon">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #e3eff9, #2a1255);
            font-family: Arial, Helvetica, sans-serif;
        }

        .login-container {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 320px;
        }

        .login-container .avatar {
            background: #3e3e3e;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 1.5rem;
        }

        .login-container .avatar i {
            color: white;
            font-size: 2rem;
        }

        .login-container .form-label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #0c074e;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0a1172;
        }

        .forgot-password {
            display: block;
            text-align: right;
            margin-top: 0.5rem;
            font-size: 0.9rem;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="avatar">
            <i class="fas fa-user"></i>
        </div>
        <h2 class="text-center mb-4">Mi Cuenta</h2>
        <form id="login-form">
            <div class="mb-3">
                <label for="email" class="form-label"><i class="fas fa-user"></i> Correo</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"><i class="fas fa-lock"></i> Contraseña</label>
                <input type="password" class="form-control" id="password" required>

            </div>
            <button type="button" class="btn btn-primary w-100" onclick="window.location.href='../view/dash.blade.php'">Iniciar sesión</button>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

