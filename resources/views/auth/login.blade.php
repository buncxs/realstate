<x-guest-layout>
    <div class="page-content d-flex align-items-center justify-content-center">
        <div class="row w-100 mx-0 auth-page">
            <div class="col-md-8 col-xl-6 mx-auto">
                <div class="card">
                    <div class="row">
                        <div class="col-md-4 pe-md-0">
                            <div class="auth-side-wrapper">

                            </div>
                        </div>
                        <div class="col-md-8 ps-md-0">
                            <div class="auth-form-wrapper px-4 py-5">
                                <a href="#" class="noble-ui-logo logo-light d-block mb-2">Noble<span>UI</span></a>
                                <h5 class="text-muted fw-normal mb-4">Welcome back! Log in to your account.</h5>
                                <form class="forms-sample" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="username" class="form-control" id="username" name="username"
                                            :value="old('username')" required placeholder="Username">
                                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password"
                                            autocomplete="current-password" placeholder="Password" name="password"
                                            :value="old('password')" required>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                    <div class="form-check mb-3">
                                        <input type="checkbox" class="form-check-input" id="remember_me">
                                        <label class="form-check-label" for="remember_me" name="remember">
                                            Remember me
                                        </label>
                                    </div>
                                    <div>
                                        <button type="submit"
                                            class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                                            Login
                                        </button>
                                    </div>
                                    <a href="register.html" class="d-block mt-3 text-muted">Not a user? Sign up</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-guest-layout>
