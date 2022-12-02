# c:\xampp\mysql\bin>mysql -uroot  --default_character_set=utf8  <C:\Users\Samba\Documents\GitHub\vjezbanje\Vjezbanje\Baze_za_vjezbanje_s_predavanja\Kolokvij_1.sql

drop database if exists rodbina;
create database rodbina default charset utf8;
use rodbina;


create table sestra (
	sifra int not null primary key auto_increment,
	introventrno bit,
	haljina varchar (31) not null,
	maraka decimal (16,2),
	hlace varchar (46) not null,
	narukvica int not null
);

create table zena(
	 sifra int not null primary key auto_increment,
	 treciputa datetime,
	 hlace varchar (46),
	 kratkamajica varchar (31) not null, 
	 jmbag char (11) not null,
	 bojaociju varchar (39) not null,
	 haljina varchar (46),
	 sestra int not null
	 
	 );


    create table punac (
	sifra int not null primary key auto_increment,
	ogrlica int,
	gustoca decimal (14,9) not null,
	hlace varchar (41) not null  );

    create table cura (
	sifra int not null primary key auto_increment,
	novcica decimal (16,5) not null,
	gustoca decimal (18,6) not null,
	lipa decimal (13,10),
	ogrlica int not null,
	bojakose varchar (38),
	suknja varchar (36),
	punac int

);

create table sestra_svekar (
	sifra int not null primary key auto_increment,
	sestra int not null,
	svekar int not null
	
);
create table muskarac (
	sifra int not null primary key auto_increment,
	bojaociju varchar (50) not null,
	hlace varchar (30),
	modelnaocala varchar (43),
	maraka decimal (14,5) not null,
	zena int not null
	
);

create table  svekar (
	sifra int not null primary key auto_increment,
	bojaociju varchar (40) not null,
	prstena int,
	dukserica varchar (41),
	lipa decimal (13,8),
	eura decimal (12,7),
	majica varchar (35)
	
	
);
create table  mladic (
	sifra int not null primary key auto_increment,
	suknja varchar (50) not null,
	kuna decimal (16,8) not null,
	drugiputa datetime,
	asocijalno bit, 
	ekstrovertno bit not null,
	dukserica varchar (48) not null,
	muskarac int
	
	
);



alter table zena add foreign key (sestra) references sestra (sifra);

alter table cura add foreign key (punac) references punac (sifra);

alter table muskarac add foreign key (zena) references zena (sifra);
alter table mladic add foreign key (muskarac) references muskarac (sifra);


alter table sestra_svekar add foreign key (svekar) references svekar (sifra);
alter table sestra_svekar add foreign key (sestra) references sestra (sifra);


insert into sestra (sifra,introventrno,haljina,maraka,hlace,narukvica)
values (null,1,'plava',17.4,'farmerke',2),
(null,3,'zelena',15.4,'rifle',4),
(null,4,'žuta',11.4,'poderane',3);



insert into zena (sifra,treciputa,hlace,kratkamajica,jmbag,bojaociju,haljina,sestra)
values (null,'2022-11-11','plave','žuta',0101258,'zelena','modra',1),
(null,'2018-01-04','zelene','crvena',5256852,'crna','svila',1),
(null,'2000-02-11','bež','zelena',1234567,'plave','vuna',1);


insert into muskarac (sifra,bojaociju,hlace,modelnaocala,maraka,zena)
values (null,'plava','farmerke','Ray ban',16.3,1),
(null,'zelena','rifle','Police',78.5,2),
(null,'crna','mustang','Tom Tailor',99.2,3);


insert into svekar (sifra,bojaociju,prstena,dukserica,lipa,eura,majica)
values (null,'plava',3,'crna',5.3,44,'zelena'),
(null,'crna',3,'bijela',88.3,44,'bijela'),
(null,'žuta',3,'roza',11.3,44,'bež');

insert into sestra_svekar (sifra,sestra,svekar)
values (null,1,1),
(null,2,2),
(null,3,3);

/*

# postavlanje vrijednosti svim curama tablice gustoća na 15.77
update cura set gustoća =15.77;

#brisanje svih mladica koji imaju više od 15.78 kuna
delete from mladic where kuna >15.78;


# izslistavanje kratkih majica svih žena koje u hlačama imaju vrijednost ana
select kratkamajica from zena
where hlace like '%ana';
	

*/