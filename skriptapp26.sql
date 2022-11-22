# ljestve (hash) je komentar i on se ne izvodi
# Izvođenje naredbi na serveru
# Otvoriti CMD
# Zaljepiti sljedeću naredbu bez prvog hash znaka
#naredba ispod označava postavke kodriranja
# c:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\Samba\Documents\GitHub\vjezbanje\Vjezbanje\skriptapp26.sql



drop database if exists edunovapp26;
create database edunovapp26 default charset utf8;
use edunovapp26;

create table smjer(
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    cijena decimal(18,2),
    upisnina decimal(18,2),
    trajanje int not null,
    certificiran boolean not null
);

create table grupa(
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    maksimalnopolaznika int not null,
    datumpocetka datetime,
    smjer int not null,
    predavac int
);

create table osoba(
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    email varchar(50) not null,
    oib char(11)
);

create table polaznik(
    sifra int not null primary key auto_increment,
    broj_ugovora varchar(20),
    osoba int not null
);

create table predavac(
    sifra int not null primary key auto_increment,
    iban varchar(50),
    osoba int not null
);

create table clan(
    grupa int not null,
    polaznik int
);


alter table grupa add foreign key (smjer) references smjer(sifra);
alter table grupa add foreign key (predavac) references predavac(sifra);

alter table clan add foreign key (grupa) references grupa(sifra);
alter table clan add foreign key (polaznik) references polaznik(sifra);

alter table polaznik add foreign key (osoba) references osoba(sifra);
alter table predavac add foreign key (osoba) references osoba(sifra);


#-unos podataka u tablicu smjer
insert into smjer (sifra,naziv,cijena,upisnina,trajanje,certificiran)
values (null,'PHP programiranje',6950,500,130,false),
(null,'Java programiranje',6950,500,140,true), (null,'Serviser',7000.50,500,180,true);

# unos podataka u tablicu grupa 
#(obavezan unos za atribute koji imaju vrijednost not null)
# datum se piše u jednostrukim navodnicima i u sljedećem formatu 2022-11-07 20:00:00
insert into grupa (sifra, naziv, maksimalnopolaznika,datumpocetka,smjer)
values (null,'PHP26',20,'2022-11-07 19:00:00',1), (null,'JS26',20,'2022-11-07 17:00:00',2);

# unos podatka u tablicu osoba
insert into osoba (sifra,ime,prezime,email)
values (null,'Marko','Marković','marko.markovic@gmail.com'),
(null,'Ivo','Ivic','ivo.ivic@gmail.com'),
(null,'Josip','Josipović','josip.josipovic@gmail.com'),
(null,'Marija','Marić','marija.maric@gmail.com'),
(null,'Ana','Anić','ana.anic@gmail.com'),
(null,'Ena','Dalić','ena-dalic@gmail.com'),
(null,'Tomislav','Jakopec','t.jakopec@gmail.com');

#unos podataka u tablicu polaznik
insert into polaznik (osoba)
values (1),(2),(3),(4),(5),(6);


#unos podataka u tablicu polaznik
insert into predavac(osoba)
values (7);



