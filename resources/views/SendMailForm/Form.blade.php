<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Mail Form</title>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <form class="bg-white shadow-md rounded-lg p-8 w-full max-w-lg space-y-6" action="{{route('sendMail')}}" method="POST">
        @csrf
        <h2 class="text-2xl font-bold text-gray-700 text-center">Send Us a Message</h2>

        <!-- Name Input -->
        <div>
            <label class="block text-sm font-medium text-gray-700" for="name">Your Name</label>
            <input
                type="text"
                name="name"
                placeholder="Enter Your Name"
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                required>
        </div>

        <!-- Email Input -->
        <div>
            <label class="block text-sm font-medium text-gray-700" for="mail">Email Address</label>
            <input
                type="email"
                name="mail"
                placeholder="Enter Your Email"
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                required>
        </div>

        <!-- Message Textarea -->
        <div>
            <label class="block text-sm font-medium text-gray-700" for="message">Message</label>
            <textarea
                name="message"
                placeholder="Enter your message"
                rows="5"
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                required></textarea>
        </div>

        <!-- Submit Button -->
        <button
            type="submit"
            class="w-full bg-blue-500 text-white py-2 px-4 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            Send
        </button>
    </form>

</body>
</html>
