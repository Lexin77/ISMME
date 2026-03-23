TYPE=VIEW
query=select `books_db`.`books`.`Title_Code` AS `Title_Code`,count(`books_db`.`reading`.`Reading_Code`) AS `Reading_Count` from (`books_db`.`books` join `books_db`.`reading` on(`books_db`.`books`.`Book_Code` = `books_db`.`reading`.`Book_Code`)) group by `books_db`.`books`.`Title_Code` order by count(`books_db`.`reading`.`Reading_Code`) desc
md5=e510cd7e078d817a06b8f606b3bb8e10
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=0001733654939332771
create-version=2
source=SELECT\n    books.Title_Code,\n    COUNT(reading.Reading_Code) AS Reading_Count\nFROM\n    books\nINNER JOIN\n    reading ON books.Book_Code = reading.Book_Code\nGROUP BY\n    books.Title_Code\nORDER BY\n    Reading_Count DESC
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `books_db`.`books`.`Title_Code` AS `Title_Code`,count(`books_db`.`reading`.`Reading_Code`) AS `Reading_Count` from (`books_db`.`books` join `books_db`.`reading` on(`books_db`.`books`.`Book_Code` = `books_db`.`reading`.`Book_Code`)) group by `books_db`.`books`.`Title_Code` order by count(`books_db`.`reading`.`Reading_Code`) desc
mariadb-version=100432
