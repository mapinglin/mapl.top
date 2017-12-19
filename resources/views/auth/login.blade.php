<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">登录</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">邮箱地址</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">用户密码</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="from-group{{$errors->has('proving') ? 'has-error' : ''}}">
                                <label for="password" class="col-md-4 control-label" style="margin-left: -5px">验证码</label>
                                <div class="col-md-4">
                                    <input id="captcha" type="text" class="form-control" name="captcha" required>
                                    @if ($errors->has('captcha'))
                                        <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('captcha') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-2" style="padding-left: 0px">
                                    {{--<input type="text" class="form-control" style="width:120px;">--}}
                                    <img src="{{captcha_src()}}" width="120px" height="35px">
                                </div>
                            </div>
                            {{--{{ $errors->first('captcha') }}--}}

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>记住密码
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        登&nbsp&nbsp&nbsp&nbsp&nbsp录
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        忘记密码?
                                    </a>

                                    <a href="#">
                                        QQ登录
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>