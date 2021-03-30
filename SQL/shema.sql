--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `id` bigint(20) NOT NULL,
  `techno` enum('html','cgi','js','ajax','php') NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB ;

--
-- Déchargement des données de la table `formations`
--

INSERT INTO `formations` (`id`, `techno`, `date`) VALUES
(1, 'html', '2021-03-03');

-- --------------------------------------------------------

--
-- Structure de la table `technos`
--

CREATE TABLE `technos` (
  `id` bigint(20) NOT NULL,
  `html` enum('-1','0','1','2','3','4','5') NOT NULL,
  `cgi` enum('-1','0','1','2','3','4','5') NOT NULL,
  `js` enum('-1','0','1','2','3','4','5') NOT NULL,
  `ajax` enum('-1','0','1','2','3','4','5') NOT NULL,
  `php` enum('-1','0','1','2','3','4','5') NOT NULL
) ENGINE=InnoDB;



--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB;



