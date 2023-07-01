<x-app-layout>
    @push('head')
        <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
    @endpush
    <div class="row profile-body">
        <!-- left wrapper start -->
        <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
            <div class="card rounded">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center justify-content-center mb-2">
                        <div>
                            <img class="wd-80 rounded-circle"
                                src="{{ isset($user->photo) ? Storage::url($user->photo) : Storage::url('user/no_image.jpg') }}"
                                alt="profile">
                        </div>
                        <h4 class="h4 mt-2">{{ $user->username }}</h4>
                    </div>
                    <p>Hi! I'm Amiah the Senior UI Designer at NobleUI. We hope you enjoy the design and quality of
                        Social.</p>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Name:</label>
                        <p class="text-muted">{{ $user->name }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                        <p class="text-muted">{{ $user->email }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                        <p class="text-muted">{{ $user->phone }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
                        <p class="text-muted">{{ $user->address }}</p>
                    </div>
                    <div class="mt-3 d-flex social-links">
                        <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                            <i data-feather="github"></i>
                        </a>
                        <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                            <i data-feather="twitter"></i>
                        </a>
                        <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                            <i data-feather="instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- left wrapper end -->
        <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Basic Form</h6>
                        <form action="{{ route('profile.update', $user) }}" method="POST" class="forms-sample">
                            @method('patch')
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" autocomplete="off"
                                    value="{{ $user->name }}">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" autocomplete="off"
                                    value="{{ $user->username }}">
                                <x-input-error :messages="$errors->get('username')" class="mt-2" />
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">phone</label>
                                <input type="text" class="form-control" name="phone" autocomplete="off"
                                    value="{{ $user->phone }}">
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">address</label>
                                <input type="text" class="form-control" name="address" autocomplete="off"
                                    value="{{ $user->address }}">
                                <x-input-error :messages="$errors->get('address')" class="mt-2" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="photo">photo</label>
                                <input class="form-control" type="file" name="photo">
                                <x-input-error :messages="$errors->get('photo')" class="mt-2" />
                            </div>
                            <div class="mb-3">
                                <img id="showPhoto" class="wd-80 ht-80 object-fit-cover block rounded-circle"
                                    src="{{ isset($user->photo) ? Storage::url($user->photo) : Storage::url('user/no_image.jpg') }}"
                                    alt="profile">
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- middle wrapper end -->
    </div>
    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $('#photo').change(function(e) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#showPhoto').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
            });
        </script>
    @endpush
</x-app-layout>
