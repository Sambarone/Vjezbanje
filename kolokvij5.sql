# c:\xampp\mysql\bin>mysql -uroot  --default_character_set=utf8  <C:\Users\Samba\Documents\edunovapp26b\Programing\sql\kolokvij5.sql

drop database if exists rodbina5;
create database rodbina5 default charset utf8;
use rodbina5;

create table mladic (
sifra int not null primary key auto_increment,
kratkamajica varchar(48) not null,
haljina varchar (30) not null,
asocijalno bit,
zarucnik int
);

create table zarucnik (
sifra int not null primary key auto_increment,
jmbag char (11),
lipa decimal (12,8),
indiferentno bit not null
);

create table punac (
sifra int not null primary key auto_increment,
dukserica varchar(33),
prviputa datetime not null,
majica varchar (36),
svekar int not null
);

create table svekar (
sifra int not null primary key auto_increment,
bojakose varchar(33),
majica varchar (31),
carape varchar(31) not null,
haljina varchar (43),
narukvica int,
eura decimal (14,5) not null

);

create table svekar_cura (
sifra int not null primary key auto_increment,
svekar int not null,
cura int not null
);

create table cura (
sifra int not null primary key auto_increment,
carape varchar(41) not null,
maraka decimal (17,10) not null,
asocijalno bit,
vaesta varchar (47) not null
);

create table punica (
sifra int not null primary key auto_increment,
hlace varchar(43) not null,
nausnica int not null,
ogrlica int,
vesta varchar (49) not null,
modelnaocala varchar (31) not null,
treciputa datetime not null,
punac int
);

create table ostavljena (
sifra int not null primary key auto_increment,
majica varchar(33),
ogrlica int not null,
carape varchar (44),
stilfrizura varchar (42),
punica int not null
);


alter table mladic add foreign key (zarucnik) references zarucnik (sifra);

alter table punac add foreign key (svekar) references svekar (sifra);

alter table svekar_cura add foreign key (svekar) references svekar (sifra);

alter table svekar_cura add foreign key (cura) references cura (sifra);

alter table punica add foreign key (punac) references punac (sifra);

alter table ostavljena add foreign key (punica) references punica (sifra);


insert into svekar (sifra,bojakose,majica,carape,haljina,narukvica,eura) 
values (null,'crna','plava','bijele','roza',12, 13.5),
(null,'čelav','crna','duge','bijela',11, 113.5),
(null,'sijed','siva','stopalice','crna',10, 133.5);


insert into punac (sifra, dukserica,prviputa,majica,svekar)
values (null, 'plave',null,'crna',1),
(null, 'bijele','2021-12-12','kratka',2), 
(null, 'plave','2020-12-12','duga',3);

insert into punica (sifra,hlace,nausnica,ogrlica,vesta,modelnaocala,treciputa,punac) 
values (null,'crne',11,12,'bijela',' ray ban','2011-11-11',1),
(null,'crne',21,1,'plava',' police','2012-10-11',2),
(null,'crne',7,33,'crna',' tom tailor','2015-01-11',3);



insert into cura (sifra, carape, maraka, asocijalno,vaesta)
values (null, 'plave', 12,1,'crna'),
(null, 'bijele', 14,0,'roza'),
(null, 'zelene', 13,2,'bijela');

insert into svekar_cura (sifra,svekar,cura)
values (null,1,1),
(null,2,2),
(null,1,2);


update mladic set haljina='Osijek';


delete from ostavljena where ogrlica =17;

select majica from punac 
where prviputa is null;

select a.asocijalno ,f.stilfrizura , e.nausnica 
from cura a
inner join svekar_cura b on b.cura =a.sifra 
inner join svekar c on b.svekar =c.sifra 
inner join punac d on d.svekar =c.sifra 
inner join punica e on e.punac =d.sifra 
inner join ostavljena f on f.punica =e.sifra 
where d.prviputa is not null and c.majica like '%ba%'
order by e.nausnica asc;

select a.majica,a.carape 
from svekar a
left join svekar_cura b on b.svekar =a.sifra 
where b.svekar is null;