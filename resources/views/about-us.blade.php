<nav class="navbar navbar-expand-lg navbar-dark shadow-lg" style="background: linear-gradient(135deg, #0d6efd, #20c997); border-bottom: 3px solid #ffc107;">
  <div class="container">
     
    <a class="navbar-brand fw-bold text-warning fs-4" href="{{ route('home') }}">
      MioSito
    </a>
    
    <div class="navbar-nav ms-auto flex-row gap-3">
      <a class="nav-link text-light fw-semibold px-3 rounded hover-link" href="{{ route('home') }}">Home</a>
      <a class="nav-link text-light fw-semibold px-3 rounded hover-link" href="{{ route('contact_us') }}">Contatti</a>
    </div>
  </div>
</nav>


<style>
    .hover-link:hover {
        color: #ffc107 !important;
        background-color: rgba(255, 255, 255, 0.15);
        transition: all 0.3s ease;
    }
</style>