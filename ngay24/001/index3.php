<?php

class Student {
	public $name="";
	public $age="";
	public $address="";
	//diem tb
	public $score=0;
	//xep loai
	public $result="";

     //khai báo các phương thức
	 public function sinhvien($name,$age,$address)
	{
		# code...
		//gán tham sô cho thuộc tính
		$this->name=$name;
		$this->age=$age;
		$this->address=$address;
	}

	public function calc($score)
	{
		# code...
		$sumScore=0;
		for ($i=0; $i <8 ; $i++) { 
			# code...
			$sumScore=$sumScore+$score[$i];
		}
		$avgScore=$sumScore/8;
		$this->avgScore=$avgScore;

		if ($this->avgScore < 5) {
            $this->result = "trượt";
        } else if ($this->avgScore < 6.5) {
            $this->result = "trung bình";
        } else if ($this->avgScore < 7) {
            $this->result = "trung bình khá";
        } else if ($this->avgScore < 8) {
            $this->result = "khá";
        } else {
            $this->result = "giỏi";
        }

        return $this->result;

	}
}

$nam=new Student();
$nam -> sinhvien("nguyen van nam","18","ha noi");
echo "<br> Xếp loại ".$nam->calc([3,5,6,7,1,4,8,9]);

//truy cập 1 thuộc tính bên ngoài class
echo "<br> điểm TB = ". $nam->avgScore;


echo "<pre>";
print_r($nam);
echo "</pre>";

$viet=new Student;
$viet->sinhvien("nguyen xuan viet","21","ha noi");
echo "<br> xếp loại " .$viet->calc([2,6,7,8,8,9,5,4]);

echo "<br> điểm TB = ". $viet->avgScore;

echo "<pre>";
print_r($viet);
echo "</pre>";


	

// tạo ra 1 class sinh viên
// với các thuộc tính  : tên , tuổi , quê quán , điểm học kỳ
// thuộc tính điểm học kỳ là 1 mảng chứa 8 giá trị
// tương ứng với 8 kỳ học
// hãy viết 1 phương thức để tính điểm trung bình
// sau đó in ra xếp loại cho sinh viên đó

// cuối cùng tạo 2 đối tượng có tên là nam và hương
// khởi tạo từ class sinh viên này
// truyền các thông tin cho các thuộc tính của class
// và gọi phương thức tính điểm TB và in ra xếp loại


