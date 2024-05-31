<!-- Contact_us.blade.php -->
<x-website>
    <div class="page-head">
        <div class="page-head__bg" style="background-image: url({{ asset('public/img/bg_page_contact.png')}})">
            <div class="page-head__title">Get In Touch</div>
                <div class="page-head__breadcrumb">
                    <ul class="uk-breadcrumb">
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li><span>Contact Us</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="uk-section uk-container">
                <div class="contact-page-box">
                    <div class="uk-grid" data-uk-grid>
                        <div class="uk-width-1-3@m">
                            <div class="contact-page-sidebar"><a class="footer-logo" href="{{ route('welcome') }}"><img src="{{ asset('public/img/logo-white.png') }}" alt="image"></a>
                                <p>Aiusmod tempor incididunt labore dnim ad minim veniam quis nostrsd exercitation ullamco.</p>
                                <ul class="contacts-list">
                                    <li><a href="https://goo.gl/maps/RwFh5b8Po1pdxBS19" target="_blank"><span data-uk-icon="location"></span>
                                            <div><span class="label">Head Office</span><span>35 Oakridge Lane, NJ 08102</span></div>
                                        </a></li>
                                    <li><a href="tel:12367995500/6600"><span data-uk-icon="receiver"></span>
                                            <div><span class="label">Send Email</span><span>+1 (236) 799 5500 / 6600</span></div>
                                        </a></li>
                                    <li><a href="mailto:equipments@domain.net"><span data-uk-icon="clock"></span>
                                            <div><span class="label">Work Time</span><span>Monday to Saturday: 9am to 7pm<br> Sunday: Closed</span></div>
                                        </a></li>
                                </ul>
                                <ul class="social">
                                    <li><a href="http://www.facebook.com/" target="_blank"><span data-uk-icon="facebook"></span></a></li>
                                    <li><a href="http://www.twitter.com/" target="_blank"><span data-uk-icon="twitter"></span></a></li>
                                    <li><a href="http://www.instagram.com/" target="_blank"><span data-uk-icon="instagram"></span></a></li>
                                    <li><a href="http://www.linkedin.com/" target="_blank"><span data-uk-icon="linkedin"></span></a></li>
                                    <li><a href="http://www.youtube.com/" target="_blank"><span data-uk-icon="youtube"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="uk-width-2-3@m">
                            <div class="block-form">
                                <div class="section-title"><span>[Equipment Rental Industry]</span>
                                    <h3>Need an Equipment on Rent?<br> Send us a Message</h3>
                                </div>
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="section-content">
                                    <form action="{{ route('contact.submit') }}" method="post">
                                        @csrf
                                        <!-- END Hidden Required Fields -->
                                        <div class="uk-grid uk-grid-medium uk-child-width-1-2@s" data-uk-grid>
                                            <div><input class="uk-input uk-form-large" type="text" placeholder="Name *" name="name"></div>
                                            <div><input class="uk-input uk-form-large" type="email" placeholder="Email *" name="email"></div>
                                            <div class="uk-width-1-1"><input class="uk-input uk-form-large" type="text" placeholder="Subject" name="subject"></div>
                                            <div class="uk-width-1-1"><textarea class="uk-textarea uk-form-large" placeholder="Your Message" name="message"></textarea></div>
                                        </div>
                                        <input type="submit" class="btn" style="color: orange;" name="btt_submit" value="Send Email">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contacts-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12233.178242503007!2d-75.12062315790071!3d39.9571665186268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6c8f752067afb%3A0x31a9a3edb6f9b368!2z0JrQsNC80LTQtdC9LCDQndGM0Y4t0JTQttC10YDRgdC4IDA4MTAyLCDQodCo0JA!5e0!3m2!1sru!2sua!4v1608217970812!5m2!1sru!2sua"></iframe>
        </div>
    </div>
</x-website>