mysql> create table submit(
    -> id int primary key,
    -> name varchar(30) not null,
    -> tell int not null,
    -> motive varchar(255) not null
    -> );

mysql> desc submit;
+--------+--------------+------+-----+---------+-------+
| Field  | Type         | Null | Key | Default | Extra |
+--------+--------------+------+-----+---------+-------+
| id     | int          | NO   | PRI | NULL    |       |
| name   | varchar(30)  | NO   |     | NULL    |       |
| tell   | int          | NO   |     | NULL    |       |
| motive | varchar(255) | NO   |     | NULL    |       |
+--------+--------------+------+-----+---------+-------+
4 rows in set (0.02 sec)