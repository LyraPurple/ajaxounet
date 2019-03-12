INSERT INTO `trotitinette` (`id`, `marque`, `modèle`, `price`, `image`) VALUES
(1, 'Troticool', 'Slide', 520, 'trotitinette_01.jpg'),
(2, 'ProtTrotte', 'Protéiné', 245, 'trotitinette_02.jpg'),
(3, 'DoudiTrotte', 'Doudi', 666, 'trotitinette_03.jpg'),
(4, 'DoudiTrotte', 'Doudi', 245, 'trotitinette_04.jpg'),
(5, 'Troticool', 'Slide', 520, 'trotitinette_05.jpg'),
(6, 'ProtTrotte', 'Protéiné', 333, 'trotitinette_06.jpg'),
(7, 'Trike', 'BrobinetteX110', 400, 'trotitinette_07.jpg'),
(8, 'DoudiTrotte', 'Doudi', 245, 'trotitinette_08.jpg'),
(9, 'Trike', 'BrobinetteX100', 520, 'trotitinette_09.jpg'),
(10, 'DoudiTrotte', 'Doudi', 80, 'trotitinette_10.jpg'),
(11, 'Trike', 'BrobinetteX2', 60, 'trotitinette_11.jpg'),
(12, 'Trike', 'Protéiné', 245, 'trotitinette_12.jpg');


-- Base de données :  `trotro`
-- --------------------------------------------------------
-- Structure de la table `trotitinette`

CREATE TABLE `trotitinette` (
  `id` int(10) UNSIGNED NOT NULL,
  `marque` varchar(45) DEFAULT NULL,
  `modèle` varchar(45) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `trotitinette`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);
ALTER TABLE `trotitinette`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;



[
{"id":"1","marque":"Troticool","mod\u00e8le":"Slide","price":"520","image":"trotitinette_01.jpg"},
{"id":"2","marque":"ProtTrotte","mod\u00e8le":"Prot\u00e9in\u00e9","price":"245","image":"trotitinette_02.jpg"},
{"id":"3","marque":"DoudiTrotte","mod\u00e8le":"Doudi","price":"666","image":"trotitinette_03.jpg"},
{"id":"4","marque":"DoudiTrotte","mod\u00e8le":"Doudi","price":"245","image":"trotitinette_04.jpg"},
{"id":"5","marque":"Troticool","mod\u00e8le":"Slide","price":"520","image":"trotitinette_05.jpg"},
{"id":"6","marque":"ProtTrotte","mod\u00e8le":"Prot\u00e9in\u00e9","price":"333","image":"trotitinette_06.jpg"},
{"id":"7","marque":"Trike","mod\u00e8le":"BrobinetteX110","price":"400","image":"trotitinette_07.jpg"},
{"id":"8","marque":"DoudiTrotte","mod\u00e8le":"Doudi","price":"245","image":"trotitinette_08.jpg"},
{"id":"9","marque":"Trike","mod\u00e8le":"BrobinetteX100","price":"520","image":"trotitinette_09.jpg"},
{"id":"10","marque":"DoudiTrotte","mod\u00e8le":"Doudi","price":"80","image":"trotitinette_10.jpg"},
{"id":"11","marque":"Trike","mod\u00e8le":"BrobinetteX2","price":"60","image":"trotitinette_11.jpg"},
{"id":"12","marque":"Trike","mod\u00e8le":"Prot\u00e9in\u00e9","price":"245","image":"trotitinette_12.jpg"}
]