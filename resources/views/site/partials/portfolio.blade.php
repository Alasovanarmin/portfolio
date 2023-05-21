<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title">
            <h2>Portfolio</h2>
            <p>My Works</p>
        </div>



        <div class="row portfolio-container">
            @foreach($projects as $project)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="/{{$project->photo->photo}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <div class="portfolio-links">
{{--                                <a href="/site/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>--}}
                                <a href="{{$project->url}}"  title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
