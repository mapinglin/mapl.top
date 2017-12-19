@extends('layouts.layout')
@section('content')
        <!-- 内容区域 -->
<div class="tpl-content-wrapper" xmlns="http://www.w3.org/1999/html">

    <div class="container-fluid am-cf" style="height: 60px">
        <div class="row" style="margin-top: -20px">
            <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                <div class="page-header-heading"> 菜单详情  <small>list</small></div>
                {{--<p class="page-header-description">Amaze UI 含近 20 个 CSS 组件、20 余 JS 组件，更有多个包含不同主题的 Web
组件。</p>--}}
            </div>
            {{--<div class="am-u-lg-3 tpl-index-settings-button">--}}
            {{--<button type="button" class="page-header-button"><span class="am-icon-paint-brush"></span> 设置</button>--}}
            {{--</div>--}}
        </div>

    </div>

    <div class="row-content am-cf">
        <div class="row  am-cf">
            <div class="am-u-sm-12 am-u-md-12 am-u-lg-6" style="border-top-color: green">
                <div class="widget am-cf">
                    <div class="widget-head am-cf">
                        <div class="widget-title am-fl">



                                        <div class="am-btn-group am-btn-group-xs">
                                            <button type="button" class="am-btn am-btn-default am-btn-primary"><span class="am-icon-plus"></span> 展开</button>
                                            <button type="button" class="am-btn am-btn-default am-btn-primary"><span class="am-icon-save"></span> 收起</button>
                                            <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-archive"></span> 保存</button>
                                            <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-trash-o"></span> 刷新</button>
                                        </div>



                        </div>
                        <div class="widget-function am-fr">
                            <a href="javascript:;" class="am-icon-cog"></a>
                        </div>
                    </div>
                    <div class="widget-body am-fr">
                       <div class="dd" style="margin-left: -30px">
                           <ol class="dd-list">
                               <li class="dd-item">
                                   <div class="dd-handle" style="border: 1px solid #ddd;padding: 8px 10px;">
                                       <i class="am-icon-indent" style="color: #00a7d0"></i>
                                       <strong style="font-weight: 700;font-size: 14px;">index</strong>
                                       <a href="" class="dd-nodrag" style="margin-left: 10px">/</a>
                                       <span class="pull-right dd-nodrag" style="margin-left: 350px">
                                            <a href="#" style="color: cornflowerblue"><i class="am-icon-pencil-square-o"></i></a>
                                            <a href="#" style="color: cornflowerblue"><i class="am-icon-trash-o"></i></a>
                                       </span>
                                   </div>
                               </li>
                               <li class="dd-item">
                                   <button data-am-collapse="{target: '#collapse-nav'}" class="dd-item-add"><span style="color: black;padding-left: 5px">+</span></button>
                                   <div class="dd-handle">
                                       <i class="am-icon-indent" style="color: #00a7d0"></i>
                                       <strong style="font-weight: 700;font-size: 14px;">admin</strong>
                                       <a href="" class="dd-nodrag" style="margin-left: 10px"></a>
                                       <span class="pull-right dd-nodrag" style="margin-left: 345px">
                                            <a href="#" style="color: cornflowerblue"><i class="am-icon-pencil-square-o"></i></a>
                                            <a href="#" style="color: cornflowerblue"><i class="am-icon-trash-o"></i></a>
                                       </span>
                                   </div>
                                   <ol id="collapse-nav" class="am-collapse dd-list">
                                        <li class="dd-item">
                                            <div class="dd-handle" style="margin-top: -15px">
                                                <i class="am-icon-indent" style="color: #00a7d0"></i>
                                                <strong style="font-weight: 700;font-size: 14px;">admin</strong>
                                                <a href="" class="dd-nodrag" style="margin-left: 10px"></a>
                                                <span class="pull-right dd-nodrag" style="margin-left: 322px">
                                                    <a href="#" style="color: cornflowerblue"><i class="am-icon-pencil-square-o"></i></a>
                                                    <a href="#" style="color: cornflowerblue"><i class="am-icon-trash-o"></i></a>
                                                </span>
                                            </div>
                                        </li>
                                       <li class="dd-item">
                                           <div class="dd-handle">
                                               <i class="am-icon-indent" style="color: #00a7d0"></i>
                                               <strong style="font-weight: 700;font-size: 14px;">admin</strong>
                                               <a href="" class="dd-nodrag" style="margin-left: 10px"></a>
                                                <span class="pull-right dd-nodrag" style="margin-left: 322px">
                                                    <a href="#" style="color: cornflowerblue"><i class="am-icon-pencil-square-o"></i></a>
                                                    <a href="#" style="color: cornflowerblue"><i class="am-icon-trash-o"></i></a>
                                                </span>
                                           </div>
                                       </li>
                                   </ol>
                               </li>
                           </ol>
                       </div>
                    </div>
                </div>
            </div>
            <div class="am-u-sm-12 am-u-md-12 am-u-lg-6">
                <div class="widget am-cf">
                    <div class="widget-head am-cf">
                        <div class="widget-title am-fl" style="font-weight: 800">添加菜单</div>
                        <div class="widget-function am-fr">
                            <a href="javascript:;" class="am-icon-cog"></a>
                        </div>
                    </div>
                    <div class="widget-body am-fr">
                        {{--<table width="auto" class="am-table am-table-compact tpl-table-black" id="example-r">--}}
                            {{--@foreach($dependencies as $key=>$value)--}}
                                {{--<tr class="gradeX">--}}
                                    {{--<td style="width: 240px">{{$key}}</td>--}}
                                    {{--<td><span class="label label-primary">{{$value}}</span></td>--}}
                                {{--</tr>--}}
                            {{--@endforeach--}}
                        {{--</table>--}}
                        <form class="am-form tpl-form-border-form tpl-form-border-br" style="font-weight: 900">
                            <div class="am-form-group am-form-select">
                                <label for="user-name" class="am-u-sm-3 am-form-label">上级菜单 </label>
                                <div class="am-u-sm-9">
                                    <select data-am-selected style="width: 100%">
                                        <option value="a">Apple</option>
                                        <option value="b" selected>Banana</option>
                                        <option value="o">Orange</option>
                                        <option value="m">Mango</option>
                                        <option value="d" disabled>禁用鸟</option>
                                    </select>
                                </div>
                            </div>

                            <div class="am-form-group">
                                <label for="user-name" class="am-u-sm-3 am-form-label">名称 </label>
                                <div class="am-u-sm-9">
                                    <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入菜单名称">
                                </div>
                            </div>

                            <div class="am-form-group">
                                <label for="user-name" class="am-u-sm-3 am-form-label">图标 </label>
                                <div class="am-u-sm-9">
                                    <input type="text" class="tpl-form-input" id="user-name" placeholder="选择图标">
                                </div>
                            </div>

                            <div class="am-form-group">
                                <label for="user-name" class="am-u-sm-3 am-form-label">URI </label>
                                <div class="am-u-sm-9">
                                    <input type="text" class="tpl-form-input" id="user-name" placeholder="填写route">
                                </div>
                            </div>

                            <div class="am-form-group">
                                <label for="user-name" class="am-u-sm-3 am-form-label">Roles </label>
                                <div class="am-u-sm-9">
                                    <input type="text" class="tpl-form-input" id="user-name" placeholder="选择角色">
                                </div>
                            </div>

                            <div class="am-form-group">
                                <div class="am-u-sm-9 am-u-sm-push-3">
                                    <button type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

