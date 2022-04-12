mysql> create table submit(
    -> student_id int primary key,
    -> name varchar(30) not null,
    -> tell int not null,
    -> motive varchar(255),
    -> ca varchar(50)
    -> );
Query OK, 0 rows affected (0.06 sec)

mysql> desc submit;
+------------+--------------+------+-----+---------+-------+
| Field      | Type         | Null | Key | Default | Extra |
+------------+--------------+------+-----+---------+-------+
| student_id | int          | NO   | PRI | NULL    |       |
| name       | varchar(30)  | NO   |     | NULL    |       |
| tell       | int          | NO   |     | NULL    |       |
| motive     | varchar(255) | YES  |     | NULL    |       |
| ca         | varchar(50)  | YES  |     | NULL    |       |
+------------+--------------+------+-----+---------+-------+
5 rows in set (0.01 sec)