<!-- About.blade.php -->

<x-website>
<head>
    <style>
        /* Custom CSS for s-stats */
.s-stats {
    background-color: #f8f9fa;
    padding: 50px 0;
    position: relative;
    overflow: hidden;
}

.stat-item {
    text-align: center;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #fff;
    transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
    position: relative;
    overflow: hidden;
}

.stat-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    background-color: #ff6347;
    color: #fff;
}

.stat-item__title {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 10px;
    color: #333;
    transition: color 0.3s ease;
}

.stat-item__value {
    font-size: 36px;
    font-weight: 700;
    color: #ff6347;
    margin-bottom: 10px;
    display: block;
    transition: color 0.3s ease;
}

.stat-item__text {
    font-size: 14px;
    color: #777;
    transition: color 0.3s ease;
}

.stat-item:hover .stat-item__title,
.stat-item:hover .stat-item__value,
.stat-item:hover .stat-item__text {
    color: #fff;
}

@keyframes fadeInUp {
    from {
        transform: translate3d(0, 40px, 0);
        opacity: 0;
    }

    to {
        transform: translate3d(0, 0, 0);
        opacity: 1;
    }
}

.stat-item.animated {
    animation: fadeInUp 1s ease both;
}

/* Adding decorative elements */
.stat-item::before {
    content: "";
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255, 99, 71, 0.5), transparent);
    transition: transform 0.5s ease;
    transform: scale(0);
    border-radius: 50%;
    z-index: 0;
}

.stat-item:hover::before {
    transform: scale(1);
}

.stat-item__box {
    position: relative;
    z-index: 1;
}

    </style>
</head>
    <div class="page-head">
        <div class="page-head__bg" style="background-image: url( {{ asset('public/img/bg_page-about.png') }} )">
            <div class="page-head__title">About Company</div>
            <div class="page-head__breadcrumb">
                <ul class="uk-breadcrumb">
                    <li><a href="{{ route('welcome')}}">Home</a></li>
                    <li><span>About Company</span></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="s-about">
        <div class="uk-section uk-container">
            <div class="uk-grid uk-child-width-1-2@m uk-flex-middle" data-uk-grid>
                <div class="uk-text-center"><img src="{{ asset('public/img/29542.jpg') }}" alt="image"></div>
                <div>
                    <div class="section-title"><span>[Company Overview]</span>
                        <h3>Helping the Industry with 2k+ Equipments available for Rentals Anytime</h3>
                    </div>
                    <div class="section-content">
                        <p>We strive to provide top-notch equipment solutions, ensuring smooth operations and increased efficiency for our clients. Our comprehensive range of over 2,000 equipment options is available for rent at any time, allowing businesses to meet their diverse needs effectively.</p>
                        <p>At our core, we prioritize customer satisfaction and excellence in service delivery.</p>
                        <div class="s-about__btns" data-uk-margin>
                            <a class="uk-button uk-button-danger uk-button-large" href="" data-uk-icon="arrow-right">Get started</a>
                            <a class="uk-icon-button ico_mission" href="/" data-uk-tooltip="title: Our Mission; pos: bottom"></a>
                            <a class="uk-icon-button ico_track" href="" data-uk-tooltip="title: Our Mission; pos: bottom"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="s-features">
        <div class="uk-section uk-container">
            <div class="uk-grid uk-child-width-1-2@m uk-flex-middle" data-uk-grid>
                <div>
                    <div class="section-title"><small class="color-accent">[30 Years Of Equipment Rental Expertise]</small>
                        <h3>Delivering Rental Solutions to Enhance Industry Efficiency</h3>
                    </div>
                </div>
                <div>
                    <div class="section-content"><span>We bring over 30 years of expertise in equipment rental, offering tailored solutions to streamline operations and maximize productivity across various industries.</span></div>
                </div>
            </div>
            <div class="feature-items">
                <div data-uk-slider>
                    <div class="uk-position-relative" tabindex="-1">
                        <ul class="uk-grid uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@l">
                            <li>
                                <div class="feature-item">
                                    <div class="feature-item__box">
                                        <div class="feature-item__icon"><img src="{{ asset('public/img/ico-feature-1.png') }}" alt="image"></div>
                                        <div class="feature-item__title">Diverse Range of Rental Options</div>
                                        <div class="feature-item__text">We offer a comprehensive selection of equipment for all your rental needs.</div>
                                        <div class="feature-item__more"><a href="07_equipment-detail.html"><span data-uk-icon="arrow-right"></span></a></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="feature-item">
                                    <div class="feature-item__box">
                                        <div class="feature-item__icon"><img src="{{ asset('public/img/ico-feature-2.png') }}" alt="image"></div>
                                        <div class="feature-item__title">Customized Solutions for Your Requirements</div>
                                        <div class="feature-item__text">Our rental solutions are tailored to meet your specific needs and preferences.</div>
                                        <div class="feature-item__more"><a href="07_equipment-detail.html"><span data-uk-icon="arrow-right"></span></a></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="feature-item">
                                    <div class="feature-item__box">
                                        <div class="feature-item__icon"><img src="{{ asset('public/img/ico-feature-3.png') }}" alt="image"></div>
                                        <div class="feature-item__title">High-Performance Equipment</div>
                                        <div class="feature-item__text">Our equipment is designed to deliver top performance in every task.</div>
                                        <div class="feature-item__more"><a href="07_equipment-detail.html"><span data-uk-icon="arrow-right"></span></a></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                </div>
            </div>
        </div>
    </section>
    <section class="s-video">
        <div class="s-video__inner">
            <div class="s-video__desc">
                <div class="section-title"><span>[30 Years Of Equipment Rental Expertise]</span>
                    <h3>Provide Solutions to Utilize Industry and Assistance for Better Working</h3>
                </div>
                <div class="section-content"><a class="more" href="/"><span data-uk-icon="arrow-right"></span><span>see how it works</span></a></div>
            </div>
            <div class="s-video__img" data-uk-lightbox="video-autoplay: true">
                <div class="uk-cover-container"><img src="{{ asset('public/img/img-video.jpg') }}" alt="img-video" data-uk-cover><canvas width="960" height="400"></canvas></div><a class="s-video__link" href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="YouTube"><img src="assets/img/ico-play.png" alt="image"></a>
            </div>
        </div>
    </section>
    <section class="s-team">
        <div class="uk-section uk-container">
            <div class="section-title --center"><span>[Rent The Top Performing Equipments]</span>
                <h3>Meet Our Team Members</h3>
            </div>
            <div class="section-content">
                <div class="js-team-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach($employees as $employer)
                            <div class="swiper-slide">
                                <div class="team-user">
                                    <div class="team-user__photo"><img src="{{ asset('public/img/employees/'.$employer->photo) }}" alt="team"></div>
                                    <div class="team-user__body">
                                        <div class="team-user__name"> {{$employer->name}} </div>
                                        <div class="team-user__position">{{$employer->job}}</div>
                                        <div class="team-user__social">
                                            <ul class="social">
                                                <li class="social__item"><a class="social__link" href="http://www.twitter.com" target="_blank"><span data-uk-icon="twitter"></span></a></li>
                                                <li class="social__item"><a class="social__link" href="http://www.facebook.com" target="_blank"><span data-uk-icon="facebook"></span></a></li>
                                                <li class="social__item"><a class="social__link" href="http://www.linkedin.com" target="_blank"><span data-uk-icon="linkedin"></span></a></li>
                                                <li class="social__item"><a class="social__link" href="http://www.instagram.com" target="_blank"><span data-uk-icon="instagram"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="s-stats">
        <div class="uk-container uk-container-xlarge">
            <div class="uk-grid uk-grid-small uk-child-width-1-4@l uk-child-width-1-2@s" data-uk-grid>
                <div>
                    <div class="stat-item">
                        <div class="stat-item__box">
                            <h6 class="stat-item__title">Rental Orders</h6><span class="stat-item__value">3.4k</span>
                            <p class="stat-item__text">Pioneer of the equipment rental industry.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="stat-item">
                        <div class="stat-item__box">
                            <h6 class="stat-item__title">Experienced Team</h6><span class="stat-item__value">125+</span>
                            <p class="stat-item__text">Pioneer of the equipment rental industry.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="stat-item">
                        <div class="stat-item__box">
                            <h6 class="stat-item__title">Customer Reviews</h6><span class="stat-item__value">3.6k+</span>
                            <p class="stat-item__text">Pioneer of the equipment rental industry.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="stat-item">
                        <div class="stat-item__box">
                            <h6 class="stat-item__title">Verified Locations</h6><span class="stat-item__value">150+</span>
                            <p class="stat-item__text">Pioneer of the equipment rental industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<!-- Custom script -->
<script>
$(document).ready(function() {
    function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }

    $(window).scroll(function() {
        $('.stat-item').each(function() {
            if (isScrolledIntoView(this) === true) {
                $(this).addClass('animated');
            }
        });
    });

    // Trigger scroll to animate elements that are in view on page load
    $(window).scroll();
});
</script>
</x-website>
