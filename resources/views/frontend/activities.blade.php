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
</style>
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
      <div class="position-relative" style="z-index: -1;">
        <img class="w-100" src="http://placehold.it/1900x900" alt="little big green คือใคร... ไปดูกัน!">
      </div>
  </section><!-- #intro -->

  <main id="main">
      
    <section class="mb-5">
        <div class="container card-detail px-1">
            <div class="card border-0 rounded-0">
                <div class="card-body">
                    <div class="row mb-md-5 mb-3">
                        <div class="col-sm-2 col-3">
                            <div class="text-center">
                                <p class="activitise text-month">Jun</p>
                                <span class="activitise badge badge-date mb-0">25</span>
                            </div>
                        </div>
                        <div class="col-sm-10 col-9">
                            <h4 class="dark mb-4 d-md-block d-none">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 1500 maining essentially unchanged. </h4>
                            <hr class="d-md-block d-none">
                            <div class="activitise-icon">
                                <div><i class="fa fa-clock-o" aria-hidden="true"></i> <span>21 - 30 มิถุนายน 2562</span></div>
                                <div><i class="fa fa-map-marker" aria-hidden="true"></i> <span>True Digital Park</span></div>
                            </div>
                        </div>
                    </div>
                    <hr class="d-md-none">
                    <h4 class="dark mb-4 d-md-none">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 1500 maining essentially unchanged. </h4>
                    <b>The standard Lorem Ipsum passage, used since the 1500s</b>
                    <p class="mt-4 mb-0">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    <b>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</b>
                    <p class="mt-4">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?" <br> 1914 translation by H. Rackham</p>
                    <p class="mb-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
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
            <h3 class="dark">Upcoming Events </h3>
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-3 activities-sm px-1">
                    <div class="card activity-shadow">
                    <img class="card-img-top" src="http://placehold.it/800x1000" alt="activity">
                    <div class="card-body px-3 py-1">
                        <div class="home-activity-grid">
                        <div class="text-center">
                            <p class="text-month">Jun</p>
                            <span class="badge badge-date mb-0">17</span>
                        </div>
                        <div class="activity-title"><p class="home-activity-title">It is a long established fact that a reader </p></div>
                        </div>
                        <hr>
                        <div class="home-activity-grid">
                        <div></div>
                        <div><a href="#" class="btn activity-read-more ">read more <span>></span></a></div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mb-3 activities-sm px-1">
                    <div class="card activity-shadow">
                    <img class="card-img-top" src="{{asset('images/activity/2.jpg')}}" alt="activity">
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
                        <div><a href="#" class="btn activity-read-more ">read more <span>></span></a></div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mb-3 activities-sm px-1">
                    <div class="card activity-shadow">
                    <img class="card-img-top" src="{{asset('images/activity/3.jpg')}}" alt="activity">
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
                        <div><a href="#" class="btn activity-read-more ">read more <span>></span></a></div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mb-3 activities-sm px-1">
                    <div class="card activity-shadow">
                    <img class="card-img-top" src="{{asset('images/activity/4.jpg')}}" alt="activity">
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
                        <div><a href="#" class="btn activity-read-more ">read more <span>></span></a></div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </main>

    <!-- Script -->
    @push('js')
    
    @endpush
    <!-- END Script -->
<!-- END Banner -->
@endsection


