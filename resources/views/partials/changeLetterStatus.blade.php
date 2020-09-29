@foreach (App\Models\Bid::$completion_letter_statuses as $status => $color)
    @if($bid->completion_letter_status == $status)
    <a href data-toggle="modal" data-target="#changeLetterStatusModal" class="badge badge-{{ $color }}" onclick="changeLetterStatusModal({{ $bid }})">{{ str_replace( '_', ' ', ucwords($status) ) }}</a>
    @endif
@endforeach