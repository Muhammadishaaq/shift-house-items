@extends('layout.app')
@section('content') 
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>نظام نقل الأثاث المنزلي</h2>
          <ol>
            {{-- <li><a href="index.html">Home</a></li> --}}
            <li>گھر کی اشیاء کا منتقلی نظام</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>About Us</h2>
            <p>Learn More <span>About Us</span></p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/truck-pro.jpeg) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
                <h4>Call For Service</h4>
                <p>+1 5589 55488 55</p>
            </div>
            </div>
            <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
                <p class="fst-italic">
                مرحبًا بك في [نظام نقل الأثاث], خدمة رائدة مكرسة لجعل عملية نقل أو نقل الأغراض المنزلية الخاصة بك سلسة وخالية من التوتر في مدينة الرياض النابضة بالحياة في المملكة العربية السعودية. نحن ندرك أن الانتقال يمكن أن يكون تجربة صعبة، وهدفنا هو توفير حلاً موثوقًا يتناسب مع احتياجات سكان الرياض بشكل فريد.
                </p>
                <ul>
                <li><i class="bi bi-check2-all"></i> Our team is familiar with the local landscape and neighborhoods in Riyadh, allowing for efficient navigation and quick response to the specific requirements of each move.</li>
                <li><i class="bi bi-check2-all"></i> Our commitment to reliability and professionalism ensures that your household items are in safe hands throughout the moving process.</li>
              
                </ul>
                <p>
                نحن نقدم أسعار شفافة وتنافسية، مزيلين أي رسوم خفية ونقدم قيمة لأموالك. بفهم عميق لأحياء الرياض وأنماط الحركة، نحن نضمن تجربة نقل أكثر سلاسة وكفاءة.
                </p>

                <div class="position-relative mt-4">
                <img src="assets/img/truck.png" class="img-fluid" alt="">
                </div>
            </div>
            </div>
        </div>

        </div>
    </section><!-- End About Section -->

</main><!-- End #main -->



@endsection