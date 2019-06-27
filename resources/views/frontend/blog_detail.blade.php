@extends('frontend.layout.layout')

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/solid.css" integrity="sha384-+0VIRx+yz1WBcCTXBkVQYIBVNEFH1eP6Zknm16roZCyeNg2maWEpk/l/KsyFKs7G" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/brands.css" integrity="sha384-1KLgFVb/gHrlDGLFPgMbeedi6tQBLcWvyNUN+YKXbD7ZFbjX6BLpMDf0PJ32XJfX" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/fontawesome.css" integrity="sha384-jLuaxTTBR42U2qJ/pm4JRouHkEDHkVqH0T1nyQXn1mZ7Snycpf6Rl25VBNthU4z0" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/styles/github.min.css">
@section('content')
<style>
    body {
        background-color: #F7F7F7;
    }
    .icon-facebook {
        background-color: #66A145;
        color: #fff;
        width: 30px;
        text-align: right;
        height: 30px;
        border-radius: 30px;
        padding: 8px 11px;
        font-size: 23px;
    }
    @media (max-width:575px) {
        body {
            background-color: #fff;
        }
        .home-card-title {
            font-size: 22px;
            font-weight: 700;
            color: #333333;
            line-height: 1;
        }
    }
    @media (min-width:576px) {
        body {
            background-color: #fff;
        }
    }
    @media (min-width:992px) {
        body {
            background-color: #F7F7F7;
        }
    }
</style>
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
      <div class="position-relative" style="z-index: -1;">
        <img class="w-100" src="{{ url('upload_img/blog/'.$datas->blog_picture) }}" alt="{{ $datas->blog_picture_alt }}">
      </div>
  </section><!-- #intro -->

  <main id="main">
      
    <section class="mb-5">
        <div class="container card-detail" >
            <nav aria-label="breadcrumb" class="d-md-block d-none" style="z-index:100;">
                <ol class="breadcrumb bg-transparent mb-0 px-0">
                    <li class="breadcrumb-item"><a href="#"><i>Home</i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('frontend.blog.index') }}"><i>blog</i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $datas->blog_title }}</li>
                </ol>
            </nav>
            <div class="card border-0 rounded-0">
                <div class="card-body">
                    <div class="badge-being">
                        <span class="badge green-light">N</span> <div class="badge-line"></div> <span class="d-baswline"> News</span>
                    </div>
                    <h4 class="dark mb-4">{{ $datas->blog_title }}</h4>
                    <b>{{ $datas->blog_sub_title }}</b>
                    {!! $datas->blog_description !!}
                    {{-- <p class="mt-4 mb-0">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    <b>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</b>
                    <p class="mt-4">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?" <br> 1914 translation by H. Rackham</p>
                    <img class="w-100 mb-5" src="{{asset('images/blog/detail.jpg')}}" alt="detail">
                    <p class="mb-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p> --}}
                </div>

                <div class="card-footer border-0 bg-white">
                    <h4 class="dark">Share this article</h4>
                    <div class="mb-5">
                        <div id="shareBlock"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h4 class="dark">Related Posts</h4>
            <div class="row">
                @foreach ($blogs as $item)
                    <div class="col-md-4 mb-md-5 mb-3">
                        <div class="card bg-transparent border-0">
                            <img class="card-img-top rounded" src="{{url('upload_img/blog/'.$item->blog_picture_thumbnail)}}" alt="Card image cap">
                            <div class="card-body px-0 py-1">
                                <div class="badge-being">
                                    <span class="badge red-light">{{ $item->cat_alias_name }}</span> <div class="badge-line"></div> <span class="d-baswline"> {{ $item->cat_name }}</span>
                                </div>
                                <a class="home-card-title" href="{{ route('frontend.blog.show',$item->id) }}">{{ $item->blog_title }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
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


