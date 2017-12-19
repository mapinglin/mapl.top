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
                                <form class="am-form tpl-form-border-form tpl-form-border-br" id="amaddrole" method="post" action="{{url('auth/roles/addRole')}}">
                                    <div class="am-form-group {{$errors->has('name') ? 'am-form-error' : ''}}">
                                        <label for="role-name" class="am-u-sm-3 am-form-label">角色名 </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="am-form-field" id="role-name" name="name" value="{{old('name')}}" placeholder="填写角色名" required>
                                            @if ($errors->has('name'))
                                                <small class="help-block">{{$errors->first('name')}}</small>
                                            @else
                                                <small>请填写角色名。</small>
                                            @endif
                                        </div>
                                    </div>
                                    {{csrf_field()}}
                                    <div class="am-form-group {{$errors->has('display_name') ? 'am-form-error' : ''}}">
                                        <label for="role-slug" class="am-u-sm-3 am-form-label">Slug </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="am-form-field" id="role-slug" name="display_name" value="{{old('display_name')}}" placeholder="填写slug" required>
                                            @if ($errors->has('display_name'))
                                                <small class="help-block">{{$errors->first('display_name')}}</small>
                                            @else
                                                <small>请填写slug。</small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="am-form-group {{$errors->has('role_permission') ? 'am-form-error' : ''}}">
                                        <label for="role-permission" class="am-u-sm-3 am-form-label">角色权限 </label>
                                        <div class="am-u-sm-9">
                                            <div class="am-g doc-am-g">
                                                <div class="am-u-sm-6 am-u-md-6 am-u-lg-6">
                                                    <div>
                                                        <button class="am-btn-default" onclick="return false;" id="left" style="width: 100%;margin-bottom: -1px;background-color: #FFFFF0"><i class="am-icon-arrow-right" style="color: black"></i><i class="am-icon-arrow-right" style="color: black"></i></button>
                                                        <select multiple class="" id="doc-select-left">
                                                            {{--<option value="1">1</option>--}}
                                                            {{--<option value="2">2</option>--}}
                                                            {{--<option value="3">3</option>--}}
                                                            {{--<option value="4">4</option>--}}
                                                            {{--<option value="5">5</option>--}}
                                                            @if(count($permission)>0)
                                                            @foreach($permission as $key=>$value)
                                                                <option value="{{$value['id']}}">{{$value['display_name']}}</option>
                                                                @endforeach
                                                                @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="am-u-sm-6 am-u-md-6 am-u-lg-6">
                                                    <button class="am-btn-default" onclick="return false;" id="right" style="width: 100%;margin-bottom: -1px;background-color: #FFFFF0"><i class="am-icon-arrow-left" style="color: black"></i><i class="am-icon-arrow-left" style="color: black"></i></button>
                                                    <select multiple class="" id="doc-select-right" name="role_permission[]">

                                                    </select>
                                                </div>
                                                {{--<select multiple name="role_permission[]" class="permissions" style="display: none">--}}

                                                {{--</select>--}}
                                                {{--<input tyle="hidden" name="role_permission[]">--}}
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        $(function(){
                                            $('#left').click(function(){
//                                                var value="value";
//                                                var text="text";
                                                $('#doc-select-left option').each(function(){
                                                   // console.log(this.value);
                                                    //var lock = false;
                                                    $("#doc-select-right").append("<option value='"+this.value+"' selected='selected' >"+this.text+"</option>");
                                                   // console.log(this.text);
                                                });
                                                $("#doc-select-left").empty();
                                            });
                                          // var le =  $('#doc-select-left').find('option:selected').text();
                                            $('#doc-select-left').change(function(){
                                                var value = $("#doc-select-left option:selected").val();
                                                var text = $("#doc-select-left option:selected").text();
                                                $("#doc-select-left option:selected").remove();
                                                $("#doc-select-right").append("<option value='"+value+"' selected='selected'>"+text+"</option>");
                                            });
                                            //alert(le);

                                            $('#right').click(function(){
                                                $('#doc-select-right option').each(function(){
                                                    // console.log(this.value);
                                                    //var lock = false;
                                                    $("#doc-select-left").append("<option value='"+value+"'>"+text+"</option>");
                                                    // console.log(this.text);
                                                });
                                                $("#doc-select-right").empty();
                                            });
                                            $('#doc-select-right').change(function(){
                                                var value = $("#doc-select-right option:selected").val();
                                                var text = $("#doc-select-right option:selected").text();
                                                $("#doc-select-right option:selected").remove();
                                                $("#doc-select-left").append("<option value='"+value+"'>"+text+"</option>");
                                            });

                                        });
                                    </script>

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
//                $(function(){
//                    $('#addUser').click(function(){
//                        var role_permission = new Array($('#doc-select-left option').size());
//                       $('#doc-select-left option').each(function(){
//                                role_permission.push(this.value);
//                       });
//                        $('#amaddrole').appendTo("<input value='"+role_permission+"' name='role_permission' >");
//                    });
//                })
    </script>
@endsection