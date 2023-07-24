<x-front-layout>

    <!--Page Title-->
    <x-frontend.dashboard.title />
    <!--End Page Title-->

    <!-- Content -->
    <section class="sidebar-page-container blog-details sec-pad-2">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="blog-sidebar">
                        <!-- User Profile -->
                        <x-frontend.dashboard.user-profile :user=$user />
                        <!-- User Profile End -->

                        <!-- Sidebar -->
                        <x-frontend.dashboard.sidebar />
                        <!-- Sidebar End -->
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-details-content">
                        <div class="news-block-one">
                            <div class="inner-box">
                                <div class="lower-content">
                                    <x-frontend.dashboard.update-profile-password-form :user=$user />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content End -->

    <!-- subscribe-section -->
    <x-frontend.dashboard.subscribe />
    <!-- subscribe-section end -->

</x-front-layout>
