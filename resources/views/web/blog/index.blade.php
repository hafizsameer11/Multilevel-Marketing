@extends('web.layouts.main')

@section('main-section')

<div class="body-overlay"></div>
<!-- tp-offcanvus-area-end -->

<main>
    <!-- breadcrumb area start -->
    <section
        class="breadcrumb__area breadcrumb-height include-bg p-relative"
        data-background="{{asset('web/assets/img/breadcrumb/breadcurmb.jpg')}}"
    >
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content">
                        <h3 class="breadcrumb__title">Blog Details</h3>
                        <div
                            class="breadcrumb__list wow tpfadeUp"
                            data-wow-duration=".9s"
                        >
                            <span><a href="#">Home</a></span>
                            <span class="dvdr"
                                ><i class="fa fa-angle-right"></i
                            ></span>
                            <span>Blog Details</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- postbox area start -->
    <div class="postbox__area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-12">
                    <div class="postbox__wrapper">
                        <article
                            class="postbox__item format-image transition-3"
                        >
                            <div class="postbox__content">
                                <p>
                                    <img
                                        class="w-100"
                                        src="{{asset('web/assets/img/blog/digital.png')}}"
                                        alt=""
                                    />
                                </p>
                                <div class="postbox__meta">
                                    <span
                                        ><a href="#"
                                            ><i
                                                class="fal fa-user-circle"
                                            ></i>
                                            Author
                                        </a></span
                                    >
                                    <span
                                        ><a href="#"
                                            ><i
                                                class="fal fa-clock"
                                            ></i>
                                            Dec 28, 2023</a
                                        ></span
                                    >
                                    <span
                                        ><a href="#"
                                            ><i
                                                class="fal fa-comment-alt-lines"
                                            ></i
                                            >(04) Coments</a
                                        ></span
                                    >
                                </div>
                                <h3 class="postbox__title">
                                    The Magic of Digital Marketing


                                </h3>
                                <div class="postbox__text">
                                    <p>
                                        Marketing in the digital world is like using modern spells to reach people online. It includes things like making your website easy to find on Google, chatting with customers on social media, and sending cool emails. Creating interesting stuff, like blogs and videos, is super important too! Checking how well things are working using numbers is smart. Digital marketing is like having a secret weapon to help your business shine online!
                                    </p>
                                    <p>
                                        Think of digital marketing as your guide through the online jungle. It's all about using tricks to get noticed by people surfing the web. You can use special words and pictures to show up on Google, talk to friends on social media, and send fun messages straight to people's emails. Making cool stuff like videos and blogs helps keep everyone interested. Checking the numbers lets you know if your tricks are working. With digital marketing, you're like an internet explorer, uncovering treasures for your business!







                                    </p>
                                </div>



                            </div>
                        </article>
                        <div class="postbox__comment mb-65">
                            <h3 class="postbox__comment-title">
                                (04) Comment
                            </h3>
                            <ul>
                                <li>
                                    <div
                                        class="postbox__comment-box d-flex"
                                    >
                                        <div
                                            class="postbox__comment-info"
                                        >
                                            <div
                                                class="postbox__comment-avater mr-20"
                                            >

                                            </div>
                                        </div>
                                        <div
                                            class="postbox__comment-text"
                                        >
                                            <div
                                                class="postbox__comment-name"
                                            >
                                                <h5>Uzma Kiran</h5>
                                                <span class="post-meta">
                                                    Jan 14, 2024</span
                                                >
                                            </div>
                                            <p>
                                               Interesting Article.
                                            </p>
                                            <div
                                                class="postbox__comment-reply"
                                            >

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="children">
                                    <div
                                        class="postbox__comment-box d-flex"
                                    >
                                        <div
                                            class="postbox__comment-info"
                                        >
                                            <div
                                                class="postbox__comment-avater mr-20"
                                            >

                                            </div>
                                        </div>
                                        <div
                                            class="postbox__comment-text"
                                        >
                                            <div
                                                class="postbox__comment-name"
                                            >
                                                <h5>Author</h5>
                                                <span class="post-meta">
                                                    Jan 15, 2024</span
                                                >
                                            </div>
                                            <p>
                                                Thanks !!
                                            </p>
                                            <div
                                                class="postbox__comment-reply"
                                            >

                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="postbox__comment-form">
                            <h3 class="postbox__comment-form-title">
                                Leave a Reply
                            </h3>
                            <form action="#">
                                <div class="row">
                                    <div
                                        class="col-xxl-6 col-xl-6 col-lg-6"
                                    >
                                        <div
                                            class="postbox__comment-input"
                                        >
                                            <input
                                                type="text"
                                                placeholder="Your Name"
                                            />
                                        </div>
                                    </div>
                                    <div
                                        class="col-xxl-6 col-xl-6 col-lg-6"
                                    >
                                        <div
                                            class="postbox__comment-input"
                                        >
                                            <input
                                                type="email"
                                                placeholder="Your Email"
                                            />
                                        </div>
                                    </div>
                                    <div
                                        class="col-xxl-6 col-xl-6 col-lg-6"
                                    >
                                        <div
                                            class="postbox__comment-input"
                                        >
                                            <input
                                                type="text"
                                                placeholder="Number"
                                            />
                                        </div>
                                    </div>
                                    <div
                                        class="col-xxl-6 col-xl-6 col-lg-6"
                                    >
                                        <div
                                            class="postbox__comment-input"
                                        >
                                            <input
                                                type="text"
                                                placeholder="Website"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div
                                            class="postbox__comment-input"
                                        >
                                            <textarea
                                                placeholder="Enter your comment ..."
                                            ></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div
                                            class="postbox__comment-agree d-flex align-items-start mb-20"
                                        >
                                            <input
                                                class="e-check-input"
                                                type="checkbox"
                                                id="e-agree"
                                            />
                                            <label
                                                class="e-check-label"
                                                for="e-agree"
                                                >Save my name, email,
                                                and website in this
                                                browser for the next
                                                time I comment.</label
                                            >
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div
                                            class="postbox__comment-btn"
                                        >
                                            <button
                                             1
                                                class="tp-btn-sm"
                                            >
                                                Post comment
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <div class="sidebar__wrapper">
                        <div class="sidebar__widget mb-40">
                            <h3 class="sidebar__widget-title">
                                Search Here
                            </h3>
                            <div class="sidebar__widget-content">
                                <div class="sidebar__search">
                                    <form action="#">
                                        <div
                                            class="sidebar__search-input-2"
                                        >
                                            <input
                                                type="text"
                                                placeholder="Search your keyword..."
                                            />
                                            <button type="submit">
                                                <i
                                                    class="far fa-search"
                                                ></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- postbox area end -->

    <!-- tp-social-area-start -->
    <div class="tp-social-area social-space-bottom fix">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="#">
                        <div class="tp-social-item">
                            <span
                                ><i class="fab fa-facebook-f"></i>
                                Facebook</span
                            >
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="#">
                        <div class="tp-social-item tp-youtube">
                            <span
                                ><i class="fab fa-youtube"></i>
                                youtube</span
                            >
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="#">
                        <div class="tp-social-item tp-behance">
                            <span
                                ><i class="fab fa-behance"></i>
                                behance</span
                            >
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="#">
                        <div class="tp-social-item tp-dribble">
                            <span
                                ><i class="fab fa-dribbble"></i>
                                dribbble</span
                            >
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="#">
                        <div class="tp-social-item tp-twitter">
                            <span
                                ><i class="fab fa-twitter"></i>
                                twitter</span
                            >
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="#">
                        <div class="tp-social-item tp-linkedin">
                            <span
                                ><i class="fab fa-linkedin"></i
                                >linkedin</span
                            >
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
