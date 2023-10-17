<div class="myvideos">
    <ul class="list">
        @foreach ($data as $video)
            <li class="video">{{$video->name}}</li>
        @endforeach
    </ul>
</div>
