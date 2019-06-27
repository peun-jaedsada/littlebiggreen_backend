@extends('frontend.layout.layout')
@section('content')
<style>
    body {
        background-color: #F7F7F7;
    }
    @media (max-width:575px) {
        body {
            background-color: #fff;
        }
    }
    @media (min-width:576px) {
        body {
            background-color: #fff;
        }
    }
    @media (min-width:768px) {
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
        <img class="w-100" src="{{asset('frontend/images/background/VDObackground.jpg')}}" alt="little big green คือใคร... ไปดูกัน!">
        <img class="about-logo d-lg-none" src="{{asset('frontend/images/about/05ABOUT_LOGO.png')}}" alt="Haed_Logo">
      </div>
 </section>

  <main id="main">
    <section class="section-about">
        <div class="text-center">
            <img class="about-logo d-lg-block d-none" src="{{asset('frontend/images/about/05ABOUT_LOGO.png')}}" alt="Haed_Logo">
        </div>
        <div class="container">
            <div class="card border-0 rounded-0">
                <div class="card-body text-center about-font-content">
                    <!-- <img class="w-100 mb-md-5 mb-3 d-md-block d-none" src="{{asset('frontend/images/about/TITLE_ABOUT.png')}}" alt="TITLE_ABOUT"> -->
                    <!-- <img class="w-100 mb-md-5 mb-3 d-md-none" src="{{asset('frontend/images/about/TITLE_ABOUT_MB.png')}}" alt="TITLE_ABOUT"> -->
                    <p>Little Big Green นำเสนอข้อมูลข่าวสารเกี่ยวกับสิ่งแวดล้อม และสร้างคอมมูนิตี้เกี่ยวกับไลฟ์สไตล์กรีน ๆ ภายใต้คอนเซปต์  <span class="green">“As Green As You Can”</span>  หมายถึง การมีไลฟ์สไตล์แบบกรีน ๆ เท่าที่คุณสามารถทำได้ ผ่านช่องทางหลากหลายรูปแบบ เพื่อเป็นแรงบันดาลใจให้ทุกคนเริ่ม “เปลี่ยน” เพื่อโลกใบนี้ไปพร้อม ๆ กัน  </p>
                    <p>จุดเริ่มต้นของ<span class="green"> “Little Big Green” </span> เกิดขึ้นจากการรวมตัวของคนกลุ่มเล็ก ๆ ที่มีไลฟ์สไตล์กรีน ๆ ใส่ใจสิ่งแวดล้อมเหมือนกัน และมีความตั้งใจที่อยากให้โลกของเราเกิดการเปลี่ยนแปลงที่ดีขึ้น เราเชื่อว่าปัญหาสิ่งแวดล้อมในปัจจุบันสามารถแก้ไขให้ดีขึ้นและเปลี่ยนแปลงได้จากการร่วมมือกันของทุกคน เราหวังว่าความตั้งใจของเราจะมีคุณค่ากับชีวิตของคนทุกคน สัตว์ และสิ่งแวดล้อม” </p>
                    <h2 class="my-4">“As <span> Green </span> As You Can”</h2>
                    <p>เราเชื่อว่าทุกคนมีเฉดสีเขียวในตัวเอง บางคนสีเขียวอ่อน บางคนสีเขียวเข้ม เพียงเริ่มต้นเปลี่ยนแปลงจากสิ่งเล็ก ๆ น้อย ๆ ที่อยู่ใกล้ตัว  อย่างการลดใช้พลาสติกแบบค่อยเป็นค่อยไปในชีวิตประจำวัน หรือปฏิเสธหลอดพลาสติกจากร้านค้า แต่ไม่ว่าจะเฉดสีเขียวแบบไหน สุดท้ายแล้วสิ่งที่เรากำลังทำอยู่ก็เพื่อโลกใบเดียวกัน ดังนั้น คอนเซปต์ <span>“As Green As You Can”</span> ในความหมายของ <span>“Little Big Green”</span> คือ การที่เรามีไลฟ์สไตล์กรีน ๆ ที่เราสามารถทำได้ โดยไม่กระทบกับการใช้ชีวิตของเราเอง เริ่มต้นจากสิ่งง่าย ๆ ก่อนแล้วค่อย ๆ ขยับไปทีละสเต็ปนั่นเอง</p>
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


