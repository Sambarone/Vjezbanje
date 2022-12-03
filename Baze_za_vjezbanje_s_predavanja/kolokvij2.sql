# c:\xampp\mysql\bin>mysql -uroot  --default_character_set=utf8  <C:\Users\Samba\Documents\GitHub\vjezbanje\Vjezbanje\Baze_za_vjezbanje_s_predavanja\kolokvij2.sql

drop database if exists rodbina2;
create database rodbina2 default charset utf8;
use rodbina2;

create table cura (
sifra int not null primary key auto_increment,
haljina varchar (33) not null,
drugiputa datetime not null,
suknja varchar(38),
narukvica int,
introvertno bit,
majica varchar (40) not null,
decko int

);

create table decko (
sifra int not null primary key auto_increment,
indiferentno bit,
vesta varchar (34),
asocijalno bit not null

);

create table decko_zarucnica (
sifra int not null primary key auto_increment,
decko int not null,
zarucnica int not null

);

create table zarucnica (
sifra int not null primary key auto_increment,
narukvica int,
bojakose varchar(37) not null,
novcica decimal (15,9),
lipa decimal (15,8) not null,
indiferentno bit not null

);

create table neprijatelj (
sifra int not null primary key auto_increment,
majica varchar (32),
haljina varchar (43) not null,
lipa decimal (16,8),
modelnaocala varchar (49) not null,
kuna decimal (12,6) not null,
jmbag char (11),
cura int

);

create table prijatelj (
sifra int not null primary key auto_increment,
modelnaocala varchar (37) not null,
treciputa datetime not null,
ekstrovertno bit,
prviputa datetime,
svekar int

);

create table svekar (
sifra int not null primary key auto_increment,
stilfrizura varchar (48),
ogrlica int not null,
asocijalno bit not null
);

create table brat (
sifra int not null primary key auto_increment,
suknja varchar (47),
ogrlica int not null,
asocijalno bit not null,
neprijatelj int not null
);

alter table cura add foreign key (decko) references decko (sifra);

alter table decko_zarucnica add foreign key (decko) references decko (sifra);
alter table decko_zarucnica add foreign key (zarucnica) references zarucnica (sifra);

alter table prijatelj add foreign key (svekar) references svekar (sifra);


alter table neprijatelj add foreign key (cura) references cura (sifra);

alter table brat add foreign key (neprijatelj) references neprijatelj (sifra);

insert into decko (sifra,indiferentno,vesta,asocijalno)
values (null,1,'plava',2),
(null,2,'zuta',3),
(null,3,'zelena',4);


insert into cura (sifra,haljina,drugiputa,suknja,narukvica,introvertno,majica,decko)
values (null,'plava','2022-12-01','duga','zlatna',2,'na bratele',1),
(null,'zuta',null,'kratka','srebrna',2,'bez rukava',2),
(null,'crvena','2001-11-01','do koljena','bizuterija',2,'bez rukava',3);

insert into neprijatelj (sifra,majica,haljina,lipa,modelnaocala,kuna,jmbag,cura)
values (null,'bez rukava','siva',13,'ray ban',18.3,12345678,1),
(null,'duga','zelena',15,'police',15.2,87654321,2),
(null,'kratka','bijela',33,'tom tailor',33,22222265,3);


insert into zarucnica (sifra,narukvica,bojakose,novcica,lipa,indiferentno )
values (null,'plava','plava',15,54,1),
(null,'zuta','zuta',25,4,3),
(null,'bijela','bijela',35,84,2);

insert into decko_zarucnica (sifra,decko,zarucnica)
values (null,1,2), (null,2,1),(null,1,3);

insert into prijatelj (sifra,modelnaocala,treciputa,ekstrovertno,prviputa,svekar)
values (null,'ray ban','2020-01-04',2,'2021-01-02',null);

delete from brat where ogrlica!=14;

select suknja  from cura
where drugiputa =null;



select a.novcica , f.neprijatelj, e.haljina 
from zarucnica a
inner join decko_zarucnica b on a.sifra =b.zarucnica 
inner join decko c on c.sifra =b.decko 
inner join cura d on d.decko =c.sifra 
inner join neprijatelj e on e.cura =d.sifra 
inner join brat f on f.neprijatelj =e.sifra 
where d.drugiputa!=null and c.vesta like '%ba'
order by e.haljina desc;

select a.vesta,a.asocijalno 
from decko a
left join decko_zarucnica b on a.sifra =b.decko 
where b.decko is null;




