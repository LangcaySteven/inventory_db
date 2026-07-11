<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: linear-gradient(135deg, #020617, #0F172A, #1E3A8A);
            min-height:100vh;
            font-family: 'Segoe UI', sans-serif;
        }

        .container{
            max-width:1300px;
        }

        .card{
   background:#D1D5DB !important;
    border:none !important;
    border-radius:20px;
    box-shadow:0 12px 30px rgba(0,0,0,.25);
    transition:.3s;
}

.card:hover{
    transform:translateY(-4px);
    box-shadow:0 18px 40px rgba(0,0,0,.35);
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>