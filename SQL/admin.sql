mysql> create table admin(
    -> id varchar(30) not null,
    -> pass varchar(30) not null,
    -> ca varchar(50)
    -> );
Query OK, 0 rows affected (0.05 sec)

mysql> desc admin;
+-------+-------------+------+-----+---------+-------+
| Field | Type        | Null | Key | Default | Extra |
+-------+-------------+------+-----+---------+-------+
| id    | varchar(30) | NO   |     | NULL    |       |
| pass  | varchar(30) | NO   |     | NULL    |       |
| ca    | varchar(50) | YES  |     | NULL    |       |
+-------+-------------+------+-----+---------+-------+
3 rows in set (0.01 sec)