@extends('layout/mainlayout')

@section('page-content')
    <?php $page = $pageTitle;?>
    
    <canvas class="mry-dots" style="opacity: .3;"></canvas>

    <div class="mry-head-bg">
        <img src="img/light/projects/prjct-6/1.jpg" alt="background">
        <div class="mry-bg-overlay"></div>
    </div>

    <div class="mry-banner mry-p-140-0">
        <div class="container">
            <div class="mry-main-title mry-title-center">
                <div class="mry-subtitle mry-mb-20 mry-fo">Contact</div>
                <h3 class="mry-mb-20 mry-fo">Do you have any questions? Write us a
                        message.<span class="mry-animation-el"></span></h3>
                <div class="mry-scroll-hint-frame">
                    <a class="mry-scroll-hint mry-smooth-scroll mry-magnetic-link mry-fo" href="#mry-anchor">
                        <span class="mry-magnetic-object"></span>
                    </a>
                    <div class="mry-label mry-fo">Scroll Down</div>
                </div>
            </div>
        </div>
    </div>

    <!-- contact -->
    <div class="mry-about mry-p-100-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="row">
                        <div class="col-lg-6">

                            <div class="mry-mb-100 mry-text-center">
                                <div class="mry-numbering mry-fo">
                                    <div class="mry-border-text">01</div>
                                    <div class="mry-subtitle">Location</div>
                                </div>
                                <div class="mry-fade-object mry-mb-100">
                                    <h4 class="mry-mb-20 mry-fo">Welcome to visit</h4>
                                    <p class="mry-text mry-mb-20 mry-fo">Ethiopia, Addis Ababa,<br>Bole Gulf Aziz
                                        Bld. Office #305</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <div class="mry-mb-100 mry-text-center">
                                <div class="mry-numbering mry-fo">
                                    <div class="mry-border-text">02</div>
                                    <div class="mry-subtitle">Contact</div>
                                </div>
                                <div class="mry-fade-object mry-mb-100">
                                    <h4 class="mry-mb-20 mry-fo">Shall we talk?</h4>
                                    <p class="mry-text mry-fo">Email: habar.inbox@mail.com <br>Phone: +251 91 156
                                        ****</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-lg-12">

                    <div class="mry-main-title mry-title-center mry-p-0-40">
                        <div class="mry-numbering mry-fo">
                            <div class="mry-border-text">03</div>
                            <div class="mry-subtitle">Contact form</div>
                        </div>
                        <h2 class="mry-fo">Write us a message</h2>
                    </div>

                </div>

                <div class="col-lg-8">

                    <form method="POST" id="form" class="mry-form mry-mb-100" action="send.php">

                        <div class="row">
                            <div class="col-lg-6">
                                <label class="mry-label mry-fo" for="firstName">First Name</label>
                                <div class="mry-fo"><input id="firstName" name="firstName" placeholder="John"
                                        class="mry-default-link" type="text" data-parsley-pattern="^[a-zA-Z\s.]+$"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label class="mry-label mry-fo" for="lastName">Last Name</label>
                                <div class="mry-fo"><input id="lastName" name="lastName" placeholder="Johnsone"
                                        class="mry-default-link" type="text" data-parsley-pattern="^[a-zA-Z\s.]+$"
                                        required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label class="mry-label mry-fo" for="email">Email</label>
                                <div class="mry-fo"><input id="email" name="email" placeholder="type.your.mail@here"
                                        class="mry-default-link" type="email" required></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="mry-label mry-fo" for="phone">Phone</label>
                                <div class="mry-fo"><input id="phone" name="phone" placeholder="+0 (000) 000 00 00"
                                        class="mry-default-link" type="text" data-parsley-pattern="^\+{1}[0-9]+$">
                                </div>
                            </div>
                        </div>

                        <div class="mry-fade-object">
                            <label class="mry-label mry-fo" for="message">Message</label>
                            <div class="mry-fo">
                                <textarea id="message" name="message" rows="8" cols="80"
                                    placeholder="Type your message here" class="mry-default-link" type="text"
                                    data-parsley-pattern="^[a-zA-Z0-9\s.:,!?']+$" required></textarea>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="mry-fo"><button type="submit" class="mry-btn mry-default-link">Send
                                        message</button></div>
                            </div>
                            <div class="col-lg-8">
                                <p class="mry-text mry-simple-text mry-contact-hint mry-fo"><span
                                        class="mry-color-text">*</span> We promise not to share your personal
                                    information with
                                    third parties.</p>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="col-lg-12">

                    <div class="mry-main-title mry-title-center mry-p-0-40">
                        <div class="mry-numbering mry-fo">
                            <div class="mry-border-text">04</div>
                            <div class="mry-subtitle">Map</div>
                        </div>
                        <h2 class="mry-fo">Come visit us</h2>
                    </div>

                </div>

                <div class="col-lg-10">

                    <div class="mry-map-frame mry-mb-100 mry-fo">
                        <div id='map-light' class="mry-map mry-map-light"></div>
                        <div class="mry-lock mry-magnetic-link"><i class="fas fa-lock mry-magnetic-object"></i>
                        </div>
                        <div class="mry-curtain"></div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- contact end -->
    
@endsection

@section('js')
    <!-- canvas js -->
    <script src="/js/plugins/canvas-colored.js"></script>
@endsection