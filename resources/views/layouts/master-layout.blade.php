<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nem Nuong</title>
    <link rel="stylesheet" href="../../assets/css/output.css">

</head>

<body>
    @include('block.header')
    <main class="py-4">
        @yield('content')
    </main>
    @include('block.footer')
</body>

</html>
