<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .register-container {
            max-width: 500px;
            margin-top: 50px;
            margin-bottom: 50px;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="container register-container">
    <div class="card p-4">
        <div class="card-body">
            <h2 class="text-center mb-4 fw-bold text-primary">Registrarse</h2>
            <p class="text-center text-muted mb-4">Únete a nuestra comunidad hoy mismo.</p>

            <form class="needs-validation" novalidate>
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label for="firstName" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Ej: Juan" required>
                    </div>
                    <div class="col-md-6">
                        <label for="lastName" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Ej: Pérez" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com" required>
                    <div class="invalid-feedback">Por favor, ingresa un correo válido.</div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" minlength="8" required>
                    <div class="form-text">Mínimo 8 caracteres.</div>
                </div>

                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
                    <input type="password" class="form-control" id="confirmPassword" required>
                </div>

                <div class="mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="terms" required>
                    <label class="form-check-label" for="terms">Acepto los <a href="#">términos y condiciones</a></label>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg">Registrarse</button>
                </div>

                <div class="text-center mt-3">
                    <small>¿Ya tienes cuenta? <a href="#" class="text-decoration-none">Inicia sesión</a></small>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>