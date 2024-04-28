<section class="body-sign">

    <div class="center-sign">
        <div class="row justify-content-center">
            <div class="col-sm-12 " style="text-align: center">
                <div>
                    <!-- <a href="/" class="logo "><img src="" height="150" alt="logo Cirate" /></a> -->
                </div>
                <h2 style="color: rgba(0, 0, 0, 0.671); font-weight: 1000">Cirate</h2>
            </div>
        </div>



        <a href="/" class="logo float-left">
            <!-- <img src="}" height="70" alt="" /> -->
        </a>

        <div class="panel card-sign">
            <div class="card-title-sign mt-3 text-right">
                <h2 class="title text-uppercase font-weight-bold m-0"><i class="bx bx-user-circle mr-1 text-6 position-relative top-5"></i> Ingresar</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <label>Usuario</label>
                        <div class="input-group">
                            <input name="username" type="text" class="form-control form-control-lg" required autofocus />
                            <span class="input-group-append">
                                <span class="input-group-text">
                                    <i class="bx bx-user text-4"></i>
                                </span>
                            </span>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="clearfix">
                            <label class="float-left">Contraseña</label>
                            <a class="float-right">¿Olvidó su
                                contraseña?</a>
                        </div>
                        <div class="input-group">
                            <input name="password" type="password" class="form-control form-control-lg" required autocomplete="current-password" />
                            <span class="input-group-append">
                                <span class="input-group-text">
                                    <i class="bx bx-lock text-4"></i>
                                </span>
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="checkbox-custom checkbox-default">
                                <input id="RememberMe" name="remember" type="checkbox" />
                                <label for="RememberMe">Recuérdame</label>
                            </div>
                        </div>
                        <div class="col-sm-4 text-right">
                            <button type="submit" class="btn btn-primary mt-2">Iniciar Sesión</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>

</section>
