@include('inc.header')
@extends('parent')

@section('main')

<div align="right">
    <a href="{{ route('crud.create') }}" class="btn btn-primary btn-sm butt">Add</a>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered table-striped"> 
    <tr style="color:red">
        <th  style="text-align:center" width="10%">Image</th>
        <th  style="text-align:center" width="20%">Title</th>
        <th  style="text-align:center" width="35%">Description</th>
        <!-- <th width=10%>Video</th> -->
        <th  style="text-align:center" width="15%">Action</th>
        
    </tr>
    @foreach($data as $row)
    @if($row->Type == "Chinese")
        <tr>
            <td style="text-align:center"><img src="{{ URL::to('/') }}/images//{{ $row->image
             }}"class="img-thumbnail" width="75"/></td>
             <td >{{ $row->Title }}</td>
             <td>{{ $row->Description}}</td>
             <!-- <td><img src="{{ URL::to('/') }}/images//{{ $row->video
             }}"class="img-thumbnail" width="75"/></td> -->
             <td> 
                <a href="{{ route('crud.show', $row->id) }}" class="btn btn-success ">Show</a>
                <a href="{{ route('crud.edit', $row->id) }}" class="btn btn-warning ">Edit</a>
                <form action="{{ route('crud.destroy', $row->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="margin-left:140px;margin-top:-55px">DELETE</button>
                </form>
             </td>
             <!-- <td>
             {{ $row->video}}
             </td> -->
        </tr>
        @endif
    @endforeach
</table>
{!! $data->links() !!}
@endsection