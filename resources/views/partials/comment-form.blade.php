<div class="card my-4">
    <h5 class="card-header fg1">Commentaire</h5>
    <div class="card-body">
        <form action="{{ route('post.comment', $post) }}" method="POST">
            @csrf

            <div class="form-group">
                <textarea class="form-control" name="body" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Commenter</button>
        </form>
    </div>
</div>