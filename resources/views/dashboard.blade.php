<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <div><a href="/">Home</a></div>
    <form action="/logout" method="post">
    @csrf
        <button type="submit">Logout</button>
    </form>
    <div class="flex justify-center items-center h-screen">
        <div>
            <h1 class="font-bold">Welcome to your Dashboard</h1>
        </div>
    </div>
  
</body>
</html>