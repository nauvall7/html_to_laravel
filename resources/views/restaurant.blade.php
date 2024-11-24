<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Restaurant Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="bg-white shadow-md sticky top-0 z-10">
        <div class="container mx-auto flex items-center justify-between py-4 px-6">
            <div class="text-2xl font-bold">restaurant</div>
            <nav>
                <ul class="flex gap-4">
                    <li><a href="#home" class="hover:bg-gray-100 px-3 py-2 rounded-md transition">Home</a></li>
                    <li><a href="#dishes" class="hover:bg-gray-100 px-3 py-2 rounded-md transition">Dishes</a></li>
                    <li><a href="#about" class="hover:bg-gray-100 px-3 py-2 rounded-md transition">About</a></li>
                    <li><a href="#contact" class="hover:bg-gray-100 px-3 py-2 rounded-md transition">Contact</a></li>
                </ul>
            </nav>
            <a href="#booking" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-md transition">Book a table</a>
        </div>
    </header>

    <section id="home" class="bg-gray-100 py-12">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 px-6">
                <h1 class="text-4xl font-bold mb-4">We provide the best food for you</h1>
                <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel sapien et lacus.</p>
                <a href="#dishes" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-md transition mr-4">Menu</a>
                <a href="#booking" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-md transition">Book a table</a>
            </div>
            <div class="md:w-1/2 mt-8 md:mt-0 px-6 text-center">
                <img src="dish-image.jpg" alt="Dish Image" class="rounded-md">
            </div>
        </div>
    </section>

    <section id="dishes" class="py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Our Special Dishes</h2>
            <div class="flex flex-wrap -mx-4 justify-center">
                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="bg-gray-100 rounded-md shadow-md p-6">
                        <img src="dish1.jpg" alt="Lumpia" class="rounded-md mb-4">
                        <h3 class="text-xl font-bold mb-2">Lumpia</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="bg-gray-100 rounded-md shadow-md p-6">
                        <img src="dish2.jpg" alt="Fish and Veggies" class="rounded-md mb-4">
                        <h3 class="text-xl font-bold mb-2">Fish and Veggies</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="bg-gray-100 rounded-md shadow-md p-6">
                        <img src="dish3.jpg" alt="Tofu dish" class="rounded-md mb-4">
                        <h3 class="text-xl font-bold mb-2">Tofu dish</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="bg-gray-100 rounded-md shadow-md p-6">
                        <img src="dish4.jpg" alt="Egg and Cucumber" class="rounded-md mb-4">
                        <h3 class="text-xl font-bold mb-2">Egg and Cucumber</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="bg-gray-100 py-12 text-center">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-4">Welcome to Our Restaurant</h2>
            <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel sapien et lacus.</p>
            <img src="chef-image.jpg" alt="Chef Image" class="rounded-md mx-auto">
        </div>
    </section>

    <section id="chef" class="py-12 text-center">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-4">Our Expert Chef</h2>
            <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel sapien et lacus.</p>
            <div class="flex flex-col md:flex-row items-center justify-center gap-8">
                <img src="chef.jpg" alt="Chef" class="rounded-md w-48 h-48 md:w-64 md:h-64 object-cover">
                <ul>
                    <li class="mb-2">Expert in Asian Cuisine</li>
                    <li class="mb-2">Over 20 years of experience</li>
                    <li>Award-winning chef</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="testimonials" class="bg-gray-100 py-12 text-center">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-8">Our Happy Customers</h2>
            <div class="flex flex-wrap -mx-4 justify-center">
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white rounded-md shadow-md p-6">
                        <p class="mb-6">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
                        <div class="flex items-center justify-center">
                            <img src="customer1.jpg" alt="Customer" class="rounded-full w-12 h-12 mr-4">
                            <h4 class="font-bold">John Doe</h4>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white rounded-md shadow-md p-6">
                        <p class="mb-6">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
                        <div class="flex items-center justify-center">
                            <img src="customer2.jpg" alt="Customer" class="rounded-full w-12 h-12 mr-4">
                            <h4 class="font-bold">Jane Doe</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto flex flex-col md:flex-row gap-8 px-6">
            <div class="md:w-1/3">
                <h3 class="text-xl font-bold mb-4">Get Our Promo Code</h3>
                <p class="mb-4">by subscribing to our newsletter</p>
                <form action="#" class="flex gap-4">
                    <input type="email" placeholder="Enter your email" class="w-full bg-gray-700 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500">
                    <button type="submit" class="bg-orange-500 hover:bg-orange-600 px-6 py-2 rounded-md transition">Subscribe</button>
                </form>
            </div>
            <div class="md:w-1/3">
                <ul class="flex flex-wrap gap-4">
                    <li><a href="#home" class="hover:text-orange-500 transition">Home</a></li>
                    <li><a href="#dishes" class="hover:text-orange-500 transition">Dishes</a></li>
                    <li><a href="#about" class="hover:text-orange-500 transition">About</a></li>
                    <li><a href="#contact" class="hover:text-orange-500 transition">Contact</a></li>
                </ul>
            </div>
        </div>
        <p class="text-center mt-8 text-sm">&copy; 2024 Restaurant. All Rights Reserved. Designed by Webstail.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>