<section class="mt-3">

    <form action="/tasks" method="POST">
        @csrf
        <div class="row">
                
            <div class="form-group col">
                <input type="text" name="description" class="form-control" placeholder="Description" required>
            </div>
                
            <div class="form-group col">
                <input type="text" name="duration" class="form-control" placeholder="Duration" >
            </div>
                
            <div class="form-group col">
                <input type="datetime-local" name="due_date" class="form-control" placeholder="Due Date" >
            </div>
                
            <div class="form-group col">
                <select name="user_id" class="form-control" placeholder="User">
                    @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col fitToContent">
                <button type="submit" class="btn btn-success" id="addBidderBtn"><i class="fas fa-plus"></i></button>
            </div>
        </div>
    </form>

</section>