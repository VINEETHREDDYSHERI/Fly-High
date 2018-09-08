
create table test.shedi (name char(19));
delete from test.acc limit 2;
select * from test.shedi;
create table test.acc (username varchar(16),emailid varchar(30),pwd varchar(16));
create table test.persondetails(username varchar(16),phno int(10),gender varchar(5),dob date,location varchar(20));
alter table test.acc
add constraint username_pk primary key(username);
alter table test.persondetails
add constraint username_fk foreign key(username)
references test.acc(username);
select * from test.acc;
select * from persondetails;
alter table test.persondetails
modify column gender varchar(10);
create table test.flights(flightno int(5),fromcity varchar(20),tocity varchar(20),departtime varchar(10),arrivaltime varchar(10),departdate date,returndate date,seats int(4),fare int(5));
describe test.persondetails;
select * from flights;
update flights set tocity='delhi' where tocity like 'de';
select * from acc where username like 'Adli';

select * from images;
create table account(emailid varchar(40) primary key,username varchar(40) not null,pwd varchar(40) not null,iamge blob);
select * from account;
create table person(emailid varchar(40) ,phno varchar(10),gender varchar(5),dob date,location varchar(20));
select * from person;
