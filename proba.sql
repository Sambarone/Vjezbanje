drop database if exists proba;
create database proba;
use proba;

create table ucitelj (
    sifra int not null primary key auto_increment,
    ime varchar(50),
    prezime varchar (50),
    staz int
);


create table ucenik(
    sifra int not null primary key auto_increment,
    ime varchar(50),
    prezime varchar(50),
    prosjek decimal(18,2),
    razred int
);

create table razred (
    sifra int not null primary key auto_increment,
    naziv varchar (20),
    broj_ucenika int,
    razrednik int,
    ucionica int
);

create table ucionica(
sifra int not null primary key auto_increment,
dimenzije decimal(18,2),
br_mjesta int
);

create table ucitelj_razred(
    ucitelj int,
    razred int
);

alter table ucenik add foreign key (razred) references razred (sifra);

alter table razred add foreign key (ucionica) references ucionica(sifra);
alter table razred add foreign key (razrednik) references ucitelj (sifra);

alter table ucitelj_razred add foreign key (ucitelj) references ucitelj(sifra);
alter table ucitelj_razred add foreign key (razred) references razred (sifra);