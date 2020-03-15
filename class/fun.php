<?php
  class fun{




  	public function get_url(){

  		

  	}
  	function upload($name,$file_dir='./uploads'){

		$img_info=[];
		if($_FILES[$name]['error']>0){
			switch($_FILES[$name]['error']){
				case 1:
					$img_info['msg']= "文件超出了Upload_max_filesize的值";
					break;
				case 2:
					$img_info['msg']="上传的文件大小超出了MAX_FILE_SIZE指令";
					break;
				case 3:
					$img_info['msg']="文件没有完全上传";
					break;
				case 4:
					$img_info['msg']="没有指定上传的文件";

					break;
				default:
					$img_info['msg']="位置错误";
					break;
			}
			return $img_info;

		}

		$uploads=$file_dir;

		//指定上传目录
		if(!file_exists($uploads)){
			mkdir($uploads,0755,TRUE);
		}

		//文件名字
		//$imgname=$_FILES[$name]['name'];
		//文件后缀
		$typeinfo=explode('/',$_FILES[$name]['type']);
		$type=end($typeinfo);
		$imgname=time().'.'.$type;
		//允许上传的数据类型
		$allow = ['jpeg','jpg','png','gif','svg'];
		if(!in_array($type,$allow)){
			$img_info['msg']="不允许上传$allow文件类型";
		}
		$path =$uploads.'/'.$imgname;
		if(move_uploaded_file($_FILES[$name]['tmp_name'], $path)){
			$img_info['msg']='上传成功';
			$img_info['imgpath']="http://www.lay.com/admin".ltrim($path,'.');
			$img_info['code']='1';

		}else{
			$img_info['msg']='上传失败';
			$img_info['code']='0';
		}
		return   $img_info;
	}


	//多图上传
	//上传多图
	function uplaods($file_dir='./uploads'){
        $img_info=[];
        $file_num = count($_FILES['pic1']['name']);
        for ($i = 0; $i < $file_num; $i++) {
            // 1. 判断错误信息
            if ($_FILES['pic1']['error'][$i] > 0) {
                switch ($_FILES['pic1']['error'][$i]) {
                    case 1:
                        $img_info['msg']= "文件大小超出了 upload_max_filesize 的值";
                        break;
                    case 2:
                        $img_info['msg']= "上传的文件大小超出了MAX_FILE_SIZE指令的值";
                        break;
                    case 3:
                        $img_info['msg']= "如果文件没有完全上传";
                        break;
                    case 4:
                        $img_info['msg']= "没有指定上传文件";
                        break;
                    default:
                        $img_info['msg']= "未知错误";
                        break;
                }
                return $img_info;
            }

            $uploads = $file_dir; //指定上传目录
           

            // 获取文件名
            $name = $_FILES['pic1']['name'][$i];

            // 获取文件类型
            $type = explode('/', $_FILES['pic1']['type'][$i]); // image/jpeg

            // 获取文件后缀
            $suffix = array_pop($type);

            // 允许上传的数据类型
            $allows = ['jpeg', 'jpg', 'png', 'gif', 'psd'];

            //判断上传的文件类型
            if (!in_array($suffix, $allows)) { //in_array检查数组中是否存在某个值
                $img_info['msg']="不允许上传$allow文件类型";
            }

            // 指定文件名
            $filename = date("YmdHis") . mt_rand(100, 999) . '.' . $suffix;
            $path = $uploads . '/' . $filename;
          

            if (move_uploaded_file($_FILES['pic1']['tmp_name'][$i], $path)) {
                if ($i == 0) {
                    $img = "http://www.lay.com/admin" . ltrim($path, '.');
                } else {
                    $thumb = "http://www.lay.com/admin" . ltrim($path, '.');
                }
            }else{
                $code=0;
            }
        }
        if(isset($code)&&!empty($code)){
            $img_info['code']='0';
        }else{
            $img_info['msg']='上传成功';
            $img_info['img']=$img;
            $img_info['thumb']=$thumb;
            $img_info['code']='1';
        }
        return $img_info;

    }

  }
?>