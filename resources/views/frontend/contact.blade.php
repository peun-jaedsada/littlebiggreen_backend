@extends('frontend.layout.layout')

@section('content')
<style>
    body {
        background-color: #F7F7F7;
    }
    @media (max-width:575px) {
        .row {
            margin-right: -15px;
            margin-left: -15px;
        }
    }
</style>
  <!--==========================
    Intro Section
  ============================-->

  <main id="main">
    <section class="py-5 vedio-background" style="background-image: url({{asset('images/background/VDObackground.jpg')}})">
        <div class="container px-1">
            <div class="col-lg-8 col-md-9 mx-auto contact">
                <h1>Let's Get In Touch <br> <span> Little Big Green</span></h1>
                <p>ขอบคุณที่สนใจติดต่อเรา หากมีคำแนะนำติชมเพิ่มเติม โปรดบอกเราได้เลย มาเป็นเพื่อนกับ little big green กันเถอะ</p>
                <hr>
                <div class="contact-grid">
                    <div><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div>The Flight 19 Agency (The Web Flight Co., Ltd.)
                        Room 801 - 802, Fl. 8 Capital Work Place Building
                        1 Soi Chamchan (Thonglor 25), Klongton Nua, Wattana
                        Bangkok 10110</div>
                </div>
                <div class="contact-grid">
                    <div><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div>02-024-9759</div>
                </div>
                <div class="contact-grid">
                    <div><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <div>littlebiggreen@theflight19.com</div>
                </div>
                <form class="form-contact" action="{{ route('frontend.sendmail') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control contact-input" name="name" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="mail" class="form-control contact-input" name="email" placeholder="Mail">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control contact-input" name="message" id="Message" rows="5" placeholder="BOX"></textarea>
                        <!-- <input type="text" class="form-control contact-input" placeholder="Message"> -->
                    </div>
                    
                    <div class="text-center mt-3">
                        <button class="btn subscribe-btn contact-submit px-5 py-1" type="submit">Submit</button>
                    </div>
                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                </form>
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


