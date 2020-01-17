@extends('parent')

@section('main')
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div align="right">
    <a href="{{ route('crud.index') }}" class="btn btn-success" style="margin-bottom:20px; margin-right:20px">Back</a>
</div>

<form method="post" id="form" action="{{ route('crud.store') }}" enctype="multipart/form-data">

    @csrf
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
            <input type="text" name="Title" class="form-control input-lg"/>
        </div>
        <br />
        <br />
        <br />
        <label class="col-md-4 text-right">Enter Description</label>
        <div class="col-md-8">
            <input type="text" name="Description" class="form-control input-lg"/>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
            <label class="col-md-4 text-right">Select Movie Image</label>
            <div class="col-md-8">
                <input type="file" name="image"/>
            </div>
        </div>
        <br />
        <br />
        <br />
        <!-- <div class="form-group">
            <label class="col-md-4 text-right">Select Movie Video</label>
            <div class="col-md-8">
                <input type="file" name="video"/>
            </div>
        </div> -->
    </div>
    <br />
    <br />
    <br />
    <div class="form-group text-center">
        <input type="submit" name="add" class="btn btn-primary input-lg"value="Add"/>
    </div>
</form>
@endsection