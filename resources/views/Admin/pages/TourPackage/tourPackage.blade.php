@extends('Admin.layout.master')
@section('content')
    <div class="container-fluid">
        <button class="btn btn-primary addTourPackageBtn mb-4 mt-4">Add Package</button>



        <div class="table-responsive">
            <table class="table table-striped" id="data-album-show">

                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Title</th>
                        {{-- <th scope="col">Address</th> --}}
                        <th scope="col">Duration</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    @include('Admin.pages.TourPackage.tourPackageModal') <!-- ✅ Modal here -->
@endsection
