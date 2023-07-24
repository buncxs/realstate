<form action="{{ route('password.update') }}" method="post" class="default-form">
    @csrf
    @method('put')

    <!-- Current Password -->
    <div class="form-group">
        <label for="current_password" class="form-label">Current Password</label>
        <input type="password" class="form-control" id="current_password" name="current_password"
            autocomplete="current-password">
        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
    </div>

    <!-- New Password -->
    <div class="form-group">
        <label for="password" class="form-label">New Password</label>
        <input type="password" class="form-control" id="password" name="password" autocomplete="current-password">
        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
    </div>

    <!-- Password Confirmation -->
    <div class="form-group">
        <label for="password_confirmation" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
            autocomplete="current-password">
        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="form-group message-btn">
        <button type="submit" class="theme-btn btn-one">Save Changes</button>
    </div>
</form>