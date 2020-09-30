<!-- file dung chung -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- yield la thang dinh nghia ra nhung thu rieng -->
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- dinh nghia phan thay doi de dua style vao-->
    @yield('styles')
</head>
<body>
<h1 class="header">@yield('header')</h1>
<h2>@yield('navbar')</h2>
</header>
@yield('content')
<!--phan footer dung dung -->
<footer>@yield('footer')</footer>
@yield('scripts')
</body>
</html>