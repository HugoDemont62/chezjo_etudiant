
CREATE TABLE `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `img_url` varchar(100),
  PRIMARY KEY (id)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

insert into categorie (slug, nom, img_url) values ('bagnats','Nos Bagnats', 'public/images/categories/bagnat.jpg');
insert into categorie (slug, nom, img_url) values ('salades','Nos Salades', 'public/images/categories/salade.webp');
insert into categorie (slug, nom, img_url) values ('paninis','Nos Paninis', 'public/images/categories/panini.webp');
insert into categorie (slug, nom, img_url) values ('sauces-froides','Nos Sauces froides', 'public/images/categories/sauce-froide.jpg');
insert into categorie (slug, nom, img_url) values ('frites','Nos Frites', 'public/images/categories/frites.jpg');
insert into categorie (slug, nom, img_url) values ('wraps-froids','Nos Wraps Froids', 'public/images/categories/wrap-froid.jpg');
insert into categorie (slug, nom, img_url) values ('wraps-chaud','Nos Wraps Chauds', 'public/images/categories/wrap-chaud.webp');
insert into categorie (slug, nom, img_url) values ('burgers','Nos Burgers', 'public/images/categories/burger.jpg');
insert into categorie (slug, nom, img_url) values ('montagnards','Nos Montagnards', 'public/images/categories/montagnard.jpg');
insert into categorie (slug, nom, img_url) values ('brochettes','Nos Brochettes', 'public/images/categories/brochette.jpg');




CREATE TABLE `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prix` decimal(8,2) NOT NULL,
  `idCategorie` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

insert into produit (nom, description, prix, idCategorie) values ('Thon','Faluche ou baguette - préparation de thon mayonnaise - salade - tomates - concombre - oeufs durs', 5.5, 1);
insert into produit (nom, description, prix, idCategorie) values ('Crabe','Faluche ou baguette - préparation de crabe surimi - salade - tomates - concombre - oeufs durs', 5.5,  1);
insert into produit (nom, description, prix, idCategorie) values ('Poulet','Faluche ou baguette - préparation de poulet mayonnaise - salade - tomates - concombre - oeufs durs', 5.5, 1);
insert into produit (nom, description, prix, idCategorie) values ('La Caesar Salade','Salade, tomates, fromages, oeufs, concombres, oignons frits, poulet croustillant, croutons et vinaigrette', 8.9,  2);
insert into produit (nom, description, prix, idCategorie) values ('La Frenchy','Salade, tomates, concombres, oignons frits, croutons, jambon de Bayonne, camembert chaud sur toasts et vinaigrette', 9.5,  2);
insert into produit (nom, description, prix, idCategorie) values ('La Salade de chèvre chaud','Salade, tomates, concombres, oignons frits, croutons, lardons, chèvre chaud sur toasts et vinaigrette', 9.5,  2);
insert into produit (nom, description, prix, idCategorie) values ('Panini 1 Fromage','Pain Falluche composé de sauce provençale, jambon, tomates et fromage au choix', 6,  3);
insert into produit (nom, description, prix, idCategorie) values ('Panini 2 Fromages','Pain Falluche composé de sauce provençale, jambon, tomates et 2 fromages au choix', 7,  3);
insert into produit (nom, description, prix, idCategorie) values ('Panini 3 ou 4 Fromages','Pain Falluche composé de sauce provençale, jambon, tomates et 3 ou 4 fromages au choix', 8,  3);
insert into produit (nom, description, prix, idCategorie) values ('Panini Bolognaise','Pain Falluche avec de la bolognaise maison, des tomates et du gruyère', 8,  3);
insert into produit (nom, description, prix, idCategorie) values ('Mayonnaise','', 0.80,  4);
insert into produit (nom, description, prix, idCategorie) values ('Ketchup','', 0.80,  4);
insert into produit (nom, description, prix, idCategorie) values ('Hannibal','', 0.80,  4);
insert into produit (nom, description, prix, idCategorie) values ('Chti','', 0.80,  4);
insert into produit (nom, description, prix, idCategorie) values ('Pita','', 0.80,  4);
insert into produit (nom, description, prix, idCategorie) values ('Andalouse','', 0.80,  4);
insert into produit (nom, description, prix, idCategorie) values ('Samourai','', 0.80,  4);
insert into produit (nom, description, prix, idCategorie) values ('Petite','', 3.50,  5);
insert into produit (nom, description, prix, idCategorie) values ('Grande','', 5,  5);
insert into produit (nom, description, prix, idCategorie) values ('Frites cheddar','', 5.50,  5);
insert into produit (nom, description, prix, idCategorie) values ('Thon','En galette, composé de salade, tomates, oeufs et concombres', 6.50,  6);
insert into produit (nom, description, prix, idCategorie) values ('Crabe','En galette, composé de salade, tomates, oeufs et concombres', 6.50,  6);
insert into produit (nom, description, prix, idCategorie) values ('Poulet','En galette, composé de salade, tomates, oeufs et concombres', 6.50,  6);
insert into produit (nom, description, prix, idCategorie) values ('Saumon fumé','En galette, composé de mayonnaise, salade, tomates, oeufs durs, avocat et concombres', 8,  6);



CREATE TABLE `commande` (
                           `id` int(11) NOT NULL AUTO_INCREMENT,
                           `nom` varchar(255) NOT NULL,
                           `tel` varchar(255) NOT NULL,
                           `date` date NOT NULL,
                           `commande` varchar(255) NOT NULL,
                           PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;