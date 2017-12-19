@extends('layouts.layout')
@section('content')
    <div class="tpl-content-wrapper">
        <div class="row-content am-cf">
            <div class="row">
                <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                    <div class="widget am-cf">
                        <div class="widget-head am-cf">
                            <div class="widget-title  am-cf">创建用户</div>
                        </div>

                        <div class="widget-body  am-fr">
                            <div class="am-u-sm-10">
                            <form class="am-form tpl-form-border-form tpl-form-border-br" method="post" action="{{url('auth/users/addUser')}}">
                                <div class="am-form-group {{$errors->has('name') ? 'am-form-error' : ''}}">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">用户名 </label>
                                    <div class="am-u-sm-9">
                                        <input type="text" class="am-form-field" id="user-name" name="name" value="{{old('name')}}" placeholder="填写用户名">
                                        @if ($errors->has('name'))
                                                <small class="help-block">{{$errors->first('name')}}</small>
                                        @else
                                        <small>请填写用户名5-20字左右。</small>
                                        @endif
                                    </div>
                                </div>
                                {{csrf_field()}}
                                <div class="am-form-group {{$errors->has('email') ? 'am-form-error' : ''}}">
                                    <label for="email" class="am-u-sm-3 am-form-label">邮箱 </label>
                                    <div class="am-u-sm-9">
                                        <input type="email" class="am-form-field" id="email" name="email" value="{{old('email')}}" placeholder="填写邮箱">
                                        @if ($errors->has('email'))
                                            <small class="help-block">{{$errors->first('email')}}</small>
                                        @else
                                        <small>请填写邮箱地址。</small>
                                            @endif
                                    </div>
                                </div>
                                <div class="am-form-group {{$errors->has('password') ? 'am-form-error' : ''}}">
                                    <label for="password" class="am-u-sm-3 am-form-label">密码 </label>
                                    <div class="am-u-sm-9">
                                        <input type="password" class="am-form-field" id="password" name="password" placeholder="输入密码">
                                        @if ($errors->has('password'))
                                            <small class="help-block">{{$errors->first('password')}}</small>
                                        @else
                                        <small>请填写密码5-20字左右。</small>
                                            @endif
                                    </div>
                                </div>
                                <div class="am-form-group {{$errors->has('password_confirmation') ? 'am-form-error' : ''}}">
                                    <label for="repassword" class="am-u-sm-3 am-form-label">确认密码 </label>
                                    <div class="am-u-sm-9">
                                        <input type="password" class="am-form-field" id="repassword" name="password_confirmation" placeholder="确认密码">
                                        @if ($errors->has('repassword'))
                                            <small class="help-block">{{$errors->first('password_confirmation')}}</small>
                                        @else
                                        <small>再次输入相同的密码。</small>
                                            @endif
                                    </div>
                                </div>
                                <div class="am-form-group {{$errors->has('user-role') ? 'am-form-error' : ''}}">
                                    <label for="doc-select-1" class="am-u-sm-3 am-form-label">用户角色</label>
                                    <div class="am-u-sm-9">
                                        @foreach($roles as $key=>$value)
                                        <label class="am-checkbox-inline">
                                            <input type="checkbox" value="{{$value['id']}}" data-am-ucheck name="user-role" class="am-form-field"> {{$value['display_name']}}
                                        </label>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success " id="addUser">提交</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
//        $(function(){
//            $('#addUser').click(function(){
//                $lock = false;
//                var name = $("input[name='username']").val();
//                var email = $("input[name='email']").val();
//                var
//            })
//        })
    </script>
@endsection