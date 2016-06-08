SELECT `title`, `body`, `date`

FROM `posts`

ORDER BY `date` DESC;

/*
select * FROM posts
*/

/*
test with a file
mysql --database=bulletinboard< add-posts.sql
*/