# c:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\Samba\Documents\GitHub\vjezbanje\Vjezbanje\knjiznica_vodjinci.sql

drop database if exists knjiznica_vodjinci;
create database knjiznica_vodjinci;
use knjiznica_vodjinci;

create table autor (
    sifra int primary key not null auto_increment,
    ime varchar(50),
    prezime varchar (50),
    datum_rodjenja date
);


create table izdavac (
sifra int primary key not null  auto_increment,
naziv varchar(50),
aktivan boolean
);

create table mjesto (
sifra int not null primary key auto_increment,
naziv varchar(50),
pošt_broj int,
drzava varchar(50)
);

create table knjiga(
sifra int not null primary key auto_increment,
naslov varchar(50),
autor int,
izdavac int,
mjesto int
);

alter table knjiga add foreign key (autor) references autor (sifra);
alter table knjiga add foreign key (izdavac) references izdavac (sifra);
alter table knjiga add foreign key (mjesto) references mjesto (sifra);
