<h3>PCR Upload</h3>
<hr>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
<img src="uploads/{{ Session::get('file_url') }}">
@endif

@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="/pcr" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label>ID</label>
        <input required type="text" name="pcr_id" id="pcr_id" class="form-control" value="" />
    </div>

    <div class="form-group">
        <label>Upload PDF</label>
        <input required type="file" name="file_url" id="file_url" class="form-control" value="" />
    </div>



    <div class="form-group">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</form>

<ul>
    @foreach ($pcr as $item)
    <li><a href="/uploads/{{ $item->file_url }}">{{ $item->pcr_id }}</li>
    @endforeach
</ul>