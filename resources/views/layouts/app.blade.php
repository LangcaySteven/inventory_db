<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Laravel CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body{
            background: linear-gradient(135deg,#020617,#0F172A,#1E3A8A);
            min-height:100vh;
            font-family:'Segoe UI',sans-serif;
        }

        .container{
            max-width:1300px;
        }

        .card{
    background: rgba(47, 123, 236, 0.95) !important;
    border:1px solid rgba(115, 210, 77, 0.3) !important;
    border-radius:20px;
    backdrop-filter:blur(12px);
    -webkit-backdrop-filter:blur(12px);
    box-shadow:0 10px 30px rgba(15,23,42,.12);
    transition:all .3s ease;
}

.card:hover{
    transform:translateY(-6px);
    box-shadow:0 20px 40px rgba(15,23,42,.2);
}

        .table{
            border-radius:15px;
            overflow:hidden;
        }

        .btn{
            border-radius:10px;
            transition:.3s;
        }

        .btn:hover{
            transform:translateY(-2px);
        }

        .form-control,
        .form-select{
            border-radius:10px;
        }
    </style>

</head>

<body>

    <div class="container py-5">
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>