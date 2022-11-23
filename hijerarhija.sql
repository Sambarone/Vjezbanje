
#c:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\Samba\Documents\GitHub\vjezbanje\Vjezbanje\hijerarhija.sql

drop database if exists hijerarhija;
create database hijerarhija;
use hijerarhija;

create table zaposlenik(
    sifra int not null primary key auto_increment,
    ime varchar (50),
    prezime varchar(50),
    placa decimal(18,2),
    nadredjeni int
);

alter table zaposlenik add foreign key (nadredjeni) references zaposlenik (sifra);

#unos podataka u tablicu zaposlenik bez nadređenog jer provo moramo unjeti zaposlenike kako bi mogli proglastiti tko je nadređeni kome
insert into zaposlenik (sifra,ime,prezime,placa)
values(null,'Ivan','Sambol',6000), (null,'Zeljko','Skarica',5000);

#postavljanje nadređenog
update zaposlenik set nadredjeni =1
where sifra=2;
