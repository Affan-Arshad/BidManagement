
<a target="_blank" 
@isset($link) class="btn text-primary" href="{{ $link }}"
@else class="btn text-muted"
@endif>
    @isset($link)<i class="fas fa-link"></i>
    @else<i class="fas fa-unlink"></i>
    @endif
</a>