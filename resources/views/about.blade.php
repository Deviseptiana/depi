<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - AromaLux</title>
    <style>
        /* General Styles */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        /* Navigation Bar */
        nav {
            background: #8e44ad;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 1em;
            font-size: 1.1em;
        }

        nav a:hover {
            background: #732d91;
            padding: 0.2em 0.5em;
            border-radius: 5px;
        }

        /* About Section */
        .about-section {
            max-width: 900px;
            margin: 2em auto;
            padding: 2em;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .about-section h1 {
            text-align: center;
            color: #8e44ad;
            margin-bottom: 1em;
        }

        .about-section p {
            font-size: 1.1em;
            text-align: justify;
            margin-bottom: 1em;
        }

        /* Product Section */
        .product-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1.5em;
            margin-top: 2em;
        }

        .product-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            text-align: center;
            width: 280px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .product-card h3 {
            margin: 0.5em 0;
            color: #8e44ad;
        }

        .product-card p {
            font-size: 1em;
            margin: 0.5em 0;
            color: #555;
        }

        .product-card .price {
            font-size: 1.2em;
            font-weight: bold;
            color: #27ae60;
            margin-bottom: 1em;
        }

        footer {
            text-align: center;
            margin-top: 2em;
            padding: 1em 0;
            background: #8e44ad;
            color: #fff;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
        <a href="/Profile">Profile</a>
    </nav>

    <!-- About Section -->
    <section class="about-section">
        <h1>Tentang AromaLux</h1>
        <p>
            AromaLux adalah merek parfum premium yang memadukan seni dan sains dalam setiap botol parfum yang dihasilkan. Kami berdedikasi untuk menciptakan wewangian eksklusif yang merefleksikan kepribadian dan gaya hidup modern.
        </p>
        <p>
            Setiap produk AromaLux dibuat dengan bahan-bahan pilihan berkualitas tinggi yang diolah dengan teknologi canggih untuk memastikan kesempurnaan dalam setiap semprotan.
        </p>
    </section>

    <!-- Product Section -->
    <section class="product-section">
        <div class="product-card">
        <img src="{{ asset('images/auromatuc.jpg') }}" alt="Foto Profil" class="profile-img">
            <h3>Parfum Auramatic</h3>
            <p>Wewangian dengan aroma bunga dan kayu yang mempesona.</p>
            <p class="price">Rp 350.000</p>
        </div>

        <div class="product-card">
        <img src="{{ asset('images/mistique.jpg') }}" alt="Foto Profil" class="profile-img">
            <h3>Parfum Mystique</h3>
            <p>Sentuhan aroma oriental yang penuh misteri.</p>
            <p class="price">Rp 400.000</p>
        </div>

        <div class="product-card">
        <img src="{{ asset('images/oceanmilk.jpg') }}" alt="Foto Profil" class="profile-img">
            <h3>Parfum Oceanic</h3>
            <p>Kesegaran aroma laut yang menenangkan.</p>
            <p class="price">Rp 320.000</p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 AromaLux. Semua Hak Dilindungi.</p>
    </footer>

</body>
</html>
