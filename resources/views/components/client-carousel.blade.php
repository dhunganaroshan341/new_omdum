<div class="partners">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="title">Our Partners</h2>
        </div>

        @foreach ($clients as $client)
            <div class="client-logo item">
                <img src="{{ $client->image ?? asset('template/yatri_world/main-file/images/clients/logo-01.png') }}"
                    alt="client">
            </div>
        @endforeach

    </div>
</div>
