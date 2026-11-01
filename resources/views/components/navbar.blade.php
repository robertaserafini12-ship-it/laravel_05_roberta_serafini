<nav class="navbar navbar-expand-lg navbar-dark shadow-lg" style="background: linear-gradient(135deg, #0d6efd, #198754); border-bottom: 3px solid #ffc107;">
    <div class="container">
        <!-- Logo con colore personalizzato -->
        <a class="navbar-brand fw-bold text-warning fs-4" href="{{ url('/') }}">
            <i class="fas fa-star"></i> Notizie
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">
                <li class="nav-item">
                    <a class="nav-link text-light fw-semibold px-2 rounded hover-link" href="{{ url('/') }}">Home</a>
                </li>
              
                <li class="nav-item">
                    <a class="nav-link text-light fw-semibold px-2 rounded hover-link" href="{{ url('/services') }}">Services</a>
                </li>
                <li class="nav-item">
                
                <li class="nav-item ms-lg-3">
                    <a class="btn btn-warning text-dark fw-bold px-4 rounded-pill shadow-sm" href="{{ url('/login') }}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Piccolo tocco di stile CSS per l'effetto al passaggio del mouse -->
<style>
    .hover-link:hover {
        color: #ffc107 !important;
        background-color: rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
    }
</style>