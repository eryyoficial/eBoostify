<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro 404 - Página não encontrada</title>
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }
        .error-content {
            text-align: center;
            animation: slide-up 0.5s ease-out;
        }
        .error-number {
            font-size: 10rem;
            font-weight: bold;
            color: #dc3545;
            margin-bottom: 0;
        }
        .error-message {
            font-size: 2rem;
            margin-top: 10px;
            color: #6c757d;
        }
        .btn-back {
            margin-top: 20px;
            opacity: 0;
            animation: fade-in 1s ease-out forwards;
        }
        .btn-back:hover {
            transform: scale(1.05);
        }
        @keyframes slide-up {
            0% {
                transform: translateY(50px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
        @keyframes fade-in {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container error-content">
        <div>
            <div class="error-number">404</div>
            <div class="error-message">Página não encontrada</div>
            <a href="http://localhost/kabasessences/client/index.php" class="btn btn-outline-primary btn-back">Voltar para a página inicial</a>
        </div>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
