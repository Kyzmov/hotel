<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hotel-restaurant Hesteya in Svilengrad offers cozy rooms and exquisite cuisine. Book now for an unforgettable experience!">
    <meta name="keywords" content="hotel, restaurant, Hesteya, Svilengrad, reservation, accommodation, casino">
    <title>Hotel-restaurant "Hesteya" - Svilengrad</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
</head>
<body class="font-sans bg-gray-100">
<header class="bg-white shadow-md fixed w-full top-0 z-50 transition-all duration-300" x-data="{ isSticky: false }" @scroll.window="isSticky = (window.pageYOffset > 50) ? true : false" :class="{ 'py-2': isSticky, 'py-4': !isSticky }">
    <nav class="container mx-auto px-6 flex justify-between items-center">
        <a href="#" class="flex items-center">
            <img src="images/logo.png" alt="Hesteya logo" class="h-12 w-auto">
        </a>
        <div class="flex-1 flex justify-center">
            <div class="space-x-4 flex items-center">
                <a href="#rooms" class="text-gray-700 hover:text-gray-900">Hotel</a>
                <a href="#restaurant" class="text-gray-700 hover:text-gray-900">Restaurant</a>
                <a href="#gallery" class="text-gray-700 hover:text-gray-900">Gallery</a>
                <a href="#contact" class="text-gray-700 hover:text-gray-900">Contact</a>
            </div>
        </div>
        <div class="space-x-4 flex items-center">
            <a href="#reservation" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">Reservation</a>
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
    <script src="language-switcher.js"></script> <!-- Link to your external JS file -->
</body>

<main>
    <section id="hero" class="relative h-96">
        <img src="images/hesteya.jpg" alt="Hotel Hesteya" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <h1 class="text-4xl font-bold text-white text-center">Welcome to Hotel-Restaurant "Hesteya" in Svilengrad</h1>
        </div>
    </section>

    <section id="rooms" class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-center mb-8">Our Rooms</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="images/spalnq.jpg" alt="Bedroom" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">Bedroom</h3>
                <p class="text-gray-600">Cozy bedroom for a peaceful rest.</p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="images/dvoina.jpg" alt="Double Room" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">Double Room</h3>
                <p class="text-gray-600">Spacious room for two.</p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="images/apartament.jpg" alt="Apartment" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">Apartment</h3>
                <p class="text-gray-600">Luxurious apartment for complete comfort.</p>
            </div>
        </div>
    </div>
</section>

<section id="restaurant" class="bg-gray-200 py-12">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-8">Our Restaurant</h2>
        <p class="text-center text-gray-700 mb-8">Enjoy exquisite cuisine in a pleasant atmosphere.</p>
        <img src="images/restorant.jpg" alt="Hesteya Restaurant" class="w-full h-64 object-cover rounded-lg shadow-md">
    </div>
</section>
<section id="gallery" class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-center mb-8">Gallery</h2>
    
    <div class="mb-12">
        <h3 class="text-2xl font-semibold mb-4">Bedroom</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <a href="images/spalnq.jpg" data-lightbox="bedroom" data-title="Bedroom">
                <img src="images/spalnq.jpg" alt="Bedroom 1" class="w-full h-48 object-cover rounded-lg">
            </a>
            <a href="images/spalnq2.jpg" data-lightbox="bedroom" data-title="Bedroom">
                <img src="images/spalnq2.jpg" alt="Bedroom 2" class="w-full h-48 object-cover rounded-lg">
            </a>
            <a href="images/spalnq3.jpg" data-lightbox="bedroom" data-title="Bedroom">
                <img src="images/spalnq3.jpg" alt="Bedroom 3" class="w-full h-48 object-cover rounded-lg">
            </a>
        </div>
    </div>
    
    <div class="mb-12">
        <h3 class="text-2xl font-semibold mb-4">Double Room</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <img src="images/dvoina.jpg" alt="Double Room 1" class="w-full h-48 object-cover rounded-lg">
            <img src="images/dvoina2.jpg" alt="Double Room 2" class="w-full h-48 object-cover rounded-lg">
            <img src="images/dvoina3.jpg" alt="Double Room 3" class="w-full h-48 object-cover rounded-lg">
        </div>
    </div>
    
    <div class="mb-12">
        <h3 class="text-2xl font-semibold mb-4">Apartment</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <img src="images/apartament.jpg" alt="Apartment 1" class="w-full h-48 object-cover rounded-lg">
            <img src="images/apartament2.jpg" alt="Apartment 2" class="w-full h-48 object-cover rounded-lg">
            <img src="images/apartament3.jpg" alt="Apartment 3" class="w-full h-48 object-cover rounded-lg">
        </div>
    </div>
    
    <div class="mb-12">
        <h3 class="text-2xl font-semibold mb-4">Restaurant</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <img src="images/restorant.jpg" alt="Restaurant 1" class="w-full h-48 object-cover rounded-lg">
            <img src="images/restorant2.jpg" alt="Restaurant 2" class="w-full h-48 object-cover rounded-lg">
            <img src="images/restorant3.jpg" alt="Restaurant 3" class="w-full h-48 object-cover rounded-lg">
        </div>
    </div>
</section>

<section id="contact" class="bg-gray-200 py-12">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-8">Contact</h2>
        <div class="text-center">
            <p class="mb-2">+359 37 993 666</p>
            <p class="mb-2">info@hesteya.bg</p>
            <p>2 Kamchiya St., Svilengrad, Bulgaria</p>
        </div>
    </div>
</section>
<section id="reservation" class="container mx-auto px-6 py-12" x-data="reservationForm()">
    <h2 class="text-3xl font-bold text-center mb-8">Make a Reservation</h2>
    <form class="max-w-lg mx-auto" action="process_reservation.php" method="post">
        <div class="mb-4">
            <label for="name" class="block text-gray-700 mb-2">Name</label>
            <input type="text" id="name" name="name" x-model="name" class="w-full px-3 py-2 border rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 mb-2">Email</label>
            <input type="email" id="email" name="email" x-model="email" class="w-full px-3 py-2 border rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="phone" class="block text-gray-700 mb-2">Phone</label>
            <input type="tel" id="phone" name="phone" x-model="phone" class="w-full px-3 py-2 border rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="arrival_date" class="block text-gray-700 mb-2">Arrival Date</label>
            <input type="date" id="arrival_date" name="arrival_date" x-model="arrivalDate" @change="calculateNights" class="w-full px-3 py-2 border rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="departure_date" class="block text-gray-700 mb-2">Departure Date</label>
            <input type="date" id="departure_date" name="departure_date" x-model="departureDate" @change="calculateNights" class="w-full px-3 py-2 border rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="nights" class="block text-gray-700 mb-2">Number of Nights</label>
            <input type="number" id="nights" name="nights" x-model="nights" class="w-full px-3 py-2 border rounded-lg bg-gray-100" readonly>
        </div>
        <div class="mb-4">
            <label for="room_type" class="block text-gray-700 mb-2">Room Type</label>
            <select id="room_type" name="room_type" x-model="roomType" @change="calculateTotalPrice" class="w-full px-3 py-2 border rounded-lg" required>
                <option value="">Select Room</option>
                <option value="Спалня">Bedroom</option>
                <option value="Двойна">Double Room</option>
                <option value="Апартамент">Apartment</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="guests" class="block text-gray-700 mb-2">Number of Guests</label>
            <input type="number" id="guests" name="guests" x-model="guests" min="1" max="4" @change="calculateTotalPrice" class="w-full px-3 py-2 border rounded-lg" required>
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 mb-2">Total Price</label>
            <p class="text-2xl font-bold text-blue-600" x-text="totalPrice + ' BGN'"></p>
            <input type="hidden" name="total_price" x-model="totalPrice">
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 transition duration-300">Reserve</button>
    </form>
</section>

<script src="reservation.js"></script>
</html>

