create TABLE postit(
   postit_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    postit_content VARCHAR(255),
    postit_date_creation datetime default CURRENT_TIMESTAMP,
    postit_title VARCHAR(50),
);

create TABLE blog(
   blog_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    blog_content VARCHAR(255),
    blog_date_creation datetime default CURRENT_TIMESTAMP,
    blog_title VARCHAR(50)
);