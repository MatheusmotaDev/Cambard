<div class="card">
    <div class="card-header px-3 pt-4 pb-2 border-0">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:50px" class="me-2 avatar-sm rounded-circle" src="{{ $idea->user->getImageURL() }}"
                    alt="{{ $idea->user->name }}">
                <div>
                    <h5 class="mb-0 card-title"><a href="{{ route('users.show', $idea->user->id) }}" class="text-decoration-none">
                            {{ $idea->user->name }}
                        </a></h5>
                </div>
            </div>
            <div class="d-flex flex-column flex-sm-row mt-3 mt-sm-0">
                <div class="dropdown">
                    <a class="btn btn-link dropdown-toggle text-decoration-none" href="#" role="button"
                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bars"></i> <!-- Ícone de menu sandwich -->
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('ideas.show', $idea->id) }}">Visualizar</a></li>
                        @auth
                            @can('update', $idea)
                                <li><a class="dropdown-item" href="{{ route('ideas.edit', $idea->id) }}">Editar</a></li>
                            @endcan
                        @endauth
                    </ul>
                </div>
                @auth
                    @can('update', $idea)
                        <form id="deleteIdeaForm{{ $idea->id }}" method="POST" action="{{ route('ideas.destroy', $idea->id) }}" class="mt-2 mt-sm-0 ms-sm-2">
                            @csrf
                            @method('delete')
                            <button type="button" class="btn btn-danger btn-sm rounded-circle" data-bs-toggle="modal" data-bs-target="#confirmDelete{{ $idea->id }}">
                                <i class="fas fa-times"></i> <!-- Ícone de X -->
                            </button>
                        </form>

                        <!-- Modal de confirmação -->
                        <div class="modal fade" id="confirmDelete{{ $idea->id }}" tabindex="-1" aria-labelledby="confirmDeleteLabel{{ $idea->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="confirmDeleteLabel{{ $idea->id }}">Confirmar Exclusão</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                                    </div>
                                    <div class="modal-body">
                                        Tem certeza que deseja excluir esta ideia?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" form="deleteIdeaForm{{ $idea->id }}" class="btn btn-danger">Excluir</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <button type="submit" class="btn btn-dark btn-sm rounded-pill mb-2">Atualizar</button>
                </div>
            </form>
        @else
            <p class="fs-5 fw-normal text-muted">
                {{ $idea->content }}
            </p>
        @endif
        <div class="d-flex justify-content-between">
            @include('ideas.shared.like-button')
            <div>
                <span class="fs-6 fw-light text-muted">
                    <span class="fas fa-clock me-1"></span>{{ $idea->created_at->locale('pt_BR')->diffForHumans() }}

                </span>
            </div>
        </div>
        @include('ideas.shared.comments-box')
    </div>
</div>
