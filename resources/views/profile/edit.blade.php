<x-app-layout>
    @push('head')
        <script type="text/javascript" src="{{ asset('/assets/js/jquery.js') }}"></script>
    @endpush

    <div class="col-md-12 col-xl-12">
        <div class="row mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h6 class="card-title fs-4 mb-4">Profile Information</h6>
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h6 class="card-title fs-4 mb-4">Update Password</h6>
                    @include('profile.partials.update-password-form')
                </div>
            </div>
        </div>
        <!--
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
      -->
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
