<x-app-layout>

    <div class="col-sm-12 col-md-10 col-xl-8">
        <div class="card shadow">
            <div class="card-body">
                <h6 class="card-title fs-4 mb-4">Update Category</h6>
                <form method="post" action="{{ route('categories.update', $category) }}" class="">
                    @csrf
                    @method('PATCH')
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name', $category->name) }}" required autocomplete="name">
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Icon -->
                    <div class="mb-3">
                        <label for="icon" class="form-label">Icon</label>
                        <input type="text" class="form-control @error('icon') is-invalid @enderror" name="icon"
                            value="{{ old('icon', $category->icon) }}" required autocomplete="icon">
                        <x-input-error :messages="$errors->get('icon')" class="mt-2" />
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
