@extends('web.layouts.main')

@section('main-section')
    <div class="body-overlay"></div>
    <!-- tp-offcanvus-area-end -->

    <main>

        <!-- breadcrumb area start -->
        <section class="breadcrumb__area breadcrumb-height include-bg p-relative"
            data-background="{{ asset('web/assets/img/breadcrumb/breadcurmb.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content">
                            <h3 class="breadcrumb__title wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".5s">
                                Service </h3>
                            <div class="breadcrumb__list wow tpfadeUp" data-wow-duration=".9s">
                                <span><a href="#">Home</a></span>
                                <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                                <span>Our Service</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- tp-service-area-start -->
        <div class="tp-service-area pt-120 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-30  wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".3s">
                        <div class="service-item-three text-center">
                            <div class="service-item-three__img">
                                <img src="{{ asset('web/assets/img/service/sv-4.png') }}" alt="">
                            </div>
                            <div class="service-item-three__content">
                                <h4 class="tp-service-sm-title"><a href="service-details.html">Web <br> Development</a></h4>
                                <p></p>
                            </div>
                            <div class="service-item-three__button">

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 mb-30  wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".5s">
                        <div class="service-item-three active text-center">
                            <div class="service-item-three__img">
                                <img src="{{ asset('web/assets/img/service/sv-5.png') }}" alt="">
                            </div>
                            <div class="service-item-three__content">
                                <h4 class="tp-service-sm-title"><a href="service-details.html">Mobile <br> Development</a>
                                </h4>

                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 mb-30  wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".6s">
                        <div class="service-item-three text-center">
                            <div class="service-item-three__img">
                                <img src="{{ asset('web/assets/img/service/sv-6.png') }}" alt="">
                            </div>
                            <div class="service-item-three__content">
                                <h4 class="tp-service-sm-title"><a href="service-details.html">Web Custom <br> Solution</a>
                                </h4>

                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 mb-30 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".8s">
                        <div class="service-item-three text-center">
                            <div class="service-item-three__img">
                                <img src="{{ asset('web/assets/img/service/sv-1.png') }}" alt="">
                            </div>
                            <div class="service-item-three__content">
                                <h4 class="tp-service-sm-title"><a href="service-details.html">Digital Marketing
                                    </a> </h4>

                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 mb-30  wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".9s">
                        <div class="service-item-three active text-center">
                            <div class="service-item-three__img">
                                <img src="{{ asset('web/assets/img/service/sv-2.png') }}" alt="">
                            </div>
                            <div class="service-item-three__content">
                                <h4 class="tp-service-sm-title"><a href="service-details.html">User Interface <br>
                                        Design</a></h4>

                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 mb-30  wow tpfadeUp" data-wow-duration=".7s" data-wow-delay="1s">
                        <div class="service-item-three text-center">
                            <div class="service-item-three__img">
                                <img src="{{ asset('web/assets/img/service/sv-3.png') }}" alt="">
                            </div>
                            <div class="service-item-three__content">
                                <h4 class="tp-service-sm-title"><a href="service-details.html">YouTube Watch Time<br>

                                    </a>
                                </h4>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tp-service-area-end -->

        <!-- tp-about-area-start -->
        <div class="tp-about-area ab-area-sapce pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-5 order-2 order-lg-1 wow tpfadeLeft" data-wow-duration=".7s"
                        data-wow-delay=".5s">
                        <div class="tp-ab-wrapper p-relative">
                            <div class="tp-ab-shape-one z-index-3">
                                <img src="{{ asset('web/assets/img/about/about-shape-1.png') }}" alt="">
                            </div>
                            <div class="tp-ab-shape-two z-index-3">
                                <img src="{{ asset('web/assets/img/about/about-circle-shape.png') }}" alt="">
                            </div>
                            <div class="tp-about-thumb">
                                <img src="{{ asset('web/assets/img/about/about-img.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 order-1 order-lg-2 wow tpfadeRight" data-wow-duration=".7s"
                        data-wow-delay=".8s">
                        <div class="tp-ab-section-title-box">
                            <h4 class="tp-section-subtitle tp-green-color">Who we are?</h4>
                            <h3 class="tp-section-title">We are dynamic team of creative design and development</h3>
                            <p>We have almost 12+ years of experience for helping consulting services <br> and business
                                solutions and best protect.</p>
                            <a class="tp-btn" href="about-us.html">About our Agency</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tp-about-area-end -->
        @include('web.pricing.index')
        <!-- tp-contact-area-start -->
        <div class="sd-accordio-area pt-120 pb-120">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="tp-custom-accordio">
                        <div class="accordion" id="accordionExample">
                           <div class="accordion-items faq-accordio-border">
                              <h2 class="accordion-header" id="headingOne">
                                 <button class="accordion-buttons " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Can I cancel my package after upgrade?
                                 </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    NO.
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-items">
                              <h2 class="accordion-header" id="headingTwo">
                                 <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How do I get my cash slip?
                                 </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    For cash slip, you will contact our official number then get the slip from our Accounts department and withdraw your money from any account like jazzcash, easypaisa , Bank etc.
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-items">
                              <h2 class="accordion-header" id="headingThree">
                                 <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Which payment methods do you accept?
                                 </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    Cash, Local Banks , International Banks and Via Electronic Money (JazzCash, EasyPaisa, etc.)
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-items">
                              <h2 class="accordion-header" id="headingfour">
                                 <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    Are there any discounts for people in need?
                                 </button>
                              </h2>
                              <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                 data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    As for your discount request , I'm sorry to say that we don't offer a discount. We believe that our services offers more value of your money and it will be unfair to other customers if we make an expectation. Let me know if I can send you all the information about our training.
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-items">
                              <h2 class="accordion-header" id="headingfive">
                                 <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                    How can I manage my Account?
                                 </button>
                              </h2>
                              <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                                 data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    First of all you need to sign up your account then login to your account using the id and password sent to your given gmail. After signing up you need to upgrade your package And enjoy your bonuses.


                                 </div>
                              </div>
                           </div>
                           <div class="accordion-items">
                              <h2 class="accordion-header" id="headingsix">
                                 <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                    Do you offer a free trial edit?
                                 </button>
                              </h2>
                              <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix"
                                 data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    Free trail aren't really meant to be free. SO, we'll not give any type of free trial.


                                 </div>
                              </div>
                           </div>
                           <div class="accordion-items">
                              <h2 class="accordion-header" id="headingseven">
                                 <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                    Is my credit card information secure?
                                 </button>
                              </h2>
                              <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven"
                                 data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                   Yes
                                 </div>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

    </main>
@endsection
