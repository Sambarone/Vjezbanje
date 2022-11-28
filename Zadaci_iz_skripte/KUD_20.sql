# ljestve (hash) je komentar i on se ne izvodi
# Izvođenje naredbi na serveru
# Otvoriti CMD
# Zaljepiti sljedeću naredbu bez prvog hash znaka
#naredba ispod označava postavke kodriranja
# c:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 <C:\Users\Samba\Documents\GitHub\vjezbanje\Vjezbanje\Zadaci_iz_skripte\KUD_20.sql

drop database if exists KUD;
create database KUD default charset utf8;
use KUD;

create table clan (
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar (50) not null,
    godina int
);

create table nastup (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    mjesto int,
    datum date
);

create table  mjesto (
    sifra int not null primary key auto_increment,
    naziv varchar (50) not null,
    drzava varchar(50),
    post_broj varchar(50)
);

create table akcija (
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    datum_pocetka date not null,
    clan int,
    nastup int
);

alter table akcija add foreign key (clan) references clan(sifra);
alter table akcija add foreign key (nastup) references nastup(sifra);

alter table  nastup  add foreign key (mjesto) references mjesto (sifra);

#unos članova
insert into clan (sifra, ime,prezime,godina)
values (null, 'Marko','Marić',23),
(null, 'Janko','Marić',22),
(null, 'Ivan','Pavlović',28),
(null, 'Marija','Sakić',32),
(null, 'Mirko','Ljuboja',14),
(null, 'Jasna','Garić',42),
(null, 'Jelena','Ilić',38),
(null, 'Marko','Majer',11);

#unos mjesta
insert into mjesto (sifra,naziv,drzava,post_broj)
values(null,'Ivankovo','Hrvatska',32281),
(null,'Zagreb','Hrvatska',10000),
(null,'Vitez','BiH',null),
(null,'Vinkovci','Hrvatska',32000),
(null,'Berlin','Njemačka',null),
(null,'Osijek','Hrvatska',31000),
(null,'Retkovci','Hrvatska',32283);


insert into nastup (sifra,naziv,mjesto,datum)
values (null,'Sve se čaje okupiše',1,'2022-05-11'),
(null,'Vinkovacke jeseni',4,'2022-09-18'),
(null,'Oktoberfest',5,'2022-05-11'),
(null,'Bosansko sijelo',3,'2021-03-30'),
(null,'Slavonija u srcu',6,'2020-07-11'),
(null,'Susret dramskih amatera',7,'2022-02-21');


# upotreba operatera between
select *from clan
where godina between '20' and '40';



