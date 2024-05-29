create table masterItem (
	ItemID varchar(30),
	ItemDescription varchar(50),
	UnitPrice numeric(19,5)
)

create table Trx (
	Tanggal date,
	NoTrx varchar(30),
	ItemID varchar(30),
	Qty int
)


insert into masterItem values('Item001','Item 2',2700)
insert into masterItem values('Item002','Item 3',3300)
insert into masterItem values('Item003','Item 1',4800)
insert into masterItem values('Item004','Item 4',9100)
insert into masterItem values('Item005','Item 5',6425)

insert into Trx values('29 Nov 2023','Trx001','Item003',7)
insert into Trx values('29 Nov 2023','Trx001','Item004',9)
insert into Trx values('29 Nov 2023','Trx002','Item003',3)
insert into Trx values('29 Nov 2023','Trx002','Item005',2)
insert into Trx values('3 Dec 2023','Trx003','Item001',9)
insert into Trx values('4 Dec 2023','Trx003','Item003',5)
insert into Trx values('4 Dec 2023','Trx003','Item002',8)
insert into Trx values('3 Jan 2024','Trx004','Item002',4)
insert into Trx values('3 Jan 2024','Trx005','Item004',11)
insert into Trx values('4 Jan 2024','Trx006','Item003',2)
insert into Trx values('4 Jan 2024','Trx006','Item001',3)
insert into Trx values('15 Feb 2024','Trx007','Item003',2)
insert into Trx values('15 Feb 2024','Trx008','Item003',9)
insert into Trx values('16 Feb 2024','Trx009','Item002',32)
