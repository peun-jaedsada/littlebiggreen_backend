
@extends('frontend.layout.layout')


@section('content')
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
      <div class="position-relative blog-flixe-height">
        <img class="w-100" src="{{ url('upload_img/blog/'.$blog->blog_picture) }}" alt="{{ $blog->blog_picture_alt }}">
        <div class="blog-title-content">
            <div class="badge-being">
            <span class="badge green-light">{{ $blog->cat_alias_name }}</span> <div class="badge-line"></div> <span class="d-baswline"> {{ $blog->cat_name }}</span>
            </div>
            <a href="{{ route('frontend.blog.show',$blog->id) }}">
                <b>{{ $blog->blog_title }}</b>
            </a>
        </div>
      </div>
  </section><!-- #intro -->

  <main id="main">
    <section>
        <div class="container">
            <nav class="nav py-2 justify-content-end">
                <a class="nav-link px-1 dark" href="{{route('frontend.blog.index',['alias'=>'ALL'])}}">ALL</a>
                @foreach ($catagories as $item)
                    <a class="nav-link px-1 active" href="{{route('frontend.blog.index',['alias'=>$item->alias_name])}}">
                        <div class="badge-being">
                            <span class="badge green-light">{{$item->alias_name}}</span></span>
                        </div>
                    </a>
                @endforeach
            </nav>


            <div class="row">
                @foreach ($blogs as $item)
                    <div class="col-md-4 mb-md-5 mb-3">
                        <div class="card bg-transparent border-0">
                            <img class="card-img-top rounded" src="{{ url('upload_img/blog/'.$item->blog_picture_thumbnail) }}" alt="{{ $item->blog_picture_alt_thumbnail }}">
                            <div class="card-body px-0 py-1">
                            <div class="badge-being">
                                <span class="badge red-light">{{$item->cat_alias_name}}</span> <div class="badge-line"></div> <span class="d-baswline"> {{$item->cat_name}}</span>
                            </div>
                            <a class="home-card-title" href="{{url('blog_detail')}}">{{ $item->blog_title }}</a>
                            <p class="home-ex-text">{{ $item->blog_sub_title }}</p>
                            <a href="{{route('frontend.blog.show',$item->id)}}" class="btn home-read-more">read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div class="text-center">
                <div class="btn-group d-md-none">
                    <button type="button" class="btn mobile-btn-page mx-2">Prev</button>
                    <button type="button" class="btn mobile-btn-page mx-2">Next</button>
                </div>
            </div>
            @include('frontend.layout.paginate')
            <hr class="blog-border">

        </div>
    </section>
  </main>

    <!-- Script -->
    @push('js')
    @endpush
    <!-- END Script -->
<!-- END Banner -->
@endsection


