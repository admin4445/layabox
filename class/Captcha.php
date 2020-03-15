<?php

class  Captcha{
    private $width ; //验证码的宽
    private $height; //验证码的高度
    private $fontStyle;//验证码字体样式，需引入字体文件
    private $dot;//验证码雪花点数
    private $line;//验证码干扰线条
    private $image;//验证码图片
    private $chars;//验证码字符串

    /**构造函数初始化值
     * Captcha constructor.
     * @param $config
     */
    public  function __construct($config){
        session_start();
        $this->width = isset($config['width']) ? $config['width'] : "";
        $this->height = isset($config['height']) ? $config['height'] : "";
        $this->session = isset($config['session']) ? $config['session'] : "";
        $this->fontStyle= isset($config['fontStyle']) ? $config['fontStyle'] : "";
        $this->dot= isset($config['dot']) ? $config['dot'] : "";
        $this->line= isset($config['line']) ? $config['line'] : "";
        $this->image = $this->createImage();
        $this->chars = $this->createChar();
        $_SESSION [$this->session] = $this->chars;//将验证码的值放入session中，以便验证登陆
    }

    /**
     * 输出图片
     */
    public  function showImg(){
        //背景颜色
        $white = imagecolorallocate($this->image,255,255,255);
        $textcolor = imagecolorallocate($this->image,rand(0,255),rand(0,255),rand(0,255));
        //在制定图片画矩形
        imagefilledrectangle($this->image, 0 , 0 , $this->width , $this->height , $white);
        $fontsize = 30;
        for($i=0;$i<strlen($this->chars);$i++){

            $color = imagecolorallocate($this->image,rand(0,255),rand(0,255),rand(0,255));

            //定义字符Y坐标
            $y= ($this->height+15)/2 + rand(-1,1);

            //定义字符X坐标
            $x = $i*30+8;

            imagettftext($this->image,$fontsize,rand(-30,30),$x,$y,$color,$this->fontStyle,$this->chars[$i]);

        }

        $this->interferon();
        header ( "content-type:image/gif" );
        imagegif ($this->image );//显示图片
        imagedestroy ($this->image );//销毁图片

    }
    /**
     * 创建画布
     */
    private function createImage(){

        $img = imagecreatetruecolor($this->width, $this->height);
        return $img;
    }
    //生成验证码字符
    private function createChar(){
        $str = "abcdefghigklmnopqrstuvwxyz1234567890";
        $reg = '/[a-z]{1}/';
        $len = strlen($str);
        for($i=0;$i<$len-1;$i++){
            if(preg_match($reg,$str)){
                $i = rand(0,$len-1);
                $str[$i] = strtoupper($str[$i]);
            }
        }
        $shuffle = str_shuffle($str); //随机打乱一个字符串
        $new_str = substr($shuffle,0,4);
        return $new_str;

    }

    //生成干扰元素
    private function interferon(){
        //划线
        for($i=0;$i<$this->line;$i++) {
            $linecolor = imagecolorallocate($this->image, rand(0, 255), rand(0, 255), rand(0, 255));
            imageline($this->image,rand(0,$this->width),rand(0,$this->width),rand($this->width,$this->width),rand(0,$this->height),$linecolor);
        }
       //画原点
        for($i=0;$i<$this->dot;$i++){
            $color = imagecolorallocate($this->image,rand(0,255),rand(0,255),rand(0,255));
            //原点
            //imagefilledellipse($this->image,rand(0,$this->width),rand(0,$this->height),rand(1,3),rand(1,3),$color);
            // 点
            imagesetpixel($this->image,mt_rand(0, $this->width-1) , mt_rand(0, $this->height-1), $color);

        }
    }
}

$config = [
    'width'=>150,
    'height'=>50,
    'fontStyle'=>'../static/admin/font/texb.ttf',
    'dot'=>50,
    'line'=>5,
    'session'=>'sessioncode'
];
$a = new Captcha($config);
$a->showImg();
