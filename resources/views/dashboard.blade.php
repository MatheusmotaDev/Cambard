@extends('layout.layout')

@section('content')

        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
                <div class="card overflow-hidden">
                    <div class="card-body pt-3">
                        <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#">
                                    <span>Início</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>Explorar</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>Feed</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>Termos</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>Suporte</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>Configurações</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-center py-2">
                        <a class="btn btn-link btn-sm" href="#">Ver Perfil</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-12 mb-4">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Ideia criada com sucesso
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
                </div>
                <h4> Compartilhe suas ideias </h4>
                <div class="row">
                    <div class="mb-3">
                        <textarea class="form-control" id="idea" rows="3"></textarea>
                    </div>
                    <div>
                        <button class="btn btn-dark"> Compartilhar </button>
                    </div>
                </div>
                <hr>
                <div class="mt-3">
                    <div class="card">
                        <div class="px-3 pt-4 pb-2">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                                        src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Avatar de Mario">
                                    <div>
                                        <h5 class="card-title mb-0"><a href="#"> Mario </a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="fs-6 fw-light text-muted">
                                vem das seções 1.10.32 e 1.10.33 de "de Finibus Bonorum et Malorum" (Os Extremos
                                do Bem e do Mal) de Cícero, escrito em 45 a.C. Este livro é um tratado sobre a teoria da
                                ética, muito popular durante o Renascimento. A primeira linha de Lorem Ipsum, "Lorem ipsum
                                dolor sit amet..", vem de uma linha na seção 1.10.32.
                            </p>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1"> </span>
                                        100 </a>
                                </div>
                                <div>
                                    <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                                        3-5-2023 </span>
                                </div>
                            </div>
                            <div>
                                <div class="mb-3">
                                    <textarea class="fs-6 form-control" rows="1"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-sm"> Postar Comentário </button>
                                </div>
                                <hr>
                                <div class="d-flex align-items-start">
                                    <img style="width:35px" class="me-2 avatar-sm rounded-circle"
                                        src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Luigi" alt="Avatar de Luigi">
                                    <div class="w-100">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="">Luigi</h6>
                                            <small class="fs-6 fw-light text-muted"> 3 horas atrás</small>
                                        </div>
                                        <p class="fs-6 mt-3 fw-light">
                                            e 1.10.33 de "de Finibus Bonorum et Malorum" (Os Extremos do Bem e do Mal)
                                            de Cícero, escrito em 45 a.C. Este livro é um tratado sobre a teoria da ética,
                                            muito popular durante o Renascimento.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0 border-0">
                        <h5 class="">Pesquisar</h5>
                    </div>
                    <div class="card-body">
                        <input placeholder="Pesquisar..." class="form-control w-100" type="text" id="search">
                        <button class="btn btn-dark mt-2"> Pesquisar</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header pb-0 border-0">
                        <h5 class="">Quem seguir</h5>
                    </div>
                    <div class="card-body">
                        <div class="hstack gap-2 mb-3">
                            <div class="avatar">
                                <a href="#!"><img class="avatar-img rounded-circle"
                                        src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt=""></a>
                            </div>
                            <div class="overflow-hidden">
                                <a class="h6 mb-0" href="#!">Mario Brother</a>
                                <p class="mb-0 small text-truncate">@Mario</p>
                            </div>
                            <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#"><i
                                    class="fa-solid fa-plus"> </i></a>
                        </div>
                        <div class="hstack gap-2 mb-3">
                            <div class="avatar">
                                <a href="#!"><img class="avatar-img rounded-circle"
                                        src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt=""></a>
                            </div>
                            <div class="overflow-hidden">
                                <a class="h6 mb-0" href="#!">Mario Brother</a>
                                <p class="mb-0 small text-truncate">@Mario</p>
                            </div>
                            <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#"><i
                                    class="fa-solid fa-plus"> </i></a>
                        </div>
                        <div class="d-grid mt-3">
                            <a class="btn btn-sm btn-primary-soft" href="#!">Mostrar mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
