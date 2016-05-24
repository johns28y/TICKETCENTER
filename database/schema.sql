
CREATE TABLE posts(
   grp ENUM(‘posts_title’,’posts_body’, ‘submission_date’) NOT NULL,
   id MEDIUMINT NOT NULL AUTO_INCREMENT,
   name CHAR(100) NOT NULL,
   PRIMARY KEY(grp, id)
) ENGINE=MyISAM;


