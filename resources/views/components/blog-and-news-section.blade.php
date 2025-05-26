<section class="section-3 py-5">
    <div class="container">
        <div class="divider mb-3"></div>
        <h2 class="title-color mb-4 h1">Blog & News</h2>
        <div class="cards">
            <div class="services-slider">
                @foreach ($posts as $post)
                    <div class="card border-0">
                        @if(isset($post->postImages[0]) && !empty($post->postImages[0]->image))
                            <img src="{{ asset('storage/' . $post->postImages[0]->image) }}" class="card-img-top" alt="">

                        @else
                           <img src="{{ asset('assets/images/default-blog.jpg' ) }}" class="card-img-top" alt="">
                        @endif

                        <div class="card-body p-3">
                            <h1 class="card-title mt-2">
                                <a href="#">{{ $post->title ?? 'Untitled' }}</a>
                            </h1>
                            <div class="content pt-2">
                                <p class="card-text">
                                    {!! Str::limit($post->description ?? '', 150, '...') !!}
                                </p>
                            </div>
                            <a href="#" class="btn btn-primary mt-4">Details <i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
