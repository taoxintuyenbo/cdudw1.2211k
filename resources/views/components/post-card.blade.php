@props(['post'])
<div class="card">
<img src="{{ asset('images/posts/' . $post->image) }}" style="width:250px;height:200px;" class="card-img-top" alt="post Image">
    <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">{{ $post->description }}</p>
        <a href="{{ $post->link }}" class="btn btn-primary">Learn More</a>
    </div>
</div>
 