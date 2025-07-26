<div class="nav nav-tabs" id="favCountryTabs" role="tablist">
    @foreach ($destinationsByCountry as $index => $country)
        <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="tab-{{ $country->id }}" data-bs-toggle="tab"
            data-bs-target="#country-{{ $country->id }}" type="button" role="tab">
            {{ $country->name }}
        </button>
    @endforeach
</div>

<div class="tab-content mt-3" id="favCountryTabContent">
    @foreach ($destinationsByCountry as $country)
        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="country-{{ $country->id }}"
            role="tabpanel">
            <div class="row">
                @foreach ($country->tourPackages as $package)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">{{ $package->title }}</h5>
                                <p class="card-text">{{ Str::limit($package->description, 100) }}</p>
                                <a href="{{ route('tour-packages.show', $package->id) }}" class="btn btn-primary">View
                                    Package</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
