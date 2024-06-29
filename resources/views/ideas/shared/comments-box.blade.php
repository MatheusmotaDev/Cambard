<div>
    @auth
        <form action="{{ route('ideas.comments.store', $idea->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <textarea name="content" class="form-control fs-6" rows="1"></textarea>
                @error('content')
                    <span class="d-block text-danger fs-6 mt-2">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-primary btn-sm">Publicar</button>
            </div>
        </form>
    @else
        <p class="fs-6 text-muted">Para comentar, faça <a href="{{ route('login') }}">login</a>.</p>
    @endauth
    <hr>
    @forelse ($idea->comments as $comment)
        <div class="d-flex align-items-start">
            <img style="width:35px" class="me-2 avatar-sm rounded-circle"
                src="{{ $comment->user->getImageURL() }}" alt="{{ $comment->user->name }}">
            <div class="w-100">
                <div class="d-flex justify-content-between">
                    <h6 class="mb-0">{{ $comment->user->name }}</h6>
                    <small class="fs-6 text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                </div>
                <p class="fs-6 mt-1 fw-light">{{ $comment->content }}</p>
            </div>
        </div>
    @empty
        <p class="text-center mt-4">Nenhum comentário encontrado.</p>
    @endforelse
</div>
