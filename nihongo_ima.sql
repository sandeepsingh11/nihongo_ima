-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2020 at 09:05 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nihongo_ima`
--

-- --------------------------------------------------------

--
-- Table structure for table `adjectives`
--

CREATE TABLE `adjectives` (
  `id` int(11) NOT NULL,
  `kanji` char(10) NOT NULL,
  `furi` char(10) NOT NULL,
  `kana` char(10) NOT NULL,
  `romaji` char(20) NOT NULL,
  `type` char(2) NOT NULL,
  `definition` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adjectives`
--

INSERT INTO `adjectives` (`id`, `kanji`, `furi`, `kana`, `romaji`, `type`, `definition`) VALUES
(1, '大きい', 'おおー', 'おおきい', 'ookii', 'i', 'big; large'),
(2, '小さい', 'ちいー', 'ちいさい', 'chiisai', 'i', 'small; little'),
(3, '早い', 'はやー', 'はやい', 'hayai', 'i', 'quick; early'),
(4, '遅い', 'おそー', 'おそい', 'osoi', 'i', 'slow; late'),
(5, '静か', 'しずー', 'しずか', 'shizuka', 'na', 'quiet; peaceful'),
(6, '明るい', 'あかー', 'あかるい', 'akarui', 'i', 'bright; well-lit'),
(7, '暗い', 'くらー', 'くらい', 'kurai', 'i', 'dark; gloomy'),
(8, '便利', 'べんーりー', 'べんり', 'benri', 'na', 'convenient'),
(9, '大変', 'たいーへんー', 'たいへん', 'taihen', 'na', 'difficult'),
(10, '簡単', 'かんーたんー', 'かんたん', 'kantan', 'na', 'easy'),
(11, '可愛い', 'かーわいー', 'かわいい', 'kawaii', 'i', 'cute; pretty'),
(12, '新しい', 'あたらー', 'あたらしい', 'atarashii', 'i', 'new'),
(13, '長い', 'ながー', 'ながい', 'nagai', 'i', 'long'),
(14, '高い', 'たかー', 'たかい', 'takai', 'i', 'tall; expensive'),
(15, '忙しい', 'いそがー', 'いそがしい', 'isogashii', 'i', 'busy; restless'),
(16, '楽しい', 'たのー', 'たのしい', 'tanoshii', 'i', 'fun; happy; enjoyable'),
(17, '古い', 'ふるー', 'ふるい', 'furui', 'i', 'old; aged'),
(18, '強い', 'つよー', 'つよい', 'tsuyoi', 'i', 'strong'),
(19, '有名', 'ゆうーめいー', 'ゆうめい', 'yuumei', 'na', 'famous'),
(20, '元気', 'げんーきー', 'げんき', 'genki', 'na', 'healthy; lively'),
(21, '沢山', 'たくーさんー', 'たくさん', 'takusan', 'na', 'a lot; plenty'),
(22, '綺麗', 'きーれいー', 'きれい', 'kirei', 'na', 'pretty; clean');

-- --------------------------------------------------------

--
-- Table structure for table `nouns`
--

CREATE TABLE `nouns` (
  `id` int(11) NOT NULL,
  `kanji` char(10) NOT NULL,
  `furi` char(10) NOT NULL,
  `kana` char(10) NOT NULL,
  `romaji` char(20) NOT NULL,
  `definition` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nouns`
--

INSERT INTO `nouns` (`id`, `kanji`, `furi`, `kana`, `romaji`, `definition`) VALUES
(1, '猫', 'ねこー', 'ねこ', 'neko', 'cat'),
(2, '犬', 'いぬー', 'いぬ', 'inu', 'dog'),
(3, '鳥', 'とりー', 'とり', 'tori', 'bird'),
(4, '魚', 'さかなー', 'さかな', 'sakana', 'fish'),
(5, '朝', 'あさー', 'あさ', 'asa', 'morning'),
(6, '昼', 'ひるー', 'ひる', 'hiru', 'noon; midday'),
(7, '夜', 'よるー', 'よる', 'yoru', 'evening; night'),
(8, '病院', 'びょうーいんー', 'びょういん', 'byouin', 'hospital; clinic'),
(9, '電車', 'でんーしゃー', 'でんしゃ', 'densha', 'train; electric train'),
(10, '台所', 'だいーどころー', 'だいどころ', 'daidokoro', 'kitchen'),
(11, '大学', 'だいーがくー', 'だいがく', 'daigaku', 'university; college'),
(12, '仕事', 'しーごとー', 'しごと', 'shigoto', 'job'),
(13, '電話', 'でんーわー', 'でんわ', 'denwa', 'phone'),
(14, '学校', 'がっーこうー', 'かっこう', 'gakkou', 'school'),
(15, '川', 'かわー', 'かわ', 'kawa', 'river'),
(16, '手', 'てー', 'て', 'te', 'hand'),
(17, '眼鏡', 'めーがねー', 'めがね', 'megane', 'glasses'),
(18, '部屋', 'へやー', 'へや', 'heya', 'room'),
(19, '子供', 'こーどもー', 'こども', 'kodomo', 'child'),
(20, '時間', 'じーかんー', 'じかん', 'jikan', 'time; hour'),
(21, '雨', 'あめー', 'あめ', 'ame', 'rain'),
(22, '先生', 'せんーせいー', 'せんせい', 'sensei', 'teacher; instructor'),
(23, '学生', 'がくーせいー', 'がくせい', 'gakusei', 'student'),
(24, '年', 'としー', 'とし', 'toshi', 'year'),
(25, '手紙', 'てーがみー', 'てがみ', 'tegami', 'letter'),
(26, '水', 'みずー', 'みず', 'mizu', 'water');

-- --------------------------------------------------------

--
-- Table structure for table `verbs`
--

CREATE TABLE `verbs` (
  `id` int(11) NOT NULL,
  `kanji` char(10) NOT NULL,
  `furi` char(10) NOT NULL,
  `kana` char(10) NOT NULL,
  `romaji` char(20) NOT NULL,
  `type` int(1) NOT NULL,
  `definition` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verbs`
--

INSERT INTO `verbs` (`id`, `kanji`, `furi`, `kana`, `romaji`, `type`, `definition`) VALUES
(1, '走る', 'はしー', 'はしる', 'hashiru', 1, 'to run'),
(2, '歩く', 'あるー', 'あるく', 'aruku', 1, 'to walk'),
(3, '食べる', 'たー', 'たべる', 'taberu', 2, 'to eat'),
(4, '勉強', 'べんーきょうー', 'べんきょう', 'benkyou', 3, 'study'),
(5, '話す', 'はなー', 'はなす', 'hanasu', 1, 'to speak'),
(6, '飲む', 'のー', 'のむ', 'nomu', 1, 'to drink'),
(7, '働く', 'はたらー', 'はたらく', 'hataraku', 1, 'to work'),
(8, '使う', 'つかー', 'つかう', 'tsukau', 1, 'to use'),
(9, '乗る', 'のー', 'のる', 'noru', 2, 'to get on; to board'),
(10, '降りる', 'おー', 'おりる', 'oriru', 2, 'to get off; to descend'),
(11, '上げる', 'あー', 'あげる', 'ageru', 2, 'to give'),
(12, '言う', 'いー', 'いう', 'iu', 1, 'to say'),
(13, '見る', 'みー', 'みる', 'miru', 1, 'to see'),
(14, '持つ', 'もー', 'もつ', 'motsu', 1, 'to possess; to carry'),
(15, '買う', 'かー', 'かう', 'kau', 1, 'to buy'),
(16, '読む', 'よー', 'よむ', 'yomu', 1, 'to read'),
(17, '出る', 'でー', 'でる', 'deru', 2, 'to leave; to go out'),
(18, '待つ', 'まー', 'まつ', 'matsu', 1, 'to wait'),
(19, '作る', 'つくー', 'つくる', 'tsukuru', 1, 'to make; to prepare (food)'),
(20, '行く', 'いー', 'いく', 'iku', 1, 'to go; to be transported (towards)'),
(21, '寝る', 'ねー', 'ねる', 'neru', 2, 'to sleep'),
(22, '泳ぐ', 'およー', 'およぐ', 'oyogu', 1, 'to swim'),
(23, '出す', 'だー', 'だす', 'dasu', 1, 'to take out'),
(24, '立つ', 'たー', 'たつ', 'tatsu', 1, 'to stand up');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adjectives`
--
ALTER TABLE `adjectives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nouns`
--
ALTER TABLE `nouns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verbs`
--
ALTER TABLE `verbs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adjectives`
--
ALTER TABLE `adjectives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `nouns`
--
ALTER TABLE `nouns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `verbs`
--
ALTER TABLE `verbs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
