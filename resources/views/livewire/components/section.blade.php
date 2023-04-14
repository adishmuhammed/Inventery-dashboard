<div class="aboutus-part paddingub" style="">
    <div class="container">
        <div class="row">
            @isset('leftImg')
                <div class="col-xs-12 col-lg-6 text-right img-box text-sm-center" style="">
                    <img src="{{ asset($leftImg) }} class="img-box" alt="about-detail-img" style="">
                </div>
            @endisset
            <div class="col-xs-12 col-lg-6" style="">
                <h2 class="title-head-two" style="">
                    @foreach ($title as $part)
                        @if (str_word_count($part) < 2)
                            {{ $part }} <br>
                        @else
                            <span style="">{{ $part }}</span>
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
            @isset('rightImg')
                <div class="col-xs-12 col-lg-6 text-right img-box text-sm-center" style="">
                    <img src="{{ asset($rightImg) }}" class="img-box" alt="about-detail-img" style="">
                </div>
            @endisset
        </div>
    </div>
</div>
