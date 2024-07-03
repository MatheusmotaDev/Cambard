@auth
    <div class="card mt-3 border-0">
        <div class="card-body">
            <h4>Crie publicações</h4>
            <form action="{{ route('ideas.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <textarea name="content" class="form-control" id="content" rows="3"></textarea>
                    @error('content')
                        <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="media" class="form-label">Adicione fotos ou vídeos</label>
                    <input class="form-control" type="file" name="media[]" id="media" multiple>
                    @error('media.*')
                        <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                    @enderror
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-dark rounded-pill">Compartilhar</button>
                </div>
            </form>
        </div>
    </div>
@endauth

@guest
    <div class="card mt-3">
        <div class="card-body">
            <h4>{{ __('ideas.login_to_share') }}</h4>
        </div>
    </div>
@endguest
