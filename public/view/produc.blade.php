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
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- [ navigation menu ] start -->
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
                        <a href="adminU.html" class="nav-link menu-link" data-toggle="modal" data-target="#userModal">
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
    <!-- [ navigation menu ] end -->


<!-- [ Header ] start -->
<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        <a href="#!" class="b-brand">
            <img src="../images/logoo.png" alt="" class="logo" >
            <img src="../images/logo-icon.png" alt="" class="logo-thumb">
        </a>
        <a href="#!" class="mob-toggler">
            <i class="feather icon-more-vertical"></i>
        </a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <!-- Botón para cerrar sesión -->
                <button class="btn btn-primary" data-toggle="modal" data-target="#logoutModal" style="background-color: #4169e1; border-color: #4169e1;">Cerrar Sesión</button>

            </li>
        </ul>
    </div>
</header>
<!-- [ Header ] end -->

<!-- Modal de Confirmación de Cerrar Sesión -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Confirmación de Cerrar Sesión</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas cerrar sesión?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger" id="confirmLogout">Cerrar Sesión</button>
            </div>
        </div>
    </div>
</div>
    <!-- [ Main Content ] start -->
    <section class="pcoded-main-container">
        
            <div class="card-header">
                <h3>Administracion de los productos</h3>
                
                <button class="btn btn-primary" data-toggle="modal" data-target="#addProductModal">Agregar Producto</button>
            </div>
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Stock</th>
                                <th>Caducidad</th>
                                <th>Descripción</th>
                                <th>Imagen (URL)</th>
                                <th>Tienda ID</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody id="productTableBody">
                            <!-- Las filas de los productos serán añadidas aquí dinámicamente -->
                        </tbody>
                    </table>
                </div>
            </div>
      
    </section>

    <!-- Modal para agregar producto -->
    <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductModalLabel">Agregar Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addProductForm">
                        <div class="form-group">
                            <label for="productName">Nombre</label>
                            <input type="text" class="form-control" id="productName" required>
                        </div>
                        <div class="form-group">
                            <label for="productStock">Stock</label>
                            <input type="number" class="form-control" id="productStock" required>
                        </div>
                        <div class="form-group">
                            <label for="productExpiry">Caducidad</label>
                            <input type="date" class="form-control" id="productExpiry" required>
                        </div>
                        <div class="form-group">
                            <label for="productDescription">Descripción</label>
                            <textarea class="form-control" id="productDescription" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="productImageFile">Imagen</label>
                            <input type="file" class="form-control-file" id="productImageFile" accept="image/*" required>
                        </div>
                        <div class="form-group">
                            <label for="productStoreId">Tienda ID</label>
                            <input type="text" class="form-control" id="productStoreId" required>
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Precio</label>
                            <input type="number" class="form-control" id="productPrice" step="0.01" required>
                        </div>
                        <button type="button" class="btn btn-primary" id="saveProductBtn">Guardar Producto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Js -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../js/vendor-all.min.js"></script>
    <script src="../js/plugins/bootstrap.min.js"></script>
    <script src="../js/pcoded.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
	<script>
		document.getElementById("confirmLogout").addEventListener("click", function() {
			// Redirige a index.html
			window.location.href = "/xampp/3A_UNI1_WEB/Farmacia/index.html";
	
		});
	</script>
    <script>
        feather.replace();

        document.getElementById('saveProductBtn').addEventListener('click', function () {
            // Obtener los valores del formulario
            const name = document.getElementById('productName').value;
            const stock = document.getElementById('productStock').value;
            const expiry = document.getElementById('productExpiry').value;
            const description = document.getElementById('productDescription').value;
            const imageFile = document.getElementById('productImageFile').files[0];
            const storeId = document.getElementById('productStoreId').value;
            const price = document.getElementById('productPrice').value;

            // Obtener la URL del archivo de imagen (puede ser una URL temporal)
            let imageUrl = '';
            if (imageFile) {
                imageUrl = URL.createObjectURL(imageFile);
            }

            // Crear una nueva fila para la tabla
            const tableBody = document.getElementById('productTableBody');
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td>1</td> <!-- ID de ejemplo, reemplazar con uno dinámico si es necesario -->
                <td>${name}</td>
                <td>${stock}</td>
                <td>${expiry}</td>
                <td>${description}</td>
                <td>${imageUrl}</td>
                <td>${storeId}</td>
                <td>${price}</td>
            `;
            tableBody.appendChild(newRow);

            // Cerrar el modal
            $('#addProductModal').modal('hide');

            // Limpiar el formulario
            document.getElementById('addProductForm').reset();
        });
    </script>
</body>
</html>
