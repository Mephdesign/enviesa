<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona w budowie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #000;
            color: #fff;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            position: relative;
        }

        /* Tło z obrazem */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("common/images/header.jpg");
            background-size: cover; /* Zmienione na "contain", aby całe zdjęcie było widoczne */
            background-repeat: no-repeat; /* Zablokowanie powtarzania obrazu */
            background-position: center center;
            opacity: 0.5; /* Ustawia przezroczystość tła */
            z-index: -1; /* Obraz tła za treścią */
        }

        header {
            margin-bottom: 20px;
        }

        main {
            flex-grow: 1;
        }
        /* Dostosowanie wielkości logo */
        .logo-container img {
            max-width: 300px; /* Maksymalna szerokość logo */
        }

        footer {
            background-color: #222;
            margin-top: auto; /* Pozwala stopce przyklejać się do dołu strony */
            width: 100%;
        }

        /* Media Queries: Dla mniejszych ekranów */
        @media (max-width: 576px) {
            .logo-container img {
                max-width: 250px; /* Zmniejszenie logo na urządzeniach mobilnych */
            }
        }
    </style>
</head>
<body>

<!-- Header -->
<header class="py-3 text-center">
    <div class="container logo-container">
        <img src="{{ asset('common/logos/logo-white.png') }}" alt="Enviesa">
    </div>
</header>

<!-- Main Content -->
<main class="d-flex align-items-center justify-content-center">
    <div class="text-center">
        <h1 class="mb-4">Strona w budowie</h1>
        <p class="mb-4">Nasza strona internetowa jest w trakcie budowy. Zapraszamy do kontaktu!</p>
        <h3>Dane kontaktowe:</h3>
        <br>
        <h4>ENVIESA</h4>
        <p>ul. Toruńska 4</p>
        <p>44-100 Gliwice</p>
        <p>Email: kontakt@example.com</p>
        <p>Telefon: +48 123 456 789</p>
        Sąd Rejonowy w Gliwicach
        X Wydział Gospodarczy <br>
        KRS 0000505556 <br>
        REGON 243536212 <br>
        Konto Millenium Bank <br>
        83116022020000000503654350
    </div>
</main>

<!-- Footer -->
<footer class="text-white py-3 text-center">
    <div class="container">
        <p class="mb-0">© 2024 Enviesa. Wszelkie prawa zastrzeżone.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
