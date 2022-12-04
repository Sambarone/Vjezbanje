# c:\xampp\mysql\bin>mysql -uroot  --default_character_set=utf8  <C:\Users\Samba\Documents\GitHub\vjezbanje\Vjezbanje\Baze_za_vjezbanje_s_predavanja\kolokvij3.sql

drop database if exists rodbina3;
create database rodbina3 default charset utf8;
use rodbina3;


create table svekar (
sifra int not null primary key auto_increment,
novcica decimal (16,8) not null,
suknja varchar (44) not null,
bojakose varchar (36),
prstena int,
narukvica int not null,
cura int not null
);

create table cura (
sifra int not null primary key auto_increment,
dukserica varchar (49),
maraka decimal (16,8),
drugiputa datetime,
novcica decimal (15,8),
ogrlica int not null
);

create table ostavljena (
sifra int not null primary key auto_increment,
kuna decimal (17,5),
lipa decimal (15,6),
majica varchar (36),
modelnaocala varchar(31)not null,
prijatelj int
);


create table prijatelj (
sifra int not null primary key auto_increment,
kuna decimal (16,10),
haljina varchar (37),
lipa decimal (13,10),
dukserica varchar(31),
indiferentno bit
);
create table snasa (
sifra int not null primary key auto_increment,
introvertno bit,
kuna decimal (15,6),
eura decimal (12,9),
treciputa datetime,
ostavljena int
);

create table punica (
sifra int not null primary key auto_increment,
asocijalno bit,
kratkamajica varchar(44),
kuna decimal (13,8),
vesta varchar (32) not null,
snasa int
);

create table prijatelj_brat (
sifra int not null primary key auto_increment,
prijatelj int not null,
brat int not null
);

create table brat (
sifra int not null primary key auto_increment,
jmbag char (11),
ogrlica int not null,
ekstrovertno bit not null
);

alter table svekar add foreign key (cura) references cura (sifra);
alter table ostavljena  add foreign key (prijatelj) references prijatelj (sifra);
alter table snasa add foreign key (ostavljena) references ostavljena (sifra);
alter table punica add foreign key (snasa) references snasa (sifra);
alter table prijatelj_brat  add foreign key (prijatelj) references prijatelj (sifra);
alter table prijatelj_brat  add foreign key (brat) references brat (sifra);

select *from snasa;
insert into snasa (sifra,introvertno,kuna,eura,treciputa,ostavljena)
values (null,1,12,13,'2022-11-11',null),
(null,2,14,131,'2020-11-11',null),
(null,3,19,113,'2021-11-11',null);

select *from ostavljena;
insert into ostavljena (sifra,kuna,lipa,majica,modelnaocala,prijatelj)
values (null,1,1,'bijela','ray ban',null),
(null,2,2,'zelena','police',null),
(null,3,3,'plava','tom',null);

select *from prijatelj;
insert into prijatelj (sifra,kuna,haljina,lipa,dukserica,indiferentno)
values (null,1,'plava',2,'bijela',1),
(null,2,'bijela',2,'zelena',3),
(null,3,'žuta',2,'oker',4);

select *from brat;
insert into brat (sifra,jmbag,ogrlica,ekstrovertno)
values (null,1,'plava',2),
(null,2,'bijela',3),
(null,3,'žuta',4);

select *from prijatelj_brat;
insert into prijatelj_brat (sifra,prijatelj,brat)
values (null,1, 1),
(null,2, 2),
(null,3, 3);

update svekar set suknja='Osjiek';

delete from punica where kratkamajica ='AB';


select majica from ostavljena 
where lipa not in (9,10,20,30,35);

# Prikažite kolone haljina i lipa iz tablice prijatelj čiji se 
#primarni ključ 
#ne nalaze u tablici prijatelj_brat. (5
select a.haljina, a.lipa
from prijatelj a 
inner join prijatelj_brat b on a.sifra =b.prijatelj 
where b.prijatelj is null;


/*Prikažite ekstroventno iz tablice brat, vesta iz tablice punica te 
kuna iz tablice snasa uz uvjet da su vrijednosti kolone lipa iz tablice 
ostavljena različito od 91 te da su vrijednosti kolone haljina iz tablice 
prijatelj sadrže niz znakova ba. Podatke posložite po kuna iz tablice 
snasa silazno. */
select a.ekstrovertno, f.vesta, e.kuna 
from brat a
inner join prijatelj_brat b on b.brat =a.sifra 
inner join prijatelj c on c.sifra =b.prijatelj 
inner join ostavljena d on d.prijatelj =c.sifra 
inner join snasa e on e.ostavljena =d.sifra 
inner join punica f on f.snasa =e.sifra 
where d.lipa !=91 and c.haljina like '%ba%'
order by e.kuna desc;