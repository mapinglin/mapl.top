@extends('layouts.layout')
@section('content')
    <div class="tpl-content-wrapper">
        <div class="row-content am-cf">
            <div class="row">
                <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                    <div class="widget am-cf">
                        <div class="widget-head am-cf">
                            <div class="widget-title  am-cf">用户列表</div>
                        </div>
                        <div class="widget-body  am-fr">

                            <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                <div class="am-form-group">
                                    <div class="am-btn-toolbar">
                                        <div class="am-btn-group am-btn-group-xs">
                                            <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 刷新</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" value="{{isset($success) ? $success : ''}}" id="xinxi">


                            <script>
                                $(function(){
                                    if($('#xinxi').val()=='添加成功'){
                                        $('.tankuang').css('display','');
                                        setTimeout(function(){
                                            $('.tankuang').css('display','none');
                                        },2000);
                                    }
                                })
                            </script>
                            {{--<div class="am-u-sm-12 am-u-md-12 am-u-lg-2">--}}
                                {{--12--}}
                            {{--</div>--}}

                            <div class="am-u-sm-12 am-u-md-12 am-u-lg-6">
                                <div class="am-form-group am-btn-group-xs"  style="position: absolute;margin-left: 200px;">
                                    <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> <a href="{{url('auth/users/addUser')}}" style="color: white">新增</a></button>
                                    <div class="am-dropdown am-btn-group-xs" data-am-dropdown>
                                        <button class="am-btn am-btn-primary am-dropdown-toggle" data-am-dropdown-toggle>导出 <span class="am-icon-caret-down"></span></button>
                                        <ul class="am-dropdown-content">
                                            <li><a href="{{url('auth/users/export/all')}}">所有</a></li>
                                            <li><a href="{{url('auth/users/export/'.$user->currentPage)}}">当前页</a></li>
                                            <li><a href="{{url('')}}">选择行</a></li>
                                        </ul>
                                    </div>
                                    <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 过滤</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 重置</button>
                                </div>
                            </div>

                            <div class="am-u-sm-12">
                                <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>ID</th>
                                        <th>用户名</th>
                                        <th>邮箱</th>
                                        <th>角色</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($user as $key=>$value)
                                    <tr class="gradeX">
                                        <td style="text-align: center"><input type="checkbox"></td>
                                        <td>{{$value['id']}}</td>
                                        <td>{{$value['name']}}</td>
                                        <td>{{$value['email']}}</td>
                                        <td>
                                        @if(count($value['roles']))
                                            @foreach($value['roles'] as $k=>$v)
                                                <span class="" style="border: 1px; background:green">{{$v['display_name']}}</span>
                                                @endforeach
                                            @else
                                            {{'待分配'}}
                                        @endif
                                            {{--{{var_dump(is_object($value['roles']))}}--}}
                                        </td>
                                        <td>{{$value['created_at']}}</td>
                                        <td>{{$value['updated_at']}}</td>
                                        <td>
                                            <div class="tpl-table-black-operation">
                                                <a href="javascript:;">
                                                    <i class="am-icon-pencil"></i> 编辑
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <!-- more data -->
                                    </tbody>
                                </table>
                            </div>
                            <div class="am-u-lg-12 am-cf">

                                <div class="am-fr">
                                    {{--<ul class="am-pagination tpl-pagination">--}}
                                        {{--<li class="am-disabled"><a href="#">«</a></li>--}}
                                        {{--<li class="am-active"><a href="#">1</a></li>--}}
                                        {{--<li><a href="#">2</a></li>--}}
                                        {{--<li><a href="#">3</a></li>--}}
                                        {{--<li><a href="#">4</a></li>--}}
                                        {{--<li><a href="#">5</a></li>--}}
                                        {{--<li><a href="#">»</a></li>--}}
                                    {{--</ul>--}}
                                    {{$user->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection