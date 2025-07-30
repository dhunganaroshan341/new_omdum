@extends('Admin.layout.master')

@section('content')
    <div class="container-fluid">
        <button class="btn btn-primary mb-4 mt-4" data-bs-toggle="modal" data-bs-target="#formModal">
            Add New Page
        </button>

        <div class="table-responsive">
            <table class="table table-striped" id="show-page-data">
                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Title</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
            </table>
        </div>

        {{-- Modal --}}
        @include('Admin.pages.pages.pageModal')
    </div>
@endsection
