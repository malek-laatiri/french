
create TABLE user(
    user_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    user_username VARCHAR(50),
    user_email VARCHAR(100),
    user_password VARCHAR(100),
    user_birthdate date,
    user_role VARCHAR(50),
    user_department VARCHAR(50)
);
create TABLE postit(
    postit_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    postit_content text,
    postit_date_creation datetime default CURRENT_TIMESTAMP,
    postit_title VARCHAR(50),
    sender_id int,
    receiver_id int,
    vue int,
    foreign key (receiver_id) references user(user_id),
    foreign key (sender_id) references user(user_id)
);
create TABLE blog(
    blog_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    blog_content text,
    blog_date_creation datetime default CURRENT_TIMESTAMP,
    blog_title VARCHAR(50),
    user_id int,
    foreign key (user_id) references user(user_id)
);

create TABLE reunion(
    reunion_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    reunion_title VARCHAR(50),
    reunion_date VARCHAR(100),
    reunion_hour VARCHAR(100),
    user_id int,
    foreign key (user_id) references user(user_id)
);
create TABLE reunion_invit(
    reunion_invit_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    user_id int,
    reunion_id int,
    foreign key (user_id) references user(user_id),
    foreign key (reunion_id) references reunion(reunion_id)
);
create TABLE compte_rendu(
    compter_rendu_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    compter_rendu_obj VARCHAR(255),
    compter_rendu_content text
);
create TABLE note_service(
    note_service_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    note_service_date VARCHAR(50),
    note_service_compagnie VARCHAR(100),
    note_service_dep_from VARCHAR(100),
    note_service_dep_to VARCHAR(100),
    note_service_informe VARCHAR(50),
    note_service_m VARCHAR(50),
    note_service_demande VARCHAR(50),
    note_service_fonction VARCHAR(50),
    note_service_rappel VARCHAR(50),
    note_service_content text,
    note_service_signature VARCHAR(50)
);
create TABLE brainstorming(
    brainstorming_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    brainstorming_content text,
    brainstorming_date_creation datetime default CURRENT_TIMESTAMP,
    created_by_id int,
    foreign key (created_by_id) references user(user_id)
);
create TABLE rating(
    rating_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    brainstorming_id int,
    user_id int,
    rating int,
    foreign key (brainstorming_id) references brainstorming(brainstorming_id),
    foreign key (user_id) references user(user_id)
);