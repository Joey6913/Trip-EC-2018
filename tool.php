<?php
/*  引入  */
require_once "header.php";
if (!$isAdmin) {
    header("location:index.php");
    exit;
}

/*  流程控制  */
$op = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$trip_sn = isset($_REQUEST['trip_sn']) ? my_filter($_REQUEST['trip_sn'], "int") : 0;

switch ($op) {
    case 'trip_form':
        trip_form($trip_sn);
        break;
    case 'update_trip':
        update_trip($trip_sn);
        header("location:index.php?trip_sn={$trip_sn}");
        exit;
        break;
    case 'delete_trip':
        delete_trip($trip_sn);
        header("location:index.php");
        exit;
        break;
    case 'insert_trip':
        $trip_sn = insert_trip();
        header("location:index.php?trip_sn={$trip_sn}");
        exit;
        break;
}

/*  輸出  */
require_once "footer.php";

/*  本檔案使用函數  */

//旅程編輯表單
function trip_form($trip_sn)
{
    global $mysqli, $smarty;
    //17.1.1 自動找出欄位名稱，並給空值(避免smarty出現錯誤)
    if (empty($trip_sn)) {
        $sql    = "EXPLAIN `trip`";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        while (list($field_name) = $result->fetch_row()) {
            $trip[$field_name] = '';
        }
    } else {
        $sql          = "SELECT * FROM `trip` WHERE `trip_sn`='{$trip_sn}'";
        $result       = $mysqli->query($sql) or die($mysqli->connect_error);
        $trip        = $result->fetch_assoc();
        $trip['pic'] = get_trip_pic($trip_sn, 'thumbs');
    }
    $smarty->assign('trip', $trip);
}

//更新旅程表單
function update_trip($trip_sn)
{
    global $mysqli;
    //過濾要存到資料庫的資料
    foreach ($_POST as $var_name => $var_val) {
        $$var_name = $mysqli->real_escape_string($var_val);
    }

    $trip_date = date("Y-m-d H:i:s");

    $sql = "UPDATE `trip` SET
    `trip_title`='{$trip_title}',
    `trip_content`='{$trip_content}',
    `trip_price`='{$trip_price}',
    `trip_date`='{$trip_date}'
    WHERE `trip_sn`='{$trip_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    save_trip_pic($trip_sn);
}

//刪除旅程
function delete_form($trip_sn)
{
    global $mysqli;
    $sql = "DELETE FROM `trip` WHERE `trip_sn`='{$trip_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    delete_trip_pic($trip_sn);
}

//刪除圖片
function delete_trip_pic($trip_sn = "")
{
    if (file_exists("uploads/trip/{$trip_sn}.png")) {
        unlink("uploads/trip/{$trip_sn}.png");
    }
    if (file_exists("uploads/thumbs/{$trip_sn}.png")) {
        unlink("uploads/thumbs/{$trip_sn}.png");
    }
}

//儲存旅程
function insert_trip()
{
    global $mysqli;
    //過濾要存到資料庫的資料
    foreach ($_POST as $var_name => $var_val) {
        $$var_name = $mysqli->real_escape_string($var_val);
    }


    $trip_date    = date("Y-m-d H:i:s");

    $sql = "INSERT INTO `trip` (`trip_title`, `trip_content`, `trip_price`, `trip_counter`, `trip_date`) VALUES ('{$trip_title}', '{$trip_content}', '{$trip_price}', '0', '{$trip_date}')";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $trip_sn = $mysqli->insert_id;
    save_trip_pic($trip_sn);
    return $trip_sn;
}

//儲存圖片
function save_trip_pic($trip_sn = "")
{
    include_once "class/upload/class.upload.php";
    $pic = new Upload($_FILES['trip_pic'], 'zh_TW');
    if ($pic->uploaded) {
        //大圖
        $pic->file_new_name_body = $trip_sn;
        $pic->file_overwrite     = true;
        $pic->image_resize       = true;
        $pic->image_x            = 600;
        $pic->image_y            = 400;
        $pic->image_convert      = 'png';
        $pic->image_ratio_crop   = true;
        $pic->Process('uploads/trip/');
        if (!$pic->processed) {
            return 'error : ' . $pic->error;
        }
        //縮圖
        $pic->file_new_name_body = $trip_sn;
        $pic->file_overwrite     = true;
        $pic->image_resize       = true;
        $pic->image_x            = 300;
        $pic->image_y            = 200;
        $pic->image_convert      = 'png';
        $pic->image_ratio_crop   = true;
        $pic->Process('uploads/thumbs/');
        if ($pic->processed) {
            $pic->Clean();
        } else {
            return 'error : ' . $pic->error;
        }
    }
}
