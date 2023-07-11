create database HelloPets;
use HelloPets;

create table user(id_user int(20) primary key auto_increment, unique_id int(255) NOT NULL, foto varchar(1000) default "noprofil.jpg", nama varchar(50) not null,
email varchar(50) not null unique, password varchar(50) not null, passmd5 varchar(1000), telepon varchar(15),
status varchar(20) default "user") engine=InnoDB;

create table dokter(id_dokter int(20) primary key auto_increment, foto varchar(1000) default "noprofil.jpg", gelar varchar(20) default "drh. ",
nama varchar(50) not null, email varchar(50) not null unique, password varchar(50) not null, passmd5 varchar(1000), telepon varchar(15),
status varchar(20) default "dokter", ket varchar(200) default 'dokter hewan umum',bio text, jadwal_operasional text, jam_operasional text,
norek varchar(30) unique, harga text) engine=InnoDB;

create table pertanyaan(id_pertanyaan int(20) primary key auto_increment, email varchar(50), isi varchar(10000), status varchar(100) default 'no')
engine=InnoDB;

create table pembayaran(id int(20) primary key auto_increment, nama_dokter varchar(1000), nama_user varchar(1000),
biaya text, norek varchar(1000), status varchar(200) default 'no')engine=InnoDB;

create table konsultasi(id int(20) primary key auto_increment, nama_user varchar(1000), nama_dokter varchar(1000),
link text, status varchar(20) default 'no') engine=InnoDB;

create table hasilk(id int(20) primary key auto_increment, email_user varchar(1000), email_dokter varchar(1000),
jenis varchar(50), keluhan text, penyakit text, solusi text, obat text) engine=InnoDB;

insert into dokter (nama, email, password, telepon, bio, jadwal_operasional, jam_operasional, norek, harga) values 
('I Dewa Made Suwardana', 'dewa@gmail.com', '12345', '081234222311', '33 Tahun Pengalaman | Klinik Hewan Puri, Jakarta Bara',
'Senin - Sabtu', '10.00 - 18.00', '2452341121', '50.000'),
('Lita Widari', 'lita@gmail.com', '12345', '081234555677', '15 Tahun Pengalaman | Klinik Alit Vet, Jakarta Barat', 'Senin - Sabtu'
, '08.00 - 19.00', '2452341122', '75.000'),
('Adi Nugraha', 'adi@gmail.com', '12345', '081298774566', '17 Tahun Pengalaman | Kelapa Dua Pets, Jakarta Barat', 'Senin, Rabu. Jum`at'
, '09.00 - 19.00', '2452341123', '125.000');
