# Affichage de la table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(20) NOT NULL DEFAULT '',
  `prenom` varchar(20) NOT NULL DEFAULT '',
  `nom` varchar(20) NOT NULL DEFAULT '',
  `birthday` date NOT NULL,
  `sexe` tinyint(1) NOT NULL COMMENT '1 = H/2 = F',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `login`, `password`, `prenom`, `nom`, `birthday`, `sexe`)
VALUES
	(1,'natlanaros@live.fr','mdp','Altan','Soran','1998-06-09',0),
	(2,'0627804078','mdp','Altan','Soran','1998-06-09',0),
	(8,'a','a','a','a','2009-03-06',0);
