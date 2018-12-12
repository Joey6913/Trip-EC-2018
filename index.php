<?php
/*  引入  */
require_once "header.php";

/*  流程控制  */
$op = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$trip_sn = isset($_REQUEST['trip_sn']) ? my_filter($_REQUEST['trip_sn'], "int") : 0;
$trip_title = isset($_REQUEST['trip_title']) ? my_filter($_REQUEST['trip_title'], "string") : '';
$keyword     = isset($_REQUEST['keyword']) ? my_filter($_REQUEST['keyword'], "string") : '';


switch ($op) {
    case 'add_to_cart':
        add_to_cart($trip_sn, $trip_title);
        header("location:index.php");
        exit;
        break;

    default:
        if ($trip_sn) {
            $op = 'trip_display';
            display_trip($trip_sn);
        } else {
            list_trip($keyword);
        }
        break;
}

/*  輸出  */
require_once "footer.php";

/*  本檔案使用函數  */

//旅遊列表
function list_trip($keyword = "")
{
    global $mysqli, $smarty;
    include_once "class/PageBar.php";
    $where   = !empty($keyword) ? "where `trip_title` like '%{$keyword}%' or `trip_content` like '%{$keyword}%'" : "";
    $sql     = "SELECT * FROM `trip` $where ORDER BY `trip_date` desc";
    $PageBar = getPageBar($sql, 3, 10);
    $bar     = $PageBar['bar'];
    $sql     = $PageBar['sql'];
    $total   = $PageBar['total'];
    $result  = $mysqli->query($sql) or die($mysqli->connect_error);
    /*
    利用$mysqli->query()送出執行。
    query()執行後會產生一個『結果物件』(mysqli_result class)，
    將mysqli_result class存到 $result
    query()只負責傳送SQL語法給資料庫，並沒有取回資料的功能
    利用$result這個結果物件其中的fetch_assoc()方法來抓回資料
    fetch_assoc()一次只抓一筆資料
    */
    $i = 0;
    $all_trip=[];//書上的Bug(本來沒有這一行)
    while ($trip = $result->fetch_assoc()) {
        //fetch_assoc()抓出來的資料是一個以『欄位名稱』為索引的一維陣列
        /*
        一維陣列
        $trip = array('trip_sn' => '10',
        'trip_title' => 'OKINAWA',
        'trip_content' => '<p>kkjkjkj</p>',
        'trip_price' => '100',
        'trip_counter' => '0',
        'trip_date' => '2018-10-18 10:21:25',
        );
        一維陣列(換個方式表示array)
        $trip['trip_sn']='10';
        $trip['trip_title']='OKINAWA';
        .....
        */
        $all_trip[$i]        = $trip;
        /*
        二維陣列
        $all_trip['0']['trip_sn']='10';
        $all_trip['0']['trip_title']='OKINAWA';
        .....
        */
        $all_trip[$i]['pic'] = get_trip_pic($trip['trip_sn'], 'thumbs');
        //$all_trip['0']['pic'] = "uploads/thumbs/10.png"
        $i++;
    }

    $smarty->assign('all_trip', $all_trip);
    $smarty->assign('total', $total);
    $smarty->assign('bar', $bar);
}

//觀看某一旅程
function display_trip($trip_sn = '')
{
    global $mysqli, $smarty;
    add_trip_counter($trip_sn); //先+1再讀出
    $sql          = "SELECT * FROM `trip` WHERE `trip_sn`='{$trip_sn}'";
    $result       = $mysqli->query($sql) or die($mysqli->connect_error);
    $trip        = $result->fetch_assoc();
    $trip['pic'] = get_trip_pic($trip_sn);
    $smarty->assign('trip', $trip);
}

//增加旅程計數器
function add_trip_counter($trip_sn)
{
    global $mysqli;

    $sql = "UPDATE `trip` SET `trip_counter`=`trip_counter`+1 WHERE `trip_sn`='{$trip_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
}

//加入購物車
function add_to_cart($trip_sn = '', $trip_title = '')
{
    if (empty($trip_sn)) {
        return;
    }
    $end_time = time() + 365 * 86400;
    setcookie("cart[$trip_sn][trip_amount]", 1, $end_time);
    setcookie("cart[$trip_sn][trip_title]", $trip_title, $end_time);
}
