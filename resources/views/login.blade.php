<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Iniciar Sesión</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(to right, #667eea, #764ba2);
    }

    .login-container {
      background-color: white;
      padding: 2rem;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
      animation: fadeIn 1s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #333;
    }

    .form-group {
      margin-bottom: 1.2rem;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: 600;
      color: #555;
    }

    .form-group input {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #ccc;
      border-radius: 10px;
      transition: border-color 0.3s;
    }

    .form-group input:focus {
      border-color: #667eea;
      outline: none;
    }

    .login-btn {
      width: 100%;
      padding: 0.8rem;
      background-color: #667eea;
      border: none;
      border-radius: 10px;
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .login-btn:hover {
      background-color: #5a67d8;
    }

    .extra {
      text-align: center;
      margin-top: 1rem;
      font-size: 0.9rem;
    }

    .extra a {
      color: #667eea;
      text-decoration: none;
    }

    .extra a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
   


    <!-- Mostrar errores generales -->
   

  <div class="login-container">
    <h2>Iniciar Sesión</h2>
     @if ($errors->any())
        <div class="error-box" style="color: red; margin-bottom: 1rem;">
            <ul style="list-style: none; padding: 0;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('error'))
        <div class="error-box" style="color: red; margin-bottom: 1rem;">
            {{ session('error') }}
        </div>
    @endif
    @if (session('success'))
        <div class="success-box" style="color: green; margin-bottom: 1rem;">
            {{ session('success') }}
        </div>
    @endif
    <form action="/login" method="POST">
        @csrf
      <div class="form-group">
        <label for="email">Correo electrónico</label>
        <input type="email" id="email" name="email" required />
      </div>
      <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" required />
      </div>
      <button type="submit" class="login-btn">Entrar</button>
    </form>
    <div class="extra">
      ¿No tienes cuenta? <a href="/register">Regístrate</a>
    </div>
  </div>
</body>
</html>
