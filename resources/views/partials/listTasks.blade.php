<section class="mt-3">

    <hr>

    <table data-toggle="table" data-mobile-responsive="true">
        <thead>
            <tr>
                <th data-sortable="true">Description</th>
                <th data-sortable="true">Duration</th>
                <th data-sortable="true">Due Date</th>
                <th data-sortable="true">Assigned to</th>
                <th data-sortable="true">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks->reverse() as $task)
            <tr>
                {{-- <td class="fitToContent"></td> --}}
                <td class="description">{{ $task->description }}</td>
                <td class="duration fitToContent">{{ $task->duration }}</td>
                <td class="due_date fitToContent">{{ $task->due_date }}</td>
                <td class="username fitToContent">{{ $task->user->name }}</td>
                <td class="complete fitToContent">
                <form action="/tasks/{{ $task->id }}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="completed" value="{{ $task->completed ? '0' : '1' }}">
                    
                    <button type="submit" class="btn btn-{{ $task->completed ? 'disabled' : 'success' }}" id="addBidderBtn"><i class="fas fa-check"></i></button>
                    
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</section>