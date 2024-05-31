<!-- Main -->
<x-website>
<style>
    .accordion-list {
        background-color: #f7f7f7;
        box-shadow: 1px 6px 10px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
        padding: 30px;
    }
    /* Estilo geral */
    .section-title {
        text-align: center;
        margin-bottom: 30px;
    }

    .section-title span {
        display: block;
        font-size: 1.2em;
        color: #ff851b;
    }

    .section-title h3 {
        font-size: 2em;
        color: #333;
    }

    /* Estilo do acordeão */
    .uk-accordion-title {
        position: relative;
        padding: 15px;
        font-size: 1.2em;
        background-color: #f7f7f7;
        border: 1px solid #ddd;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .uk-accordion-title:hover {
        background-color: #ff851b;
        color: #fff;
    }

    .uk-accordion-content {
        padding: 15px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-top: none;
        transition: max-height 0.3s ease;
    }

    .uk-accordion-content p,
    .uk-accordion-content ol {
        margin: 0;
        padding: 0;
        color: #666;
    }

    /* Estilo dos ícones */
    .uk-accordion-title::before {
        content: "\e917"; /* Unicode for Boxicons plus icon */
        font-family: 'boxicons';
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        transition: transform 0.3s ease;
        font-size: 1.2em;
    }

    .uk-open .uk-accordion-title::before {
        transform: translateY(-50%) rotate(90deg);
    }

    /* Estilo das listas de valores */
    .uk-accordion-content ol {
        padding-left: 20px;
    }

    .uk-accordion-content ol li {
        margin-bottom: 10px;
    }

    .uk-accordion-content ol li strong {
        color: #ff851b;
    }

    /* Botões */
    .s-about__btns {
        text-align: center;
        margin-top: 20px;
    }

    .s-about__btns .uk-button {
        margin: 0 10px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .s-about__btns .uk-button:hover {
        background-color: #ff851b;
        color: #fff;
    }
</style>

    <!-- Slider Section -->
    <section class="s-slider">
        <div class="js-slider-homepage">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="uk-inline">
                            <img src="{{ asset('public/img/img-slide-1.jpg') }}" alt="image">
                            <div class="uk-overlay-primary uk-position-cover"></div>
                            <div class="uk-overlay uk-position-center-left uk-light uk-width-1-1">
                                <div class="uk-container" data-aos="zoom-in" data-aos-delay="100">
                                    <h1>Rent Quality Equipments<br> & Industry Solutions</h1>
                                    <p class="uk-text-lead">No matter what type of heavy equipment you need<br> to rent, our rental services are ready to help</p>
                                    <div data-uk-margin>
                                        <a class="uk-button uk-button-danger uk-button-large" href="#!">
                                            <span>Get a free quote</span>
                                            <i class="bx bx-right-arrow-alt"></i>
                                        </a>
                                        <a class="uk-button uk-button-light uk-button-large" href="{{ route('solution') }}">
                                            <span>View categories</span>
                                            <i class="bx bx-right-arrow-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="uk-inline">
                            <img src="{{ asset('public/img/img-slide-2.jpg') }}" alt="image">
                            <div class="uk-overlay-primary uk-position-cover"></div>
                            <div class="uk-overlay uk-position-center-left uk-light">
                                <div class="uk-container uk-text-center" data-aos="fade-up">
                                    <h1>Convenient & Simple Ways<br> to Choose the Right Equipment</h1>
                                    <p class="uk-text-lead">No matter what type of heavy equipment you need to<br> rent, our rental services are ready to help</p>
                                    <div data-uk-margin>
                                        <a class="uk-button uk-button-danger uk-button-large" href="#!">
                                            <span>Get a free quote</span>
                                            <i class="bx bx-right-arrow-alt"></i>
                                        </a>
                                        <a class="uk-button uk-button-light uk-button-large" href="#!">
                                            <span>View categories</span>
                                            <i class="bx bx-right-arrow-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="uk-inline">
                            <img src="{{ asset('public/img/img-slide-3.jpg') }}" alt="image">
                            <div class="uk-overlay-primary uk-position-cover"></div>
                            <div class="uk-overlay uk-position-center uk-light uk-width-1-1">
                                <div class="uk-container" data-aos="zoom-in" data-aos-delay="100">
                                    <h1>High-Quality Equipment <br> Rental Services</h1>
                                    <p class="uk-text-lead">Explore our wide range of heavy equipment <br> and find the perfect match for your needs</p>
                                    <div data-uk-margin>
                                        <a class="uk-button uk-button-danger uk-button-large" href="{{ route('page.equipment') }}">
                                            <span>Browse Equipments</span>
                                            <i class="bx bx-right-arrow-alt"></i>
                                        </a>
                                        <a class="uk-button uk-button-light uk-button-large" href="{{ route('contact') }}">
                                            <span>Contact us</span>
                                            <i class="bx bx-right-arrow-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="uk-inline">
                            <img src="{{ asset('public/img/img-slide-2.jpg') }}" alt="image">
                            <div class="uk-overlay-primary uk-position-cover"></div>
                            <div class="uk-overlay uk-position-center uk-light">
                                <div class="uk-container uk-text-center">
                                    <h1>Expert Assistance & <br> Reliable Support</h1>
                                    <p class="uk-text-lead">No matter what type of heavy equipment you need to<br> rent, our rental services are ready to help</p>
                                    <div data-uk-margin>
                                        <a class="uk-button uk-button-danger uk-button-large" href="#!">
                                            <span>Get in touch</span>
                                            <i class="bx bx-right-arrow-alt"></i>
                                        </a>
                                        <a class="uk-button uk-button-light uk-button-large" href="#!">
                                            <span>Learn more</span>
                                            <i class="bx bx-right-arrow-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Search form Section -->
    <div class="search-form">
        <div class="uk-container">
            <div class="search-form__box">
                <form class="uk-form-stacked" action="#!">
                    <div class="uk-grid uk-grid-small uk-grid-divider uk-child-width-1-4@l uk-child-width-1-2@s uk-flex-middle" data-uk-grid>
                        <div>
                            <label class="uk-form-label">Select Category</label>
                            <div class="uk-form-controls">
                                <select class="js-select" id="select_category">
                                    <option value="">Select</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="uk-form-label">Select Equipment</label>
                            <div class="uk-form-controls">
                                <select class="js-select">
                                    <option value="">Select</option>
                                    @foreach($equipments as $equipment)
                                        <option value="{{$equipment->id}}">{{$equipment->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div><label class="uk-form-label">When</label>
                            <div class="uk-form-controls"><input class="js-date" type="text" name="data" placeholder="March 30, 2024 02:30"></div>
                        </div>
                        <div><button class="uk-button uk-button-danger uk-button-large" type="button"><span>Find equipment</span><span data-uk-icon="arrow-right"></span></button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--- About US Section----->
    <section class="s-about">
        <div class="uk-section uk-container" data-aos="fade-up">
            <div class="uk-grid uk-child-width-1-2@m uk-flex-middle" data-uk-grid>
                <!-- Company logo image -->
                <div class="uk-text-center">
                    <img src="{{ asset('public/img/why-us.png') }}" alt="image" data-aos="zoom-in" data-aos-delay="150">
                </div>

                <!-- Company information text -->
                <div class="accordion-list">
                    <div class="section-title">
                        <span>About Us</span>
                        <h3>Empowering Industries with 10k+ Equipment Available for Rentals Anytime</h3>
                    </div>

                    <ul uk-accordion>
                        <li class="uk-open">
                            <a class="uk-accordion-title" href="#">About Us</a>
                            <div class="uk-accordion-content">
                                <p>
                                    TECHNOMAC TRADING AND SERVICES is a professional manufacturer and trader, 
                                    specialized in research and development, sales, and services in the drilling 
                                    and geological exploration industry.
                                </p>
                            </div>
                        </li>
                        <li>
                            <a class="uk-accordion-title" href="#">Our Vision</a>
                            <div class="uk-accordion-content">
                                <p>
                                    Our vision is to create sustainable solutions with the efficient delivery of 
                                    high-quality underground and surface drilling parts for our business partners.
                                </p>
                            </div>
                        </li>
                        <li>
                            <a class="uk-accordion-title" href="#">Our Mission</a>
                            <div class="uk-accordion-content">
                                <p>
                                    Our mission is to earn high trust by increasing productivity for our business 
                                    partners through continuity and to play a leading role in the international market 
                                    in the rock drilling machinery sector.
                                </p>
                            </div>
                        </li>
                        <li>
                            <a class="uk-accordion-title" href="#">Our Values</a>
                            <div class="uk-accordion-content">
                                <ol>
                                    <li><strong>High Quality:</strong> We prioritize delivering high-quality equipment.</li>
                                    <li><strong>Reliability:</strong> We ensure reliability in all our services.</li>
                                    <li><strong>Continuous Improvement:</strong> We continuously strive for improvement.</li>
                                </ol>
                            </div>
                        </li>
                    </ul>

                    <div class="s-about__btns" data-uk-margin>
                        <a class="uk-button uk-button-danger uk-button-large" href="{{ route('about') }}" data-uk-icon="arrow-right">Started</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="s-features">
        <div class="uk-section uk-container">
            <div class="uk-grid uk-child-width-1-2@m uk-flex-middle" data-uk-grid>
                <div>
                    <div class="section-title"><small class="color-accent">[30 Years Of Equipment Rental Expertise]</small>
                        <h3>Our Services</h3>
                    </div>
                </div>
                <div>
                    <div class="section-content"><span>At TECHNOMAC TRADING AND SERVICES, we offer a range of services to support your drilling and exploration needs:</span></div>
                </div>
            </div>
            <div class="feature-items">
                <div data-uk-slider>
                    <div class="uk-position-relative" tabindex="-1">
                        <ul class="uk-grid uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@l">
                            <li data-aos="zoom-in" data-aos-delay="100">
                                <div class="feature-item">
                                    <div class="feature-item__box">
                                        <div class="feature-item__icon"><img src="{{ asset('public/img/ico-feature-1.png') }}" alt="image"></div>
                                        <div class="feature-item__title">Consultation and <br> Technical Support</div>
                                        <div class="feature-item__text">We provide expert consultation and technical support to ensure that you get the right equipment and solutions for your projects. Our team is dedicated to assisting you every step of the way, from selecting the appropriate equipment to providing technical assistance...</div>
                                        <div class="feature-item__more"><a href="#"><span data-uk-icon="arrow-right"></span></a></div>
                                    </div>
                                </div>
                            </li>
                            <li data-aos="zoom-in" data-aos-delay="300">
                                <div class="feature-item">
                                    <div class="feature-item__box">
                                        <div class="feature-item__icon"><img src="{{ asset('public/img/ico-feature-2.png') }}" alt="image"></div>
                                        <div class="feature-item__title">Equipment Maintenance <br> and Repair</div>
                                        <div class="feature-item__text">Our comprehensive maintenance and repair services ensure that your equipment operates at peak performance, minimizing downtime and maximizing productivity. Our skilled technicians provide timely maintenance and repairs to keep your equipment in top condition...</div>
                                        <div class="feature-item__more"><a href="07_equipment-detail.html"><span data-uk-icon="arrow-right"></span></a></div>
                                    </div>
                                </div>
                            </li>
                            <li data-aos="zoom-in" data-aos-delay="400">
                                <div class="feature-item">
                                    <div class="feature-item__box">
                                        <div class="feature-item__icon"><img src="{{ asset('public/img/ico-feature-3.png') }}" alt="image"></div>
                                        <div class="feature-item__title">Training and Skill <br> Development Programs</div>
                                        <div class="feature-item__text">Our training and skill development programs are designed to empower your team with the knowledge and expertise needed to operate equipment safely and efficiently. Through hands-on training and comprehensive instructional materials, we equip your workforce...</div>
                                        <div class="feature-item__more"><a href="07_equipment-detail.html"><span data-uk-icon="arrow-right"></span></a></div>
                                    </div>
                                </div>
                            </li>
                            <li data-aos="zoom-in" data-aos-delay="500">
                                <div class="feature-item">
                                    <div class="feature-item__box">
                                        <div class="feature-item__icon"><img src="{{ asset('public/img/ico-feature-4.png') }}" alt="image"></div>
                                        <div class="feature-item__title">Customized Solutions <br> for Special Projects</div>
                                        <div class="feature-item__text">Our team specializes in providing customized solutions tailored to meet the unique requirements of your special projects. Whether you have specific equipment needs, challenging site conditions, or unique project constraints, we work closely with you to...</div>
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

    <!-- Brands Section -->
    <section class="s-brands">
        <div class="uk-container" data-aos="zoom-in-down">
            <div class="section-title --center">
                <span>[Explore Our Equipment Brands]</span>
                <h3>High-Quality Machinery for Your Toughest Tasks</h3>
                <p>Choose from a wide range of reputable equipment brands for your rental needs</p>
            </div>
            <div class="section-content" data-aos="zoom-out-right" data-aos-delay="100">
                <div data-uk-slider="autoplay: true">
                    <div class="uk-position-relative">
                        <div class="uk-slider-container uk-light">
                            <ul class="uk-slider-items uk-grid-small uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-4@m uk-text-center">
                                @foreach ($arquivos as $arquivo)
                                    <li>
                                        <a href="{{ $arquivo->link }}">
                                            <img class="uk-width-1-1" src="{{ asset('storage/app/public/' . $arquivo->image) }}" alt="{{ $arquivo->name }}" style="width: 128px; height: 128px;">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="uk-visible@s">
                            <a class="uk-slidenav uk-position-center-left-out" href="#" data-uk-slider-item="previous" data-uk-icon="arrow-left"></a>
                            <a class="uk-slidenav uk-position-center-right-out" href="#" data-uk-slider-item="next" data-uk-icon="arrow-right"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Equipments Section -->
    <section class="s-equipments">
        <div class="uk-section uk-container uk-container-large">
            <div class="section-title --center"><span>[Premier Equipment Rental Service]</span>
                <h3>Popular Equipments On Rent</h3>
            </div>
            <div class="section-content" data-aos="zoom-in">
                <div data-uk-slider>
                    <div class="uk-position-relative" tabindex="-1">
                        <ul class="uk-slider-items uk-grid uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@l">
                            <li data-aos="zoom-in" data-aos-delay="100">
                                <div class="equipment-item">
                                    <div class="equipment-item__box">
                                        <div class="equipment-item__media"><a href="07_equipment-detail.html"><img src="assets/img/equipaments/hydraulic_core_drilling_rig.webp" alt="Standard Excavator 8T" /></a></div>
                                        <div class="equipment-item__info">
                                            <div class="equipment-item__title"><a href="07_equipment-detail.html">Full Hydraulic Core Drilling Rig</a></div>
                                            <div class="equipment-item__links"><a href="03_equipment-categories.html">View Catelogue</a><a href="04_equipment-categories.html">Print Quotation</a></div>
                                            <div class="equipment-item__list">
                                                <ul>
                                                    <li>Brand: Wacker Neuson</li>
                                                    <li>MFG Year: 2019</li>
                                                    <li>Model: EZ17</li>
                                                    <li>Operating Weight: 1.7 Ton</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="equipment-item__btn"><button class="uk-button uk-button-default uk-button-large uk-width-1-1" type="button"><span>Book now</span><span data-uk-icon="arrow-right"></span></button></div>
                                    </div>
                                </div>
                            </li>
                            <li data-aos="zoom-in" data-aos-delay="200">
                                <div class="equipment-item">
                                    <div class="equipment-item__box">
                                        <div class="equipment-item__media"><a href="07_equipment-detail.html"><img src="assets/img/equipaments/pneumatic_dth_drilling_rig.webp" alt="Standard Excavator 8T" /></a></div>
                                        <div class="equipment-item__info">
                                            <div class="equipment-item__title"><a href="07_equipment-detail.html">Pneumatic DTH drilling rig</a></div>
                                            <div class="equipment-item__links"><a href="03_equipment-categories.html">View Catelogue</a><a href="04_equipment-categories.html">Print Quotation</a></div>
                                            <div class="equipment-item__list">
                                                <ul>
                                                    <li>Brand: Wacker Neuson</li>
                                                    <li>MFG Year: 2019</li>
                                                    <li>Model: EZ17</li>
                                                    <li>Operating Weight: 1.7 Ton</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="equipment-item__btn"><button class="uk-button uk-button-default uk-button-large uk-width-1-1" type="button"><span>Book now</span><span data-uk-icon="arrow-right"></span></button></div>
                                    </div>
                                </div>
                            </li>
                            <li data-aos="zoom-in" data-aos-delay="300">
                                <div class="equipment-item">
                                    <div class="equipment-item__box">
                                        <div class="equipment-item__media"><a href="07_equipment-detail.html"><img src="assets/img/equipaments/percussion_rc_hydrualic.webp" alt="Standard Excavator 8T" /></a></div>
                                        <div class="equipment-item__info">
                                            <div class="equipment-item__title"><a href="07_equipment-detail.html">Percussion RC Hydrualic Bored Pile Drilling Rig</a></div>
                                            <div class="equipment-item__links"><a href="03_equipment-categories.html">View Catelogue</a><a href="04_equipment-categories.html">Print Quotation</a></div>
                                            <div class="equipment-item__list">
                                                <ul>
                                                    <li>Brand: Wacker Neuson</li>
                                                    <li>MFG Year: 2019</li>
                                                    <li>Model: EZ17</li>
                                                    <li>Operating Weight: 1.7 Ton</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="equipment-item__btn"><button class="uk-button uk-button-default uk-button-large uk-width-1-1" type="button"><span>Book now</span><span data-uk-icon="arrow-right"></span></button></div>
                                    </div>
                                </div>
                            </li>
                            <li data-aos="zoom-in" data-aos-delay="400">
                                <div class="equipment-item">
                                    <div class="equipment-item__box">
                                        <div class="equipment-item__media"><a href="07_equipment-detail.html"><img src="assets/img/equipment-1.jpg" alt="Standard Excavator 8T" /></a></div>
                                        <div class="equipment-item__info">
                                            <div class="equipment-item__title"><a href="07_equipment-detail.html">Pneumatic DTH Drilling Rig</a></div>
                                            <div class="equipment-item__links"><a href="03_equipment-categories.html">View Catelogue</a><a href="04_equipment-categories.html">Print Quotation</a></div>
                                            <div class="equipment-item__list">
                                                <ul>
                                                    <li>Brand: Wacker Neuson</li>
                                                    <li>MFG Year: 2019</li>
                                                    <li>Model: EZ17</li>
                                                    <li>Operating Weight: 1.7 Ton</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="equipment-item__btn"><button class="uk-button uk-button-default uk-button-large uk-width-1-1" type="button"><span>Book now</span><span data-uk-icon="arrow-right"></span></button></div>
                                    </div>
                                </div>
                            </li>
                            <li data-aos="zoom-in" data-aos-delay="500">
                                <div class="equipment-item">
                                    <div class="equipment-item__box">
                                        <div class="equipment-item__media"><a href="07_equipment-detail.html"><img src="assets/img/equipaments/air_compressor.jpg" alt="Air Compressor" /></a></div>
                                        <div class="equipment-item__info">
                                            <div class="equipment-item__title"><a href="07_equipment-detail.html">Air Compressor</a></div>
                                            <div class="equipment-item__links"><a href="03_equipment-categories.html">View Catelogue</a><a href="04_equipment-categories.html">Print Quotation</a></div>
                                            <div class="equipment-item__list">
                                                <ul>
                                                    <li>Brand: Wacker Neuson</li>
                                                    <li>MFG Year: 2019</li>
                                                    <li>Model: EZ17</li>
                                                    <li>Operating Weight: 1.7 Ton</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="equipment-item__btn"><button class="uk-button uk-button-default uk-button-large uk-width-1-1" type="button"><span>Book now</span><span data-uk-icon="arrow-right"></span></button></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="s-partners">
        <div class="uk-container" data-aos="zoom-in-up">
            <div class="section-title --center">
                <span>[Our Trusted Partners]</span>
                <h3>Building Strong Relationships with Industry Leaders</h3>
                <p>We collaborate with top companies to provide you with the best service and products</p>
            </div>
            <div class="section-content" data-aos="zoom-out-left" data-aos-delay="100">
                <div data-uk-slider="autoplay: true">
                    <div class="uk-position-relative">
                        <div class="uk-slider-container uk-light">
                            <ul class="uk-slider-items uk-grid-small uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-4@m uk-text-center">
                                <!-- Substituir esta parte pelos seus parceiros -->
                                <li>
                                    <a href="#">
                                        <img class="uk-width-1-1" src="https://via.placeholder.com/128" alt="Partner 1">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="uk-width-1-1" src="https://via.placeholder.com/128" alt="Partner 2">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="uk-width-1-1" src="https://via.placeholder.com/128" alt="Partner 3">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="uk-width-1-1" src="https://via.placeholder.com/128" alt="Partner 4">
                                    </a>
                                </li>
                                <!-- Fim da substituição -->
                            </ul>
                        </div>
                        <div class="uk-visible@s">
                            <a class="uk-slidenav uk-position-center-left-out" href="#" data-uk-slider-item="previous" data-uk-icon="arrow-left"></a>
                            <a class="uk-slidenav uk-position-center-right-out" href="#" data-uk-slider-item="next" data-uk-icon="arrow-right"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reasons Choose Section -->
    <section class="s-reasons-choose">
        <div class="uk-section uk-container uk-container-large">
            <div class="uk-grid uk-child-width-1-2@l" data-uk-grid>
                <div>
                    <div class="section-title">
                        <span>[Equipment Rental Industry]</span>
                        <h3>Reasons to Choose Suprek Equipment Rental Services</h3>
                    </div>
                    <div class="section-content">
                        <div class="video-link" data-uk-lightbox="video-autoplay: true">
                            <a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="YouTube">
                                <img src="{{ asset('public/img/ico-play.png') }}" alt="Play Icon">
                            </a>
                            <span>Helping with the best and widest selection of rental equipment always available.</span>
                        </div>
                    </div>
                </div>
                <div>
                    <div data-uk-slider>
                        <div class="uk-position-relative" tabindex="-1">
                            <ul class="uk-slider-items uk-grid uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-2@l">
                                <li>
                                    <div class="reason-item">
                                        <img class="reason-item__img" src="{{ asset('public/img/img-reason-1.jpg') }}" alt="Reason Image">
                                        <div class="reason-item__body">
                                            <div class="reason-item__icon">
                                                <img src="{{ asset('public/img/ico-reason-1.png') }}" alt="Reason Icon">
                                            </div>
                                            <div class="reason-item__desc">
                                                <h4 class="reason-item__title">Collaborative Support</h4>
                                                <p class="reason-item__text">Providing timely assistance and working together seamlessly.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="reason-item">
                                        <img class="reason-item__img" src="{{ asset('public/img/img-reason-2.jpg') }}" alt="Reason Image">
                                        <div class="reason-item__body">
                                            <div class="reason-item__icon">
                                                <img src="{{ asset('public/img/ico-reason-2.png') }}" alt="Reason Icon">
                                            </div>
                                            <div class="reason-item__desc">
                                                <h4 class="reason-item__title">Outstanding Performance</h4>
                                                <p class="reason-item__text">Consistently exceeding expectations and delivering exceptional results.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="reason-item">
                                        <img class="reason-item__img" src="{{ asset('public/img/img-reason-1.jpg') }}" alt="Reason Image">
                                        <div class="reason-item__body">
                                            <div class="reason-item__icon">
                                                <img src="{{ asset('public/img/ico-reason-1.png') }}" alt="Reason Icon">
                                            </div>
                                            <div class="reason-item__desc">
                                                <h4 class="reason-item__title">Outstanding Performance</h4>
                                                <p class="reason-item__text">Consistently delivering top-tier performance that stands out from the crowd.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="reason-item">
                                        <img class="reason-item__img" src="{{ asset('public/img/img-reason-2.jpg') }}" alt="Reason Image">
                                        <div class="reason-item__body">
                                            <div class="reason-item__icon">
                                                <img src="{{ asset('public/img/ico-reason-2.png') }}" alt="Reason Icon">
                                            </div>
                                            <div class="reason-item__desc">
                                                <h4 class="reason-item__title">Collaborative Support</h4>
                                                <p class="reason-item__text">Building bridges and nurturing relationships for collective success.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-website>
