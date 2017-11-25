SET NAMES UTF8;
DROP DATABASE IF EXISTS cf;
CREATE DATABASE cf CHARSET=UTF8;
USE cf;
create table cf_user(
	u_id int primary key auto_increment,
	u_name varchar(9),
	u_pwd varchar(7)
	
);
insert into cf_user values(NULL,'admin','123456');

CREATE TABLE `cf_message` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_uname` varchar(20) NOT NULL,
  `u_title` varchar(200) NOT NULL,
  `m_nation` varchar(100) DEFAULT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `m_ischeck` varchar(100) DEFAULT NULL,
  `m_article` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;


INSERT INTO `cf_message` VALUES ('21', '飒飒', '习近平将访东南亚两国 首次出席APEC峰会', '中国', '2016-09-17 03:13:23', '是', 'sSSCct');
INSERT INTO `cf_message` VALUES ('22', 'SQSQSQSQ', '最高法:谎称炸弹致航班备降者从重追刑责', '美国', '2016-09-17 03:13:30', '是', 'sSSCct');
INSERT INTO `cf_message` VALUES ('23', 'SQSQSQSQ', '华北大部遭遇雾霾天 北京全城陷重污染', '美国', '2016-09-17 03:13:35', '是', 'sSSCctSQSQSQS');
INSERT INTO `cf_message` VALUES ('24', '撒飒飒', '\"环保专家\"董良杰涉嫌寻衅滋事被刑拘', '美国', '2016-09-17 03:13:56', '是', '撒飒飒');
INSERT INTO `cf_message` VALUES ('25', '撒飒飒', '中央巡视组：重庆对一把手监督不到位', '美国', '2016-09-17 03:14:07', '是', '撒飒飒');
INSERT INTO `cf_message` VALUES ('26', '撒飒飒', '囧!悍马没改好成华丽马车(图)', '美国', '2016-09-17 03:14:10', '是', '撒飒飒');
INSERT INTO `cf_message` VALUES ('27', '撒飒飒', '澳门黄金周加派稽查人员监察出租车违规行为', '美国', '2016-09-17 03:14:11', '是', '撒飒飒');
INSERT INTO `cf_message` VALUES ('28', '撒飒飒', '香港环境局长吁民众支持政府扩建堆填区', '美国', '2016-09-17 03:14:13', '是', '撒飒飒');
INSERT INTO `cf_message` VALUES ('29', '撒飒飒', '香港环境局长吁民众支持政府扩建堆填区', '美国', '2016-09-17 03:14:13', '是', '撒飒飒');
INSERT INTO `cf_message` VALUES ('30', '撒飒飒', '香港环境局长吁民众支持政府扩建堆填区', '美国', '2016-09-17 03:14:29', '是', '撒飒飒');
INSERT INTO `cf_message` VALUES ('31', '撒飒飒', '香港环境局长吁民众支持政府扩建堆填区', '美国', '2016-09-17 03:14:29', '是', '撒飒飒');
INSERT INTO `cf_message` VALUES ('32', '撒飒飒', '香港环境局长吁民众支持政府扩建堆填区', '美国', '2016-09-17 03:14:33', '是', '撒飒飒');
INSERT INTO `cf_message` VALUES ('33', '撒飒飒', '香港环境局长吁民众支持政府扩建堆填区', '美国', '2016-09-17 03:14:35', '是', '撒飒飒');
INSERT INTO `cf_message` VALUES ('34', '撒飒飒', '香港环境局长吁民众支持政府扩建堆填区', '美国', '2016-09-17 03:14:41', '是', '撒飒飒');
INSERT INTO `cf_message` VALUES ('35', '撒飒飒', '香港环境局长吁民众支持政府扩建堆填区', '美国', '2016-09-17 03:14:43', '是', '撒飒飒');
INSERT INTO `cf_message` VALUES ('36', '撒飒飒', '香港环境局长吁民众支持政府扩建堆填区', '美国', '2016-09-17 03:14:45', '是', '撒飒飒');
INSERT INTO `cf_message` VALUES ('37', '撒飒飒', '香港环境局长吁民众支持政府扩建堆填区', '美国', '2016-09-17 03:14:47', '是', '撒飒飒');
INSERT INTO `cf_message` VALUES ('38', '按时', '香港环境局长吁民众支持政府扩建堆填区', '中国', '2016-09-17 03:15:24', '是', '撒爱上');
INSERT INTO `cf_message` VALUES ('39', 'asasa', '香港环境局长吁民众支持政府扩建堆填区', '中国', '2016-09-17 06:12:57', '是', 'sasas');
INSERT INTO `cf_message` VALUES ('40', 'asasa', '香港环境局长吁民众支持政府扩建堆填区', '中国', '2016-09-17 06:13:04', '是', 'sasas');
INSERT INTO `cf_message` VALUES ('41', 'sasas', '香港环境局长吁民众支持政府扩建堆填区', '中国', '2016-09-17 06:22:38', '否', 'asasasas');
INSERT INTO `cf_message` VALUES ('42', '腌臜', '香港环境局长吁民众支持政府扩建堆填区', '中国', '2016-09-17 06:26:34', '否', '爱咋咋');
INSERT INTO `cf_message` VALUES ('43', 'sasasasas', 'asasasasa', '英国', '2016-09-17 17:44:25', '是', 'asasas');
SET FOREIGN_KEY_CHECKS=1;


create table cf_information_total(
	u_inid int primary key auto_increment,
	u_intitle varchar(20),
	u_total_num int
	
);
insert into cf_information_total values(null,'会员数',10);
insert into cf_information_total values(null,'文档数',20);
insert into cf_information_total values(null,'普通文章',30);
insert into cf_information_total values(null,'软件',40);
insert into cf_information_total values(null,'评论数',2);