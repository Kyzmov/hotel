<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Хотел-ресторант Хестея в Свиленград предлага уютни стаи и изискана кухня. Резервирайте сега за незабравимо преживяване!">
    <meta name="keywords" content="хотел, ресторант, Хестея, Свиленград, резервация, настаняване , казино">
    <title>Хотел-ресторант "Хестея" - Свиленград</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
</head>
<body class="font-sans bg-gray-100">
    <header class="bg-white shadow-md sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-3 flex justify-between items-center">
            <a href="#" class="flex items-center">
                <img src="images/logo.png" alt="Хестея лого" class="h-12 w-auto">
            </a>
            <div class="space-x-4">
                <a href="#rooms" class="text-gray-700 hover:text-gray-900">Хотел</a>
                <a href="#restaurant" class="text-gray-700 hover:text-gray-900">Ресторант</a>
                <a href="#gallery" class="text-gray-700 hover:text-gray-900">Галерия</a>
                <a href="#contact" class="text-gray-700 hover:text-gray-900">Контакти</a>
                <a href="#reservation" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Резервация</a>
                <select id="language-switcher" class="bg-gray-100 rounded" onchange="switchLanguage()">
                    <option value="bg">BG</option>
                    <option value="en">EN</option>
                </select>
                
             </div>
        </nav>
    </header>
    <script src="language-switcher.js"></script> <!-- Link to your external JS file -->
</body>


    <main>
        <section id="hero" class="relative h-96">
            <img src="images/hesteya.jpg" alt="Хотел Хестея" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                <h1 class="text-4xl font-bold text-white text-center">Добре дошли в хотел-ресторант "Хестея" в Свиленград</h1>
            </div>
        </section>

       

        <section id="rooms" class="container mx-auto px-6 py-12">
            <h2 class="text-3xl font-bold text-center mb-8">Нашите стаи</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="images/spalnq.jpg" alt="Спалня" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Спалня</h3>
                        <p class="text-gray-600">Уютна спалня за спокойна почивка.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="images/dvoina.jpg" alt="Двойна стая" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Двойна стая</h3>
                        <p class="text-gray-600">Просторна стая за двама.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="images/apartament.jpg" alt="Апартамент" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Апартамент</h3>
                        <p class="text-gray-600">Луксозен апартамент за пълен комфорт.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="restaurant" class="bg-gray-200 py-12">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-8">Нашият ресторант</h2>
                <p class="text-center text-gray-700 mb-8">Насладете се на изискана кухня в приятна атмосфера.</p>
                <img src="images/restorant.jpg" alt="Ресторант Хестея" class="w-full h-64 object-cover rounded-lg shadow-md">
            </div>
        </section>

        <section id="gallery" class="container mx-auto px-6 py-12">
            <h2 class="text-3xl font-bold text-center mb-8">Галерия</h2>
            
            <div class="mb-12">
                <h3 class="text-2xl font-semibold mb-4">Спалня</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <a href="images/spalnq.jpg" data-lightbox="bedroom" data-title="Спалня">
                        <img src="images/spalnq.jpg" alt="Спалня 1" class="w-full h-48 object-cover rounded-lg">
                    </a>
                    <a href="images/spalnq2.jpg" data-lightbox="bedroom" data-title="Спалня">
                        <img src="images/spalnq2.jpg" alt="Спалня 2" class="w-full h-48 object-cover rounded-lg">
                    </a>
                    <a href="images/spalnq3.jpg" data-lightbox="bedroom" data-title="Спалня">
                        <img src="images/spalnq3.jpg" alt="Спалня 3" class="w-full h-48 object-cover rounded-lg">
                    </a>
                </div>
            </div>
            
            <div class="mb-12">
                <h3 class="text-2xl font-semibold mb-4">Двойна</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <img src="images/dvoina.jpg" alt="Двойна 1" class="w-full h-48 object-cover rounded-lg">
                    <img src="images/dvoina2.jpg" alt="Двойна 2" class="w-full h-48 object-cover rounded-lg">
                    <img src="images/dvoina3.jpg" alt="Двойна 3" class="w-full h-48 object-cover rounded-lg">
                </div>
            </div>
            
            <div class="mb-12">
                <h3 class="text-2xl font-semibold mb-4">Апартамент</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <img src="images/apartament.jpg" alt="Апартамент 1" class="w-full h-48 object-cover rounded-lg">
                    <img src="images/apartament2.jpg" alt="Апартамент 2" class="w-full h-48 object-cover rounded-lg">
                    <img src="images/apartament3.jpg" alt="Апартамент 3" class="w-full h-48 object-cover rounded-lg">
                </div>
            </div>
            
            <div class="mb-12">
                <h3 class="text-2xl font-semibold mb-4">Ресторант</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <img src="images/restorant.jpg" alt="Ресторант 1" class="w-full h-48 object-cover rounded-lg">
                    <img src="images/restorant2.jpg" alt="Ресторант 2" class="w-full h-48 object-cover rounded-lg">
                    <img src="images/restorant3.jpg" alt="Ресторант 3" class="w-full h-48 object-cover rounded-lg">
                </div>
            </div>
        </section>

       


        <section id="contact" class="bg-gray-200 py-12">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-8">За връзка</h2>
                <div class="text-center">
                    <p class="mb-2">+359 37 993 666</p>
                    <p class="mb-2">info@hesteya.bg</p>
                    <p>ул. Камчия 2, гр.Свиленград, България</p>
                </div>
            </div>
        </section>

        <section id="reservation" class="container mx-auto px-6 py-12" x-data="reservationForm()">
    <h2 class="text-3xl font-bold text-center mb-8">Направете резервация</h2>
    <form class="max-w-lg mx-auto" action="process_reservation.php" method="post">
        <div class="mb-4">
            <label for="name" class="block text-gray-700 mb-2">Име</label>
            <input type="text" id="name" name="name" x-model="name" class="w-full px-3 py-2 border rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 mb-2">Имейл</label>
            <input type="email" id="email" name="email" x-model="email" class="w-full px-3 py-2 border rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="phone" class="block text-gray-700 mb-2">Телефон</label>
            <input type="tel" id="phone" name="phone" x-model="phone" class="w-full px-3 py-2 border rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="arrival_date" class="block text-gray-700 mb-2">Дата на пристигане</label>
            <input type="date" id="arrival_date" name="arrival_date" x-model="arrivalDate" @change="calculateNights" class="w-full px-3 py-2 border rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="departure_date" class="block text-gray-700 mb-2">Дата на заминаване</label>
            <input type="date" id="departure_date" name="departure_date" x-model="departureDate" @change="calculateNights" class="w-full px-3 py-2 border rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="nights" class="block text-gray-700 mb-2">Брой нощувки</label>
            <input type="number" id="nights" name="nights" x-model="nights" class="w-full px-3 py-2 border rounded-lg bg-gray-100" readonly>
        </div>
        <div class="mb-4">
            <label for="room_type" class="block text-gray-700 mb-2">Тип стая</label>
            <select id="room_type" name="room_type" x-model="roomType" @change="calculateTotalPrice" class="w-full px-3 py-2 border rounded-lg" required>
                <option value="">Изберете стая</option>
                <option value="Спалня">Спалня</option>
                <option value="Двойна">Двойна</option>
                <option value="Апартамент">Апартамент</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="guests" class="block text-gray-700 mb-2">Брой гости</label>
            <input type="number" id="guests" name="guests" x-model="guests" min="1" max="4" @change="calculateTotalPrice" class="w-full px-3 py-2 border rounded-lg" required>
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 mb-2">Обща цена</label>
            <p class="text-2xl font-bold text-blue-600" x-text="totalPrice + ' лв.'"></p>
            <input type="hidden" name="total_price" x-model="totalPrice">
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 transition duration-300">Резервирай</button>
    </form>
</section>


<script src="reservation.js"></script>
</html> 