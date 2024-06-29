<div class="card mt-3">
    <div class="card-header pb-0 border-0">
        <h5 class="card-title">Mais Ativos</h5>
    </div>
    <div class="card-body">
        @foreach ($topUsers as $user)
            <div class="d-flex align-items-center mb-3">
                <div class="avatar">
                    <a href="{{ route('users.show', $user->id) }}"><img style="width:50px;"
                            class="avatar-img rounded-circle" src="{{ $user->getImageURL() }}" alt=""></a>
                </div>
                <div class="ms-3">
                    <a class="h6 mb-0" href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
                    <div class="d-flex flex-column flex-sm-row gap-2 mt-1">
                        <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-user me-1"></span> {{ $user->followers()->count() }} Seguidores </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
