<div class="card">
    <div class="card-header pb-0 border-0">
        <h5 class="card-title">Procurar</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('dashboard') }}" method="GET">
            <div class="mb-3">
                <input value="{{ request('search', '') }}" name="search" placeholder="..." class="form-control" type="text">
            </div>
            <div>
                <button class="btn btn-dark w-100">Procurar</button>
            </div>
        </form>
    </div>
</div>
