drop table if exists LIEU;
create table LIEU(
  id_lieu int not null auto_increment,
  nom_lieu varchar(60),
  PRIMARY KEY(id_lieu))Engine=InnoDB;

drop table if exists TYPE_EMPLACEMENT;
create table TYPE_EMPLACEMENT(
  id_type_emplacement int not null auto_increment,
  libelle_type_emplacement varchar(60),
  PRIMARY KEY(id_type_emplacement))Engine=InnoDB;
  
drop table if exists MODE_PAIEMENT;
create table MODE_PAIEMENT(
  id_mode_paiement int not null auto_increment,
  libelle_mode_paiement varchar(60),
  PRIMARY KEY(id_mode_paiement))Engine=InnoDB;

drop table if exists PERSONNE;
create table PERSONNE(
	id_personne int not null auto_increment,
 	nom_personne varchar(60),
	prenom varchar(60),
  	adresse_email varchar(60),
  	estPersonel boolean DEFAULT 0,
  PRIMARY KEY(id_personne))Engine=InnoDB;
  

drop table if exists EMPLACEMENT;
create table EMPLACEMENT(
	id_emplacement int not null auto_increment,
 	prix_emplacement int,
	id_type_emplacement int not null,
  PRIMARY KEY(id_emplacement))Engine=InnoDB;

drop table if exists RESERVATION;
create table RESERVATION(
	id_reservation int not null auto_increment,
	montant_total int,
	date_debut date,
	date_fin date,
	id_personne int not null,
	id_emplacement int not null,
	FOREIGN KEY(id_personne) REFERENCES PERSONNE(id_personne),
	FOREIGN KEY(id_emplacement) REFERENCES EMPLACEMENT(id_emplacement),
  PRIMARY KEY(id_reservation))Engine=InnoDB;
  
create table ACCOMPAGNE(
	id_pere int not null,
	id_fils int not null,
	id_reservation int not null,
	primary key(id_pere, id_fils, id_reservation),
	foreign key(id_pere) references PERSONNE(id_personne),
	foreign key(id_fils) references PERSONNE(id_personne),
	foreign key(id_reservation) references RESERVATION(id_reservation))Engine=InnoDB;

drop table if exists FACTURE;
create table FACTURE(
	id_facture int not null auto_increment,
 	description_facture varchar(120),
	montant_facture int,
	date_facture date,
	id_reservation int not null,
	FOREIGN KEY(id_reservation) REFERENCES RESERVATION(id_reservation),
  PRIMARY KEY(id_facture))Engine=InnoDB;

drop table if exists ACTIVITE;
create table ACTIVITE(
	id_activite int not null auto_increment,
	nom_activité varchar(60),
	id_lieu int not null,
	FOREIGN KEY(id_lieu) REFERENCES LIEU(id_lieu),
	PRIMARY KEY(id_activite))Engine=InnoDB;

drop table if exists ANIME;
create table ANIME(
	id_personne int not null,
	id_activite int not null,
	date_anime date,
	FOREIGN KEY(id_personne) REFERENCES PERSONNE(id_personne),
	FOREIGN KEY(id_activite) REFERENCES ACTIVITE(id_activite),
	PRIMARY KEY(id_activite,id_personne))Engine=InnoDB;

drop table if exists PARTICIPE;
create table PARTICIPE(
	id_personne int not null,
	id_activite int not null,
	date_participe date,
	FOREIGN KEY(id_personne) REFERENCES PERSONNE(id_personne),
	FOREIGN KEY(id_activite) REFERENCES ACTIVITE(id_activite),
	PRIMARY KEY(id_activite,id_personne))Engine=InnoDB;

drop table if exists PAYEE;
create table PAYEE(
	id_facture int not null,
	id_mode_paiement int not null,
	FOREIGN KEY(id_facture) REFERENCES FACTURE(id_facture),
	FOREIGN KEY(id_mode_paiement) REFERENCES MODE_PAIEMENT(id_mode_paiement),
	PRIMARY KEY(id_facture,id_mode_paiement))Engine=InnoDB;

drop table if exists TEL;
create table TEL(
	numTelephone int not null,
	id_personne int not null,
	primary key (numTelephone),
	foreign key (id_personne) references PERSONNE(id_personne))Engine=InnoDB;
	
