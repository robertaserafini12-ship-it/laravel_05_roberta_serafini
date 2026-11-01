<x-layout>
    <div class="container my-5">
        
        <!-- Sezione Benvenuto (Hero) -->
        <div class="p-5 mb-4 bg-light rounded-3 shadow-sm border">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold text-primary">Benvenuto nel mio Blog! 🚀</h1>
                <p class="col-md-8 fs-4 text-secondary">
                    Esplora gli ultimi articoli, scopri nuove notizie e curiosità.
                </p>
                <a href="{{ route('homepage') }}" class="btn btn-primary btn-lg" type="button">
                    Vai agli articoli
                </a>
            </div>
        </div>

        <!-- Sezione 3 Libri in Primo Piano -->
        <div class="my-5">
            <h2 class="mb-4 fw-bold text-dark">I libri in primo piano 📚</h2>
            <div class="row">
                
                <!-- Libro 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0 rounded-3">
                        <img src="https://picsum.photos/400/250?random=1" class="card-img-top" alt="Libro 1">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">Titolo del Libro 1</h5>
                            <p class="card-text text-secondary">Breve descrizione o recensione del primo libro in evidenza nel blog.</p>
                            <a href="#" class="btn btn-outline-primary mt-auto align-self-start">Leggi di più</a>
                        </div>
                    </div>
                </div>

                <!-- Libro 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0 rounded-3">
                        <img src="https://picsum.photos/400/250?random=2" class="card-img-top" alt="Libro 2">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">Titolo del Libro 2</h5>
                            <p class="card-text text-secondary">Breve descrizione o recensione del secondo libro in evidenza nel blog.</p>
                            <a href="#" class="btn btn-outline-primary mt-auto align-self-start">Leggi di più</a>
                        </div>
                    </div>
                </div>

                <!-- Libro 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0 rounded-3">
                        <img src="https://picsum.photos/400/250?random=3" class="card-img-top" alt="Libro 3">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">Titolo del Libro 3</h5>
                            <p class="card-text text-secondary">Breve descrizione o recensione del terzo libro in evidenza nel blog.</p>
                            <a href="#" class="btn btn-outline-primary mt-auto align-self-start">Leggi di più</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Sezione Contatti / Invio Email -->
        <div class="row justify-content-center my-5">
            <div class="col-md-8">
                <div class="p-4 p-md-5 bg-white border rounded-3 shadow-sm">
                    <h2 class="mb-3 text-dark fw-bold">Hai domande?</h2>
                    <p class="text-secondary mb-4">Vuoi collaborare con noi o hai bisogno di supporto? Scrivici subito tramite il form sottostante.</p>
                    
                    <!-- Messaggio di successo invio email -->
                    @if (session()->has('emailSent'))
                        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                            {{ session('emailSent') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Form di Contatto -->
                    <form method="POST" action="{{ route('contact_us.submit') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label fw-semibold">Messaggio</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 shadow-sm py-2">Invia Messaggio</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</x-layout>