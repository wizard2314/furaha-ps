@extends('layout.app')
@section('title', 'Contact Us')
@section('content')
    <div class="flex flex-col md:flex-row md:p-14 p-4">
        <!-- Map and Contact Information -->
        <div class="w-full md:w-1/2 bg-white">
            <div class="px-4 py-6 text-center">
                <h2 class="text-3xl font-semibold mb-4 font-sans">Contact Information</h2>
            </div>

            <div class="px-4 py-6">
                <!-- Card 01 -->
                <div class="bg-gray-100 border-t border-b border-gray-200">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 font-sans">Email</h3>
                        <p class="mt-2 text-gray-600 font-sans">info@furahaenglishmedium.sc.tz</p>
                    </div>
                </div>

                <!-- Card 02 -->
                <div class="bg-white border-t border-b border-gray-200">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 font-sans">Phone</h3>
                        <p class="mt-2 text-gray-600 font-sans">+255 756 393 882</p>
                        <p class="mt-1 text-sm text-gray-500 font-sans">HeadMistress</p>
                    </div>
                </div>

                <!-- Card 03 -->
                <div class="bg-gray-100 border-t border-b border-gray-200">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 font-sans">Address</h3>
                        <p class="mt-2 text-gray-600 font-sans">Nyamatala<br>street, Buhongwa ward<br>Nyamagana District, Mwanza
                            Region Tanzania</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="w-full md:w-1/2 ml-0 md:ml-4 bg-white">
            <h2 class="text-3xl font-semibold mb-4 font-sans">Get in Touch</h2>
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="fullname" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" id="fullname" name="fullname"
                        class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-500"
                        required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" id="email" name="email"
                        class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-500"
                        required>
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="tel" id="phone" name="phone"
                        class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-500"
                        required>
                </div>
                <div class="mb-4">
                    <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                    <input type="text" id="subject" name="subject"
                        class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-500"
                        required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="4"
                        class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-500" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 w-full py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div class="w-full max-w-screen-2xl ">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.6507273073867!2d32.93116576911731!3d-2.619036391521684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19ce87d1fe1e4123%3A0x566e40db3940bfc6!2sFuraha%20English%20Medium%20Primary%20school!5e0!3m2!1sen!2stz!4v1692777364646!5m2!1sen!2stz"
            class="w-full h-96"  style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
