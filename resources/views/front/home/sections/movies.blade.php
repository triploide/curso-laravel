<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Portfolio</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            

            @foreach ($movies as $movie)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="https://picsum.photos/400/300?random={{ $loop->index }}" class="img-fluid" alt="Portada de la película {{ $movie->title }}">
                        <div class="portfolio-info">
                            <h4>{{ $movie->title }}</h4>
                            <p>{{ $movie->price }}</p>
                            <div class="portfolio-links">
                                <a href="/checkout/add/{{ $movie->id }}" title="Compr la película {{ $movie->title }}"><i class="bx bx-plus"></i></a>
                                {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
