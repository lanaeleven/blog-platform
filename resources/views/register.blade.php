<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <div class="bg-gray-700 h-screen flex justify-center items-center">
    <div class="bg-gray-900 rounded-md shadow-lg w-4/12 p-6 text-white">
        <h1 class="text-center font-bold">SIGN UP</h1>
        <hr class="my-3">
        <form action="/register" method="post">
        @csrf
            <div class="mt-3">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="w-full border h-8 text-black py-3 px-2 rounded-md">
            </div>
            <div class="mt-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="w-full border h-8 text-black py-3 px-2 rounded-md">
            </div>
            <div class="mt-3">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="w-full border h-8 text-black py-3 px-2 rounded-md">
            </div>
            <div class="mt-3 text-center">
                <button type="submit" class="bg-red-600 rounded px-6 py-2 hover:bg-red-700">Sign up</button>
            </div>
        </form>
        <div class="mt-3">
            <small>Already have? <a href="/login" class="font-bold">Login</a></small>
        </div>
    </div>
  </div>
</body>
</html>