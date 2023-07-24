<x-front-layout>
    
    <!-- Content -->
    <section class="sidebar-page-container blog-details sec-pad-2">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="blog-sidebar">
                        <!-- User Profile -->
                        <x-frontend.dashboard.user-profile :user=$user/>
                        <!-- User Profile End -->

                        <!-- Sidebar -->
                        <x-frontend.dashboard.sidebar />
                        <!-- Sidebar End -->
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <!-- Statistics -->
                    <x-frontend.dashboard.statistics />
                    <!-- Statistics End -->

                    <!-- Activity Logs -->
                    <x-frontend.dashboard.logs />
                    <!-- Activity End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Content End -->

    <!-- subscribe-section -->
    <x-frontend.dashboard.subscribe />
    <!-- subscribe-section end -->

</x-front-layout>
