# c:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\Samba\Documents\GitHub\vjezbanje\Vjezbanje\knjiznica_vodjinci.sql

drop database if exists knjiznica_vodjinci;
create database knjiznica_vodjinci;
use knjiznica_vodjinci;

create table autor (
    sifra int primary key not null auto_increment,
    ime varchar(50) not null,
    prezime varchar (50) not null,
    datum_rodjenja date
);


create table izdavac (
sifra int primary key not null  auto_increment,
naziv varchar(50) not null,
aktivan boolean
);

create table mjesto (
sifra int not null primary key auto_increment,
naziv varchar(50) not null,
pošt_broj int,
drzava varchar(50)
);

create table knjiga(
sifra int not null primary key auto_increment,
naslov varchar(50) not null,
autor int,
izdavac int,
mjesto int,
cijena decimal (18,2)
);

alter table knjiga add foreign key (autor) references autor (sifra);
alter table knjiga add foreign key (izdavac) references izdavac (sifra);
alter table knjiga add foreign key (mjesto) references mjesto (sifra);

#unos podataka u tablicu autor
insert into autor (sifra,ime,prezime,datum_rodjenja)
values(null,'Ivana','Brlic Mazuranic','1886-11-05'),
(null,'Fjodor','Dostojevski','1824-10-08'),
(null,'Thomas','Mann','1911-12-03'),
(null,'Ivan','Gundulić','1672-02-11'),
(null,'Jordan','Peterson','1958-07-01'),
(null,'Miro','Gavran','1975-11-08');


# unos podataka u tablicu izdavac
insert into izdavac (sifra, naziv, aktivan)
values(null,'Školska knjiga',true),
(null,'Verbum',true),
(null,'Kršćanska sadašnjost',1),
(null,'Mozaik',false),
(null,'Alfa',true);

#unos podataka u tablicu mjesto
insert into mjesto (sifra,naziv,pošt_broj,drzava)
values (null,'Zagreb',10000,'Hrvatska'),
(null,'Moskva',12585000,'Rusija'),
(null,'Berlin',45000,'Njemačka'),
(null,'Dubrovnik',31000,'Hrvatska'),
(null,'Beograd',81000,'Srbija');


#unos podataka u tablicu knjiga
insert into knjiga (sifra,naslov,autor,izdavac,mjesto,cijena)
values(null,'Priče iz davnine',1,1,1,585),
(null,'Idiot',2,2,2,253),
(null,'Sloboda',4,4,4,100);

#izmjena podataka za mjesto
update mjesto set pošt_broj=45800
where sifra=2;

#brisanje podataka iz tablice
delete from mjesto 
where sifra=5;
