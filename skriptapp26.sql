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
(null,'Tomislav','Jakopec','t.jakopec@gmail.com'),
(null,'Ivan','Sambol','ivan.sambol@skole.hr'),
(null,'Ivan','Maričić','ivanmaricic@gmail.com'),
(null,'Goran','Josipović','josipovic.g@gmail.com'),
(null,'Andrej','Matić','a.maric@gmail.com'),
(null,'Ana','Medaković','ana.m@gmail.com'),
(null,'Janja','Gilja','j.gilja@gmail.com'),
(null,'Tatjana','Jaurić','t.juric@gmail.com'),
(null,'Sanja','Pocuca','sanja.p@skole.hr')
;

#unos podataka u tablicu polaznik
insert into polaznik (osoba)
values (1),(2),(3),(4),(5),(6);


#unos podataka u tablicu predavac
insert into predavac(osoba)
values (7);

#unos podataka u tablicu clan
insert into clan (grupa,polaznik)
values(1,1),(1,2),(1,3),(1,4),(1,5),(1,6);

#ažuriranje podataka u tablici osoba
update osoba set oib =2762757300
where sifra =1;

#ažuriranje podatka u tablici grupa, gdje smo svim grupama postavili jednog predavača jer nismo stavili uvijet where
update grupa set predavac=1;

#brisanje podataka u tablici smjer
delete from smjer where sifra=3;

#izlistavanje osoba po određenim kriterijima pomoću operatora and, or, not
/*select *from osoba 

where ime='Ivan' and prezime='Sambol';
where ime='Ivan' and sifra=9;
where ime='Ivan' or ime='Ana';
where not(ime='Ivan' or ime='Ana');
*/
#upotreba drugih operatora (like), (%), in
/*
where ime like '%ja',
where ime like '%ja%';

where prezime like '%ić%' and ime ='Ana';

select ime as evanđelist from osoba 
where ime in ('Ivan', 'Marko','Matej','Luka');


*/


