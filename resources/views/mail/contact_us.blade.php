    <x-layout>
    <x-header mainTitle="Contact us" subTitle="Send us an email" />

    <main class="container py-5">
        <section class="row justify-content-center">
            <article class="col-md-8">
               
    
     <form method="POST" action="{{ route('contact_us.submit') }}">
       @csrf
                                    <div class="col-md-3">
                                    <label for="user-name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="user-name" >
                                    
                                </div>
                                <div class="col-md-3">
                                    <label for="user-email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="user-email" >
                                </div>
                                <div class="col-md-3">
                                    <label for="content" class="form-label">Content</label>
                                    <textarea name="content" class="form-control" id="content" cols="30" rows="3">

                                    </textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            
                        </form>
               
                    </article>
                </section>
            </main>
        </x-layout>


