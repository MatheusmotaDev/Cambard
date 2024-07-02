<div class="card">
    <div class="card-header pb-0 border-0">
        <h5 class="card-title">Procurar</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('dashboard') }}" method="GET">
            <div class="mb-3 position-relative">
                <input value="{{ request('search', '') }}" name="search" placeholder="..." class="form-control rounded-pill pe-5" type="text">
                <span class="position-absolute top-50 translate-middle-y end-0">
                    <button type="submit" class="btn btn-dark rounded-pill">
                        <i class="fas fa-search"></i> <!-- Ícone de lupa -->
                    </button>
                </span>
            </div>
        </form>
    </div>
</div>
