<!-- Search Widget -->
<div class="card my-4 border-primary">
    <h5 class="card-header btn1 text-light">Recherche</h5>
    <div class="card-body">
        <form action="{{ url('/search') }}" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" name="query" placeholder="Je recherche..." required>
                <span class="input-group-btn">
                    <button class="btn btn2 text-light" type="submit">Ok</button>
                </span>
            </div>
        </form>
    </div>
</div>