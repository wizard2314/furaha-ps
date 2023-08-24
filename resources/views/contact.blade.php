@extends('layout.app')
@section("title", "Contact Us")
@section('content')
    <div class="flex flex-col sm:flex-row sm:p-20 p-6">
        <!-- Map and Contact Information -->
        <div class="w-full sm:w-1/2 text-center bg-white">
            <h2 class="sm:text-3xl text-xl font-semibold font-sans uppercase mb-4">Contact Information</h2>
            <p class="mb-2"><span class="sm:text-2xl text-lg font-sans">Email </span> <br> <a href="mailto:buhangijafdc@moe.go.tz" class="text-gray-600 sm:text-md text-sm">buhangijafdc@moe.go.tz</a></p>
            <p class="mb-2"><span class="sm:text-2xl text-lg font-sans">Phone </span> <br> <a href="tel:+255746764547" class="text-gray-600 sm:text-md text-sm">+255746764547</a></p>
            <p class="mb-2"><span class="sm:text-2xl text-lg font-sans">Address</span> <br><a href="" class="text-gray-600 sm:text-md text-sm">Buhangija, Shinyanga</a></p>
            <div class="h-64 bg-gray-300 rounded-lg mt-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d707.3275071735984!2d33.41424124833017!3d-3.684419061063284!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2stz!4v1690180169085!5m2!1sen!2stz" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen=""></iframe>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="w-full sm:w-1/2 p-8 bg-white mt-4 sm:mt-0">
            <h2 class="text-3xl font-semibold mb-4 font-sans">Get in Touch</h2>
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="fullname" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" id="fullname" name="fullname" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="tel" id="phone" name="phone" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                    <input type="text" id="subject" name="subject" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="4" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-500" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-blue-500 text-white px-4 w-full py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection