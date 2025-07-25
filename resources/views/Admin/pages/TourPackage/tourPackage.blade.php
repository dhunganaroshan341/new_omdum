@extends('Admin.layout.master')
@section('content')
    <div class="container-fluid">
        <button class="btn btn-primary addTourPackageBtn mb-4 mt-4">Add Package</button>



        <div class="table-responsive">
            <table class="table table-striped" id="data-album-show">

                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Action</th>
                        <th scope="col">Title</th>
                        <th scope="col">Country</th>
                        <th scope="col">Images</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Itinerary</th>
                        <th scope="col">Batches</th>
                        <th scope="col">Package Includes</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>

            </table>
        </div>
    </div>
    @include('Admin.pages.TourPackage.theTourPackageUploadModal') <!-- ✅ Modal here -->
    @include('Admin.pages.TourPackage.itineraryTableModal') <!-- ✅ Modal here -->
    @include('Admin.pages.TourPackage.tourBatchModal') <!-- ✅ Modal here -->
    @include('Admin.pages.TourPackage.tourBatchTable') <!-- ✅ Modal here -->
    @include('Admin.pages.TourPackage.itineraryModal') <!-- ✅ Modal here -->
    @include('Admin.pages.TourPackage.priceIncludesModal') <!-- ✅ Modal here -->
    @include('Admin.pages.TourPackage.priceIncludesTableModal') <!-- ✅ Modal here -->
    @include('Admin.pages.TourPackage.tourPackageModal') <!-- ✅ Modal here -->
@endsection
