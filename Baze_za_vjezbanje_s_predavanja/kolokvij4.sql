# c:\xampp\mysql\bin>mysql -uroot  --default_character_set=utf8  <C:\Users\Samba\Documents\GitHub\vjezbanje\Vjezbanje\Baze_za_vjezbanje_s_predavanja\kolokvij4.sql

drop database if exists rodbina4;
create database rodbina4 default charset utf8;
use rodbina4;

create table punac(
sifra int not null primary key auto_increment,
trceciputa datetime,
majica varchar(46),
jmbag char(11) not null,
novcica decimal (18,7) not null,
maraka decimal (12,6) not null,
ostavljen int not null
);

create table ostavljen (
sifra int not null primary key auto_increment,
modelnaocala varchar(43),
intovertno bit,
kuna decimal (14,10)
);

create table snasa(
sifra int not null primary key auto_increment,
introverno bit,
trceciputa datetime,
haljina varchar(44) not null,
zena int not null
);

create table becar (
sifra int not null primary key auto_increment,
novcica decimal (14,8),
kratkamajica varchar (48) not null,
bojaociju varchar (36) not null,
snasa int not null
);

create table prijatelj (
sifra int not null primary key auto_increment,
eura decimal (16,9),
prstena int not null,
gustoca decimal (16,5),
jmbag char (11) not null,
suknja varchar (47) not null,
becar int not null
);

create table zena (
sifra int not null primary key auto_increment,
suknja varchar (39) not null,
lipa decimal (18,7),
prstena int not null
);

create table zena_mladic (
sifra int not null primary key auto_increment,
zena int not null,
mladic int not null
);

create table mladic (
sifra int not null primary key auto_increment,
kuna decimal (15,9),
lipa decimal (18,5),
nausnica int,
stilfrizura varchar (49),
vesta varchar (34) not null
);


alter table punac add foreign key (ostavljen) references ostavljen (sifra);

alter table prijatelj add foreign key (becar) references becar (sifra);

alter table becar add foreign key (snasa) references snasa (sifra);

alter table snasa add foreign key (zena) references zena (sifra);

alter table zena_mladic add foreign key (zena) references zena (sifra);
alter table zena_mladic  add foreign key (mladic) references mladic(sifra);




insert into mladic (sifra,kuna,lipa,nausnica,stilfrizura,vesta)
values (null,11,12,13,'kratka','duga'),
 (null,14,15,13,'duga','duga'),
 (null,11,14,13,'kratka','kratka');

insert into zena (sifra,suknja,lipa,prstena)
values (null,'kratka',12,3),
(null,'duga',14,2),(null,'do koljena',11,4);

insert into snasa(sifra,introverno,trceciputa,haljina,zena)
values (null,1,'2022-10-01','siva',2),
(null,1,'2021-10-01','roza',1),
(null,0,'2020-10-01','crna',3);

select *from zena_mladic;
insert into zena_mladic (sifra,zena,mladic)
values (null,1,1), 
(null,2,2), (null,1,2);


insert into becar(sifra,novcica,kratkamajica,bojaociju,snasa)
values (null,12,'bijela','plava',1),
(null,11,'plava','crna',2),
(null,10,'žuta','siva',3);

update punac set majica='Osijek';
delete from prijatelj where prstena >17;

select haljina from snasa
where trceciputa is null;

select a.nausnica, f.jmbag, e.kratkamajica  
from mladic a
inner join zena_mladic b on a.sifra =b.mladic 
inner join zena c on c.sifra =b.zena 
inner join snasa d on d.zena =c.sifra 
inner join becar e on e.snasa =d.sifra 
inner join prijatelj f on f.becar =e.sifra 
where d.trceciputa is not null and c.lipa !=29
order by e.kratkamajica desc;

select a.lipa, a.prstena
from zena a
left join zena_mladic b on b.zena =a.sifra 
where b.zena is null;
