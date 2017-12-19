@extends('layouts.layout')

@section('content')

        <!-- 内容区域 -->
<div class="tpl-content-wrapper">
    <div class="row-content am-cf">
        <div class="row">
            <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                <div class="widget am-cf">
                    <div class="widget-head am-cf">
                        <div class="widget-title  am-cf">
                            <ul>
                                <li><a href="#">个人资料</a></li>
                                <li><a href="#">修改密码</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget-body am-fr">
                        <ul>
                            <li id="sex_li">
                                <label>性别：</label>
                                <div id="sex" class="preview_option">男</div>
                            </li>
                            <li id="age_li">
                                <label>年龄：</label>
                                <div id="age" class="preview_option">25</div>
                            </li>
                            <li id="birthday_li">
                                <label>生日：</label>
                                <div id="birthday" class="preview_option">11月3日</div>
                            </li>
                            <li id="astro_li">
                                <label>星座：</label>
                                <div id="astro" class="preview_option">天蝎座</div>
                            </li>
                            <li id="live_address_li">
                                <label>现居地：</label>
                                <div id="live_address" class="preview_option"><span class="spacing">中国</span>  <span class="spacing">广东</span>  <span class="spacing">深圳</span></div>
                            </li>
                            <li id="marriage_li">
                                <label>婚姻状况：</label>
                                <div id="marriage" class="preview_option">未填写</div>
                            </li>
                            <li id="blood_li">
                                <label>血型：</label>
                                <div id="blood" class="preview_option">B</div>
                            </li>
                            <li id="hometown_address_li">
                                <label>故乡：</label>
                                <div id="hometown_address" class="preview_option"><span class="spacing">中国</span>  <span class="spacing">重庆</span>  <span class="spacing">奉节</span></div>
                            </li>
                            <li id="career_li">
                                <label>职业：</label>
                                <div id="career" class="preview_option">在校学生</div>
                            </li>
                            <li id="company_li">
                                <label>公司名称：</label>
                                <div id="company" class="preview_option">未填写</div>
                            </li>
                            <li id="company_caddress_li">
                                <label>公司所在地：</label>
                                <div id="company_caddress" class="preview_option">未填写</div>
                            </li>
                            <li id="caddress_li">
                                <label>详细地址：</label>
                                <div id="caddress" class="preview_option">未填写</div>
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">修改</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection