<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center px-5">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ config('app.url') }}/assets/img/weblon-logo.png" alt="">
            <!-- <h1>Append</h1> -->
            <!-- <span>.</span> -->
        </a>

        <!-- Nav Menu -->
        <nav id="navmenu" class="navmenu">
            <ul>
                <!-- <li><a href="index.html#hero" class="active">Home</a></li>
          <li><a href="index.html#about">About</a></li>
          <li><a href="index.html#services">Services</a></li>
          <li><a href="index.html#portfolio">Portfolio</a></li>
          <li><a href="index.html#team">Team</a></li>
          <li><a href="blog.html">Blog</a></li> -->
                <li class="dropdown has-dropdown"><a href="#"><span>Tech Services</span> <i
                            class="fa-solid fa-caret-down"></i></a>
                    <ul class="dd-box-shadow">
                        <li><a href="#">Dropdown 1</a></li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li>
                <li class="dropdown has-dropdown workspace">
                    <a href="#">
                        <span>Workspace</span>
                        <i class="fa-solid fa-caret-down"></i>
                    </a>
                    <ul class="dd-box-shadow">
                        <div class="workspace-box col-12">
                            <div class="col-4">
                                <li><a href="#" class="heading">Tailored Office Spaces to
                                        <br>Match <span>Your Needs.</span></a></li>
                                <li><img src="{{ config('app.url') }}/assets/img/nav-img.png" alt="" srcset="">
                                </li>
                            </div>
                            <div class="col-4">
                                <li><a href="#" class="item">COWORKING
                                        SPACE</a>
                                    <p style="font-size: 11px; font-weight:400;color:#000;padding-left:11px">Collaborate
                                        and
                                        Create: Your Ideal
                                        Shared Office Space Awaits!</p>
                                </li>
                                <hr style="margin-top: 20px;margin-left: 11px;width: 19rem;border-top: 1px solid #000;">
                                <li style="font-size: 14px; font-weight:700"><a href="#" class="item">PRIVATE OFFICE SPACE</a>
                                    <p style="font-size: 11px; font-weight:400;color:#000;padding-left:11px">Empower
                                        Your Workspace: Discover the Advantage of Managed Office Spaces</p>
                                </li>
                                <hr style="margin-top: 15px;margin-left: 11px;width: 19rem;border-top: 1px solid #000;">
                            </div>
                            <div class="col-4">
                                <li style="font-size: 14px; font-weight:700"><a href="#" class="item">MEETING ROOMS</a>
                                    <p style="font-size: 11px; font-weight:400;color:#000;padding-left:11px">
                                        Empower Your Meetings with Exceptional Spaces
                                    </p>
                                </li>
                                <hr style="margin-top: 20px;margin-left: 11px;width: 19rem;border-top: 1px solid #000;">
                                <li style="font-size: 14px; font-weight:700"><a href="#" class="item">VIRTUAL OFFICE SERVICE</a>
                                    <p style="font-size: 11px; font-weight:400;color:#000;padding-left:11px">
                                        Your Office, Your Way: Virtually Redefining Workspaces.
                                    </p>
                                </li>
                                <hr style="margin-top: 30px;margin-left: 11px;width: 19rem;border-top: 1px solid #000;">
                            </div>
                        </div>
                    </ul>
                </li>
                {{-- <li class="dropdown has-dropdown"><a href="#"><span>Workspace</span><i
                            class="fa-solid fa-caret-down"></i></a>
                    <ul class="dd-box-shadow">
                        <li><a href="#">Dropdown 1</a></li>
                        <li class="dropdown has-dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul class="dd-box-shadow">
                                <li><a href="#">Deep Dropdown 1</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li> --}}
                <li><a href="index.html#contact">Gallery</a></li>
            </ul>

            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav><!-- End Nav Menu -->

        <a class="btn-requestforquoate" href="index.html#about">Request for Quote</a>

    </div>
</header>
<!-- End Header -->
