<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-body p-4">
                    <h2 class="text-center mb-4">Iniciar Sesión</h2>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="/login" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" 
                                   value="{{ old('email') }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Entrar</button>
                    </form>

                    <p class="text-center mt-3">
                        ¿No tienes cuenta? <a href="/registro">Regístrate</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>