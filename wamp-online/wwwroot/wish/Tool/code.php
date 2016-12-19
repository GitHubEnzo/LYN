<?php
class Code{
//  设置私有属性供类中方法公用
    private $img;
    private $w=150;
    private $h=40;
//  显示验证码
    public function make(){
//  发送头部
        header('Content-type:image/png');
//  创建画布,填充画布
        $this->createBg();
//  写字
        $this->writeFont();
//  干扰
        $this->makeTrouble();
//  输出
        imagepng($this->img);
//  销毁
        imagedestroy($this->img);
    }
//  创建画布,填充画布
    private function createBg(){
//  创建画布
        $this->img = imagecreatetruecolor($this->w,$this->h);
//  调色
        $grey = hexdec('#CCCCCC');
//  填充画布
        imagefill($this->img,0,0,$grey);
    }
//  写字方法
    private function writeFont(){
    $str='';
        for ($i = 0;$i<1;$i++){
//  字体大小
            $size = 30;
//  调色
            $color = imagecolorallocate($this->img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
//  算出字体的x,y坐标
            $x = $this->w / 4 * $i+10;
            $y = ($this->h + $size)/2 ;
//  文字种子
            $seed = [chr(mt_rand(48,57)),chr(mt_rand(65,90)),chr(mt_rand(97,122))];
//  随机文字种子数组下标得到文字
            $text = $seed[mt_rand(0,count($seed)-1)];
            $str .=$text;
    //  写字
            imagettftext($this->img,$size,mt_rand(-45,45),$x,$y,$color,'Tool/font.ttf',$text);
        }
        $_SESSION['code'] = strtolower($str);
    }
//  干扰
    private function makeTrouble(){
        for ($i=0;$i<20;$i++){
//  随机圆宽高
            $wh = mt_rand(0,10);
//  调色
            $color = imagecolorallocate($this->img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
//  画图
//            圆
            imageellipse($this->img,mt_rand(0,$this->w),mt_rand(0,$this->h),$wh,$wh,$color);
//            线
            imageline($this->img,mt_rand(0,$this->w),mt_rand(0,$this->h),mt_rand(0,$this->w),mt_rand(0,$this->h),$color);

        }
    }
}
//$o = new Code();
//$o->make();