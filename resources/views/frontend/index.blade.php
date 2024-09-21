@extends('layouts.app')
<!-- content begin -->
@section('content')
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <div class="hero-section">
        <div class="hero-content">
            <h1>Free Legal Advice Online From Top Rated Lawyers</h1>
            <p>Discover amazing features and explore the possibilities.</p>
            <div class="hero-buttons">
                <a href="{{ route('talk-to-lawyer')}}" class="btn talk">Talk To A Lawyer</a>
                <a href="{{ route('free-legal-advice')}}" class="btn free">Ask A Free Question</a>
            </div>
        </div>
    </div>
    <section id="section-highlight" class="relative" data-bgcolor="#f2f2f2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <span class="p-title">Welcome</span><br>
                    <h2>
                        Reputation.<br>Respect. Result.
                    </h2>
                    <div class="small-border sm-left"></div>
                </div>
                <div class="col-md-8">
                    <p>Reputation. Respect. Results. At Legalhelpinindia, these pillars define our commitment to every
                        client. With a sterling reputation built on years of dedicated service, we earn your trust by
                        listening attentively and understanding your unique legal needs. Our goal is clear: to deliver
                        results that matter to you. Whether navigating complex family law disputes, advocating for
                        personal injury victims, or defending against criminal charges, we stand by you with integrity,
                        expertise, and a relentless pursuit of justice. Discover how our proven track record and
                        client-focused approach can make a difference in your legal journey
                    </p>
                </div>
            </div>
            <div class="spacer-double"></div>
        </div>
        <section class="no-top relative z1000">
            <div class="container mt-5">
                <div class="row mt-100">
                    <div class="col-md-4 wow fadeInRight" data-wow-delay=".2s">
                        <div class="mask">
                            <div class="cover">
                                <div class="c-inner">
                                    <h3><i class="icofont-people"></i><span>Business Law</span></h3>
                                    <p>Explore innovative strategies, expert guidance, and tailored solutions to propel
                                        your success forward. </p>
                                    <div class="spacer20"></div>
                                    <a href="#" class="btn-custom capsule">Read more</a>
                                </div>
                            </div>
                            <img src="images/services/1.jpg" alt="" class="img-responsive" />
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInRight" data-wow-delay=".4s">
                        <div class="mask">
                            <div class="cover">
                                <div class="c-inner">
                                    <h3><i class="icofont-home"></i><span>Family Law</span></h3>
                                    <p>Explore innovative strategies, expert guidance, and tailored solutions to propel
                                        your success forward. </p>
                                    <div class="spacer20"></div>
                                    <a href="#" class="btn-custom capsule">Read more</a>
                                </div>
                            </div>
                            <img src="images/services/2.jpg" alt="" class="img-responsive" />
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInRight" data-wow-delay=".6s">
                        <div class="mask">
                            <div class="cover">
                                <div class="c-inner">
                                    <h3><i class="icofont-law-order"></i><span>Criminal Law</span></h3>
                                    <p>Explore innovative strategies, expert guidance, and tailored solutions to propel
                                        your success forward. </p>
                                    <div class="spacer20"></div>
                                    <a href="#" class="btn-custom capsule">Read more</a>
                                </div>
                            </div>
                            <img src="images/services/3.jpg" alt="" class="img-responsive" />
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 wow fadeInRight" data-wow-delay=".2s">
                        <div class="mask">
                            <div class="cover">
                                <div class="c-inner">
                                    <h3><i class="fa fa-registered" aria-hidden="true"></i><span>Trademark
                                            Registration</span></h3>
                                    <p>Explore innovative strategies, expert guidance, and tailored solutions to propel
                                        your success forward. </p>
                                    <div class="spacer20"></div>
                                    <a href="#" class="btn-custom capsule">Read more</a>
                                </div>
                            </div>
                            <img src="images/services/4.jpg" alt="" class="img-responsive" />
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInRight" data-wow-delay=".4s">
                        <div class="mask">
                            <div class="cover">
                                <div class="c-inner">
                                    <h3><i class="fa fa-cutlery" aria-hidden="true"></i><span>FSSAI Food License
                                            Renewal</span></h3>
                                    <p>Explore innovative strategies, expert guidance, and tailored solutions to propel
                                        your success forward. </p>
                                    <div class="spacer20"></div>
                                    <a href="#" class="btn-custom capsule">Read more</a>
                                </div>
                            </div>
                            <img src="images/services/5.jpg" alt="" class="img-responsive" />
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInRight" data-wow-delay=".6s">
                        <div class="mask">
                            <div class="cover">
                                <div class="c-inner">
                                    <h3><i class="fa fa-university" aria-hidden="true"></i><span>Online Accounting
                                            Services</span></h3>
                                    <p>Explore innovative strategies, expert guidance, and tailored solutions to propel
                                        your success forward. </p>
                                    <div class="spacer20"></div>
                                    <a href="#" class="btn-custom capsule">Read more</a>
                                </div>
                            </div>
                            <img src="images/services/6.jpg" alt="" class="img-responsive" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section aria-label="section" class="jarallax expert" data-bgcolor="#fffff">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="./images/background/man-making-his-move.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col d-flex align-items-center">
                                <!-- <div class="balanceicon">
                                        <i class="fa fa-balance-scale fa-lg"></i>
                                    </div> -->
                                <div class="text-content">
                                    <h2>What We Expert At</h2>
                                    <h6>Our Speciality Areas</h6>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="speciality-icon">
                                    <i class="fa fa-handshake-o fa-lg"></i>
                                </div>
                                <h5>Legal Advisory Services</h5>
                                <p>We undertake consulting projects for the purpose of providing advice on legal
                                    matters.</p>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="speciality-icon">
                                    <i class="fa fa-handshake-o fa-lg"></i>
                                </div>
                                <h5>Vetting Of Documents</h5>
                                <p>We ensure proper due diligence by thoroughly reviewing intent, clauses, recitals, and
                                    risk.</p>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="speciality-icon">
                                    <i class="fa fa-handshake-o fa-lg"></i>
                                </div>
                                <h5>Representation In Different Courts & Tribunals</h5>
                                <p>Court proceedings, legal terminology, and legal processes can be extremely painful
                                    for you.</p>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="speciality-icon">
                                    <i class="fa fa-handshake-o fa-lg"></i>
                                </div>
                                <h5>Real Estate Legal Services</h5>
                                <p>Real estate undertakings involve a lot of legalities and paperwork. Our group
                                    leverages its insight and information about local regulatory.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section aria-label="section" class="quickbuy">
            <div class="carousel-container">
                <h2>Quick Buy</h2>
                <div class="owl-carousel" id="Quick-carousel">
                    <a href="#">
                        <div class="item">
                            <img src="./images/new folder/company-formation-product-thumb.webp"
                                alt="Online Lawyer Consultation">
                            <h4>ONLINE LAWYER CONSULTATION</h4>
                            <div class="rating">
                                <span>4.3</span><span class="star">&#9733;</span>
                            </div>
                            <div class="starting-price">
                                <p>Starting from Rs.19.99/min</p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="item">
                            <img src="./images/new folder/property-report-product-thumb.webp"
                                alt="Online Lawyer Consultation">
                            <h4>Sale Agreement or Agreement to sale Review</h4>
                            <div class="rating">
                                <span>4.3</span><span class="star">&#9733;</span>
                            </div>
                            <div class="starting-price">
                                <p>Starting from Rs.19.99/min</p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="item">
                            <img src="./images/new folder/legal-consultation-product-thumb.webp"
                                alt="Online Lawyer Consultation">
                            <h4>Agreement to Sale Drafting</h4>
                            <div class="rating">
                                <span>4.3</span><span class="star">&#9733;</span>
                            </div>
                            <div class="starting-price">
                                <p>Starting from Rs.19.99/min</p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="item">
                            <img src="./images/new folder/legal-consultation-product-thumb.webp"
                                alt="Online Lawyer Consultation">
                            <h4>Trademark</h4>
                            <div class="rating">
                                <span>4.3</span><span class="star">&#9733;</span>
                            </div>
                            <div class="starting-price">
                                <p>Starting from Rs.19.99/min</p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="item">
                            <img src="./images/new folder/company-formation-product-thumb.webp"
                                alt="Online Lawyer Consultation">
                            <h4>Sale Deed Drafting</h4>
                            <div class="rating">
                                <span>4.3</span><span class="star">&#9733;</span>
                            </div>
                            <div class="starting-price">
                                <p>Starting from Rs.19.99/min</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section> --}}
        <section id="section-practice-areas">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2>Practice Areas</h2>
                            <div class="small-border"></div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-3 text-center">
                        <p>We're dedicated to offering comprehensive, expert legal services tailored to meet your
                            specific needs. Our team of seasoned attorneys brings decades of combined experience across
                            a wide array of practice areas.</p>
                    </div>
                    <div class="spacer-single"></div>
                    <div class="col-md-4">
                        <ul class="ul-style-2 wow fadeInRight" data-wow-delay=".2s">
                            <li>Corporate and M&A</li>
                            <li>Construction and Real Estate</li>
                            <li>Commercial Duspute Resolution</li>
                            <li>Employment</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="ul-style-2 wow fadeInRight" data-wow-delay=".4s">
                            <li>Banking and Finance</li>
                            <li>Captial Market</li>
                            <li>Environmental</li>
                            <li>Intellectual Property Right</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="ul-style-2 wow fadeInRight" data-wow-delay=".6s">
                            <li>Goverment</li>
                            <li>Foundation/Non Profit Organization</li>
                            <li>Bankcuptcy</li>
                            <li>Criminal</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="jarallax text-light">
            <img src="images/background/2-bw.jpg" class="jarallax-img" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <span class="p-title">Fun facts</span><br>
                        <h2>
                            What we did?
                        </h2>
                        <div class="small-border sm-left"></div>
                        <p>Trust in our expertise and let us champion your legal rights with skill and compassion.</p>
                    </div>
                    <div class="col-md-8 offset-md-1">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay="0s">
                                <div class="de_count">
                                    <h3><span class="timer" data-to="4500" data-speed="3000">0</span></h3>
                                    <h5 class="id-color">Home Protected</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay=".25s">
                                <div class="de_count">
                                    <h3><span class="timer" data-to="16" data-speed="3000">0</span>k</h3>
                                    <h5 class="id-color">People Saved</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay=".4s">
                                <div class="de_count">
                                    <h3><span class="timer" data-to="4" data-speed="3000">0</span>m</h3>
                                    <h5 class="id-color">Money Saved</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay=".6s">
                                <div class="de_count">
                                    <h3><span class="timer" data-to="52" data-speed="3000">0</span>k</h3>
                                    <h5 class="id-color">Contract Signed</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay=".8s">
                                <div class="de_count">
                                    <h3><span class="timer" data-to="100" data-speed="3000">0</span>+</h3>
                                    <h5 class="id-color">Countries</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay="1s">
                                <div class="de_count">
                                    <h3><span class="timer" data-to="2" data-speed="3000">2</span>k</h3>
                                    <h5 class="id-color">Staff Member</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <img src="./images/background/freepik-export-20240715104443zbt7.jpeg" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <h2 class="whychoose">WHY CHOOSE US</h2>
                        <div class="">
                            <ul class="checklist">
                                <li>
                                    <div class="check-icon">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    We provide case based flexible and value driven methodology
                                </li>
                                <li>
                                    <div class="check-icon">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    We work at competitive rates
                                </li>
                                <li>
                                    <div class="check-icon">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    We keep pricing transparency
                                </li>
                                <li>
                                    <div class="check-icon">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    We resolve matters expeditiously
                                </li>
                                <li>
                                    <div class="check-icon">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    We give commitment to competent service
                                </li>
                                <li>
                                    <div class="check-icon">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    We are agile and responsive towards our clients
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section aria-label="section" class="jarallax text-light">
            <img src="images/background/3-bw.jpg" class="jarallax-img" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center text-light">
                            <h2>Testimonials</h2>
                            <div class="small-border"></div>
                        </div>
                        <div class="owl-carousel owl-theme" id="testimonial-carousel">
                            <div class="item">
                                <div class="de_testi opt-2 review">
                                    <blockquote>
                                        <i class="fa fa-quote-left id-color"></i>
                                        <h3>Trustworthy lawyer</h3>
                                        <p>From the initial consultation to the final resolution, their professionalism
                                            and dedication were evident. They kept me informed every step of the way and
                                            fought tirelessly to protect my rights. </p>
                                        <div class="de_testi_by"><span>John D., Family Law Client</span></div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi opt-2 review">
                                    <blockquote>
                                        <i class="fa fa-quote-left id-color"></i>
                                        <h3>Quality lawyer service</h3>
                                        <p>Their attention to detail and strategic approach were instrumental in
                                            achieving a favorable outcome. I am forever grateful for their hard work and
                                            commitment.</p>
                                        <div class="de_testi_by"><span>Maria S., Criminal Defense Client</span></div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi opt-2 review">
                                    <blockquote>
                                        <i class="fa fa-quote-left id-color"></i>
                                        <h3>Top lawyer listed</h3>
                                        <p>They fought for my right to fair compensation and kept me informed throughout
                                            the process. Their expertise in personal injury law made a significant
                                            difference in my recovery.</p>
                                        <div class="de_testi_by"><span>Alex R., Personal Injury Client</span></div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi opt-2 review">
                                    <blockquote>
                                        <i class="fa fa-quote-left id-color"></i>
                                        <h3>Great services</h3>
                                        <p>They provided clear guidance on complicated issues. Their practical advice
                                            and thorough understanding of business law have been invaluable to my
                                            company's success.</p>
                                        <div class="de_testi_by"><span>Samantha T., Business Law Client</span></div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi opt-2 review">
                                    <blockquote>
                                        <i class="fa fa-quote-left id-color"></i>
                                        <h3>Highly recommend</h3>
                                        <p>The attorneys took the time to understand my concerns and crafted a
                                            comprehensive plan that gave me peace of mind. Their knowledge and
                                            professionalism were excellent.</p>
                                        <div class="de_testi_by"><span>Edward L., Estate Planning Client</span></div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi opt-2 review">
                                    <blockquote>
                                        <i class="fa fa-quote-left id-color"></i>
                                        <h3>Excellent support</h3>
                                        <p> They handled the negotiations and litigation with skill and ensured my
                                            interests were protected. I was impressed with their responsiveness and
                                            dedication to my case.</p>
                                        <div class="de_testi_by"><span>Linda W., Real Estate Law Client</span></div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi opt-2 review">
                                    <blockquote>
                                        <i class="fa fa-quote-left id-color"></i>
                                        <h3>Reliable lawyer</h3>
                                        <p>The attorneys were incredibly knowledgeable and provided practical solutions
                                            that resolved the conflict efficiently. Their expertise in employment law is
                                            unparalleled.</p>
                                        <div class="de_testi_by"><span>Michael B., Employment Law Client</span></div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi opt-2 review">
                                    <blockquote>
                                        <i class="fa fa-quote-left id-color"></i>
                                        <h3>Five-star services</h3>
                                        <p>Their thorough investigation and compelling defense in court resulted in a
                                            not-guilty verdict. I am eternally grateful for their expert legal
                                            representation.</p>
                                        <div class="de_testi_by"><span>David P., Criminal Defense Client</span></div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h2>Latest News</h2>
                            <div class="small-border"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="date-box">
                                    <div class="m">10</div>
                                    <div class="d">NOV</div>
                                </div>
                                <div class="post-image">
                                    <img alt="" src="images/news/1.jpg">
                                </div>
                                <div class="post-text">
                                    <span class="p-tagline">Law Firm</span>
                                    <h4><a href="news-single.html">The Lawyer European Awards shortlist<span></span></a>
                                    </h4>
                                    <p>When facing legal issues, whether personal or business-related, many people may
                                        consider handling the matter themselves to save money.</p>
                                    <span class="p-author">Fynley Wilkinson</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="date-box">
                                    <div class="m">15</div>
                                    <div class="d">NOV</div>
                                </div>
                                <div class="post-image">
                                    <img alt="" src="images/news/2.jpg">
                                </div>
                                <div class="post-text">
                                    <span class="p-tagline">Law Firm</span>
                                    <h4><a href="news-single.html">Six firms that are setting the trend<span></span></a>
                                    </h4>
                                    <p>When facing legal issues, whether personal or business-related, many people may
                                        consider handling the matter themselves to save money.</p>
                                    <span class="p-author">Fynley Wilkinson</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="bloglist item">
                            <div class="post-content">
                                <div class="date-box">
                                    <div class="m">20</div>
                                    <div class="d">NOV</div>
                                </div>
                                <div class="post-image">
                                    <img alt="" src="images/news/3.jpg">
                                </div>
                                <div class="post-text">
                                    <span class="p-tagline">Law Firm</span>
                                    <h4><a href="news-single.html">When it comes to law firm mergers<span></span></a>
                                    </h4>
                                    <p>When facing legal issues, whether personal or business-related, many people may
                                        consider handling the matter themselves to save money.</p>
                                    <span class="p-author">Fynley Wilkinson</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
<!-- content close -->

<section aria-label="section">
    <div class="container faq-section">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <h1 class="faq-header">Questions?<br>We're here to help</h1>
                <p class="faq-subheader">Check out our FAQs or talk to a live customer care specialist by phone, chat,
                    or email.</p>
                <div class="contact-icons">
                    <a href="tel:+963258741"><i class="fa fa-phone fa-lg"></i></a>
                    <a href="mailto:infoLegalhelpinindia"><i class="fa fa-envelope fa-lg"></i></a>
                    <a href="https://wa.me/" target="_blank"><i class="fa fa-whatsapp fa-lg"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="accordion faq-content" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is online legal consultation?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Online legal consultation or online lawyer consultation is a method to connect users and
                                lawyers virtually. It is a convenient and easy way to get online lawyer advice using
                                Legalhelpinindia app.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Are your online lawyers qualified?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, all our online lawyers are qualified and have the necessary certifications and
                                experience to provide legal advice.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What happens if I don't get a response from a lawyer?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                If you don't get a response from a lawyer, you can contact our customer care for
                                assistance.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                How do I start online consultation with lawyer on Legalhelpinindia?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                To start an online consultation with a lawyer on Legalhelpinindia, download the app and
                                register yourself. You can then select a lawyer and start the consultation.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Is online lawyer consultation safe and secured on Legalhelpinindia?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, online lawyer consultation is safe and secure on Legalhelpinindia. We ensure the
                                confidentiality and security of your information.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="pt40 pb40 bg-color text-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 mb-sm-30 text-lg-start text-sm-center">
                <h3 class="no-bottom">Contact Us Now! Get a Free Consultation for Your Case.</h3>
            </div>
            <div class="col-md-4 text-lg-end rtl-lg-start text-sm-center">
                <a href="#" class="btn-custom btn-black light">Make Appointment</a>
            </div>
        </div>
    </div>
</section> --}}


<section aria-label="section" class="bg-color text-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">75,000 People Choose Legalhelpinindia Every Day</h2>
            </div>
        </div>
    </div>
    <div class="container py-2">
        <div class="row py-4">
            <div class="col-lg-4 py-2">
                <h4 class="text-center">INDIA'S LEADING LEGAL PLATFORM</h4>
                <p class="text-center">
                    Get the legal help & representation from over 10,000 lawyers across 700 cities in India
                </p>
                <div class="text-center">
                    <a href="{{ route('talk-to-lawyer')}}" class="btn-custom btn-white light">Talk to a Lawyer</a>
                </div>
            </div>
            <div class="col-lg-4 py-2">
                <h4 class="text-center">FREE LEGAL ADVICE</h4>
                <p class="text-center">
                    Post your question for free and get response from experienced lawyers within 48 hours
                </p>
                <div class="text-center">
                    <a href="{{ route('free-legal-advice')}}" class="btn-custom btn-white light">Ask a Free Question</a>
                </div>
            </div>
            <div class="col-lg-4 py-2">
                <h4 class="text-center">CONTACT A LAWYER</h4>
                <p class="text-center">
                    Contact and get legal assistance from our lawyer network for your specific matter
                </p>
                <div class="text-center">
                    <a href="{{ route('find-lawyer')}}" class="btn-custom btn-white light">Find a Lawyer</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

