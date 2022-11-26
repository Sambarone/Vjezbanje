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
    broj_clanova int
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
