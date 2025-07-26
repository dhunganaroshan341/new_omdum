<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    @foreach ($favouriteDestinationsByCountry as $country => $packages)
        <li class="nav-item" role="presentation">
            <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="tab-{{ Str::slug($country) }}-tab"
                data-bs-toggle="pill" data-bs-target="#tab-{{ Str::slug($country) }}" type="button" role="tab">
                {{ $country }}
            </button>
        </li>
    @endforeach
</ul>

<div class="tab-content" id="pills-tabContent">
    @foreach ($favouriteDestinationsByCountry as $country => $packages)
        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="tab-{{ Str::slug($country) }}"
            role="tabpanel">
            <div class="row">
                @foreach ($packages as $package)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">{{ $package->title }}</h5>
                                <p class="card-text">{{ $package->description }}</p>
                                {{-- Add more details like image, price, etc. --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
