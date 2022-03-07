<!-- Search Widget -->
<div class="card my-4 border-primary">
    <h5 class="card-header btn1 text-light">Recherche</h5>
    <div class="card-body">
        <form action="{{ url('/search') }}" method="GET">
            <div class="input-group">
                <div class="input-group">
                    <input class="form-control p-3" type="text" class="form-control" name="query" placeholder="Je recherche..." required>
                    <button class="btn btn-primary px-4 btn1" type="submit"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>