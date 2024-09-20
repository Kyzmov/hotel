<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Svilengrad'daki Hesteya Otel-Restoran, konforlu odalar ve seçkin mutfak sunmaktadır. Unutulmaz bir deneyim için şimdi rezervasyon yapın!">
    <meta name="keywords" content="otel, restoran, Hesteya, Svilengrad, rezervasyon, konaklama, casino">
    <title>Otel-Restoran "Hesteya" - Svilengrad</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <script src="reservation.js"></script>
</head>
<body class="font-sans bg-gray-100">
<header class="bg-white shadow-md fixed w-full top-0 z-50 transition-all duration-300" x-data="{ isSticky: false }" @scroll.window="isSticky = (window.pageYOffset > 50) ? true : false" :class="{ 'py-2': isSticky, 'py-4': !isSticky }">
    <nav class="container mx-auto px-6 flex justify-between items-center">
        <a href="#" class="flex items-center">
            <img src="images/logo.png" alt="Hesteya logo" class="h-12 w-auto">
        </a>
        <div class="flex-1 flex justify-center">
            <div class="space-x-4 flex items-center">
                <a href="#rooms" class="text-gray-700 hover:text-gray-900">Otel</a>
                <a href="#restaurant" class="text-gray-700 hover:text-gray-900">Restoran</a>
                <a href="#gallery" class="text-gray-700 hover:text-gray-900">Galeri</a>
                <a href="#contact" class="text-gray-700 hover:text-gray-900">İletişim</a>
            </div>
        </div>
        <div class="space-x-4 flex items-center">
            <a href="#reservation" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">Rezervasyon</a>
            <div class="hidden md:flex items-center space-x-4">
                <span class="text-gray-700"><i class="fas fa-phone-alt"></i> +359 37 993 666</span>
                <span class="text-gray-700"><i class="fas fa-envelope"></i> info@hesteya.bg</span>
            </div>
            <select id="language-switcher" class="bg-gray-100 rounded" onchange="switchLanguage()">
                <option value="bg">BG</option>
                <option value="en">EN</option>
                <option value="tr">TR</option>
            </select>
        </div>
    </nav>
</header>
    <script src="language-switcher.js"></script> <!-- Harici JS dosyanıza bağlantı -->
</body>

<main>
    <section id="hero" class="relative h-96">
        <img src="images/hesteya.jpg" alt="Hesteya Otel" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <h1 class="text-4xl font-bold text-white text-center">Svilengrad'daki Hesteya Otel-Restoran'a Hoş Geldiniz</h1>
        </div>
    </section>

    <section id="rooms" class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-center mb-8">Odalarımız</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="images/spalnq.jpg" alt="Yatak Odası" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">Yatak Odası</h3>
                <p class="text-gray-600">Huzurlu bir dinlenme için rahat yatak odası.</p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="images/dvoina.jpg" alt="Çift Kişilik Oda" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">Çift Kişilik Oda</h3>
                <p class="text-gray-600">İki kişilik geniş oda.</p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="images/apartament.jpg" alt="Daire" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">Daire</h3>
                <p class="text-gray-600">Tam konfor için lüks daire.</p>
            </div>
        </div>
    </div>
</section>
<section id="restaurant" class="bg-gray-200 py-12">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-8">Restoranımız</h2>
        <p class="text-center text-gray-700 mb-8">Hoş bir atmosferde seçkin mutfağın tadını çıkarın.</p>
        <img src="images/restorant.jpg" alt="Hesteya Restoran" class="w-full h-64 object-cover rounded-lg shadow-md">
    </div>
</section>

<section id="gallery" class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-center mb-8">Galeri</h2>
    
    <div class="mb-12">
        <h3 class="text-2xl font-semibold mb-4">Yatak Odası</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <a href="images/spalnq.jpg" data-lightbox="bedroom" data-title="Yatak Odası">
                <img src="images/spalnq.jpg" alt="Yatak Odası 1" class="w-full h-48 object-cover rounded-lg">
            </a>
            <a href="images/spalnq2.jpg" data-lightbox="bedroom" data-title="Yatak Odası">
                <img src="images/spalnq2.jpg" alt="Yatak Odası 2" class="w-full h-48 object-cover rounded-lg">
            </a>
            <a href="images/spalnq3.jpg" data-lightbox="bedroom" data-title="Yatak Odası">
                <img src="images/spalnq3.jpg" alt="Yatak Odası 3" class="w-full h-48 object-cover rounded-lg">
            </a>
        </div>
    </div>
    
    <div class="mb-12">
        <h3 class="text-2xl font-semibold mb-4">Çift Kişilik Oda</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <img src="images/dvoina.jpg" alt="Çift Kişilik Oda 1" class="w-full h-48 object-cover rounded-lg">
            <img src="images/dvoina2.jpg" alt="Çift Kişilik Oda 2" class="w-full h-48 object-cover rounded-lg">
            <img src="images/dvoina3.jpg" alt="Çift Kişilik Oda 3" class="w-full h-48 object-cover rounded-lg">
        </div>
    </div>
    
    <div class="mb-12">
        <h3 class="text-2xl font-semibold mb-4">Daire</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <img src="images/apartament.jpg" alt="Daire 1" class="w-full h-48 object-cover rounded-lg">
            <img src="images/apartament2.jpg" alt="Daire 2" class="w-full h-48 object-cover rounded-lg">
            <img src="images/apartament3.jpg" alt="Daire 3" class="w-full h-48 object-cover rounded-lg">
        </div>
    </div>
    
    <div class="mb-12">
        <h3 class="text-2xl font-semibold mb-4">Restoran</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <img src="images/restorant.jpg" alt="Restoran 1" class="w-full h-48 object-cover rounded-lg">
            <img src="images/restorant2.jpg" alt="Restoran 2" class="w-full h-48 object-cover rounded-lg">
            <img src="images/restorant3.jpg" alt="Restoran 3" class="w-full h-48 object-cover rounded-lg">
        </div>
    </div>
</section>

<section id="contact" class="bg-gray-200 py-12">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-8">İletişim</h2>
        <div class="text-center">
            <p class="mb-2">+359 37 993 666</p>
            <p class="mb-2">info@hesteya.bg</p>
            <p>2 Kamchiya St, Svilengrad, Bulgaristan</p>
        </div>
    </div>
</section>
<div id="loading-spinner" class="hidden fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-50">
    <div class="loader">Yükleniyor...</div>
</div>
<section id="reservation" class="container mx-auto px-6 py-12" x-data="reservationForm()">
    <h2 class="text-3xl font-bold text-center mb-8">Rezervasyon Yapın</h2>
   
    <form class="max-w-lg mx-auto" @submit.prevent="submitForm()">
        <div class="mb-4">
            <label for="name" class="block text-gray-700 mb-2">İsim</label>
            <input type="text" id="name" name="name" x-model="name" class="w-full px-3 py-2 border rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 mb-2">E-posta</label>
            <input type="email" id="email" name="email" x-model="email" class="w-full px-3 py-2 border rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="phone" class="block text-gray-700 mb-2">Telefon</label>
            <input type="tel" id="phone" name="phone" x-model="phone" class="w-full px-3 py-2 border rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="arrival_date" class="block text-gray-700 mb-2">Geliş Tarihi</label>
            <input type="date" id="arrival_date" name="arrival_date" x-model="arrivalDate" @change="calculateNights" class="w-full px-3 py-2 border rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="departure_date" class="block text-gray-700 mb-2">Ayrılış Tarihi</label>
            <input type="date" id="departure_date" name="departure_date" x-model="departureDate" @change="calculateNights" class="w-full px-3 py-2 border rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="nights" class="block text-gray-700 mb-2">Gece Sayısı</label>
            <input type="number" id="nights" name="nights" x-model="nights" class="w-full px-3 py-2 border rounded-lg bg-gray-100" readonly>
        </div>
        <div class="mb-4">
            <label for="room_type" class="block text-gray-700 mb-2">Oda Türü</label>
            <select id="room_type" name="room_type" x-model="roomType" @change="calculateTotalPrice" class="w-full px-3 py-2 border rounded-lg" required>
                <option value="">Bir oda seçin</option>
                <option value="Спалня">Yatak Odası</option>
                <option value="Двойна">Çift Kişilik Oda</option>
                <option value="Апартамент">Daire</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="guests" class="block text-gray-700 mb-2">Misafir Sayısı</label>
            <input type="number" id="guests" name="guests" x-model="guests" min="1" max="4" @change="calculateTotalPrice" class="w-full px-3 py-2 border rounded-lg" required>
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 mb-2">Toplam Fiyat</label>
            <p class="text-2xl font-bold text-blue-600" x-text="totalPrice + ' лв.'"></p>
            <input type="hidden" name="total_price" x-model="totalPrice">
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 transition duration-300">Rezervasyon Yap</button>
    </form>
</section>

</html>
