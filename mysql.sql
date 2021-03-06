CREATE TABLE `trip` (
  `trip_sn` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '旅程編號',
  `trip_title` varchar(255) NOT NULL COMMENT '旅程名稱',
  `trip_content` text NOT NULL COMMENT '旅程說明',
  `trip_price` mediumint(8) unsigned NOT NULL COMMENT '旅程價錢',
  `trip_counter` smallint(5) unsigned NOT NULL COMMENT '人氣',
  `trip_date` datetime NOT NULL COMMENT '上架日期',
  PRIMARY KEY (`trip_sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `users` (
  `user_sn` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '使用者編號',
  `user_name` varchar(255) NOT NULL COMMENT '使用者姓名',
  `user_id` varchar(255) NOT NULL COMMENT '使用者帳號',
  `user_passwd` varchar(255) NOT NULL COMMENT '使用者密碼',
  `user_email` varchar(255) NOT NULL COMMENT '使用者信箱',
  `user_sex` enum('先生','女士') NOT NULL COMMENT '使用者性別',
  `user_tel` varchar(255) NOT NULL COMMENT '使用者電話',
  `user_zip` varchar(255) NOT NULL COMMENT '使用者郵遞區號',
  `user_county` varchar(255) NOT NULL COMMENT '使用者縣市',
  `user_district` varchar(255) NOT NULL COMMENT '使用者鄉鎮市區',
  `user_address` varchar(255) NOT NULL COMMENT '使用者地址',
  PRIMARY KEY (`user_sn`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `bill` (
  `bill_sn` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '帳單編號',
  `user_sn` mediumint(8) unsigned NOT NULL COMMENT '購買人',
  `bill_total` mediumint(8) unsigned NOT NULL COMMENT '總金額',
  `bill_date` datetime NOT NULL COMMENT '購買日期',
  `bill_status` varchar(255) NOT NULL COMMENT '處理狀態',
  PRIMARY KEY (`bill_sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `bill_detail` (
  `bill_sn` mediumint(8) unsigned NOT NULL COMMENT '帳單編號',
  `trip_sn` mediumint(8) unsigned NOT NULL COMMENT '商品編號',
  `trip_amount` tinyint(3) unsigned NOT NULL COMMENT '購買數量',
  `trip_total` mediumint(8) unsigned NOT NULL COMMENT '小計',
  PRIMARY KEY (`bill_sn`,`trip_sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
