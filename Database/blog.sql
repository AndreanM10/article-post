-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 08:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` mediumint(8) UNSIGNED NOT NULL COMMENT '流水號',
  `title` varchar(400) NOT NULL COMMENT '文章標題',
  `info` varchar(400) NOT NULL COMMENT '相關資訊',
  `date` date NOT NULL COMMENT '活動日期',
  `counter` smallint(5) UNSIGNED NOT NULL COMMENT '點閱數',
  `content` text NOT NULL COMMENT '文章內容',
  `cate_id` tinyint(3) UNSIGNED NOT NULL COMMENT '分類編號'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `info`, `date`, `counter`, `content`, `cate_id`) VALUES
(1, '滿載沉甸甸的愛 慈懿會與學生聯手為土敘震災募心募愛', '撰稿：秘書室文宣公關組 葉秀品、蔡淵轅；拍照：秘書室文宣公關組 蔡淵轅', '2020-01-11', 12, '重達20多斤（相當於12公斤）的滷豆乾，讓上了年紀（平均66歲）的懿德媽媽，一路從桃園中壢扛到學校。超過200公里的路途，只為了成就年僅15至16歲的學生，想為土敘強震災民盡一份心力！\r\n\r\n即使有了行善的念頭，還得實際付諸行動，才能累積成助人的力量。所以，護五一戊的慈誠爸爸、懿德媽媽（吳麗珠、李仁慈、李玉美、孫麗卿、張玉珍、張珍惠、郭美英、陳秀珍、陳婉麗、黃麗珠、曾祥生）承擔90％工作，從買菜、備料到料理，都一手包辦。學生只需負責預購訂單彙整、規劃外送動線，並趁午休時間送到各處室單位，體驗人生第一次的「熊貓＋吳柏毅」外送員！\r\n\r\n「相較於懿德媽媽，我們做的，真的很有限！」護五一戊的林恩祈表示，儘管最困難、最耗時的料理都完成了，沒想到卻溝通不良，導致重複送餐、餐點延遲。就算耽擱了一點時間，總算是順利完成任務。原來，光送餐，也有這麼多環節要注意！\r\n\r\n對於擁有豐富義賣經驗的懿德媽媽來說，該注意的眉角，早就爛熟於心，卻刻意的hold住，不發表任何意見。懿德媽媽張玉珍表示，「因為，教育是需要等待的，先讓孩子找解決方法，等到最後關頭，才能出手救援！」尤其，慈濟志工最看重的，不是義賣了多少份，而是學生滿滿的熱誠，更把肯定的光環和掌聲，都留給了孩子。\r\n\r\n班導師潘昭貴表示，不論是慈誠爸爸、懿德媽媽的身教和言教，都是學生很棒的學習對象，更能增加彼此互動，還能提供教科書與課堂外的啟發和成長，更讓學生深刻體會到「有心，就不難」！', 1),
(2, '你想要更認識我們嗎？', '撰稿、拍照：學務處學生諮商暨生涯輔導中心 葉麒', '2021-02-02', 2, '你知道學務處學生諮商暨生涯輔導中心與資源教室，有提供哪些服務嗎？三月二十日至二十一日，學諮中心設計「你想要更認識我們嗎？」闖關活動，加深學生對學諮中心與資源教室認識。\r\n\r\n第一關，志工製作題目板，讓學生隨機抽題，增加答題趣味性。答題過程中，也可與朋友共同討論正確答案，也特別介紹學諮中心並非學業諮詢，而是心理諮商服務；第二關，學生可挑選感到好奇或困惑的服務項目卡，經過志工詳細介紹與說明後，就可以參加戳戳樂關卡，拿到小禮物。\r\n\r\n參與學生表示，更了解學諮中心與資源教室提供哪些服務。99.2％學生表示未來有需要，願意使用學諮中心與資源教室資源；98.5％學生會鼓勵朋友，使用學諮中心與資源教室的服務。', 2),
(4, '月桃香氛槌DIY', '撰稿：圖書館資訊服務組 陳惠玲；拍照：圖書館讀者服務組 王蘭君', '2021-04-04', 6, '為了提高加強森林可持續管理、養護和發展，並廣邀民間社團加入，為保護森林做出貢獻，聯合國宣布三月二十一日為世界森林日。所以，圖書館以世界森林日為三月主題，三月二十四日，舉辦月桃香氛搥DIY課程，邀請林務局池南自然教育中心環境教育講師吳明勳和繆佩蓁，教導製作月桃香氛搥。\r\n\r\n吳明勳環境教育講師分享月桃葉相關知識。月桃葉是莫氏樹蛙棲息睡覺的好地方，也深受其他昆蟲喜愛。開花時節，蝴蝶、蜜蜂會來採蜜，台灣獼猴還會吃月桃花苞，鳥類也愛吃成熟的月桃果實。而原住民族（賽德克族、阿美族、噶瑪蘭族、撒奇萊雅族、泰雅族、太魯閣族）會利用月桃纖維，即是月桃葉鞘部分，曬乾修整編織，製作成生活用品或器物。\r\n\r\n曬乾的月桃葉散發淡淡清香。繆佩蓁環境教育講師將乾燥後被剪成細條狀的月桃葉分堆，用棉花包裹，再用彈性布套裝袋。最後將木棍插入，在最外層套上花布，綑綁塑形後就大功告成。平時，大家經常久坐不動，容易腰酸背痛。就可使用按摩搥，敲敲打打、疏通筋絡，減輕痠痛感。參與人員表示，對月桃功能更加了解，增長不少生活常識。', 4),
(5, '112學年度護理公費專班獨招 262人報考 68％考生符合雙重身份', '撰稿：秘書室文宣公關組 葉秀品；拍照：秘書室文宣公關組 蔡淵轅', '2023-04-15', 15, '四月十五日，舉辦112學年度五專護理科專班獨立招生考試，共262人報名，爭取100名公費生資格。不但有歷史悠久的原住民專班，還有今年首度招生的衛福部玉里醫院花東專班，分別錄取50人。尤其，玉里醫院花東專班僅限設籍於花蓮、台東的考生報名，所以，多達68％的考生同時具備「原住民」和「設籍花東」的雙重身份，也就是錄取機率倍增！', 3),
(6, '不出國也吃得到東南亞美食 國際學生聯誼會為土敘地震災民募心募愛', '撰稿：秘書室文宣公關組 葉秀品、蔡淵轅；拍照：秘書室文宣公關組 蔡淵轅、護四三甲 郭佳文、護四二丁 施怡華', '2023-03-08', 11, '土敘7.8強震（02/06）至今已一個月，造成5萬多人罹難，許多人在睡夢中被壓死，或被倒塌的建築物掩埋。至少有超過21萬棟房舍被震垮，影響1,400多萬人，幾乎是土耳其六分之一的人口。根據聯合國開發計畫署（U.N. Development Programme）估算，土耳其災害損失超過1,000億美金。如今，災民只能暫住沒水沒電的帳棚，還得被迫適應半夜零下三度的低溫，亟需物資援助。\r\n\r\n三月八日，人文室和國際學生聯誼會（外籍生社團）合作，主打「不出國也吃得到東南亞美食」！像是馬來西亞叻沙、印度煎餅、泰國東炎（TomYam）炒麵和印尼加多加多（Gado-gado），不但是台灣人接受度最高，也是網路票選、超推、必吃的平民美食！尤其，不接受預約，各限量50份，先到先得！所得更全數捐贈慈濟的國際賑災。\r\n\r\n護二一丙的陳蔚勤（馬來西亞籍）表示，限量販售東南亞美食，並不是跟風「飢餓行銷」的手段，而是分散各科系的外籍生考試多寡、空堂（沒課的時間）不一，連籌備會議都只能趁晚上採視訊進行。不過，大家依舊有相同的共識，就是要為土敘地震災民盡一份心力，也能讓更多人認識外籍生家鄉的好味道。\r\n\r\n首度登場的加多加多（Gado-gado），可是妥妥的道地印尼平民早餐，也就是混合生菜、白菜、長豆、炸豆腐、雞蛋，再搭配靈魂醬料－特製沙嗲醬（含敲碎的花生粒）。甜甜的醬料搭配清爽蔬菜，每一口都能吃到花生香，豐富的口感，令人食指大動！然而，在台灣卻找不到印尼風味的沙嗲醬，只能打電話回家跟媽媽求救，改採DIY動手做！\r\n\r\n資四二甲的謝武昇（印尼籍）表示，正宗的沙嗲醬需要將乾辣椒、洋蔥、香茅、小茴香等辛香料切碎後爆香，再依序混和椰奶和花生醬，最後再加入椰糖和甜醬油調味，不但跑遍菜市場、雜貨舖、超市，才買齊必備食材，還花費1.5小時才完成，真的是「滴滴皆辛苦」。', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
