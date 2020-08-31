<?php

class pages
{
    public $fullPath;
    public $pages = 10;
    public $total = 200;
    public $currentPage;

    function getUrlInfo()
    {
        $originPath = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
        $path = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"];
        $search = substr(strchr($originPath, "?"), 1);
        $reg = '/\&pages=\d*/';
        $search = preg_replace($reg, "", $search);
        if (isset($_GET["pages"])) {
            $this->currentPage = $_GET["pages"];
        } else {
            $this->currentPage = 0;
        }
        $this->fullPath = $path . "?" . $search . "&pages=";

    }

    public function show()
    {
        $this->getUrlInfo();
        $str = "";
        $str .= "<a href='{$this->fullPath}0'>[首页]</a>";
        $up = $this->currentPage - 1 > 0 ? $this->currentPage - 1 : 0;
        $str .= "<a href='{$this->fullPath}$up'>[上一页]</a>";
        $star = $this->currentPage - floor($this->pages / 2) < 0 ? $this->currentPage : $this->currentPage - floor($this->pages / 2);
        $end = $this->currentPage + $this->pages > ($this->total / $this->pages) ? ($this->total / $this->pages) : $this->currentPage + $this->pages;
        for ($i = $star; $i <= $end; $i++) {
            if($i==$this->currentPage){
               $style="style=color:red";

            }else{
                $style="";
            }
            $str .= "<a href='{$this->fullPath}{$i}' $style>[{$i}]</a>";
        }
        $next = $this->currentPage + 1 > ($this->total / $this->pages) ? ($this->total / $this->pages): $this->currentPage+1;
        $str .= "<a href='{$this->fullPath}$next'>[下一页]</a>";
        $last = $this->total / $this->pages-1;
        $str .= "<a href='{$this->fullPath}$last'>[尾页]</a>";
        echo $str;
    }
}

$pages = new pages();
$pages->show();