<div class="skills container">

    <div class="section-title">
        <h2>Skills</h2>
    </div>

    <div class="row skills-content">

        <div class="col-lg-5">
            @for($i = 0; $i < count($skills); $i++)
                @php
                    $skill = $skills[$i];
                    if ($i  >= floor(count($skills) / 2)) {
                        break;
                    }
                @endphp
                <div class="progress">
                    <span class="skill"> {{ $skill->name }} <i class="val">{{ $skill->percent }}%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->percent }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            @endfor

        </div>

        <div class="col-lg-5">
            @while($i < count($skills))
                @php
                    $skill = $skills[$i];
                    $i++;
                @endphp
                <div class="progress">
                    <span class="skill">{{ $skill->name }} <i class="val">{{ $skill->percent }}%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->percent }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            @endwhile
        </div>

    </div>

</div><!-- End Skills -->

</section><!-- End About Section -->
