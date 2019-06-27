
@extends('frontend.layout.layout')


@section('content')
<style>
    iframe {
        width : 100%!important;
    }
    
</style>
  <!--==========================
    Intro Section
  ============================-->

  <main id="main">
    <section class="py-md-5 my-3 vedio-background position-relative" style="background-image: url({{ url('upload_img/banner/'.$banner->banner_img) }})">
        <div class="col-lg-11 ml-lg-auto px-lg-0 px-2">
            <div class="vdo-grid">
                <div class="card border-0 rounded-0 bg-transparent">
                    <div class="card-body video px-0 py-0 rounded-0">
                        <iframe width="560" src="https://www.youtube.com/embed/{{ $key }}?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="mobile">
                            <h4>{{ $info->title }}</h4>
                            <small>{{ $info->description}}</small>
                        </div>
                    </div>
                </div>
                <div class="pl-2 vdo-list">
                    <div class="vdo-select-year mb-3">
                        <h4>Lorem Ipsum is simply</h4>
                        <select id="Videoyear" onchange="getYear()">
                            <option value="0">All</option>
                            @foreach ($years as $year)
                                <option value="{{ $year }}" @if(session()->get('year') == $year) selected @endif>{{$year}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="vdo-list-fix-height">
                        @foreach( $videos as $video )
                        <div class="d-block">
                            <a href="{{ route('frontend.video.index',['url'=>$video->youtube_key])}}" 
                                
                                class="vdo-nav @if( isset($key) && $key == $video->youtube_key || !isset($key)) active @endif">
                                <div class="vdo-list-fix">
                                    <img class="vdo-list-img" src="https://img.youtube.com/vi/{{$video->youtube_key}}/default.jpg" alt="vdo">
                                </div>
                                <div class="vdo-list-view px-1">
                                    <p>{{ $video->title }} </p>
                                    <small>{{ $video->created_at }}</small>
                                    <div class="active-play @if( isset($key) && $key == $video->youtube_key || !isset($key)) active @endif">
                                        <i class="fa fa-play-circle" aria-hidden="true"> <span> Now playing</span></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        {{-- <div class="d-block">
                            <a href="{{url('video?url=pvuN_WvF1to')}}" 
                                class="vdo-nav @if( isset($key) && $key == 'pvuN_WvF1to') active @endif">
                                <div class="vdo-list-fix">
                                    <img class="vdo-list-img" src="https://img.youtube.com/vi/pvuN_WvF1to/maxresdefault.jpg" alt="vdo">
                                </div>
                                <div class="vdo-list-view px-1">
                                    <p>Lorem Ipsum is si </p>
                                    <small>20 June 2019</small>
                                    <div class="active-play @if( isset($key) && $key == 'pvuN_WvF1to') active @endif">
                                        <i class="fa fa-play-circle" aria-hidden="true"> <span> Now playing</span></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="d-block">
                            <a href="{{url('video?url=4wH878t78bw')}}" 
                                class="vdo-nav @if( isset($key) && $key == '4wH878t78bw') active @endif">
                                <div class="vdo-list-fix">
                                    <img class="vdo-list-img" src="https://img.youtube.com/vi/4wH878t78bw/default.jpg" alt="vdo">
                                </div>
                                <div class="vdo-list-view px-1">
                                    <p>Lorem Ipsum is si </p>
                                    <small>20 June 2019</small>
                                    <div class="active-play @if( isset($key) && $key == '4wH878t78bw') active @endif">
                                        <i class="fa fa-play-circle" aria-hidden="true"> <span> Now playing</span></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="d-block">
                            <a href="{{url('video?url=CBIC6azDopY1')}}" 
                                class="vdo-nav @if( isset($key) && $key == 'CBIC6azDopY1') active @endif">
                                <div class="vdo-list-fix">
                                        <img class="vdo-list-img" src="https://img.youtube.com/vi/CBIC6azDopY/maxresdefault.jpg" alt="vdo">
                                </div>
                                <div class="vdo-list-view px-1">
                                    <p>Lorem Ipsum is si </p>
                                    <small>20 June 2019</small>
                                    <div class="active-play @if( isset($key) && $key == 'CBIC6azDopY1') active @endif">
                                        <i class="fa fa-play-circle" aria-hidden="true"> <span> Now playing</span></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="d-block">
                            <a href="{{url('video?url=4wH878t78bw1')}}" 
                                class="vdo-nav @if( isset($key) && $key == '4wH878t78bw1') active @endif">
                                <div class="vdo-list-fix">
                                    <img class="vdo-list-img" src="https://img.youtube.com/vi/4wH878t78bw/default.jpg" alt="vdo">
                                </div>
                                <div class="vdo-list-view px-1">
                                    <p>Lorem Ipsum is si </p>
                                    <small>20 June 2019</small>
                                    <div class="active-play @if( isset($key) && $key == '4wH878t78bw1') active @endif">
                                        <i class="fa fa-play-circle" aria-hidden="true"> <span> Now playing</span></i>
                                    </div>
                                </div>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        
    </section>
  </main>

    <!-- Script -->
    @push('js')
        <script>
            function getYear(  ){
                window.location = `{{ url('video') }}?year=${$('#Videoyear').val()}`
            }
        </script>
    <!-- <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("video-grid-list");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script> -->
    @endpush
    <!-- END Script -->
<!-- END Banner -->
@endsection


