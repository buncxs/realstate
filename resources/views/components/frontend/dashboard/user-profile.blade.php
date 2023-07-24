@props(['user'])
<div class="sidebar-widget post-widget">
    <div class="widget-title">
        <h4>User Profile </h4>
    </div>
    <div class="post-inner">
        <div class="post">
            <figure class="post-thumb"><a href="blog-details.html">
                    <img src="{{ isset($user->profile_photo_path) ? Storage::url($user->profile_photo_path) : Storage::url('no_image.jpg') }}"
                        alt=""></a></figure>
            <h5><a href="blog-details.html">{{ $user->name }}</a></h5>
            <p>{{ $user->email }}</p>
        </div>
    </div>
</div>