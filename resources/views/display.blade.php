@foreach($data as $d)
    <img src="{{ URL::to('/') }}/images//{{ $d->image}}"class="img-thumbnail" width="75"/>
@endforeach



