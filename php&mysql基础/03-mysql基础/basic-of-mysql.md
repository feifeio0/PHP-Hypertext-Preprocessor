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

* insert(增)
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

