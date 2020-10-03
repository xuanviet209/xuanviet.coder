<?php
class TagLink {

    public $href = "";
    public $target = "";
    public $title = "";
    public $text = "";

    // tạo 1 phương thức
    public  function __construct($href, $text, $target = "", $title = "")
    {

        echo "<br>" . __METHOD__;
        $this->href = $href;
        $this->text = $text;
        $this->target = $target;
        $this->title = $title;

    }
    public function displayHTML(){
       $a= "<a href=\"$this->href\" target=\"$this->target\" title=\"$this->title\">$this->text</a>";
       return $a;

    }
}
$kenh14 = new TagLink("https://kenh14.vn/", "kenh 14", "_blank", "kenh 14");
