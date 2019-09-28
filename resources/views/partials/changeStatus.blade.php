@foreach (App\Bid::$statuses as $status => $color)
    @if($bid->status_id == $status)
    <span data-toggle="modal" data-target="#changeStatusModal" class="badge badge-{{$color}}" onclick="changeStatusModal({{$bid}})">{{str_replace( '_', ' ', ucwords($status) )}}</span>
    @endif
@endforeach