<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear un Blog Chido</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        /* Estilos generales */
body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    color: #333;
}

.container {
    width: 90%;
    max-width: 600px;
    background: white;
    padding: 2.5rem;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

h1 {
    text-align: center;
    color: #764ba2;
    margin-bottom: 1.5rem;
    font-size: 2.2rem;
}

/* Formulario */
.blog-form {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.form-group {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

label {
    font-weight: 600;
    color: #555;
}

input, textarea {
    padding: 12px;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    font-size: 1rem;
    transition: all 0.3s ease;
}

input:focus, textarea:focus {
    border-color: #764ba2;
    outline: none;
    box-shadow: 0 0 0 3px rgba(118, 75, 162, 0.2);
}

textarea {
    resize: vertical;
}

/* Botón de envío */
.submit-btn {
    background: linear-gradient(to right, #667eea, #764ba2);
    color: white;
    border: none;
    padding: 12px;
    border-radius: 8px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(118, 75, 162, 0.4);
}

.submit-btn:active {
    transform: translateY(0);
}
    </style>

</head>
<body>
    <div class="container">
        <h1>✨ Crea tu Blog</h1>
        <form class="blog-form" action="{{ route('posts.store') }}" method="POST">

            @csrf

            <div class="form-group">
                <label for="title">Título del Blog</label>
                <input type="text" id="title" name="title" placeholder="Escribe un título increíble..." required>
            </div>
            <div class="form-group">
                <label for="content">Contenido</label>
                <textarea id="content" name="content" rows="8" placeholder="¡Comparte tus ideas con el mundo! 🚀" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Publicar Blog</button>
        </form>
    </div>
</body>
</html>