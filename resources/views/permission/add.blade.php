@extends('layouts.layout')
@section('content')
    <div class="tpl-content-wrapper">
        <div class="row-content am-cf">
            <div class="row">
                <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                    <div class="widget am-cf">
                        <div class="widget-head am-cf">
                            <div class="widget-title  am-cf">创建权限</div>
                        </div>

                        <div class="widget-body  am-fr">
                            <div class="am-u-sm-10">
                                <form class="am-form tpl-form-border-form tpl-form-border-br" id="amaddrole" method="post" action="{{url('auth/permissions/addPermission')}}">
                                    <div class="am-form-group {{$errors->has('name') ? 'am-form-error' : ''}}">
                                        <label for="permission-name" class="am-u-sm-3 am-form-label">权限名 </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="am-form-field" id="permission-name" name="name" value="{{old('name')}}" placeholder="填写角色名" required>
                                            @if ($errors->has('name'))
                                                <small class="help-block">{{$errors->first('name')}}</small>
                                            @else
                                                <small>请填写权限名。</small>
                                            @endif
                                        </div>
                                    </div>
                                    {{csrf_field()}}
                                    <div class="am-form-group {{$errors->has('display_name') ? 'am-form-error' : ''}}">
                                        <label for="permission-slug" class="am-u-sm-3 am-form-label">Slug </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="am-form-field" id="permission-slug" name="display_name" value="{{old('display_name')}}" placeholder="填写slug" required>
                                            @if ($errors->has('display_name'))
                                                <small class="help-block">{{$errors->first('display_name')}}</small>
                                            @else
                                                <small>请填写slug。</small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="am-form-group {{$errors->has('http_method') ? 'am-form-error' : ''}}">
                                        <label for="http_method" class="am-u-sm-3 am-form-label">方法 </label>
                                        <div class="am-u-sm-9">
                                                <label class="am-checkbox-inline">
                                                    <input type="checkbox" value="GET" data-am-ucheck name="user-role[]" class="am-form-field">GET
                                                </label>
                                                <label class="am-checkbox-inline">
                                                    <input type="checkbox" value="POST" data-am-ucheck name="user-role[]" class="am-form-field">POST
                                                </label>
                                                <label class="am-checkbox-inline">
                                                    <input type="checkbox" value="DELETE" data-am-ucheck name="user-role[]" class="am-form-field">DELETE
                                                </label>
                                                <label class="am-checkbox-inline">
                                                    <input type="checkbox" value="PATCH" data-am-ucheck name="user-role[]" class="am-form-field">PATCH
                                                </label>
                                                <label class="am-checkbox-inline">
                                                    <input type="checkbox" value="PUT" data-am-ucheck name="user-role[]" class="am-form-field">PUT
                                                </label>
                                                <label class="am-checkbox-inline">
                                                    <input type="checkbox" value="OPTIONS" data-am-ucheck name="user-role[]" class="am-form-field">OPTIONS
                                                </label>
                                                <label class="am-checkbox-inline">
                                                    <input type="checkbox" value="HEAD" data-am-ucheck name="user-role[]" class="am-form-field">HEAD
                                                </label>
                                        </div>
                                    </div>

                                    <div class="am-form-group {{$errors->has('http_path') ? 'am-form-error' : ''}}">
                                        <label for="http_path" class="am-u-sm-3 am-form-label">路由 </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="am-form-field" id="http_path" name="http_path" value="{{old('http_path')}}" placeholder="填写路由" required>
                                            @if ($errors->has('http_path'))
                                                <small class="help-block">{{$errors->first('http_path')}}</small>
                                            @else
                                                <small>请填写路由。</small>
                                            @endif
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
@endsection