<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased bg-gray-50">
        <div class="mt-5 md:mt-0 md:col-span-2 bg-white max-w-lg mx-auto">
            <form action="#" method="POST">
                @csrf
                <div class="shadow overflow-hidden sm:rounded-md">
                    <h2 class="uppercase font-bold text-4xl text-center my-10">Registration Form</h2>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-12">
                            <label for="full-name" class="block text-sm font-medium text-gray-700">Full name</label>
                            <input type="text" name="full_name" id="full-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" autofocus required>
                        </div>

                        <div class="col-span-12">
                            <label for="email" class="block text-sm font-medium text-gray-700">E-mail Address</label>
                            <input type="email" name="email" id="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                        </div>

                        <div class="col-span-12">
                            <label for="birth-date" class="block text-sm font-medium text-gray-700">Birth Date</label>
                            <input type="date" name="birth_date" id="birth-date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                        </div>

                        <div class="col-span-12">
                            <label for="position" class="block text-sm font-medium text-gray-700">Position Applied</label>
                            <select id="position" name="position" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            <option selected disabled>Select position</option>
                            <option value="Computer Programmer I">Computer Programmer I</option>
                            </select>
                        </div>

                        <div class="col-span-12">
                            <label for="reason" class="block text-sm font-medium text-gray-700">Why should we hire you?</label>
                            <textarea name="reason" id="reason" cols="30" rows="10" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required></textarea>
                        </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
