<!-- Post Widget -->
<div class="card my-4">
    <h5 class="card-header btn1 text-white">Posts recents</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                    @foreach ($r_posts as $post)
                        <li>
                            <a href="{{ url('posts/'.$post->id) }}" style="width:100%">
                                {{ substr($post->title, 0,50) }}
                            </a>
                        </li> <br>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>