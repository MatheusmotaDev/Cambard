<div class="card">
    <div class="card-header px-3 pt-4 pb-2 border-0">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:50px" class="me-2 avatar-sm rounded-circle" src="{{ $idea->user->getImageURL() }}"
                    alt="{{ $idea->user->name }}">
                <div>
                    <h5 class="mb-0 card-title"><a href="{{ route('users.show', $idea->user->id) }}">
                            {{ $idea->user->name }}
                        </a></h5>
                </div>
            </div>
            <div class="d-flex flex-column flex-sm-row mt-3 mt-sm-0">
                <a href="{{ route('ideas.show', $idea->id) }}" class="mx-2">Visualizar</a>
                @auth
                    @can('update', $idea)
                        <a href="{{ route('ideas.edit', $idea->id) }}" class="mx-2">Editar</a>
                        <form method="POST" action="{{ route('ideas.destroy', $idea->id) }}" class="mt-2 mt-sm-0 ms-sm-2">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm">X</button>
                        </form>
                    @endcan
                @endauth
            </div>
        </div>
    </div>
    <div class="card-body">
        @if ($editing ?? false)
            <form action="{{ route('ideas.update', $idea->id) }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <textarea name="content" class="form-control" id="content" rows="3">{{ $idea->content }}</textarea>
                    @error('content')
                        <span class="mt-2 d-block fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn btn-dark btn-sm mb-2">Atualizar</button>
                </div>
            </form>
        @else
            <p class="fs-6 fw-light text-muted">
                {{ $idea->content }}
            </p>
        @endif
        <div class="d-flex justify-content-between">
            @include('ideas.shared.like-button')
            <div>
                <span class="fs-6 fw-light text-muted">
                    <span class="fas fa-clock me-1"></span>{{ $idea->created_at->diffForHumans() }}
                </span>
            </div>
        </div>
        @include('ideas.shared.comments-box')
    </div>
</div>
