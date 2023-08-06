<x-app-layout>
    @push('head')
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="{{ asset('assets/admin/vendors/select2/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/admin/vendors/jquery-tags-input/jquery.tagsinput.min.css') }}">
        <!-- End Plugin css for this page -->
    @endpush
    <div class="col-sm-12 col-md-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Add Property</h6>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('properties.store') }}" class="">
                    @csrf
                    <div class="row">
                        <!-- Name -->
                        <div class="col-sm-6 mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Status -->
                        <div class="col-sm-6 mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-select">
                                <option value="" selected disabled>Select Status</option>
                                <option value="rent">Rent</option>
                                <option value="buy">Buy</option>
                            </select>
                            <x-input-error :messages="$errors->get('status')" class="mt-2" />
                        </div>
                    </div>

                    <div class="row">
                        <!-- Low_price -->
                        <div class="col-sm-6 mb-3">
                            <label for="low_price" class="form-label">Lowest Price</label>
                            <input type="text" class="form-control @error('low_price') is-invalid @enderror"
                                name="low_price" value="{{ old('low_price') }}">
                            <x-input-error :messages="$errors->get('low_price')" class="mt-2" />
                        </div>

                        <!-- Max_price-->
                        <div class="col-sm-6 mb-3">
                            <label for="max_price" class="form-label">Maximum Price</label>
                            <input type="text" class="form-control @error('max_price') is-invalid @enderror"
                                name="max_price" value="{{ old('max_price') }}">
                            <x-input-error :messages="$errors->get('max_price')" class="mt-2" />
                        </div>
                    </div>

                    <div class="row">
                        <!-- Thumbnail -->
                        <div class="col-sm-6 mb-3">
                            <label for="low_price" class="form-label">Thumbnail</label>
                            <input type="file" class="form-control @error('thumbnail') is-invalid @enderror"
                                name="thumbnail" value="{{ old('thumbnail') }}" onChange="thumbnailUrl(this)">
                            <img src="" id="showImg">
                            <x-input-error :messages="$errors->get('thumbnail')" class="mt-2" />
                        </div>

                        <!-- Images-->
                        <div class="col-sm-6 mb-3">
                            <label for="images" class="form-label">Images</label>
                            <input type="file" class="form-control @error('images') is-invalid @enderror"
                                name="images[]" id="images" multiple>
                            <x-input-error :messages="$errors->get('images')" class="mt-2" />
                            <div class="row" id="showImages">

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Bedrooms-->
                        <div class="col-sm-3 mb-3">
                            <label for="bedrooms" class="form-label">Bedrooms</label>
                            <input type="text" class="form-control @error('bedrooms') is-invalid @enderror"
                                name="bedrooms" value="{{ old('bedrooms') }}">
                            <x-input-error :messages="$errors->get('bedrooms')" class="mt-2" />
                        </div>

                        <!-- Bathrooms-->
                        <div class="col-sm-3 mb-3">
                            <label for="bathrooms" class="form-label">Bathrooms</label>
                            <input type="text" class="form-control @error('bathrooms') is-invalid @enderror"
                                name="bathrooms" value="{{ old('bathrooms') }}">
                            <x-input-error :messages="$errors->get('bathrooms')" class="mt-2" />
                        </div>

                        <!-- Garage-->
                        <div class="col-sm-3 mb-3">
                            <label for="garage" class="form-label">Garage</label>
                            <input type="text" class="form-control @error('garage') is-invalid @enderror"
                                name="garage" value="{{ old('garage') }}">
                            <x-input-error :messages="$errors->get('garage')" class="mt-2" />
                        </div>

                        <!-- Garage_size-->
                        <div class="col-sm-3 mb-3">
                            <label for="garage_size" class="form-label">Garage size</label>
                            <input type="text" class="form-control @error('garage_size') is-invalid @enderror"
                                name="garage_size" value="{{ old('garage_size') }}">
                            <x-input-error :messages="$errors->get('garage_size')" class="mt-2" />
                        </div>
                    </div>

                    <div class="row">
                        <!-- Address-->
                        <div class="col-sm-3 mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror"
                                name="address" value="{{ old('address') }}">
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>

                        <!-- City-->
                        <div class="col-sm-3 mb-3">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror"
                                name="city" value="{{ old('city') }}">
                            <x-input-error :messages="$errors->get('city')" class="mt-2" />
                        </div>

                        <!-- State-->
                        <div class="col-sm-3 mb-3">
                            <label for="state" class="form-label">State</label>
                            <input type="text" class="form-control @error('state') is-invalid @enderror"
                                name="state" value="{{ old('state') }}">
                            <x-input-error :messages="$errors->get('state')" class="mt-2" />
                        </div>

                        <!-- Postal_code-->
                        <div class="col-sm-3 mb-3">
                            <label for="postal_code" class="form-label">Postal code</label>
                            <input type="text" class="form-control @error('postal_code') is-invalid @enderror"
                                name="postal_code" value="{{ old('postal_code') }}">
                            <x-input-error :messages="$errors->get('postal_code')" class="mt-2" />
                        </div>
                    </div>

                    <div class="row">
                        <!-- Size-->
                        <div class="col-sm-4 mb-3">
                            <label for="size" class="form-label">Size</label>
                            <input type="text" class="form-control @error('size') is-invalid @enderror"
                                name="size" value="{{ old('size') }}">
                            <x-input-error :messages="$errors->get('size')" class="mt-2" />
                        </div>

                        <!-- Video-->
                        <div class="col-sm-4 mb-3">
                            <label for="video" class="form-label">Video</label>
                            <input type="text" class="form-control @error('video') is-invalid @enderror"
                                name="video" value="{{ old('video') }}">
                            <x-input-error :messages="$errors->get('video')" class="mt-2" />
                        </div>

                        <!-- Neighborhood-->
                        <div class="col-sm-4 mb-3">
                            <label for="neighborhood" class="form-label">Neighborhood</label>
                            <input type="text" class="form-control @error('neighborhood') is-invalid @enderror"
                                name="neighborhood" value="{{ old('neighborhood') }}">
                            <x-input-error :messages="$errors->get('neighborhood')" class="mt-2" />
                        </div>
                    </div>

                    <div class="row">
                        <!-- Longitude-->
                        <div class="col-sm-6 mb-3">
                            <label for="longitude" class="form-label">Longitude</label>
                            <input type="text" class="form-control @error('longitude') is-invalid @enderror"
                                name="longitude" value="{{ old('longitude') }}">
                            <a href="https://www.latlong.net/" target="_blank">
                                Go here to check longitude and latitude
                            </a>
                            <x-input-error :messages="$errors->get('longitude')" class="mt-2" />
                        </div>

                        <!-- Latitude-->
                        <div class="col-sm-6 mb-3">
                            <label for="latitude" class="form-label">Latitude</label>
                            <input type="text" class="form-control @error('latitude') is-invalid @enderror"
                                name="latitude" value="{{ old('latitude') }}">
                            <x-input-error :messages="$errors->get('latitude')" class="mt-2" />
                        </div>
                    </div>

                    <div class="row">
                        <!-- Categories-->
                        <div class="col-sm-4 mb-3">
                            <label for="categories" class="form-label">Categories</label>
                            <select name="categories" id="categories" class="form-select">
                                <option value="" selected disabled>Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('categories')" class="mt-2" />
                        </div>

                        <!-- Amenities-->
                        <div class="col-sm-4 mb-3">
                            <label for="categories" class="form-label">Amenities</label>
                            <select class="js-example-basic-multiple form-select" multiple="multiple"
                                data-width="100%">
                                @foreach ($amenities as $amenity)
                                    <option value="{{ $amenity->id }}">{{ $amenity->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('amenities')" class="mt-2" />
                        </div>

                        <!-- Agent-->
                        <div class="col-sm-4 mb-3">
                            <label for="agents" class="form-label">Agent</label>
                            <select name="agents" id="agents" class="form-select">
                                <option value="" selected disabled>Select Agent</option>
                                @foreach ($agents as $agent)
                                    <option value="{{ $agent->id }}">{{ $agent->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('agents')" class="mt-2" />
                        </div>
                    </div>

                    <div class="row">
                        <!-- Short_description-->
                        <div class="col-sm-12 mb-3">
                            <label for="short_description" class="form-label">Short Description</label>
                            <textarea type="text" class="form-control @error('short_description') is-invalid @enderror"
                                name="short_description" rows="3" value="{{ old('short_description') }}"></textarea>
                            <x-input-error :messages="$errors->get('short_description')" class="mt-2" />
                        </div>
                    </div>

                    <div class="row">
                        <!-- Description-->
                        <div class="col-sm-12 mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description"
                                id="tinymceExample" rows="" value="{{ old('description') }}"></textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                    </div>
                    <div class="row">
                        <!-- Featured-->
                        <div class="mb-3">
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" name="featured" id="featured">
                                <label class="form-check-label" for="featured">
                                    Featured
                                </label>
                            </div>

                            <!-- Hot-->
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" name="hot" id="hot">
                                <label class="form-check-label" for="hot">
                                    Hot
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Facilities section -->
                    <div class="row">
                        <p class="mb-3">     
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                data-bs-target="#multiCollapseExample2" aria-expanded="false"
                                aria-controls="multiCollapseExample2">
                                Facilities
                            </button>
                        </p>
                        <div class="row mb-3">
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample2">
                                    <div class="card card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes
                                        anderson cred nesciunt sapiente ea proident.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Facilities section -->

                    <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
        <!-- Plugin js for this page -->
        <script src="{{ asset('assets/admin/vendors/inputmask/jquery.inputmask.min.js') }}"></script>
        <script src="{{ asset('assets/admin/vendors/select2/select2.min.js') }}"></script>
        <script src="{{ asset('assets/admin/vendors/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
        <script src="{{ asset('assets/admin/vendors/tinymce/tinymce.min.js') }}"></script>

        <!-- End Plugin js for this page -->


        <!-- Custom js for this page -->
        <script src="{{ asset('assets/admin/js/inputmask.js') }}"></script>
        <script src="{{ asset('assets/admin/js/select2.js') }}"></script>
        <script src="{{ asset('assets/admin/js/tags-input.js') }}"></script>
        <script src="{{ asset('assets/admin/js/tinymce.js') }}"></script>
        <script type="text/javascript">
            //Multiple Images
            $(document).ready(function() {
                $('#images').on('change', function() { //on file input change
                    if (window.File && window.FileReader && window.FileList && window
                        .Blob) //check File API supported browser
                    {
                        var data = $(this)[0].files; //this file data

                        $.each(data, function(index, file) { //loop though each file
                            if (/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file
                                    .type)) { //check supported file type
                                var fRead = new FileReader(); //new filereader
                                fRead.onload = (function(file) { //trigger function on successful read
                                    return function(e) {
                                        var img = $('<img/>').addClass('thumb').attr('src',
                                                e.target.result).width(100)
                                            .height(80); //create image element 
                                        $('#showImages').append(
                                            img); //append image to output element
                                    };
                                })(file);
                                fRead.readAsDataURL(file); //URL representing the file's data.
                            }
                        });

                    } else {
                        alert("Your browser doesn't support File API!"); //if File API is absent
                    }
                });
            });


            //Single image
            function thumbnailUrl(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#showImg').attr('src', e.target.result).width(80).height(80);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
        <!-- End Custom js for this page -->
    @endpush

</x-app-layout>
