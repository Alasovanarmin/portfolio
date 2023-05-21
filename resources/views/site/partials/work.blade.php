<section id="resume" class="resume">
    <div class="container">

        <div class="section-title">
            <h2>Resume</h2>
            <p>Check My Resume</p>
        </div>

        <div class="row">
            <div class="col-lg-6">

                <h3 class="resume-title">Work experience</h3>
                @foreach($works as $work)
                    <div class="resume-item pb-0">
                        <h4>{{ $work->title }}</h4>
                        <h5>
                            {{ date("Y-m-d", strtotime($work->start_date)) }} -
                            @if ($work->on_going != null)
                                Present
                            @else
                                {{ date("Y-m-d", strtotime($work->end_date)) }}
                            @endif
                        </h5>
                        <p><em>{{ $work->body }}</em></p>
                    </div>
                @endforeach

            </div>
        </div>

    </div>
</section><!-- End Resume Section -->

