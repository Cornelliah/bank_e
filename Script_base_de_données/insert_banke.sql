INSERT INTO Administrateur(Email, Mot_dp)
VALUES ('horianehkr@yahoo.com', 'passer');

INSERT INTO Auteur(prenom_a,nom_a)
VALUES('R.', 'Deltour'),
      ('Nassim','Daghighian'),
      ('divers','auteurs'),
      ('Michel','Hansenne'),
      ('Edgar','ALLAN POE'),
      ('Agatha','Christie');



INSERT INTO Document(ID_admin,ID_Auteur,Titre,Thème)
VALUES ('1','1','Du graphisme à l''écriture','Art'),
('1','2','La photographie comme art','Art'),
('1','3', 'Psychologie et développement de l''enfant','Psychologie'),
('1','4','Psychologie de la personnalité','Psychologie'),
('1','5', 'Double assassinat dans la rue Morgue','Roman'),
 ('1','6','La mystérieuse affaire de Styles','Roman');


INSERT INTO `doc_aut`(`ID_Auteur`, `ID_Docu`) VALUES ('1','1'),
INSERT INTO `doc_aut`(`ID_Auteur`, `ID_Docu`) VALUES ('2','2'),
INSERT INTO `doc_aut`(`ID_Auteur`, `ID_Docu`) VALUES ('3','3'),
INSERT INTO `doc_aut`(`ID_Auteur`, `ID_Docu`) VALUES ('4','4'),
 INSERT INTO `doc_aut`(`ID_Auteur`, `ID_Docu`) VALUES ('5','5');