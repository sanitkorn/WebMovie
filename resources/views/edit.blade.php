@extends('parent')

@section('main')
    <div align="right">
        <a href="{{ route('crud.index') }}" class="btn btn-success">Back</a>
    </div>
    <br />
    <form method="post" action="{{ route('crud.update', $data->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <select name="Type">
        <option value="Suggestion">Suggestion</option>
        <option value="FeaturedMovie">Featured Movie</option>
        <option value="Khmerdubbed">Khmerdubbed</option>
        <option value="Animate">Animate</option>
        <option value="Chinese">ChineseDrama</option>
        <option value="Korean">KoreanDrama</option>
        <option value="Thai">ThaiDrama</option>
        <option value="Anime">Anime</option>
    </select>
    <div class="form-group">
        <label class="col-md-4 text-right">Enter Title</label>
        <div class="col-md-8">
            <input type="text" name="Title" value="{{ $data->Title }}" class="form-control input-lg" />
        </div>
    </div>
    <br />
    <br />
    <br />
    <div class="form-group">
        <label class="col-md-4 text-right">Enter Description</label>
        <div class="col-md-8">
            <input type="text" name="Description" value="{{ $data->Description }}" class="form-control input-lg" />
        </div>
    </div>
    <br />
    <br />
    <br />
    <div class="form-group">
        <label class="col-md-4 text-right">Select Movie Image</label>
        <div class="col-md-8">
            <input type="file" name="image" />
            <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
            <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
        </div>
    </div>
    <!-- <div class="form-group">
        <label class="col-md-4 text-right">Select Video Image</label>
        <div class="col-md-8">
            <input type="file" name="video" />
            <img src="{{ URL::to('/') }}/images/{{ $data->video }}" class="img-thumbnail" width="100" />
            <input type="hidden" name="hidden_video" value="{{ $data->video }}" />
        </div>
    </div> -->
    <div class="form-group text-center">
        <input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
    </div>
    </form>
@endsection