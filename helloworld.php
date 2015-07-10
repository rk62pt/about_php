<?php
##註解
// Hello World!!!
# Hello World!!!
/*
 Hello World!!!
*/
##echo
echo 'Hello World!!!\n';//單引號的\n 執行時不會換行
echo "Hello World!!!\n";//雙引號的\n

ECHO "大寫可以嗎？\n";//ECHO大寫也可以印
echo "這樣寫可以換行嗎？\r\n";//\r\n也可以換行吧
echo "-----\n\n";
//
/*
echo date("Y/m/d")."\n";//印出日期 此寫法會出錯
#要先設定正確的時區
*/

date_default_timezone_set('Asia/Taipei');//時區為台北
echo date("Y/m/d")."\n";
echo strftime("%X",time())."\n";//24H
echo strftime("%r",time())."\n";//AM PM
echo "------\n\n";
/*
about strftime() 
http://php.net/manual/en/function.strftime.php
*/
##變數 錢字號開頭 如：$account $name $addr $tel $user
$init;
echo $init;//沒給初始值 print ------>空白
echo "\n";
$init = True;
echo $init;
echo "\n";
echo "-------------\n\n";
##陣列 關於陣列的寫法
$num_array = array(10,20,30);//塞入數字
echo $num_array;//print Array
echo "\n";
echo $num_array[0];//print 10
echo "\n";
$不同型態_array = array("小明在",date("Y/m/d"),"花了",100,"元");
echo $不同型態_array[0];
echo $不同型態_array[1];
echo $不同型態_array[2];
echo $不同型態_array[3];
echo $不同型態_array[4];
echo "\n";//print 小明在2015/07/10花了100元
$keyValue_array = array(
		"string" => "如果是字串名稱是string印出這個",
		10 => "如果是數字10!!!" ,
		False => "依據key值是布林值是False印出這個"
	);

echo $keyValue_array["string"];//print 如果是字串名稱是string印出這個
echo "\n";
echo $keyValue_array[10];//print 如果是數字10!!!
echo "\n";
echo $keyValue_array[False];//print 依據key值是布林值是False印出這個
echo "\n";
echo "--------\n\n";
##用陣列的順序試試
echo $keyValue_array[0];//print 據key值是布林值是False印出這個 ----> 程式是判斷為布林值False
echo "\n";
echo $keyValue_array[1];//print ------>印不出來
echo "\n";
echo $keyValue_array[2];//print ------>印不出來
echo "\n";
echo "--------\n\n";
##if else 

##while
$i = 0;
while($i < 5){
	echo $不同型態_array[$i];
	$i++;
}
echo "\n";//print 小明在2015/07/10花了100元
##for
for ($i = 0; $i < 5; $i++) {
    echo $不同型態_array[$i];
}
echo "\n";//print 小明在2015/07/10花了100元
echo "----------\n\n";
##for
#第一種寫法
foreach($keyValue_array as $val){
	echo $val;
	echo "\n";
}
echo "----------\n\n";
#第二種寫法 key value 都印
foreach($keyValue_array as $k => $v){
	echo "$k >> $v \n";
}
echo "-----------\n\n";
##function
function helloworld( $f,$s) {
	return $f.$s;
}
echo helloworld("Hello","World~~~~~~~~~~~!");
echo "\n";
echo "-----------\n\n";
##class
class User{
	private $name;
	private $tel;
	private $addr;

	public function setName($name_){
		$this->name = $name_;
	}
	public function getName(){
		return $this->name;
	}

	public function setTel($tel_){
		$this->tel = $tel_;
	}
	public function getTel(){
		return $this->tel;
	}

	public function setAddr($addr_){
		$this->addr = $addr_;
	}
	public function getAddr(){
		return $this->addr;
	}
	public function toString(){
		return "$this->name\n$this->tel\n$this->addr";
	}
}
$user = new User();
$user->setName("小明");
$user->setTel("0911111111");
$user->setAddr("台北市北投區光明路二段");
echo $user->toString();
echo "\n";
echo "--------------\n\n";
?>
