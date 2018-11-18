<br><br>
<div class="container">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email or Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email">
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12"><br>
                <a href="#" class="">Forgot Password?</a>
                <button type="submit" class="btn btn-primary float-sm-right"> Sign in</button>
            </div>

        </div>
    </form>

</div>
