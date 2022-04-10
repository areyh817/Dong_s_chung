mysql> create table user(
    -> id int not null auto_increment primary key,
    -> student_id int not null unique,
    -> name varchar(30) not null,
    -> tell int,
    -> ca varchar(50),
    -> motive varchar(255)
    -> );
Query OK, 0 rows affected (0.05 sec)

mysql> desc user;
+------------+--------------+------+-----+---------+----------------+
| Field      | Type         | Null | Key | Default | Extra          |
+------------+--------------+------+-----+---------+----------------+
| id         | int          | NO   | PRI | NULL    | auto_increment |
| student_id | int          | NO   | UNI | NULL    |                |
| name       | varchar(30)  | NO   |     | NULL    |                |
| tell       | int          | YES  |     | NULL    |                |
| ca         | varchar(50)  | YES  |     | NULL    |                |
| motive     | varchar(255) | YES  |     | NULL    |                |
+------------+--------------+------+-----+---------+----------------+
6 rows in set (0.01 sec)
