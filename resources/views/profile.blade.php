<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - AromaLux</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Navigation Bar -->
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/contact') }}">Contact</a>
        <a href="{{ url('/profile') }}">Profile</a>
    </nav>

    <!-- Profile Section -->
    <section class="profile-section">
        <img src="{{ asset('images/fotoku.jpg') }}" alt="Foto Profil" class="profile-img">
        <h2>AromaLux</h2>
        <p><strong>Didirikan pada:</strong> 2020</p>
        <p><strong>Bidang:</strong> Parfum Eksklusif & Wewangian</p>
        <p>
            AromaLux adalah merek parfum premium yang hadir dengan visi untuk mendefinisikan ulang keharuman sebagai bagian penting dari identitas seseorang. 
            Sejak berdiri pada tahun 2020, kami terus berkomitmen untuk menghadirkan wewangian yang tidak hanya memikat indra penciuman tetapi juga menceritakan kisah yang mendalam di setiap tetesnya.
        </p>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 AromaLux. Semua Hak Dilindungi.</p>
    </footer>

</body>
</html>
