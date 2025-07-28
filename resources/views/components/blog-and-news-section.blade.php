<section class="news pb-2 bg-lgrey pt-9">
    <div class="container">
        <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
            <h2 class="m-0">Latest <span>Blogs </span></h2>
            <p class="mb-0">
                Travel has helped us to understand the meaning of life and it has helped us become
                better people. Each time we travel, we see the world with new eyes.
            </p>
        </div>
        <div class="news-outer">
            <div class="row">
                {{-- First Post on Left --}}
                @if ($posts->first())
                    @php $firstPost = $posts->first(); @endphp
                    <div class="col-lg-5 mb-4">
                        <div class="news-item overflow-hidden">
                            <div class="news-image">
                                <img src="{{ $firstPost->postImages->first()?->image_url ?? asset('template/yatri_world/main-file/images/default.jpg') }}"
                                    alt="image">
                            </div>
                            <div class="news-list mt-2 border-b pb-2 mb-2">
                                <ul>
                                    <li>
                                        <a href="#" class="pe-3">
                                            <i class="fa fa-calendar pink pe-1"></i>
                                            {{ $firstPost->created_at->format('jS M Y') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="pe-3">
                                            <i class="fa fa-tag pink pe-1"></i>
                                            {{ $firstPost->category?->name ?? 'Travel' }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="news-content mt-2">
                                <h4 class="pb-2 mb-2 border-b">
                                    <a href="{{ route('posts.show', $firstPost->slug) }}">{{ $firstPost->title }}</a>
                                </h4>
                                <p class="mb-3">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($firstPost->description ?? ''), 300) }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endif

                {{-- Remaining Posts on Right --}}
                <div class="col-lg-7 mb-4">
                    <div class="row">
                        @foreach ($posts->slice(1) as $post)
                            <div class="col-md-6 mb-4">
                                <div class="news-item overflow-hidden">
                                    <div class="news-image">
                                        <img src="{{ $post->postImages->first()?->image_url ?? asset('template/yatri_world/main-file/images/default.jpg') }}"
                                            alt="image">
                                    </div>
                                    <div class="news-list mt-2 border-b pb-2 mb-2">
                                        <ul>
                                            <li>
                                                <a href="#" class="pe-3">
                                                    <i class="fa fa-calendar pink pe-1"></i>
                                                    {{ $post->created_at->format('jS M Y') }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="pe-3">
                                                    <i class="fa fa-tag pink pe-1"></i>
                                                    {{ $post->category?->name ?? 'Travel' }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="news-content mt-2">
                                        <h4 class="bordernone mb-0">
                                            <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
