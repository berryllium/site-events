
<div>
    <!-- Иконка Вконтакте -->
    @if(isset($place['link_vk']))
        <a class="d-inline-block me-2" href="{{ $place['link_vk'] }}">
            <i class="fab fa-vk fa-3x"></i>
        </a>
    @endif
    <!-- Иконка WhatsApp -->
    @if(isset($place['link_whatsapp']))
        <a class="d-inline-block me-2" href="{{ $place['link_whatsapp'] }}">
            <i class="fab fa-whatsapp fa-3x" style="color: green"></i>
        </a>
    @endif
    <!-- Иконка Telegram -->
    @if(isset($place['link_tg']))
        <a class="d-inline-block me-2" href="{{ $place['link_tg'] }}">
            <i class="fab fa-telegram fa-3x"></i>
        </a>
    @endif
    <!-- Иконка Одноклассники -->
    @if(isset($place['link_ok']))
        <a class="d-inline-block me-2" href="{{ $place['link_ok'] }}">
            <i class="fab fa-odnoklassniki fa-3x" style="color: orange"></i>
        </a>
    @endif
    <!-- Иконка Instagram -->
    @if(isset($place['link_instagram']))
        <a class="d-inline-block me-2" href="{{ $place['link_instagram'] }}">
            <i class="fab fa-instagram fa-3x" style="color: #833ab4"></i>
        </a>
    @endif
</div>