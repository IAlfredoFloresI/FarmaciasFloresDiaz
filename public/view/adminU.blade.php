<!DOCTYPE html>
<html lang="en">

<head>
    <title>Administrador de Usuarios - F&D Farmacia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../images/logoo.png" type="image/x-icon">
    <style>
        body {
            background: url('../images/fondoo.jpg') no-repeat center center fixed;
            background-size: cover;
        }
    </style>
</head>

<body>
    <!-- Navbar y otros componentes omitidos para brevedad -->

    <nav class="pcoded-navbar menu-light">
        <div class="navbar-wrapper">
            <div class="navbar-content scroll-div">
                <div class="">
                    <div class="main-menu-header">
                        <img class="img-radius" src="../images/logo.png" alt="User-Profile-Image">
                        <div class="user-details">
                            <div id="more-details">F&D FARMACIA</div>
                        </div>
                    </div>
                </div>

                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="nav-item">
                        <a href="dash.html" class="nav-link menu-link">
                            <span class="pcoded-micon">
                                <i data-feather="home"></i>
                            </span>
                            <span class="pcoded-mtext">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Administracion</label>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link menu-link" data-toggle="modal" data-target="#userModal">
                            <span class="pcoded-micon">
                                <i data-feather="users"></i>
                            </span>
                            <span class="pcoded-mtext">Usuarios</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="produc.html" class="nav-link menu-link">
                            <span class="pcoded-micon">
                                <i data-feather="file-text"></i>
                            </span>
                            <span class="pcoded-mtext">Productos</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <section class="pcoded-main-container">
        <div class="container mt-5">
            <br>
            <h3>Catálogo de Clientes</h3>
            <!-- Botón para abrir el modal de agregar cliente -->
            <button class="btn btn-success mb-3" data-toggle="modal" data-target="#userModal">Agregar Cliente</button>

            <!-- Listado de clientes -->
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($users as $user)
                <div class="col">
                    <div class="card shadow-sm h-100">
                        <img src="{{ $user->foto }}" class="card-img-top" alt="Foto del Cliente">
                        <div class="card-body">
                            <h5 class="card-title text-primary">{{ $user->nombre }}</h5>
                            <p class="card-text">
                                <strong>Teléfono:</strong> {{ $user->tel }} <br>
                                <strong>Correo:</strong> {{ $user->correo }}
                            </p>
                            <!-- Botón para ver detalles -->
                            <a href="{{ route('../views/adms/show.blade.php', $user->id) }}" class="btn btn-outline-secondary stretched-link">
                                <i class="feather icon-eye"></i> Ver Detalles
                            </a>

                            <!-- Botones de Editar y Eliminar -->
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">
                                <i class="feather icon-edit"></i> Editar
                            </a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="feather icon-trash"></i> Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Modal para agregar nuevo usuario -->
        <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="userModalLabel">Agregar Nuevo Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" maxlength="80" placeholder="Ingresa el nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="tel">Teléfono</label>
                                <input type="text" class="form-control" id="tel" name="tel" maxlength="10" placeholder="Ingresa el teléfono" required>
                            </div>
                            <div class="form-group">
                                <label for="correo">Correo</label>
                                <input type="email" class="form-control" id="correo" name="correo" maxlength="300" placeholder="Ingresa el correo" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                                <small class="form-text text-muted">Debe tener al menos 8 caracteres y combinar letras, números y símbolos.</small>
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">Confirmar Contraseña</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Scripts necesarios -->
    <script src="../js/vendor-all.min.js"></script>
    <script src="../js/plugins/bootstrap.min.js"></script>
    <script src="../js/pcoded.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();
    </script>
</body>

</html>