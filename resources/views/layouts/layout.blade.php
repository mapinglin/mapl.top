<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>mapl-blog</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="{{asset('assets/i/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets/i/app-icon72x72@2x.png')}}">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <script src="{{asset('assets/js/echarts.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/amazeui.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/webuploader/webuploader.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/amazeui.datatables.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/app1.css?v=2020')}}">
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/webuploader/webuploader.min.js')}}"></script>
    <script type="text/javascript" charset="utf-8" src="{{asset('assets/ueditor/ueditor.config.js')}}"></script>
    <script type="text/javascript" charset="utf-8" src="{{asset('assets/ueditor/ueditor.all.min.js')}}"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="{{asset('assets/ueditor/lang/zh-cn/zh-cn.js')}}"></script>

</head>

<body data-type="widgets">
<script src="{{asset('assets/js/theme.js')}}"></script>
<div class="am-g tpl-g">
    <!-- 头部 -->
    <header>
        <!-- logo -->
        <div class="am-fl tpl-header-logo">
            <a href="javascript:;"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
        </div>
        <!-- 右侧内容 -->
        <div class="tpl-header-fluid">
            <!-- 侧边切换 -->
            <div class="am-fl tpl-header-switch-button am-icon-list">
                    <span>

                </span>
            </div>
            <!-- 搜索 -->
            <div class="am-fl tpl-header-search">
                <form class="tpl-header-search-form" action="javascript:;">
                    <button class="tpl-header-search-btn am-icon-search"></button>
                    <input class="tpl-header-search-box" type="text" placeholder="搜索内容...">
                </form>
            </div>
            <!-- 其它功能-->
            <div class="am-fr tpl-header-navbar">
                <ul>
                    <!-- 欢迎语 -->
                    <li class="am-text-sm tpl-header-navbar-welcome">
                        <a href="javascript:;">欢迎你, <span>{{Auth()->user()->name}}</span> </a>
                    </li>

                    <!-- 退出 -->
                    <li class="am-text-sm">
                        <a href="{{route('logout')}}">
                            <span class="am-icon-sign-out"></span> 退出
                        </a>
                    </li>
                </ul>
                <div class="tankuang" style="display:none;height: 60px;width: 300px;background-color: green;position: absolute;opacity:0.4;margin-left: -80px; margin-top: 10px;text-align: center;line-height:60px;border:1px solid red;letter-spacing:5px">
                    <span style="color: white;"><i class="am-icon-check am-icon-md"></i></span><span style="color: blue;font-weight: 800;font-size: 18px;">添加成功！！</span>
                </div>
            </div>
        </div>

    </header>
    <!-- 风格切换 -->
    <div class="tpl-skiner">
        <div class="tpl-skiner-toggle am-icon-cog">
        </div>
        <div class="tpl-skiner-content">
            <div class="tpl-skiner-content-title">
                选择主题
            </div>
            <div class="tpl-skiner-content-bar">
                <span class="skiner-color skiner-white" data-color="theme-white"></span>
                <span class="skiner-color skiner-black" data-color="theme-black"></span>
            </div>
        </div>
    </div>
    <!-- 侧边导航栏 -->
    <div class="left-sidebar">
        <!-- 用户信息 -->
        <div class="tpl-sidebar-user-panel">
            <div class="tpl-user-panel-slide-toggleable">
                <div class="tpl-user-panel-profile-picture">
                    <img src="{{asset('assets/img/user04.png')}}" alt="">
                </div>
                    <span class="user-panel-logged-in-text">
              <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
                        {{Auth()->user()->name}}
          </span>
                <a href="javascript:;" class="tpl-user-panel-action-link"> <span class="am-icon-pencil"></span> 账号设置</a>
            </div>
        </div>

        <!-- 菜单 -->
        <ul class="sidebar-nav">
            @foreach($menus as $key=>$value)
                @if(is_array($value['child']))
                    <li class="sidebar-nav-link">
                        <a href="javascript:;" class="sidebar-nav-sub-title">
                            <i class="am-icon-table sidebar-nav-link-logo"></i> {{$value['title']}}
                            <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico sidebar-nav-sub-ico-rotate"></span>
                        </a>
                        <ul class="sidebar-nav sidebar-nav-sub">
                            @foreach($value['child'] as $ke=>$val)
                            <li class="sidebar-nav-link">
                                <a href="{{url($val['uri'])}}" class="sub-active">
                                    <span class="am-icon-angle-right sidebar-nav-link-logo"></span> {{$val['title']}}
                                </a>
                            </li>
                                @endforeach
                        </ul>
                    </li>
                @else
                    <li class="sidebar-nav-link">
                        <a href="{{url($value['uri'])}}">
                            <i class="{{$value['icon']}} sidebar-nav-link-logo"></i> {{$value['title']}}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
    @yield('content')
</div>
<script src="{{asset('assets/js/amazeui.min.js')}}"></script>
<script src="{{asset('assets/js/amazeui.datatables.min.js')}}"></script>
<script src="{{asset('assets/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>

</body>

</html>