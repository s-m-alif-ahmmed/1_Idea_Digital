<!--APP-SIDEBAR-->
<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{route('dashboard')}}">
                <img src="{{asset('/')}}admin/assets/images/brand/1idea_digital-removebg-preview.png" class="header-brand-img desktop-logo w-100" alt="logo" style="height: 50px;">
                <img src="{{asset('/')}}admin/assets/images/brand/1idea_bulb.png" class="header-brand-img toggle-logo" alt="logo">
                <img src="{{asset('/')}}admin/assets/images/brand/1idea_bulb.png" class="header-brand-img light-logo" alt="logo">
                <img src="{{asset('/')}}admin/assets/images/brand/1idea_digital-removebg-preview.png" class="header-brand-img light-logo1 w-100" alt="logo" style="height: 50px;">
            </a><!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                                                  fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg>
            </div>
            <ul class="side-menu">
                <li>
                    <h3>Menu</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('dashboard')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.9794922,7.9521484l-6-5.2666016c-1.1339111-0.9902344-2.8250732-0.9902344-3.9589844,0l-6,5.2666016C3.3717041,8.5219116,2.9998169,9.3435669,3,10.2069702V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h2.5h7c0.0001831,0,0.0003662,0,0.0006104,0H18c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-8.7930298C21.0001831,9.3435669,20.6282959,8.5219116,19.9794922,7.9521484z M15,21H9v-6c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2V21z M20,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-2v-6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3h-2c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v6H6c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8.7930298C3.9997559,9.6313477,4.2478027,9.0836182,4.6806641,8.7041016l6-5.2666016C11.0455933,3.1174927,11.5146484,2.9414673,12,2.9423828c0.4853516-0.0009155,0.9544067,0.1751099,1.3193359,0.4951172l6,5.2665405C19.7521973,9.0835571,20.0002441,9.6313477,20,10.2069702V19z"/></svg>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>
                <li>
                    <h3>Components</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" class="side-menu__icon" viewBox="0 0 496 512"><path d="M247.6 8C389.4 8 496 118.1 496 256c0 147.1-118.5 248-248.4 248C113.6 504 0 394.5 0 256 0 123.1 104.7 8 247.6 8zm.8 44.7C130.2 52.7 44.7 150.6 44.7 256c0 109.8 91.2 202.8 203.7 202.8 103.2 0 202.8-81.1 202.8-202.8.1-113.8-90.2-203.3-202.8-203.3zm101 132.4c7.8 0 13.7 6.1 13.7 13.7v182.5c0 7.7-6.1 13.7-13.7 13.7H214.3c-7.7 0-13.7-6-13.7-13.7v-54h-54c-7.8 0-13.7-6-13.7-13.7V131.1c0-8.2 6.6-12.7 12.4-13.7h136.4c7.7 0 13.7 6 13.7 13.7v54h54zM159.9 300.3h40.7V198.9c0-7.4 5.8-12.6 12-13.7h55.8v-40.3H159.9v155.4zm176.2-88.1H227.6v155.4h108.5V212.2z"/></svg>
                        <span class="side-menu__label">Common Section</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                    class="sub-side-menu__label">Top Menu</span><i
                                    class="sub-angle fa fa-angle-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li>
                                    <a class="sub-slide-item" href="{{ route('ideaLogo.index') }}">1Idea logo</a>
                                </li>
                                <li>
                                    <a class="sub-slide-item" href="{{ route('topSocial.index') }}">Social Links</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                    class="sub-side-menu__label">Footer</span><i
                                    class="sub-angle fa fa-angle-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li>
                                    <a class="sub-slide-item" href="{{ route('copyright.index') }}">Copyright</a>
                                </li>
                                <li>
                                    <a class="sub-slide-item" href="{{ route('term.index') }}">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a class="sub-slide-item" href="{{ route('privacy.index') }}">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="sub-slide-item" href="{{ route('footerSocial.index') }}">Social Links</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1rm" class="side-menu__icon" viewBox="0 0 576 512"><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
                        <span class="side-menu__label">Home Section</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                    class="sub-side-menu__label">Top Menu</span><i
                                    class="sub-angle fa fa-angle-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li>
                                    <a class="sub-slide-item" href="#">1idea logo</a>
                                </li>
                                <li>
                                    <a class="sub-slide-item" href="#">social links</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1rm" class="side-menu__icon" viewBox="0 0 576 512"><path d="M512 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H512zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM208 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128zm-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H176zM376 144c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376z"/></svg>
                        <span class="side-menu__label">About Us Section</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                    class="sub-side-menu__label">Top Menu</span><i
                                    class="sub-angle fa fa-angle-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li>
                                    <a class="sub-slide-item" href="#">1idea logo</a>
                                </li>
                                <li>
                                    <a class="sub-slide-item" href="#">social links</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1rm" class="side-menu__icon" viewBox="0 0 576 512"><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
                        <span class="side-menu__label">Case Studies Section</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                    class="sub-side-menu__label">Top Menu</span><i
                                    class="sub-angle fa fa-angle-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li>
                                    <a class="sub-slide-item" href="#">1idea logo</a>
                                </li>
                                <li>
                                    <a class="sub-slide-item" href="#">social links</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1rm" class="side-menu__icon" viewBox="0 0 576 512"><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
                        <span class="side-menu__label">Services Section</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#">
                                <span class="sub-side-menu__label">Services & Plans</span>
                                <i class="sub-angle fa fa-angle-right"></i>
                            </a>
                            <ul class="sub-slide-menu">
                                <li>
                                    <a class="sub-slide-item" href="{{route('service.index')}}">Service</a>
                                </li>
                                <li class="sub-slide2">
                                    <a class="sub-side-menu__item2" href="#" data-bs-toggle="sub-slide2">
                                        <span class="sub-side-menu__label2">Plan & Price</span>
                                        <i class="sub-angle2 fa fa-angle-right"></i>
                                    </a>
                                    <ul class="sub-slide-menu2">
                                        <li>
                                            <a href="{{ route('planType.index') }}" class="sub-slide-item2">Plan Type</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('planContent.index') }}" class="sub-slide-item2">Plan Contents</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('planDetail.index') }}" class="sub-slide-item2">Plan Details</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#">
                                <span class="sub-side-menu__label">Contents</span>
                                <i class="sub-angle fa fa-angle-right"></i>
                            </a>
                            <ul class="sub-slide-menu">
                                <li>
                                    <a class="sub-slide-item" href="{{route('serviceDescription.index')}}">Service Description</a>
                                </li>
                                <li>
                                    <a class="sub-slide-item" href="{{route('packageSubHeading.index')}}">Packages Sub Heading</a>
                                </li>
                                <li>
                                    <a class="sub-slide-item" href="{{route('packageDescription.index')}}">Packages Description</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" class="side-menu__icon" viewBox="0 0 512 512"><path d="M192 32c0 17.7 14.3 32 32 32c123.7 0 224 100.3 224 224c0 17.7 14.3 32 32 32s32-14.3 32-32C512 128.9 383.1 0 224 0c-17.7 0-32 14.3-32 32zm0 96c0 17.7 14.3 32 32 32c70.7 0 128 57.3 128 128c0 17.7 14.3 32 32 32s32-14.3 32-32c0-106-86-192-192-192c-17.7 0-32 14.3-32 32zM96 144c0-26.5-21.5-48-48-48S0 117.5 0 144V368c0 79.5 64.5 144 144 144s144-64.5 144-144s-64.5-144-144-144H128v96h16c26.5 0 48 21.5 48 48s-21.5 48-48 48s-48-21.5-48-48V144z"/></svg>
                        <span class="side-menu__label">Blogs Section</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="{{route('tag.index')}}">
                                <span class="sub-side-menu__label">Tag</span>
                            </a>
                        </li>
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="{{route('blogs.index')}}">
                                <span class="sub-side-menu__label">Blog</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" class="side-menu__icon" viewBox="0 0 512 512"><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg>
                        <span class="side-menu__label">Contact Us Section</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                    class="sub-side-menu__label">Contact Messages</span><i
                                    class="sub-angle fa fa-angle-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li>
                                    <a class="sub-slide-item" href="{{ route('homeContact.index') }}">Home Contact Messages</a>
                                </li>
                                <li>
                                    <a class="sub-slide-item" href="{{ route('mainContact.index') }}">Main Contact Messages</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                    class="sub-side-menu__label">Contact Us Page</span><i
                                    class="sub-angle fa fa-angle-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li>
                                    <a class="sub-slide-item" href="#">Top Content</a>
                                </li>
                                <li>
                                    <a class="sub-slide-item" href="#">Address Image</a>
                                </li>
                                <li>
                                    <a class="sub-slide-item" href="#">Share Links</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                                           width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg>
            </div>
        </div>
    </div>
</div>
<!--/APP-SIDEBAR-->
