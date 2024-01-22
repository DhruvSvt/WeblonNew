@extends('layouts.visitorsApp', ['title' => 'Coworking-space'])
@section('content')
    <main id="main">
        <!-- Hero Section - Home Page -->
        <section id="hero" class="coworking">

            <img src="{{ config('app.url') }}/assets/img/hero-bg2.png" alt="" data-aos="fade-in">

            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <h2 data-aos="fade-up" data-aos-delay="100" class="main-heading">Coworking Space
                        </h2>
                        <p>Unlock Seamless Collaboration: Weblan Coworking <br> – Where All-Inclusive Meets Hassle-Free.</p>
                        <!-- <p data-aos="fade-up" data-aos-delay="200">We are team of talented designers making websites with Bootstrap</p> -->
                        <div class="btn-connect">
                            <a class="btn-requestforquoate" href="index.html#about" data-toggle="modal"
                                data-target="#myModal">Consult With Us &nbsp;&nbsp; <i class="fa-solid fa-chevron-right"
                                    style="text-decoration: none;"></i> </a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal Start-->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-body">
                            {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
                            <button type="button" class="close" data-dismiss="modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" style="width: 18px;height: auto;margin-bottom: 9px;">
                                    <path
                                        d="M13.3259 12.0002L23.7255 1.60065C24.0916 1.23451 24.0916 0.640882 23.7255 0.274788C23.3593 -0.0913051 22.7657 -0.091352 22.3996 0.274788L12 10.6744L1.60047 0.274788C1.23432 -0.091352 0.6407 -0.091352 0.274606 0.274788C-0.0914883 0.640929 -0.0915352 1.23455 0.274606 1.60065L10.6742 12.0002L0.274606 22.3998C-0.0915352 22.7659 -0.0915352 23.3595 0.274606 23.7256C0.457653 23.9087 0.697606 24.0002 0.937559 24.0002C1.17751 24.0002 1.41742 23.9087 1.60051 23.7256L12 13.3261L22.3996 23.7256C22.5826 23.9087 22.8226 24.0002 23.0625 24.0002C23.3025 24.0002 23.5424 23.9087 23.7255 23.7256C24.0916 23.3595 24.0916 22.7659 23.7255 22.3998L13.3259 12.0002Z"
                                        fill="#686868" />
                                </svg></button>
                            <div class="d-flex justify-content-center row m-4">
                                <div class="col-6">
                                    <div class="model-left-text">
                                        <h4>Optimize your business with a seamless <span>office solution</span></h4>
                                        <p class="modal-p">Plug-and-play office space for instant <br>
                                            setup and productivity.</p>
                                    </div>
                                    <div class="model-left-img">
                                        <img src="{{ config('app.url') }}/assets/img/modal-img.png" alt=""
                                            srcset="" class="modal-img img-fluid"
                                            style="width: 43%;height: auto;margin: 14rem 36px;border-radius: 15px;"
                                            height="100px">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <form class="row">
                                        {{-- <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword4">
                            </div> --}}
                                        <div class="col-12 mt-4">

                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="Full name">
                                        </div>
                                        <div class="col-12 mt-4">

                                            <input type="email" class="form-control" id="inputAddress"
                                                placeholder="E-mail ID">
                                        </div>
                                        <div class="col-12 mt-4">
                                            <input type="text" class="form-control" id="inputAddress"
                                                placeholder="Contact No.">
                                        </div>
                                        <div class="col-6 mt-4">

                                            <select class="form-select form-control" aria-label="Default select example">
                                                <option selected>Office Space <i class="fa-solid fa-caret-down"></i>
                                                </option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-6 mt-4">

                                            <select class="form-select form-control" aria-label="Default select example">
                                                <option selected>Required Seat <i class="fa-solid fa-chevron-right"></i>
                                                </option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-4">
                                            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-2 mt-2">
                                            <span>6 + 7 = </span>
                                        </div>
                                        <div class="col-3 d-flex">
                                            <input type="text" class="form-control" id="inputZip">
                                        </div>
                                        <div class="col-7 mt-2" style="padding-left: 10rem; padding-top:2.5px">
                                            <a type="submit">Submit <i class="fa-solid fa-chevron-right"></i></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <p class="footer">Overseeing a clientele exceeding <span>50</span>, our office space spans
                            <span>3,500</span> square feet,
                            accommodating
                            well over <span>1,000</span> seats.
                        </p>
                        {{-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> --}}
                    </div>

                </div>
            </div>
            <!-- Modal End-->
        </section><!-- End Hero Section -->
    </main>
@endsection
