<?php
require_once "header.php";
global $smarty, $mysqli;
$user_sn  = 1;

//用 while and $result->fetch_row() do 2D-array(deault index,coulmn name)
$sql      = "SELECT * FROM `bill` WHERE `user_sn`='{$user_sn}' order by `bill_date` desc";
$result   = $mysqli->query($sql) or die($mysqli->connect_error);
$bill_arr = array();//$bill_arr = [] or $bill_arr = array()
while ($all = $result->fetch_assoc()) {
    $bill_arr[] = $all;
}
var_export($bill_arr) ;
echo "<br>----------<br>";

$all_users = '';
echo "<br>$all_users";
echo "<br>----------<br>";

//用 $result->fetch_all(MYSQLI_ASSOC) do 2D-array(deault index,coulmn name)
$sql       = "SELECT * FROM `bill` WHERE `user_sn`='{$user_sn}' order by `bill_date` desc";
$result    = $mysqli->query($sql) or die($mysqli->connect_error);
$all_users = $result->fetch_all(MYSQLI_ASSOC);
var_export($all_users) ;
echo "<br>----------<br>";

$bill_sn = 1;
//JOIN後的檔頭是1D，所以用$result->fetch_assoc()就足夠
$sql = "SELECT a.*,b.*
FROM `bill` AS a JOIN `users` AS b
on a.`user_sn`=b.`user_sn`
WHERE a.`bill_sn`='{$bill_sn}'";
$result = $mysqli->query($sql) or die($mysqli->connect_error);
$bill   = $result->fetch_assoc();
var_export($bill) ;
echo "<br>----------<br>";

//Object-Oriented
/**
 *
 */
class Book
{
    private $title;
    protected $price;
    /*
        public function setTitle($argument)
        {
            $this->title=$argument;
        }

        public function setPrice($argument)
        {
            $this->price=$argument;
        }
    */
    public function __construct($argument1, $argument2)
    {
        $this->title = $argument1;
        $this->price = $argument2;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

/**
 *
 */
class Novel extends Book
{
    public $publisher;

    public function setpublisher($argument3)
    {
        $this->publisher = $argument3;
    }
    public function getPublisher()
    {
        return $this->publisher;
    }
    public function getPrice()//Overriding
    {
        return number_format($this -> price);
    }
}

class BookStore
{
    protected $books = [];

    public function addBook(IBook $Book)
    {
        $book_title = $Book->getTitle();
        $book_price = $Book->getPrice();
        $this->books[$book_title] = $book_price;
    }
    public function getBooks()
    {
        return $this->Books;
    }
}
interface IBook
{
    public function getTitle();
    public function getPrice();
}

$physics = new Book('物理', 1000);
$chmistry = new Book('化學', 2000);
$maths = new Book('數學', 3000);
$novel = new Novel('小說', 4000);

$novel->setpublisher('東大出版社');

echo $physics->getTitle().'價格是'.$physics->getPrice().'元<br>';
echo $chmistry->getTitle().'價格是'.$chmistry->getPrice().'元<br>';
echo $maths->getTitle().'價格是'.$maths->getPrice().'元<br>';
echo $novel->getTitle().'價格是'.$novel->getPrice().'元，出版者：'.$novel->getPublisher().'<br>';
echo "<br>----------<br>";
