
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIPEPE</title>
    <!-- Memuat file CSS dari Bootstrap untuk membuat halaman responsif -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets\css\style.css">
    <!-- Memuat fontawesome untuk ikon -->
    <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>
</head>

<body style="background-image: url('{{ asset('images/Fix.png') }}')">
    <!-- Menampilkan main halaman-->
    <main style="">
        
        <section class="welcome-section">
            <div class="text-center">
                <a href="login.html">
                    <img src="images/6.png" alt="Logo NutriCycle">
                </a>
                <br>
                <br>
                <br>
            </div>
            <h2 class="text-black text-center">
               WELCOME TO SIPEPE
                <br>
                UPLOAD FILE PENELITIAN LEBIH MUDAH
            </h2>
            <br>
            <br>
            <br>
            <br>
            <br>
            <center>
                <a href="/login" class="btn btn-dark text-white rounded-4 text-center">
                    <i class="fas fa-arrow-right"></i> Get Started
                </a>
            </center>
        </section>
        <br>
        <br>
    </main>

    <!-- Menampilkan footer halaman -->
    <footer class= text-center pt-3">
        <p> <strong>Copyright 2023 &copy; NutriCycle</strong>></p>
    </footer>

    <!-- Memuat file JavaScript dari Bootstrap untuk membuat halaman responsif -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>