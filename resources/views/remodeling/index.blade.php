@extends('remodeling.layout.master')

@section('content')
    
    <section id="home" class="p-0 top-space-margin full-screen md-h-600px sm-h-500px border-top border-4 border-color-base-color position-relative" data-parallax-background-ratio="0.3" style="background-image: url('{{ asset('assets/remodeling/images/demo-remodeling-home-01.png') }}')">
        
    </section>
   
    
    
    <section id="about" class="background-position-center background-repeat" style="background-image: url('images/vertical-center-line-bg.svg')">
        <div class="container">
            <div class="row align-items-center mb-12 md-mb-17 xs-mb-25">
                <div class="col-lg-5 md-mb-50px" data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 800, "delay": 200, "easing": "easeOutCirc" }'>
                    <span class="mb-10px text-base-color fw-500 d-block">About remodeling</span>
                    <h2 class="alt-font text-dark-gray ls-minus-2px">Transform Your Space with Expert Remodeling Services.</h2>
                    <p class="w-80 xl-w-100 mb-35px xs-mb-10px">Transform your home with our expert remodeling services. From kitchens to bathrooms, we create spaces you'll love.</p>
                    <div class="d-inline-block w-100">
                        <a href="#contact" class="btn btn-extra-large btn-switch-text btn-dark-gray btn-box-shadow btn-round-edge d-inline-block align-middle me-30px xs-me-10px xs-mt-20px">
                            <span>
                                <span class="btn-double-text" data-text="Contact Us">Contact Us</span> 
                            </span>
                        </a>
                        <div class="fs-20 fw-600 d-inline-block align-middle text-dark-gray xs-mt-20px"><a href="tel:+1-(307)-204-0086"><i class="bi bi-telephone-outbound text-medium-gray icon-small me-10px"></i>+1-(307)-204-0086</a></div>
                    </div> 
                </div>
                <div class="col-lg-6 position-relative offset-lg-1"> 
                    
                    <div class="w-75 overflow-hidden position-relative xs-w-80 border-radius-4px float-end" data-anime='{ "effect": "slide", "color": "#A0875B", "direction":"rl", "easing": "easeOutQuad", "duration": 600, "delay":400}'>
                        <img class="w-100" src={{ asset('assets/remodeling/images/demo-remodeling-about-01.png') }} alt="" >
                    </div>
                    <div class="position-absolute left-minus-70px md-left-15px bottom-minus-50px w-55 overflow-hidden" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)" data-anime='{ "effect": "slide", "color": "#ffffff", "direction":"lr", "easing": "easeOutQuad", "duration": 600, "delay":500}'>
                        <img class="w-100 border-radius-4px" src={{ asset('assets/remodeling/images/demo-remodeling-about-02.png') }} alt="">
                    </div>
                </div> 
            </div>
        </div>
        
    </section>
    
    <section id="services" class="bg-very-light-gray overlap-height position-relative background-position-center background-repeat" style="background-image: url('images/vertical-center-line-bg-dark.svg')"> 
        <div class="container overlap-gap-section">
            <div class="row justify-content-center mb-5 xs-mb-7">
                <div class="col-md-8 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h2 class="alt-font mb-5px text-dark-gray ls-minus-2px">Our Services</h2>
                    <span class="d-inline-block">Our company has been present for over 20 years.</span>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center" data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start rotate box item --> 
                <div class="col text-center rotate-box-style-01 lg-mb-45px" data-bottom-top="transform: translateY(80px)" data-top-bottom="transform: translateY(-80px)">
                    <div class="rm-rotate-box text-center">
                        <div class="flipper to-left">
                            <div class="thumb-wrap">
                                <div class="front overflow-hidden h-250px md-h-250px border-radius-4px overflow-hidden" style="background-image:url('{{ asset('assets/remodeling/images/demo-remodeling-service-01.png') }}')"> 
                                </div>
                                <div class="back border-radius-4px overflow-hidden">
                                    <div class="box-overlay bg-base-color"></div>
                                    <div class="content-wrap p-40px xs-p-30px last-paragraph-no-margin"> 
                                        
                                        <p class="text-white opacity-7 lh-30 sm-w-70 xs-w-100 mx-auto">Renovating or converting a garage into additional living space, a workshop, or storage.</p> 
                                    </div>
                                </div>
                            </div>
                            <span class="fs-20 d-inline-block mt-30px fw-600 text-dark-gray">Garage Remodeling</span>
                        </div>
                    </div>
                </div>
                <!-- end rotate box item -->
                <!-- start rotate box item -->
                <div class="col text-center rotate-box-style-01 lg-mb-45px" data-bottom-top="transform: translateY(-40px)" data-top-bottom="transform: translateY(40px)">
                    <div class="rm-rotate-box text-center">
                        <div class="flipper to-left">
                            <div class="thumb-wrap">
                                <div class="front overflow-hidden h-250px md-h-250px border-radius-4px overflow-hidden" style="background-image:url('{{ asset('assets/remodeling/images/demo-remodeling-service-02.png') }}')"> 
                                </div>
                                <div class="back border-radius-4px overflow-hidden">
                                    <div class="box-overlay bg-base-color"></div>
                                    <div class="content-wrap p-40px xs-p-30px last-paragraph-no-margin"> 
                                        
                                        <p class="text-white opacity-7 lh-30 sm-w-70 xs-w-100 mx-auto">Expanding the home by adding extra rooms such as bedrooms, living spaces, or sunrooms.</p> 
                                    </div>
                                </div>
                            </div>
                            <span class="fs-20 d-inline-block mt-30px fw-600 text-dark-gray">Room Additions</span>
                        </div>
                    </div>
                </div>
                <!-- end rotate box item -->
                <!-- start rotate box item -->
                <div class="col text-center rotate-box-style-01 lg-mb-45px" data-bottom-top="transform: translateY(80px)" data-top-bottom="transform: translateY(-80px)">
                    <div class="rm-rotate-box text-center">
                        <div class="flipper to-left">
                            <div class="thumb-wrap">
                                <div class="front overflow-hidden h-250px md-h-250px border-radius-4px overflow-hidden" style="background-image:url('{{ asset('assets/remodeling/images/demo-remodeling-service-03.png') }}')"> 
                                </div>
                                <div class="back border-radius-4px overflow-hidden">
                                    <div class="box-overlay bg-base-color"></div>
                                    <div class="content-wrap p-40px xs-p-30px last-paragraph-no-margin"> 
                                        
                                        <p class="text-white opacity-7 lh-30 sm-w-70 xs-w-100 mx-auto">A comprehensive renovation that covers multiple areas or the entire home.</p> 
                                    </div>
                                </div>
                            </div>
                            <span class="fs-20 d-inline-block mt-30px fw-600 text-dark-gray">Whole House Remodeling</span>
                        </div>
                    </div>
                </div>
                <!-- end rotate box item -->
                <!-- start rotate box item -->
                <div class="col text-center rotate-box-style-01 md-mb-45px" data-bottom-top="transform: translateY(80px)" data-top-bottom="transform: translateY(-80px)">
                    <div class="rm-rotate-box text-center">
                        <div class="flipper to-left">
                            <div class="thumb-wrap">
                                <div class="front overflow-hidden h-250px md-h-250px border-radius-4px overflow-hidden" style="background-image:url('{{ asset('assets/remodeling/images/demo-remodeling-service-04.png') }}')"> 
                                </div>
                                <div class="back border-radius-4px overflow-hidden">
                                    <div class="box-overlay bg-base-color"></div>
                                    <div class="content-wrap p-40px xs-p-30px last-paragraph-no-margin"> 
                                        
                                        <p class="text-white opacity-7 lh-30 sm-w-70 xs-w-100 mx-auto">Converting an unfinished or underutilized basement into a functional living space.</p> 
                                    </div>
                                </div>
                            </div>
                            <span class="fs-20 d-inline-block mt-30px fw-600 text-dark-gray">Basement Remodeling</span>
                        </div>
                    </div>
                </div>
                <!-- end rotate box item -->
                <!-- start rotate box item -->
                <div class="col text-center rotate-box-style-01 mt-5 lg-mt-0 sm-mb-45px" data-bottom-top="transform: translateY(-40px)" data-top-bottom="transform: translateY(40px)">
                    <div class="rm-rotate-box text-center">
                        <div class="flipper to-left">
                            <div class="thumb-wrap">
                                <div class="front overflow-hidden h-250px md-h-250px border-radius-4px overflow-hidden" style="background-image:url('{{ asset('assets/remodeling/images/demo-remodeling-service-05.png') }}')"> 
                                </div>
                                <div class="back border-radius-4px overflow-hidden">
                                    <div class="box-overlay bg-base-color"></div>
                                    <div class="content-wrap p-40px xs-p-30px last-paragraph-no-margin"> 
                                        
                                        <p class="text-white opacity-7 lh-30 sm-w-70 xs-w-100 mx-auto">Enhancing bathrooms with new vanities, showers, tubs, tiles, and modern fixtures.</p> 
                                    </div>
                                </div>
                            </div>
                            <span class="fs-20 d-inline-block mt-30px fw-600 text-dark-gray">Bathroom Remodeling</span>
                        </div>
                    </div>
                </div>
                <!-- end rotate box item -->
                <!-- start rotate box item -->
                <div class="col text-center rotate-box-style-01" data-bottom-top="transform: translateY(80px)" data-top-bottom="transform: translateY(-80px)">
                    <div class="rm-rotate-box text-center">
                        <div class="flipper to-left">
                            <div class="thumb-wrap">
                                <div class="front overflow-hidden h-250px md-h-250px border-radius-4px overflow-hidden" style="background-image:url('{{ asset('assets/remodeling/images/demo-remodeling-service-06.png') }}')"> 
                                </div>
                                <div class="back border-radius-4px overflow-hidden">
                                    <div class="box-overlay bg-base-color"></div>
                                    <div class="content-wrap p-40px xs-p-30px last-paragraph-no-margin"> 
                                        
                                        <p class="text-white opacity-7 lh-30 sm-w-70 xs-w-100 mx-auto">Upgrading or redesigning the kitchen layout, cabinets, countertops, appliances, and fixtures.</p> 
                                    </div>
                                </div>
                            </div>
                            <span class="fs-20 d-inline-block mt-30px fw-600 text-dark-gray">Kitchen Remodeling</span>
                        </div>
                    </div>
                </div>
                <!-- end rotate box item -->
            </div>
        </div>
    </section>

    <section id="gallery" class="ps-5 pe-5 lg-ps-2 lg-pe-2">
        <div class="container-fluid"> 
            <div class="row justify-content-center mb-5 xs-mb-7">
                <div class="col-md-8 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h2 class="alt-font mb-5px text-dark-gray ls-minus-2px">Our Gallery</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="image-gallery-style-02 gallery-wrapper grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-large" style="position: relative; height: 552.718px;">
                        <li class="grid-sizer"></li>
                        
                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos="" data-atropos-perspective="1150" style="position: absolute; left: 0%; top: 0px;">
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner" data-atropos-offset="3"> 
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/remodeling/images/demo-remodeling-gallery-01.png') }} data-group="lightbox-group-gallery-item-2" title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/remodeling/images/demo-remodeling-gallery-01.png') }} alt="" data-no-retina="">
                                                    <div class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <span class="atropos-highlight" style="transform: translate3d(0px, 0px, 0px);"></span></div>
                                <span class="atropos-shadow" style="transform: translate3d(0px, 0px, -50px) scale(1);"></span></div>
                            </div>
                        </li>
                        
                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos="" data-atropos-perspective="1150" style="position: absolute; left: 25.0001%; top: 0px;">
                            <div class="atropos-scale" style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                                <div class="atropos-rotate" style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                                    <div class="atropos-inner" data-atropos-offset="3" style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);"> 
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/remodeling/images/demo-remodeling-gallery-02.png') }} data-group="lightbox-group-gallery-item-2" title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/remodeling/images/demo-remodeling-gallery-02.png') }} alt="" data-no-retina="">
                                                    <div class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <span class="atropos-highlight" style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 0;"></span></div>
                                <span class="atropos-shadow" style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span></div>
                            </div>
                        </li>
                        
                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos="" data-atropos-perspective="1150" style="position: absolute; left: 50.0002%; top: 0px;">
                            <div class="atropos-scale" style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                                <div class="atropos-rotate" style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                                    <div class="atropos-inner" data-atropos-offset="3" style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);"> 
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/remodeling/images/demo-remodeling-gallery-03.png') }} data-group="lightbox-group-gallery-item-2" title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/remodeling/images/demo-remodeling-gallery-03.png') }} alt="" data-no-retina="">
                                                    <div class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <span class="atropos-highlight" style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 0;"></span></div>
                                <span class="atropos-shadow" style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span></div>
                            </div>
                        </li>
                        
                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos="" data-atropos-perspective="1150" style="position: absolute; left: 75.0003%; top: 0px;">
                            <div class="atropos-scale" style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                                <div class="atropos-rotate" style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                                    <div class="atropos-inner" data-atropos-offset="3" style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);"> 
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/remodeling/images/demo-remodeling-gallery-04.png') }} data-group="lightbox-group-gallery-item-2" title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/remodeling/images/demo-remodeling-gallery-04.png') }} alt="" data-no-retina="">
                                                    <div class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <span class="atropos-highlight" style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 0;"></span></div>
                                <span class="atropos-shadow" style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span></div>
                            </div>
                        </li>
                        
                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos="" data-atropos-perspective="1150" style="position: absolute; left: 0%; top: 276.359px;">
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner" data-atropos-offset="3"> 
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/remodeling/images/demo-remodeling-gallery-05.png') }} data-group="lightbox-group-gallery-item-2" title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/remodeling/images/demo-remodeling-gallery-05.png') }} alt="" data-no-retina="">
                                                    <div class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <span class="atropos-highlight" style="transform: translate3d(0px, 0px, 0px);"></span></div>
                                <span class="atropos-shadow" style="transform: translate3d(0px, 0px, -50px) scale(1);"></span></div>
                            </div>
                        </li>
                        
                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos="" data-atropos-perspective="1150" style="position: absolute; left: 25.0001%; top: 276.359px;">
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner" data-atropos-offset="3"> 
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/remodeling/images/demo-remodeling-gallery-06.png') }} data-group="lightbox-group-gallery-item-2" title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/remodeling/images/demo-remodeling-gallery-06.png') }} alt="" data-no-retina="">
                                                    <div class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <span class="atropos-highlight" style="transform: translate3d(0px, 0px, 0px);"></span></div>
                                <span class="atropos-shadow" style="transform: translate3d(0px, 0px, -50px) scale(1);"></span></div>
                            </div>
                        </li>
                        
                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos="" data-atropos-perspective="1150" style="position: absolute; left: 50.0002%; top: 276.359px;">
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner" data-atropos-offset="3"> 
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/remodeling/images/demo-remodeling-gallery-07.png') }} data-group="lightbox-group-gallery-item-2" title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/remodeling/images/demo-remodeling-gallery-07.png') }} alt="" data-no-retina="">
                                                    <div class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <span class="atropos-highlight" style="transform: translate3d(0px, 0px, 0px);"></span></div>
                                <span class="atropos-shadow" style="transform: translate3d(0px, 0px, -50px) scale(1);"></span></div>
                            </div>
                        </li>
                        
                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos="" data-atropos-perspective="1150" style="position: absolute; left: 75.0003%; top: 276.359px;">
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner" data-atropos-offset="3"> 
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/remodeling/images/demo-remodeling-gallery-08.png') }} data-group="lightbox-group-gallery-item-2" title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/remodeling/images/demo-remodeling-gallery-08.png') }} alt="" data-no-retina="">
                                                    <div class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <span class="atropos-highlight" style="transform: translate3d(0px, 0px, 0px);"></span></div>
                                <span class="atropos-shadow" style="transform: translate3d(0px, 0px, -50px) scale(1);"></span></div>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="bg-gradient-very-light-gray">
        <div class="container">
            <div class="row justify-content-center mb-5 xs-mb-7">
                <div class="col-md-8 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h2 class="alt-font mb-5px text-dark-gray ls-minus-2px">Contact Us</h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 row-cols-md-1 g-0 justify-content-center box-shadow-extra-large border-radius-10px overflow-hidden">
                <div class="col contact-form-style-04">
                    <div class="h-100 md-h-450px sm-h-350px w-100 cover-background position-relative" style="background-image: url('{{ asset('assets/remodeling/images/demo-remodeling-contact-01.png') }}')">
                        <div class="opacity-light bg-medium-slate-blue"></div>
                        <a href="https://www.youtube.com/watch?v=wYv6Z6oaQFM" class="text-center bg-white rounded-circle video-icon-box video-icon-large popup-youtube absolute-middle-center">
                            <span>
                                <span class="video-icon bg-white">
                                    <i class="bi bi-play-fill icon-medium text-dark-gray"></i>
                                    <span class="video-icon-sonar">
                                        <span class="video-icon-sonar-bfr bg-white opacity-7"></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col contact-form-style-04">
                    <div class="p-13 md-p-10 bg-white">
                        <h3 class="d-inline-block fw-600 text-dark-gray mb-8 ls-minus-1px">How we can help?</h3>
                        <form action="email-templates/contact-form.php" method="post">
                            <label class="text-dark-gray mb-10px fw-500">Username<span class="text-red">*</span></label> 
                            <input class="mb-20px bg-very-light-gray form-control required" type="text" name="name" placeholder="Enter your username">
                            <label class="text-dark-gray mb-10px fw-500">Email address<span class="text-red">*</span></label> 
                            <input class="mb-20px bg-very-light-gray form-control required" type="email" name="email" placeholder="Enter your email">
                            <label class="text-dark-gray mb-10px fw-500">Password<span class="text-red">*</span></label> 
                            <input class="mb-20px bg-very-light-gray form-control required" type="password" name="password" placeholder="Enter your password"> 
                            <div class="position-relative terms-condition-box text-start d-inline-block mb-20px">
                                <label>
                                    <input type="checkbox" name="terms_condition" id="terms_condition" value="1" class="terms-condition check-box align-middle required">
                                    <span class="box fs-14">I agree to the terms of service.</span>
                                </label>
                            </div>
                            <input type="hidden" name="redirect" value="">
                            <button class="btn btn-large btn-round-edge btn-dark-gray btn-box-shadow submit w-100 mb-20px" type="submit">Register now</button>
                           
                            <div class="form-results mt-20px d-none"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.749241660859!2d-92.96234342481402!3d44.80629877709541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87f7cfddb42effd1%3A0xc8f4a00e9b8466f9!2s9853%20Hamlet%20Ln%20S%2C%20Cottage%20Grove%2C%20MN%2055016%2C%20USA!5e0!3m2!1sen!2s!4v1729665535012!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     
@endsection