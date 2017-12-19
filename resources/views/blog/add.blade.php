@extends('layouts.layout')
@section('content')
    <div class="tpl-content-wrapper">
        <div class="row-content am-cf">
            <div class="row">
                <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                    <div class="widget am-cf">
                        <div class="widget-head am-cf">
                            <div class="widget-title  am-cf">创建博客</div>
                        </div>

                        <div class="widget-body  am-fr">
                            <div class="am-u-sm-10">
                                <form class="am-form tpl-form-border-form tpl-form-border-br" method="post" action="{{url('blog/blog/addBlog')}}">
                                    <div class="am-form-group {{$errors->has('title') ? 'am-form-error' : ''}}">
                                        <label for="title" class="am-u-sm-3 am-form-label">Title </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="am-form-field" id="title" name="title" value="{{old('title')}}" placeholder="填写Title">
                                            @if ($errors->has('title'))
                                                <small class="help-block">{{$errors->first('title')}}</small>
                                            @else
                                                <small>请填写Title(5-20字左右)。</small>
                                            @endif
                                        </div>
                                    </div>
                                    {{csrf_field()}}
                                    <div class="am-form-group {{$errors->has('content') ? 'am-form-error' : ''}}">
                                        <label for="content" class="am-u-sm-3 am-form-label">Content </label>
                                        <div class="am-u-sm-9">
                                            <script id="container" name="content" type="text/plain"></script>
                                            @if ($errors->has('content'))
                                                <small class="help-block">{{$errors->first('content')}}</small>
                                            @else
                                                <small>请填写Content。</small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="am-form-group {{$errors->has('author') ? 'am-form-error' : ''}}">
                                        <label for="password" class="am-u-sm-3 am-form-label"> Author</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="am-form-field" id="author" name="author" placeholder="输入Author">
                                            @if ($errors->has('author'))
                                                <small class="help-block">{{$errors->first('author')}}</small>
                                            @else
                                                <small>请填写Author。</small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="author_pic" class="am-u-sm-3 am-form-label"> Author头像</label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file" id="uploader">
                                                <div class="tpl-form-file-img">
                                                    <img>
                                                </div>
                                                    <button id="picker">添加用户头像</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="doc-select-1" class="am-u-sm-3 am-form-label">Tag</label>
                                        <div class="am-u-sm-9">
                                            <select id="doc-select-1" name="blog_tag">
                                                @foreach($tag as $key=>$value)
                                                <option value="{{$value['id']}}" style="background-color: black">{{$value['tag']}}</option>
                                                @endforeach
                                            </select>
                                            <span class="am-form-caret"></span>
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
        $(function(){
            var uploader = WebUploader.create({

                // swf文件路径
                swf: '{{asset('webuploader/Uploader.swf')}}',

                // 文件接收服务端。
                server: '{{url('blog/blog/upload')}}',

                // 选择文件的按钮。可选。
                // 内部根据当前运行是创建，可能是input元素，也可能是flash.
                pick: '#picker',

                // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                resize: false,

                auto:true,

                accept: {
                    title: 'Images',
                    extensions: 'gif,jpg,jpeg,bmp,png',
                    mimeTypes: 'image/*'
                }
            });

            showError = function( code ) {
                switch( code ) {
                    case 'exceed_size':
                        text = '文件大小超出';
                        break;

                    case 'interrupt':
                        text = '上传暂停';
                        break;

                    default:
                        text = '上传失败，请重试';
                        break;
                }

                $info.text( text ).appendTo( $li );
            };
            ratio = window.devicePixelRatio || 1,

                // 缩略图大小
                    thumbnailWidth = 110 * ratio,
                    thumbnailHeight = 110 * ratio,
                    $img = $('.tpl-form-file-img').find('img');
            console.log($img);
            uploader.on('fileQueued', function (file) {
                if(file.getStatus() === 'invalid'){
                    showError(file.statusText);
                }else{
                    uploader.makeThumb( file, function( error, src ) {
                        if ( error ) {
                            $img.replaceWith('<span>不能预览</span>');
                            return;
                        }

                        $img.attr( 'src', src );
                    }, thumbnailWidth, thumbnailHeight );
                }
                // 优化retina, 在retina下这个值是2
            });
            uploader.on('uploadSuccess',function(file,data){
                $('#uploader').append('<input  type="text" name="fileUrl" style="display:none" value="'+data._raw+'"/>');
            });
        });
    </script>

    <script type="text/javascript">
        var ue = UE.getEditor('container',{
            toolbars: [
                ['fullscreen', 'source', 'undo', 'redo', 'bold','italic','strikethrough', //删除线
                    'subscript', //下标
                    'fontborder', //字符边框
                    'superscript', //上标
                    'formatmatch', //格式刷
                    'source', //源代码
                    'blockquote', //引用
                    'pasteplain', //纯文本粘贴模式
                    'selectall', //全选
                    'print', //打印
                    'preview', //预览
                    'horizontal', //分隔线
                    'removeformat', //清除格式
                    'time', //时间
                    'date' //日期]
            ]],
            initialFrameHeight:260
        });

    </script>
@endsection