CREATE TABLE IF NOT EXISTS produit (
  id_produit int(3) NOT NULL AUTO_INCREMENT,
  reference varchar(20) NOT NULL,
  categorie varchar(20) NOT NULL,
  titre varchar(100) NOT NULL,
  description text NOT NULL,
  couleur varchar(20) NOT NULL,
  taille enum('s','m','l','xl') NOT NULL,
  prix int(3) NOT NULL,
  stock int(3) NOT NULL,
  PRIMARY KEY (id_produit),
  UNIQUE KEY reference (reference)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;