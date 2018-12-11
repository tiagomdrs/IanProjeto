<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <label >Email</label>

        <div>
            <input type="email" name="email" required autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div>
        <label>Password</label>

        <div>
            <input type="password" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>


    <div >
        <div>
            <label>Tipo</label>
            <input type="text" name="tipo">
        </div>
    </div>


    <div>
        <div>
            <button type="submit" class="btn btn-primary">
                Logar
            </button>
            <!--
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        -->
        </div>
    </div>
</form>