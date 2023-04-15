<div class="aboutus-part paddingub" style="">
    <div class="container">
        <div class="row">
            @if (null !== $leftImg)
                <div class="col-xs-12 col-lg-6 text-right img-box text-sm-center" style="">
                    <img src="{{ asset($leftImg) }}" class="img-box" alt="about-detail-img" style="">
                </div>
            @endif
            <div class="col-xs-12 col-lg-6" style="">
                <h2 class="title-head-two" style="">
                    @foreach ($titleWords as $part)
                        @if (str_word_count($part) < 2)
                            <span style="">{{ $part }}</span> <br>
                        @else
                            {{ $part }}
                        @endif
                    @endforeach
                </h2>
                @foreach ($paragraphs as $paragraph)
                    @if (substr($paragraph, 0, 1) < '#')
                        <h3 class="title-head-three">{{ $paragraph }}</h3>
                    @endif
                    <p class="desc-p">{{ $paragraph }}</p>
                @endforeach
            </div>
            @if (null !== $rightImg)
                <div class="col-xs-12 col-lg-6 text-right img-box text-sm-center" style="">
                    <img src="{{ asset($rightImg) }}" class="img-box" alt="about-detail-img" style="">
                </div>
            @endif
        </div>
    </div>
</div>
