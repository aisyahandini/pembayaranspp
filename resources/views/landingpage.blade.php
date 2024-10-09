<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPP </title>
    <!-- Favicons -->
    <link href="{{ asset('asset/img/logo.png') }}" rel="icon">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
            color: white;
        }

        h1,
        h2,
        h3 {
            margin: 0;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        p {
            margin: 0 0 1rem 0;
        }

        /* Navbar */
        nav {
            display: flex;
            justify-content: space-between;
            padding: 1rem 2rem;
            background-color: #333;
            color: white;
        }

        .nav-links {
            display: flex;
            gap: 1rem;
        }

        .nav-links li {
            list-style: none;
        }

        .nav-links a:hover {
            color: #3998ab;
        }

        /* Hero Section */
        .hero {
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background-image: url('{{ asset('asset/img/ladingpega.webp') }}');
            /* Link gambar di sini */
            background-size: cover;
            background-position: center;
        }

        .hero-content {
            background: rgba(255, 255, 255, 0.7);
            padding: 2rem;
            border-radius: 10px;
        }

        .hero h1 {
            font-size: 3rem;
            color: #333;
        }

        .hero p {
            font-size: 1.5rem;
            margin: 1rem 0;
            color: #0b0a0a;
        }

        .hero .btn {
            background-color: #ffcc00;
            padding: 1rem 2rem;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        /* Why Choose Us Section */

        .slider {
            display: flex;
            overflow: hidden;
            width: 100%;
        }

        .slider-track {
            display: flex;
            animation: scroll 10s linear infinite;
        }

        .slider-item {
            min-width: 100%;
            box-sizing: border-box;
        }


        .why-us {
            text-align: center;
            padding: 4rem 2rem;
            background-color: #fff;
        }

        .why-us h2 {
            margin-bottom: 2rem;
        }

        .features {
            display: flex;
            justify-content: center;
            gap: 15rem;
        }

        .feature {
            max-width: 200px;
        }

        .feature img {
            width: 100%;
        }

        .feature h3 {
            margin-top: 1rem;
        }

        /* How It Works Section */
        .how-it-works {
            text-align: center;
            padding: 4rem 2rem;
            background-color: #f7f7f7;
        }

        .how-it-works ul {
            text-align: left;
            display: inline-block;
            margin: 0;
        }

        .how-it-works li {
            margin: 0.5rem 0;
        }

        /* Testimonials Section */
        .testimonials {
            text-align: center;
            padding: 4rem 2rem;
        }

        .testimonials blockquote {
            font-size: 1.2rem;
            font-style: italic;
        }

        .testimonials cite {
            font-size: 1rem;
            display: block;
            margin-top: 1rem;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 1rem;
            background-color: #333;
            color: white;
        }
    </style>

</head>

<body>


    <!-- Navbar -->
    <nav>
        <div>
            <img src="asset/img/logo.png" alt="SPP Payment" class="logo">
        </div>
        <ul class="nav-links">
            <li><a href="#why-us">Why Choose Us</a></li>
            <li><a href="#how-it-works">How It Works</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
            <li><a href="/login-page">Login</a></li>
        </ul>
    </nav>

    <style>
        .logo {
            width: 50px;
            /* Sesuaikan dengan ukuran yang Anda inginkan */
            height: auto;
            /* Agar tetap mempertahankan rasio aslinya */
        }
    </style>



    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Bayar SPP dengan Mudah dan Cepat</h1>
            <p>Dengan layanan kami, pembayaran SPP menjadi lebih praktis dan aman.</p>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why-us" class="why-us">
        <h1>Mengapa Memilih Kami?</h1>
        <div class="features">
            <div class="feature">
                <img src="asset/img/praktis.png" alt="Feature 1">
                <h3>Simpel</h3>
                <p>Pembayaran tanpa ribet, cukup beberapa klik.</p>
            </div>
            <div class="feature">
                <img src="asset/img/aman.png" alt="Feature 2">
                <h3>Aman</h3>
                <p>Transaksi aman dengan enkripsi terkini.</p>
            </div>
            <div class="feature">
                <img src="asset/img/terpercaya.png" alt="Feature 3">
                <h3>Terpercaya</h3>
                <p>Sudah dipercaya oleh banyak sekolah dan orang tua.</p>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="how-it-works">
        <h2>Bagaimana Cara Kerjanya?</h2>
        <p>Mudah digunakan, hanya dengan beberapa langkah sederhana:</p>
        <ul>
            <li>Masuk ke akun atau buat akun baru</li>
            <li>Pilih sekolah dan nominal SPP</li>
            <li>Selesaikan pembayaran</li>
        </ul>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials">
        <h2>Apa Kata Mereka?</h2>
        <blockquote>
            <p>"Layanan ini sangat membantu, pembayaran SPP jadi lebih mudah!"</p>
            <cite>- Ibu Sari</cite>
        </blockquote>
    </section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.412740736834!2d100.1073303!3d-0.5950024!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4e29ec73d284b%3A0x7bb01a852ffffc98!2sSMK%20Negeri%203%20Pariaman!5e0!3m2!1sid!2sid!4v1728446065966!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 SPP Payment. All rights reserved.</p>
    </footer>

</body>

</html>
