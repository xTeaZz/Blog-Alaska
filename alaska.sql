-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 19 juil. 2018 à 08:05
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `alaska`
--

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias_user` text,
  `id_post` int(11) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_date` date NOT NULL,
  `report` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `alias_user`, `id_post`, `comment_text`, `comment_date`, `report`) VALUES
(11, 'Forteroche', 16, 'Super pour un premier chapitre !', '2018-07-15', 0),
(13, 'Forteroche', 19, 'salut\r\n', '2018-07-19', 0);

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `creation_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `title`, `message`, `creation_date`) VALUES
(16, 'CHAPITRE 1 : LE SURVIVANT', '<p>Mr et Mrs Dursley, qui habitaient au 4, Privet Drive, avaient toujours affirm&eacute; avec la plus grande fiert&eacute; qu\'ils &eacute;taient parfaitement normaux, merci pour eux. Jamais quiconque n\'aurait imagin&eacute; qu\'ils puissent se trouver impliqu&eacute;s dans quoi que ce soit d\'&eacute;trange ou de myst&eacute;rieux. Ils n\'avaient pas de temps &agrave; perdre avec des sornettes.</p>\r\n<p>Mr Dursley dirigeait la Grunnings, une entreprise qui fabriquait des perceuses. C\'&eacute;tait un homme grand et massif, qui n\'avait pratiquement pas de cou, mais poss&eacute;dait en revanche une moustache de belle taille. Mrs Dursley, quant &agrave; elle, &eacute;tait mince et blonde et disposait d\'un cou deux fois plus long que la moyenne, ce qui lui &eacute;tait fort utile pour espionner ses voisins en regardant par-dessus les cl&ocirc;tures des jardins. Les Dursley avaient un petit gar&ccedil;on pr&eacute;nomm&eacute; Dudley et c\'&eacute;tait &agrave; leurs yeux le plus bel enfant du monde.</p>\r\n<p>Les Dursley avaient tout ce qu\'ils voulaient. La seule chose ind&eacute;sirable qu\'ils poss&eacute;daient, c\'&eacute;tait un secret dont ils craignaient plus que tout qu\'on le d&eacute;couvre un jour. Si jamais quiconque venait &agrave; entendre parler des Potter, ils &eacute;taient convaincus qu\'ils ne s\'en remettraient pas. Mrs Potter &eacute;tait la soeur de Mrs Dursley, mais toutes deux ne s\'&eacute;taient plus revues depuis des ann&eacute;es. En fait, Mrs Dursley faisait comme si elle &eacute;tait fille unique, car sa soeur et son bon &agrave; rien de mari &eacute;taient aussi &eacute;loign&eacute;s que possible de tout ce qui faisait un Dursley. Les Dursley tremblaient d\'&eacute;pouvante &agrave; la pens&eacute;e de ce que diraient les voisins si par malheur les Potter se montraient dans leur rue. Ils savaient que les Potter, eux aussi, avaient un petit gar&ccedil;on, mais ils ne l\'avaient jamais vu. Son existence constituait une raison suppl&eacute;mentaire de tenir les Potter &agrave; distance: il n\'&eacute;tait pas question que le petit Dudley se mette &agrave; fr&eacute;quenter un enfant comme celui-l&agrave;.</p>', '2018-07-15'),
(17, 'CHAPITRE 2 : UNE VITRE DISPARAÃŽT', '<p>Il s\'&eacute;tait pass&eacute; pr&egrave;s de dix ans depuis que les Dursley avaient trouv&eacute; au saut du lit leur neveu devant la porte, mais Privet Drive n\'avait quasiment pas chang&eacute;. Ce jour-l&agrave;, le soleil se leva sur les m&ecirc;mes petits jardins proprets en faisant &eacute;tinceler la plaque de cuivre qui portait le num&eacute;ro 4, &agrave; l\'entr&eacute;e de la maison des Dursley. La lumi&egrave;re du matin s\'infiltra dans un living-room exactement semblable, &agrave; quelques d&eacute;tails pr&egrave;s, &agrave; celui o&ugrave; Mr Dursley avait appris par la t&eacute;l&eacute;vision le fameux vol des hiboux, de sinistre m&eacute;moire. Seules les photos exhib&eacute;es sur le manteau de la chemin&eacute;e donnaient une id&eacute;e du temps qui s\'&eacute;tait &eacute;coul&eacute; depuis cette date. Dix ans plus t&ocirc;t, on distinguait sur les nombreux clich&eacute;s expos&eacute;s quelque chose qui ressemblait &agrave;&nbsp;un gros ballon rose coiff&eacute; de bonnets &agrave; pompons de diff&eacute;rentes couleurs. Mais Dudley Dursley n\'&eacute;tait plus un b&eacute;b&eacute; et &agrave; pr&eacute;sent, les photos montraient un gros gar&ccedil;on blond sur son premier v&eacute;lo, sur un man&egrave;ge de f&ecirc;te foraine, devant un ordinateur en compagnie de son p&egrave;re ou serr&eacute; dans les bras de sa m&egrave;re qui le couvrait de baisers. Rien dans la pi&egrave;ce ne laissait deviner qu\'un autre petit gar&ccedil;on habitait la m&ecirc;me maison.</p>\r\n<p>Et pourtant, Harry Potter &eacute;tait toujours l&agrave;, encore endormi pour le moment, mais plus pour longtemps. Car sa tante P&eacute;tunia &eacute;tait bien r&eacute;veill&eacute;e et ce fut sa voix per&ccedil;ante qui rompit pour la premi&egrave;re fois le silence du matin.</p>', '2018-07-15'),
(18, 'CHAPITRE 3 : LES LETTRES DE NULLE PART', '<p>La fuite du boa br&eacute;silien valut &agrave; Harry la plus longue punition qu\'il e&ucirc;t jamais re&ccedil;ue. Lorsqu\'il fut enfin autoris&eacute; &agrave; ressortir de son placard, les vacances d\'&eacute;t&eacute; avaient d&eacute;j&agrave; commenc&eacute; et Dudley avait eu le temps de casser son nouveau cam&eacute;scope, d\'&eacute;craser au sol son avion radio-command&eacute; et d\'&eacute;trenner son v&eacute;lo de course en renversant Mrs Figg qui traversait Privet Drive avec ses b&eacute;quilles.</p>\r\n<p>Harry &eacute;tait content que l\'&eacute;cole ait pris fin, mais il n\'arrivait pas &agrave; &eacute;chapper &agrave; la bande de Dudley qui venait chaque jour &agrave; la maison. Piers, Dennis, Malcolm et Gordon &eacute;taient tous grands et stupides, mais comme Dudley &eacute;tait encore plus grand et plus b&ecirc;te qu\'eux, c\'&eacute;tait lui qui &eacute;tait le chef. Et les autres &eacute;taient ravis de pratiquer le sport pr&eacute;f&eacute;r&eacute; de Dudley: la chasse au Harry.</p>\r\n<p>C\'est pourquoi Harry passait le plus de temps possible hors de la maison, &agrave; se promener dans les environs en pensant &agrave; la fin des vacances qui repr&eacute;sentait pour lui une minuscule lueur d\'espoir. Car en septembre, il entrerait au coll&egrave;ge et, pour la premi&egrave;re fois de sa vie, il ne serait plus dans la m&ecirc;me &eacute;cole que Dudley. Dudley irait &agrave; Smelting, un coll&egrave;ge priv&eacute; o&ugrave; l\'oncle Vernon avait fait ses &eacute;tudes. Piers Polkiss y &eacute;tait inscrit, lui aussi. Harry, pour sa part, devrait se contenter du coll&egrave;ge du quartier. Dudley en &eacute;tait ravi.</p>', '2018-07-15'),
(19, 'CHAPITRE 4 : LE GARDIEN DES CLEFS', '<p>BOUM !BOUM !</p>\r\n<p>On frappa &agrave; nouveau. Dudley se r&eacute;veilla en sursaut.</p>\r\n<p>&mdash;C\'&eacute;tait un coup de canon ? demanda-t-il b&ecirc;tement.</p>\r\n<p>Il y eut un grand bruit derri&egrave;re eux et l\'oncle Vernon entra dans la pi&egrave;ce en glissant par terre. Il tenait un fusil &agrave; la main. A pr&eacute;sent, ils savaient ce que contenait le long paquet qu\'il avait eu sous le bras la veille.</p>\r\n<p>&mdash;Qui est l&agrave; ? cria-t-il. Je vous pr&eacute;viens, je suis arm&eacute; !</p>\r\n<p>Il y eut un instant de silence, puis...</p>\r\n<p>CRAAAAAC !</p>\r\n<p>On cogna sur la porte avec tant de force qu\'elle fut arrach&eacute;e de ses gonds et tomba &agrave; plat sur le sol dans un fracas assourdissant.</p>\r\n<p>Un v&eacute;ritable g&eacute;ant se tenait dans l\'encadrement. Son visage &eacute;tait presque enti&egrave;rement cach&eacute; par une longue crini&egrave;re de cheveux emm&ecirc;l&eacute;s et par une grande barbe broussailleuse, mais on voyait distinctement ses yeux qui brillaient comme deux scarab&eacute;es noirs au milieu de ce foisonnement.</p>', '2018-07-15');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `alias`, `email`, `password`, `admin`) VALUES
(4, 'Forteroche', 'jean.forteroche@gmail.com', '$2y$10$p6jyJG0Fekk/4HeUUy/kQ.8bojJTexkyOeDJPppp.OxxjKMcveQEO', 1),
(6, 'testuser', 'testmail@gmail.com', '$2y$10$nqHc3vySbk0WdiVJv2OK..Fw4gQEq4RFwakj0rrlCHRqBSrcoAvA.', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
