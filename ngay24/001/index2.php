<?php
class TagLink {
	public $href="";
	public $target="";
	public $title="";

	public function display($href="",$target= "",$title= ""){

		$this->href=$href;
		$this->target=$target;
		$this->title=$title;

		$TagLink="<a href=\"$this->href\" target=\"$this->target\" title =\"$this->title\">Bấm vào đây!</a>";
        
        return $TagLink;
	}
}

	$TagLink1=new TagLink();
	echo $TagLink1->display("http://www.bongda.com.vn/", "_parent", "bongda");

	



// <a href="" target="" title=""></a>

// tạo ra 1 class hiển thị thẻ a trong html
// sử dụng các thuộc tính cho class này
// và tạo 1 phương thức để hiển thị