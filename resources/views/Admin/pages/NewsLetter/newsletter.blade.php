@extends('Admin.layout.master')
@section('content')
    <div class="container-fluid">
        <button class="btn btn-primary addTestimonialBtn mb-4 mt-4">Add Testimonial</button>
        @include('Admin.pages.TestiMonial.testimonialModal')

        <div class="table-responsive">
            <table class="table table-striped" id="show-testimonial-data">
                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
            </table>
        </div>

    </div>
@endsection
