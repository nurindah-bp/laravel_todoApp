@extends('layouts.main')
@section('body')
<a href="/create" class="btn btn-md btn-success mb-3 mt-3 float-left">New Task</a>
    <table class="table table-bordered">
        <thead style="width:100%">
            <tr>
            <th style="width:5%" scope="col">No</th>
            <th style="width:60%" scope="col">Task</th>
            <th style="width:10%" scope="col">Do</th>
            <th style="width:10%"scope="col">Done</th>
            <th style="width:15%; text-align:center"scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 1; ?>
        @foreach($todoApp as $todoApps)
        
            <tr>
            <td scope="row">{{$no}}</td>
            <td>{{$todoApps['task']}}</td>
        @if($todoApps['status']===1)
            <td>Do</td>
            <td>Not Yet</td>
        @else
            <td>Done</td>
            <td>Done</td>
        @endif
            <td class="text-center">
                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('post.destroy', $todoApps->id) }}" method="POST">
                    <a href="{{ route('post.edit', $todoApps->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
               </form>
            </td>
            </tr>

        <?php $no++; ?>
        @endforeach
        </tbody>
</table>

@endsection
