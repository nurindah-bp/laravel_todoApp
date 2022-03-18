@extends('layouts.main')
@section('body')
<div class="card border-0 shadow rounded">
    <div class="card-body">
        <form action="/store" method="POST">
        {{ csrf_field() }}
        <div class="form-group mb-2">
            <label for="content">Write Your Task</label>
                <textarea name="task" id="task" class="form-control @error('content') is-invalid @enderror" rows="5" required></textarea>
        </div>
        <div class="form-group mb-2">
			<label>Status Task </label><br>
			<input type="radio" name="status" id="statusdo" value="1"/> Do
			<input type="radio" name="status" id="statusdone" value="2"/> Done
		</div>

        <button type="submit" class="btn btn-md btn-primary">Save</button>
        <a href="/" class="btn btn-md btn-secondary">Cancel</a>
        </form>
    </div>
</div>

@endsection
