<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Cabin:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    @include('components.navbar')

    @yield('content')

<script>
    const reveals = document.querySelectorAll(
        '.reveal-left, .reveal-right, .reveal-top, .reveal-bottom'
    );

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('reveal-active');
            } else {
                entry.target.classList.remove('reveal-active');
            }
        });
    }, {
        threshold: 0.2
    });

    reveals.forEach(reveal => {
        observer.observe(reveal);
    });
</script>
</body>

</html>
