
@extends('frontend.layout.layout')
<style>
.icon-facebook {
    background-color: #66A145;
    color: #fff;
    width: 30px;
    text-align: right;
    height: 30px;
    border-radius: 30px;
    padding: 8px 11px!important;
    font-size: 23px;
}
</style> 


@section('content')
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix banner">
    <a href="#" data-toggle="modal" data-target="#BannerYoutube">
      {{-- <img class="w-100 d-md-block d-none" src="http://placehold.it/1900x900" alt="little big green คือใคร... ไปดูกัน!">
      <img class="w-100 d-md-none" src="{{asset('frontend/images/banner/mobile-banner.jpg')}}" alt="little big green คือใคร... ไปดูกัน!"> --}}
      <img class="w-100 d-md-block d-none" src="{{ asset('upload_img/banner/'.$banner->banner_img) }}" alt="{{ $banner->banner_alt }}">
      <img class="w-100 d-md-none" src="{{ asset('upload_img/banner/'.$banner->banner_img_sm) }}" alt="{{ $banner->banner_alt }}">
    </a>
  </section>
  <iframe width="1280" height="720" src="https://www.youtube.com/embed/CBIC6azDopY?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <div class="modal fade" id="BannerYoutube">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <iframe width="1280" height="720" src="https://www.youtube.com/embed/{{isset($key) ? $key : ''}}?autoplay=1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <main id="main">
    {{-- <div class="bg-content py-5">
      <section class="mb-5">
        <div class="container text-center">
          <div class="home-title">
            <h2>Big Gresection	en Friend</h2>
            <p>Lorem Ipsum is simply dummy text of the <br> printing and typesetting industry. </p>
          </div>
        </div>
      </section>

      <section class="mb-md-5 mb-3">
        <div class="text-center view-all-btn">
          <h4>View all</h4>
          <hr class="view-all">
        </div>
      </section>

      <section class="mb-md-5 mb-3 container">
        <div class="card border-0 bg-transparent mb-3">
          <a href="{{url('blog_detail')}}">
            <img class="card-img-top rounded" src="http://placehold.it/900x530" alt="beautiful-woman-working-with-laptop-computer-coffee-shop-cafe_1150-12185">
          </a>
          <div class="card-body px-0">
            <a class="home-onecard" href="{{url('blog_detail')}}">
              <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 1500 maining essentially unchanged. </h4>
            </a>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="card bg-transparent border-0">
              <img class="card-img-top rounded" src="http://placehold.it/800x550" alt="Card image cap">
              <div class="card-body px-0 py-1">
                <a class="home-card-title" href="">Lorem Ipsum is simply dummy text of the printing.</a>
                <p class="home-ex-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                <a href="#" class="btn home-read-more">read more</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card bg-transparent border-0">
              <img class="card-img-top rounded" src="http://placehold.it/800x550" alt="Card image cap">
              <div class="card-body px-0 py-1">
                <a class="home-card-title" href="#">Lorem Ipsum is simply dummy text of the printing.</a>
                <p class="home-ex-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                <a href="#" class="btn home-read-more">read more</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card bg-transparent border-0">
              <img class="card-img-top rounded" src="http://placehold.it/800x550" alt="Card image cap">
              <div class="card-body px-0 py-1">
                <a class="home-card-title" href="#">Lorem Ipsum is simply dummy text of the printing.</a>
                <p class="home-ex-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                <a href="#" class="btn home-read-more">read more</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div> --}}

    <section class="py-5">
      <div class="container">
        <div class="home-title text-center mb-3">
          <h2>Blog</h2>
        </div>
        <div class="text-center view-all-btn">
          <h4>View all</h4>
          <hr class="view-all mb-3">
        </div>
        <div class="card border-0 bg-transparent mb-3">
          <a href="{{url('blog_detail')}}">
            <img class="card-img-top rounded" src="{{ url('upload_img/blog/'.$blog->blog_picture) }}" alt="beautiful-woman-working-with-laptop-computer-coffee-shop-cafe_1150-12185">
          </a>
          <div class="card-body px-0">
            <div class="badge-being">
              <span class="badge green-light">{{ $blog->cat_alias_name }}</span> <div class="badge-line"></div> <span class="d-baswline"> {{ $blog->cat_name }}</span>
            </div>
            <a class="home-onecard" href="{{url('blog_detail')}}">
              <h4>{{ $blog->blog_title }}</h4>
            </a>
          </div>
          <div class="row">
            @if(isset($blogs) && count($blogs) != 0)
            @foreach ($blogs as $item)
              <div class="col-md-4">
                <div class="card bg-transparent border-0">
                  <a href="{{url('blog_detail')}}">
                    <img class="card-img-top rounded" src="{{ url('upload_img/blog/'.$item->blog_picture_thumbnail) }}" alt="{{ $item->blog_picture_alt_thumbnail }}">
                    {{-- <img class="card-img-top rounded" src="{{ url('upload_img/blog/'.$item->blog_picture) }}" alt="Card image cap"> --}}
                  </a>
                  <div class="card-body px-0 py-1">
                    <div class="badge-being">
                      <span class="badge red-light">{{ $item->cat_alias_name }}</span> <div class="badge-line"></div> <span class="d-baswline"> {{ $item->cat_name }}</span>
                    </div>
                    <a class="home-card-title" href="{{url('blog_detail')}}">{{ $item->blog_title }}</a>
                    <p class="home-ex-text">{{ $item->blog_title }}</p>
                    <a href="{{url('blog_detail')}}" class="btn home-read-more">read more</a>
                  </div>
                </div>
              </div>
            @endforeach
            @endif
          </div>
        </div>
      </div>
    </section>

    {{-- <section class="py-5 home-bg-img">
      <div class="container">
        <div class="home-title text-center mb-3">
          <h2>Activity</h2>
          <p>Lorem Ipsum is simply dummy text of the <br> printing and typesetting industry. </p>
        </div>
        <div class="text-center view-all-btn">
          <h4>View all</h4>
          <hr class="view-all mb-3">
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-3 collume-sm px-1">
            <div class="card activity-shadow">
              <a href="{{url('activities')}}">
                <img class="card-img-top" src="http://placehold.it/800x1000" alt="activity">
              </a>
              <div class="card-body px-3 py-1">
                <div class="home-activity-grid">
                  <div class="text-center">
                    <p class="text-month">Jun</p>
                    <span class="badge badge-date mb-0">17</span>
                  </div>
                  <div class="activity-title">
                    <p class="home-activity-title">It is a long established fact that a reader </p>
                  </div>
                </div>
                <hr>
                <div class="home-activity-grid">
                  <div></div>
                  <div><a href="{{url('activities')}}" class="btn activity-read-more ">read more <span>></span></a></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-3 collume-sm px-1">
            <div class="card activity-shadow">
              <a href="{{url('activities')}}">
                <img class="card-img-top" src="{{asset('frontend/images/activity/2.jpg')}}" alt="activity">
              </a>
              <div class="card-body px-3 py-1">
                <div class="home-activity-grid">
                  <div class="text-center">
                    <p class="text-month">Jun</p>
                    <span class="badge badge-date mb-0">25</span>
                  </div>
                  <div class="activity-title"><p class="home-activity-title">It is a long established fact that a reader </p></div>
                </div>
                <hr>
                <div class="home-activity-grid">
                  <div></div>
                  <div><a href="{{url('activities')}}" class="btn activity-read-more ">read more <span>></span></a></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-3 collume-sm px-1">
            <div class="card activity-shadow">
              <a href="{{url('activities')}}">
                <img class="card-img-top" src="{{asset('frontend/images/activity/3.jpg')}}" alt="activity">
              </a>
              <div class="card-body px-3 py-1">
                <div class="home-activity-grid">
                  <div class="text-center">
                    <p class="text-month">Jun</p>
                    <span class="badge badge-date mb-0">05</span>
                  </div>
                  <div class="activity-title"><p class="home-activity-title">It is a long established fact that a reader </p></div>
                </div>
                <hr>
                <div class="home-activity-grid">
                  <div></div>
                  <div><a href="{{url('activities')}}" class="btn activity-read-more ">read more <span>></span></a></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-3 collume-sm px-1">
            <div class="card activity-shadow">
              <a href="{{url('activities')}}">
                <img class="card-img-top" src="{{asset('frontend/images/activity/4.jpg')}}" alt="activity">
              </a>
              <div class="card-body px-3 py-1">
                <div class="home-activity-grid">
                  <div class="text-center">
                    <p class="text-month">Jun</p>
                    <span class="badge badge-date mb-0">14</span>
                  </div>
                  <div class="activity-title"><p class="home-activity-title">It is a long established fact that a reader </p></div>
                </div>
                <hr>
                <div class="home-activity-grid">
                  <div></div>
                  <div><a href="{{url('activities')}}" class="btn activity-read-more ">read more <span>></span></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="w-100 btn home-lodemore d-md-none" id="LoadMore">
          load more events
        </button>
      </div>
    </section> --}}


  </main>

    <!-- Script -->
    @push('js')
    <script>
    $("#LoadMore").click(function(){
      $(".home-lodemore").css("display", "none");
      // $(".collume-sm").css("display", "block");
      $(".collume-sm").fadeIn("slow");
    });

    </script>
    @endpush
    <!-- END Script -->
<!-- END Banner -->
@endsection


