@extends('Admin.layout.master')


@section('content')
    <div class="container-fluid">
        <button class="btn btn-primary mb-4 mt-4">Pages</button>

        {{-- Modal for Add/Edit Page --}}
        @include('Admin.pages.pages.pageModal')

        <div class="table-responsive">
            <table class="table table-striped" id="show-page-data">
                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

            </table>
        </div>
    </div>
@endsection
