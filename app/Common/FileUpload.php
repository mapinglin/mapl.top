<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/14
 * Time: 9:02
 */

namespace App\Common;
use Intervention\Image\Facades\Image;

class FileUpload{
    protected $file;
    private $error;
    private $fullPath;
    private $config = [
      'maxSize'=>3*1024*1024,
        'exts'=>array('jpg','jpeg','gif','png','doc','docx','xls','xlsx','ppt','pptx','pdf','rar','zip'),
        'subName'=>'',
        'rootPath'=>'/uploads',
        'savePath'=>'',
        'thumb'=>array()
    ];

    public function __construct($config = array()){
        $this->config = array_merge($this->config,$config);
        if(!empty($this->config['exts'])){
            if(is_string($this->config['exts'])){
                $this->config['exts'] = explode(',',$this->config['exts']);
            }
            $this->config['exts'] = array_map('strtolower',$this->config['exts']);
        }
        $this->config['subName'] = $this->config['subName'] ? ltrim($this->config['subName'],'/') : '/'.date('Ymd');
        $this->fullPath = ltrim(public_path(),'/').$this->config['rootPath'];
    }

    public function __get($name)
    {
       return $this->config[$name];
    }

    public function __set($name,$value){
        if(isset($this->config[$name])){
            $this->config[$name] = $value;
        }
    }

    public function __isset($name)
    {
        return isset($this->config[$name]);
    }

    public function getError(){
        return $this->error;
    }

    public function upload($file){
        if(empty($file)){
            $this->error = '没有上传文件';
            return $this->error;
        }
        $fileSavePath=$this->fullPath.$this->config['savePath'].$this->config['subName'];
        if(!$this->checkRootPath($this->fullPath)){
            $this->error = $this->getError();
            return false;
        }
        $files = array();
        if(!is_array($file)){
            $files[] = $file;
        }else{
            $files = $file;
        }
        $info = array();
        foreach($files as $key=>$value){
            $this->file = $value;
            $value->config['exts'] = strtolower($value->getClientOriginalExtension());
            if(!$this->check($value)){
                continue;
            }
            $fileName = str_random(12).'.'.$this->config['exts'];
            $image = Image::make('');
            if(move_uploaded_file($fileSavePath,$fileName)){
                if(!empty($this->config['thumb']) && is_array($this->config['thumb'])){
                    //$imgThumb ->thumb($this->thumb,$fileSavePath.'/'.$fileName);
                }
                $info[]=$this->config['rootPath'].$this->config['savePath'].$this->config['subName'].'/'.$fileName;
            }
        }
    }
}