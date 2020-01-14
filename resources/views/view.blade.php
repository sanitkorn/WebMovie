@extends('parent')

@section('main')

    <div class="jumbotron text-center">
        <div align="right">
            <a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>

        </div> 
        <br />
        <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
        <h3>Title - {{ $data->Title }}</h3>
        <h3>Description - {{ $data->Description }}</h3>
        <!-- <img src="{{ URL::to('/') }}/images/{{ $data->video }}" class="img-thumbnail" /> -->
    </div>

@endsection