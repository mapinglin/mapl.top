<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/12
 * Time: 14:04
 */

namespace App\Http\Controllers;
use App\Blog;
use App\Events\sendMessage;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class BlogController extends Controller {
    public function index(){
        $blog = Blog::paginate(15);
        return view('blog.index',compact('blog'));
    }

    public function showAdd(){
        $tag = Tag::all();
        return view('blog.add',compact('tag'));
    }

    public function upload(Request $request){
//        var_dump($_FILES['file']['tmp_name']);
//        exit;
        $file = $request->file('file');
        if($file->isValid()){
//            $originalName = $file->getClientOriginalName(); // 文件原名
            $ext = $file->getClientOriginalExtension();     // 扩展名
            $realPath = $file->getRealPath();   //临时文件的绝对路径
            //图片压缩
//            $img = Image::make($realPath);
//            $img->fit(200,200);
//            $img->save(public_path('uploads/'.'bat.jpg'));
//            $type = $file->getClientMimeType();     // image/jpeg
            $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
            // 使用我们新建的uploads本地存储空间（目录）
            $uploadPath = public_path('uploads');
            if(!file_exists($uploadPath)){
                mkdir($uploadPath,0777,true);
            }
            $bool = move_uploaded_file($realPath,$uploadPath.'/'.$filename);
            //Image::make('');\
            if($bool){
                exit($uploadPath.'/'.$filename);
            }else{
                exit('fail');
            }
        }
    }

    public function add(Request $request){
        $blog = $request->all();
//        var_dump($blog);
//        exit;
        $blog = Blog::create([
            'title'=>$request->input('title'),
            'author'=>$request->input('author'),
            'content'=>$request->input('content'),
            'tag'=>$request->input('blog_tag'),
            'author_pic'=>$request->input('fileUrl')
        ]);
        if($blog){
            return redirect('blog/blog');
        }else{
            return redirect()->back();
        }
    }


    public function getBlog(){
//       // exit('e');
        $blog = Blog::find(1);
//        $post = $blog->posts->toArray();
////        $post = Post::where(['blog_id'=>1])->get()->toArray();
////        var_dump($post);
//       // $blog = Blog::with('blog.post')->get();
//        var_dump($post);
        Log::info(Auth()->user()->name.'成功登录到系统');
        Event::fire(new sendMessage($blog));
    }

    public function testGit(){
        
    }
}