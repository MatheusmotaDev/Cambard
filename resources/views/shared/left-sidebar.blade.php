<div class="card overflow-hidden">
    <div class="card-body pt-3">
        <ul class="nav flex-column fw-bold gap-2">
            <li class="nav-item">
                <a class="nav-link {{ Route::is('dashboard') ? 'text-white bg-primary rounded' : '' }}" href="{{ route('dashboard') }}">
                    <span>Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('feed') ? 'text-white bg-primary rounded' : '' }}" href="{{ route('feed') }}">
                    <span>Feed</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('terms') ? 'text-white bg-primary rounded' : '' }}" href="{{ route('terms') }}">
                    <span>Termos de serviço</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="card-footer text-center py-2">
        <div class="btn-group" role="group">
            
        </div>
    </div>
</div>
