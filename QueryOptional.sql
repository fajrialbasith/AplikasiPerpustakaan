create table masterCompany
(
	Company varchar(30),
	CompanyName varchar(50),
	Laba numeric(19,5)
)

create table masterPegawai
(
	Id varchar(30),
	FirstName varchar(50),
	LastName varchar(50),
	Company varchar(30)
)

create table TrxCompany
(
	Id varchar(30),
	HasilKerja numeric(19,5)
)

insert into masterCompany values('A','Company A', 4300000)
insert into masterCompany values('B','Company B', 6700000)

insert into masterPegawai values('A001','A', 'Satu','A')
insert into masterPegawai values('A002','A', 'Dua','B')
insert into masterPegawai values('A003','B', 'Satu','B')
insert into masterPegawai values('A004','C', 'Dua','B')
insert into masterPegawai values('A005','B', 'Tiga','A')
insert into masterPegawai values('A006','A', 'Tiga','A')
insert into masterPegawai values('A007','A', 'Lima','A')

insert into TrxCompany values('A003',15)
insert into TrxCompany values('A004',22)
insert into TrxCompany values('A005',19)
insert into TrxCompany values('A006',44)