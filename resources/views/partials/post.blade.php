<!-- Blog Post -->
<div class="card mb-4">
    <div class="card-body">
        <p>
            <a href="{{ $post->category->path() }}">
                <span class="badge badge-pill badge btn2">{{ $post->category->name }}</span>
            </a>
        </p>
        <h2 class="card-title">
            <a class="fg1" href="{{ $post->path() }}">
                {{ $post->title }}
            </a>
        </h2>
        <p class="card-text">{{ substr($post->body, 0, 200) }}</p>
        <img src="{{$post->image}}" alt="" style="width:100%">
        <a href="{{ $post->path() }}" class="btn btn1 text-white mt-1">
            Lire Plus
        </a>
    </div>
    <div class="card-footer text-muted">
        {{ $post->created_at->diffForHumans() }} par <a href="#">{{ $post->user->name }}</a>
        <span class="badge badge-pill float-right btn2  text-white">Commentaires {{ $post->comments_count }}</span>
    </div>
</div>
