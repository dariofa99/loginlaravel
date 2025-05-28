<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Confirmación de cuenta</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }
    .container {
      background-color: #ffffff;
      max-width: 600px;
      margin: 40px auto;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .header {
      text-align: center;
      padding-bottom: 20px;
    }
    .header h1 {
      color: #4CAF50;
      margin: 0;
    }
    .message {
      font-size: 16px;
      color: #333;
      line-height: 1.6;
      margin-bottom: 30px;
    }
    .btn {
      display: inline-block;
      padding: 12px 24px;
      background-color: #4CAF50;
      color: #fff !important;
      text-decoration: none;
      border-radius: 6px;
      font-weight: bold;
      text-align: center;
    }
    .footer {
      margin-top: 30px;
      text-align: center;
      font-size: 12px;
      color: #aaa;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>¡Hola, {{ $user->name}}. Bienvenido a {{ config('app.name') }}!</h1>
    </div>
    <div class="message">
      <p>Gracias por registrarte. Solo falta un paso para activar tu cuenta.</p>
      <p>Haz clic en el siguiente botón para confirmar tu correo electrónico:</p>
      <p style="text-align: center;">
        <a href="{{ url('/users/active/account/'.$token) }}" class="btn">Confirmar cuenta</a>
      </p>
    </div>
    <div class="footer">
      Si no solicitaste este correo, puedes ignorarlo.<br>
      &copy; {{ date('Y') }} {{ config('app.name') }}. Todos los derechos reservados.
    </div>
  </div>
</body>
</html>
