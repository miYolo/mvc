<?php

namespace libs;

class code
{
    public  $type;
    public  $width;
    public  $height;
    public  $codeLen;
    public  $fontSize;
    public  $fontAngle;
    public  $lineNum;
    public  $pixNum;
    public  $fontFile;

    function __construct()
    {
        global $config;
        $this->type = empty($config["code"]["type"]) ? "png" : $config["code"]["type"];
        $this->width = empty($config["code"]["width"]) ? "160" : $config["code"]["width"];
        $this->height = empty($config["code"]["height"]) ? "50" : $config["code"]["height"];
        $this->codeLen = empty($config["code"]["codeLen"]) ? "4" : $config["code"]["codeLen"];
        $this->seed = empty($config["code"]["seed"]) ? "abcdefhjkmnprstuvwxyzABCDEFHJKMNPRSTUVWXYZ345678" : $config["code"]["seed"];
        $this->fontSize = empty($config["code"]["fontSize"]) ? array("min" => 20, "max" => 35) : $config["code"]["fontSize"];
        $this->fontAngle = empty($config["code"]["fontAngle"]) ? array("min" => -15, "max" => 15) : $config["code"]["fontAngle"];
        $this->lineNum = empty($config["code"]["lineNum"]) ? array("min" => 1, "max" => 4) : $config["code"]["lineNum"];
        $this->linWidth = empty($config["code"]["linWidth"]) ? array("min" => 1, "max" => 4) : $config["code"]["linWidth"] ;
        $this->pixNum =empty($config["code"]["pixNum"]) ? array("min" => 300, "max" => 500) : $config["code"]["pixNum"] ;
        $this->fontFile = empty($config["code"]["fontFile"]) ? 'D:\wamp64\www\mvc\application\static\font\msyh.ttc' : $config["code"]["fontFile"];
    }

    private function createCanvas()
    {
        $this->image = imagecreatetruecolor($this->width, $this->height);
        imagefill($this->image, 0, 0, $this->setColor());
    }

    private function setColor($type = "background")
    {
        $r = $type == "background" ? mt_rand(80, 130) : mt_rand(200, 255);
        $g = $type == "background" ? mt_rand(80, 130) : mt_rand(200, 255);
        $b = $type == "background" ? mt_rand(80, 130) : mt_rand(200, 255);
        return imagecolorallocate($this->image, $r, $g, $b);
    }

    private function getText()
    {
        $str = "";
        for ($i = 0; $i < $this->codeLen; $i++) {
            $str .= $this->seed[mt_rand(0, strlen($this->seed) - 1)];
        }
        return $str;
    }


    function setText()
    {
        $str = $this->getText();
        $this->str = strtolower($str);
//        $this->str=strtolower($str);
        for ($i = 0; $i < $this->codeLen; $i++) {
            $size = mt_rand($this->fontSize["min"], $this->fontSize["max"]);
            $angle = mt_rand($this->fontAngle["min"], $this->fontAngle["max"]);
            $space = $this->width / ($this->codeLen * 2 + 1);
        }
//      $box=imagettfbbox($size,$angle,'D:\wamp64\www\mvc\application\static\font\msyh.ttc',$str[$i]);
        imagettftext($this->image, $size, $angle, mt_rand(max(($i * 2 - 1 * $space), 0), max(($i * 2 + 1 * $space), 0)), 30, $this->setColor("a"), $this->fontFile, $str);
    }

    private function setLine()
    {
        $num = mt_rand($this->lineNum["min"], $this->lineNum["max"]);
        for ($i = 0; $i < $num; $i++) {
            $x1 = mt_rand(0, ($this->width) / 2);
            $x2 = mt_rand(($this->width) / 2, ($this->width));
            $y1 = mt_rand(0, $this->height);
            $y2 = mt_rand(0, $this->height);
            imagesetthickness($this->image, mt_rand($this->linWidth["min"], $this->linWidth["max"]));
            imageline($this->image, $x1, $y1, $x2, $y2, $this->setColor("a"));
        }

    }

    private function setPix()
    {
        $num = mt_rand($this->pixNum["min"], $this->pixNum["max"]);
        for ($i = 0; $i < $num; $i++) {
            imagesetpixel($this->image, mt_rand(0, $this->width), mt_rand(0, $this->height), $this->setColor("a"));
        }
    }

    function out()
    {
        header("content-type:image/" . $this->type);
        //创建画布
        $this->createCanvas();
        //写文字
        $this->setText();
        $this->setPix();
        //线条干扰
        $this->setLine();
        $_SESSION['code'] = $this->str;
        //setcookie("code",$this->str,0,"/");
        $outtype = "image" . $this->type;
        $outtype($this->image);
        imagedestroy($this->image);
    }
}

//$code = new code();
//$code->out();