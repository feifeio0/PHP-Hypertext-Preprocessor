# mysql基础
---
## cmd表与库的概念

* 进入数据库
> mysql -h localhost -u root(用户名) -p
* 查看库
> show databases;
* 选库
> use + 库名;
* 查看库下表
> show tables;
* 查表
> select * from 表名;
* 查看表的结构
> desc 表名;
---
## 增删改查基本语句

* insert（增）
> 1.添加所有列
>> insert into user(uid,name,age) values (1,'list',23);

> 2.插入部分列
>> insert into user(uid,name) values (1,'lucy');

> 3.插入所有列的简写
>> insert into user values(3,'kimi',25);

> 4.一次添加多行数据
>> insert into user values(5,'test1',44),(6,'test2',23);

**注**

**列与值严格对应**

**数字不必加单引号，字符串必须加单引号**

**1次加多行数据用逗号隔开**

* delete（删）
> delete from 表名 where expr;
>> delete from 表名 where uid=10;

**不加where会改变所有行**

* update（改）
> update 表名 set 列名1='修改值1',列名2='修改值2' where expr;

* select（只按主键查）
> select 列1,列2,...,列n from 表名 where expr;

> 1.查一行
>> select * from user where uid=2;

> 2.查多行
>> select * from user where uid>=2;

> 3.查某几行某几列
>> select uid,name from user where uid>=2;

---

## 留言板建表

> 1.建库
>> create database xxx;

> 2.选库
>> use xxx;

> 3.建表
>> create table 表名（

>>   id int primary key auto_increment,
  
>>   name char(20),
  
>>   content varchar(200),
  
>>   pubtime datatime
  
>> ）charset utf8

**在php与mysql中utf8,在html中utf-8**
