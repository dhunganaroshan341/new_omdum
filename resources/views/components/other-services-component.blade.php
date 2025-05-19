<section class="section-3 py-5">
    <div class="container">
        <div class="divider mb-3"></div>
        <h2 class="title-color mb-4 h1">{{ $otherServicetitle??'Services' }}</h2>
        <div class="cards">
           <div class="row">
            @foreach ($otherServices as $service)


                <div class="col-md-4 mb-4">
                    <div class="card border-0">
                        <img src="{{ asset('storage/' . $service->image ) }}" class="card-img-top" alt="">
                        <div class="card-body p-3">
                            <h1 class="card-title mt-2"><a href="{{ route('service-detail', $service->id) }}">{{ $service->name }}</a></h1>
                            <div class="content pt-2">
                                <p class="card-text">{{ $service->short_desc }}</p>
                            </div>
                            <a href="{{ route('service-detail', $service->id) }}" class="btn btn-primary mt-4">Details <i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                @endforeach


           </div>
        </div>
    </div>
</section>
