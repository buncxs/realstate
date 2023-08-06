<x-app-layout>

    @push('head')
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="{{ asset('assets/admin/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">
        <!-- End plugin css for this page -->
    @endpush

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{ route('amenities.create') }}" class="btn btn-primary">Add Amenity</a>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Amenities</h6>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($amenities as $key => $amenity)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $amenity->name }}</td>
                                        <td>
                                            <a href="{{ route('amenities.edit', $amenity) }}" class="btn btn-warning w-5">
                                                Edit
                                            </a>
                                            <form class="d-inline-block form-delete"
                                                action="{{ route('amenities.destroy', $amenity) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger w-5"
                                                    id="submitForm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <!-- Plugin js for this page -->
        <script src="{{ asset('assets/admin/vendors/datatables.net/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('assets/admin/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
        <script src="{{ asset('assets/admin/js/data-table.js') }}"></script>
        <!-- End plugin js for this page -->
    @endpush


</x-app-layout>
