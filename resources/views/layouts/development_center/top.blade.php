<div class="top-line justify-content-center d-flex">
    <div class="wrap justify-content-center d-flex">
        <div class="contacts">
            @if($placeInfo['phone'])
                <a href="tel:{{ $placeInfo['phone'] }}" class="text-decoration-none me-3">
                    <i class="fas fa-phone me-2"></i> {{ $placeInfo['phone'] }}
                </a>
            @endif
            @if($placeInfo['email'])
                <a href="mailto:{{ $placeInfo['email'] }}" class="text-decoration-none me-3">
                    <i class="fas fa-envelope me-2"></i> {{ $placeInfo['email'] }}
                </a>
            @endif
        </div>

        <div class="separator me-3">|</div>
        <x-social-links :place="$placeInfo"></x-social-links>
    </div>
</div>