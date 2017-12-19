@extends('layouts.layout')
@section('content')
        <!-- 内容区域 -->
<div class="tpl-content-wrapper" xmlns="http://www.w3.org/1999/html">

    <div class="container-fluid am-cf">
        <div class="row">
            <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                <div class="page-header-heading"> 网站信息  <small>详细描述...</small></div>
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
            <div class="am-u-sm-12 am-u-md-12 am-u-lg-4">
                <div class="widget am-cf">
                    <div class="widget-head am-cf">
                        <div class="widget-title am-fl">Environment</div>
                        <div class="widget-function am-fr">
                            <a href="javascript:;" class="am-icon-cog"></a>
                        </div>
                    </div>
                    <div class="widget-body am-fr">
                        <table width="auto" class="am-table am-table-compact tpl-table-black" id="example-r">
                            @foreach($envs as $key=>$value)
                                <tr class="gradeX">
                                    <td style="width: 120px">{{$value['name']}}</td>
                                    <td>{{$value['value']}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="am-u-sm-12 am-u-md-12 am-u-lg-4">
                <div class="widget am-cf">
                    <div class="widget-head am-cf">
                        <div class="widget-title am-fl">Dependencies</div>
                        <div class="widget-function am-fr">
                            <a href="javascript:;" class="am-icon-cog"></a>
                        </div>
                    </div>
                    <div class="widget-body am-fr">
                        <table width="auto" class="am-table am-table-compact tpl-table-black" id="example-r">
                            @foreach($dependencies as $key=>$value)
                                <tr class="gradeX">
                                    <td style="width: 240px">{{$key}}</td>
                                    <td><span class="label label-primary">{{$value}}</span></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="am-u-sm-12 am-u-md-12 am-u-lg-4">
                <div class="widget am-cf">
                    <div class="widget-head am-cf">
                        <div class="widget-title am-fl">Available extensions</div>
                        <div class="widget-function am-fr">
                            <a href="javascript:;" class="am-icon-cog"></a>
                        </div>
                    </div>
                    <div class="widget-body am-fr">
                        <table width="auto" class="am-table am-table-compact tpl-table-black" id="example-r">
                            @foreach($extensions as $key=>$value)
                                <tr class="gradeX">
                                    <td style="width: 100px">{{$key}}</td>
                                    <td><a class="am-radius" target="_blank" href="{{$value['link']}}">{{$value['name']}}</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

