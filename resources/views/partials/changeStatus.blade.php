@foreach (App\Models\Bid::$statuses as $status => $color)
    @if($bid->status_id == $status)
    <a href data-toggle="modal" data-target="#changeStatusModal" class="badge badge-{{ $color }}" onclick="changeStatusModal({{ $bid }})">{{ str_replace( '_', ' ', ucwords($status) ) }}</a>
    @endif
@endforeach