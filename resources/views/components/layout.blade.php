<!DOCTYPE html>
<html lang="it" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG DI LIBRI</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-body-tertiary text-body min-vh-100 d-flex flex-column">

    <!-- Navbar -->
    <x-navbar />

    <!-- Sezione Principale -->
    <main class="flex-grow-1 container py-5">
        {{ $slot }}
    </main>

    <!-- Footer moderno in stile Bootstrap 5.3+ -->
    <footer class="bg-body border-top border-subtle text-body-secondary py-4 mt-auto">
        <div class="container text-center">
            <p class="mb-0 small fw-medium">&copy; {{ date('Y') }} BLOG</p>
        </div>
    </footer>

</body>
</html>