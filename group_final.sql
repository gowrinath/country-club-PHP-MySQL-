USE cs68812;

SET FOREIGN_KEY_CHECKS=0;

drop table if exists Techniques;
drop table if exists Application;
drop table if exists Quilt;
drop table if exists Quilter;
drop table if exists Owner;
drop table if exists Maker;
drop table if exists Winner;
drop table if exists EnteredInto;
drop table if exists PresentedBy;
drop table if exists HavePayment;
drop table if exists FundedBy;
drop table if exists ShowHasWinner;
drop table if exists Appraiser;
drop table if exists Appraises;
drop table if exists Vends;
drop table if exists Vendor;
drop table if exists Person;
drop table if exists `Show`;
drop table if exists Payment;

CREATE TABLE `Show` (
ShowID int AUTO_INCREMENT,
Date date,
Location char(15),
primary key(ShowID)
);

CREATE TABLE Quilter (
QuilterID int AUTO_INCREMENT,
Name varchar(20),
QuiltingTechnique char(20),
primary key(QuilterID)
);

CREATE TABLE Owner (
OwnerID int AUTO_INCREMENT,
Name varchar(20),
QuiltsOwned int(5),
primary key(OwnerID)
);

CREATE TABLE Maker (
MakerID int AUTO_INCREMENT,
Name varchar(20),
QuiltsMade int(5),
primary key(MakerID)
);

CREATE TABLE Person (
PersonID int AUTO_INCREMENT,
FirstName char(20),
LastName char(20),
Address varchar(20),
City char(20),
State char(2),
Zip int(5),
Phone bigint(12),
Email varchar(20),
MemberStatus char(10),
primary key(PersonID)
); 

CREATE TABLE Application (
ApplicationID int AUTO_INCREMENT,
PersonID int,
ShowID int,
ApplicationType char(10),
ApplicationStatus char(10),
SubmittedDate date,
primary key(ApplicationID),
foreign key (ShowID) references `Show` (ShowID),
foreign key (PersonID) references Person (PersonID)
);

CREATE TABLE Quilt (
QuiltNumber int AUTO_INCREMENT,
ApplicationID int,
Title char(20),
Description char(30),
DateCompleted date,
Design char(20),
QuiltType char(10),
Category char(10),
AcceptanceIndicator char(10),
PrizeWon char(10),
Width int(10),
Length int(10),
Story char(20),
NeedAppraisal char(10),
QuilterID int,
OwnerID int,
MakerID int,
primary key (QuiltNumber),
foreign key (ApplicationID) references Application (ApplicationID),
foreign key (QuilterID) references Quilter (QuilterID),
foreign key (OwnerID) references Owner (OwnerID),
foreign key (MakerID) references Maker (MakerID)
);

CREATE TABLE Payment (
PaymentID int AUTO_INCREMENT,
ApplicationID int,
Amount int(10),
CardNumber int(16),
primary key(PaymentID),
foreign key (ApplicationID) references Application (ApplicationID)
);


CREATE TABLE Techniques (
QuiltNumber int,
Technique char(20),
primary key (QuiltNumber,Technique),
foreign key(QuiltNumber) references Quilt (QuiltNumber)
);



CREATE TABLE Winner (
PersonID int AUTO_INCREMENT,
Name varchar(20),
Prizewon char(10),
primary key(PersonID)
);

CREATE TABLE Vendor (
RegistrationNumber int AUTO_INCREMENT,
CompanyName varchar(50),
ContactPerson varchar(50),
StreetAddress varchar(30),
City varchar(30),
State varchar(30),
Zip varchar(10),
Email varchar(50),
NumBooths int,
Merchandise varchar(100),

primary key(RegistrationNumber)
);

CREATE TABLE Appraiser (
AppraiserID int AUTO_INCREMENT,
Name char(20),
Address char(20),
Qualification char(10),
CertifyingOrganization char(10),
BeginningDate date,
QuiltAppraisingSpeciality char(20),
primary key(AppraiserID)
);

CREATE TABLE EnteredInto (
QuiltNumber int,
ShowID int,
primary key (ShowID,QuiltNumber),
foreign key(QuiltNumber) references Quilt (QuiltNumber),
foreign key (ShowID) references `Show` (ShowID)
);

CREATE TABLE PresentedBy (
QuiltNumber int,
PersonID int,
primary key(QuiltNumber,PersonID),
foreign key(QuiltNumber) references Quilt (QuiltNumber),
foreign key (PersonID) references Person(PersonID)
);

CREATE TABLE HavePayment (
QuiltNumber int,
PaymentID int,
primary key(QuiltNumber,PaymentID),
foreign key(QuiltNumber) references Quilt (QuiltNumber),
foreign key (PaymentID) references Payment (PaymentID)
);

CREATE TABLE Vends (
RegistrationNumber int,
ShowID int,
primary key(RegistrationNumber,ShowID),
foreign key(RegistrationNumber) references Vendor (RegistrationNumber),
foreign key (ShowID) references `Show` (ShowID)
);

CREATE TABLE FundedBy (
PaymentID int,
ShowID int,
primary key(PaymentID,ShowID),
foreign key (PaymentID) references Payment (PaymentID),
foreign key (ShowID) references `Show` (ShowID)
);

CREATE TABLE ShowHasWinner (
ShowID int,
PersonID int,
primary key(ShowID,PersonID),
foreign key (ShowID) references `Show` (ShowID),
foreign key (PersonID) references Winner (PersonID)
);

CREATE table Appraises (
QuiltNumber int,
AppraiserID int,
AppointmentDate date,
AppointmentTime varchar(10),
primary key (QuiltNumber,AppraiserID),
foreign key(QuiltNumber) references Quilt (QuiltNumber),
foreign key (AppraiserID) references Appraiser (AppraiserID)
);

SET FOREIGN_KEY_CHECKS=1;