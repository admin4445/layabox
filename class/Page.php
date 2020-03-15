<?php
class Page
{
    private $current;   //当前页码
    private $count;     //总数据记录
    private $limit;     //每页显示条数
    private $size;      //页码数量
    private $class;     //css类名
    private $str;       //分页html字符串
    private static $instance; //保存当前对象的静态属性

    private function __construct($config)
    {
        $this->initParam($config);
    }

    private function initParam($config){
        $this->current = isset($config['current']) ? $config['current'] : 1;
        $this->count = isset($config['count']) ? $config['count'] : '';
        $this->limit = isset($config['limit']) ? $config['limit'] : 7;
        $this->size = isset($config['size']) ? $config['size'] : '';
        $this->class = isset($config['class']) ? $config['class'] : '';
    }


    //获取当前url
    private function get_url(){
        $url = $_SERVER['PHP_SELF'].'?';
        if($_GET){
            foreach ($_GET as $k => $v){
                if($k != 'page'){
                    $url .= "{$k}={$v}&";
                }
            }
        }
        return $url;
    }

    public function showPage(){
        if($this->count>$this->limit){

            $url = $this->get_url();

            $this->str .= "<ul class='{$this->class}'>";

            $pages = ceil($this->count/$this->limit);// 页码总数

            //首页
            if($this->current==1){
                $this->str .= "<li class='disabled'><a href=''>首页</a></li>";
                $this->str .= "<li class='prev'><a>&lt;</a></li>";

                
                    
            }else{ //上一页
                $this->str .= "<li><a href='{$url}page=1'>首页</a></li>";
                $this->str .= "<li class='prev'>
							<a href='{$url}page=".($this->current-1)."'>&lt;</a>
						</li>";
            }

            // 如果当前页小于 页码数/2 向下取整的值，则分页从1开始
            if($this->current <= floor($this->size/2)){
                $start = 1;
                $end = $pages > $this->size ? $this->size : $pages;
            }else if($this->current > $pages - floor($this->size/2)){
                //如果当前页码大于总页码减去规定页码的一半
                //如：$current(8|9) > $pages - floor(size/2) = 9 - floor(5/2) = 7
                $start = ($pages - $this->size + 1 < 1) ? 1 : $pages - $this->size + 1; //避免小于0的情况出现
                $end = $pages;
            }else{
                $start = $this->current - floor($this->size/2);
                $end = $this->current + floor($this->size/2);
            }

            //循环输出页码数
            for($i=$start;$i<=$end;$i++){
                if($i == $this->current){
                    $this->str .= "<li class='active'><a>{$i}</a></li>";
                }else{
                    $this->str .= "<li><a href='{$url}page={$i}'>{$i}</a></li>";
                }
            }

            //尾页
            if($this->current == $pages){
                $this->str .= "<li class='next'><a>&gt;</a></li>";
                $this->str .= "<li class='disabled'><a href=''>尾页</a></li>";
            }else{ //下一页
                $this->str .= "<li class='next'>
							<a href='{$url}page=".($this->current+1)."'>&gt;</a>
						 </li>";
                $this->str .= "<li class='next'>
							<a href='{$url}page={$pages}'>尾页</a>
						 </li>";
            }

            $this->str .= "</ul>";
        }
        return $this->str;
    }



    public static function getInstance($config){
        if(!self::$instance instanceof self){
            return self::$instance = new self($config);
        }
        return self::$instance;
    }
}