create table blog
(
  blog_id            int auto_increment
    primary key,
  blog_content       text                               null,
  blog_date_creation datetime default CURRENT_TIMESTAMP null,
  blog_title         varchar(50)                        null,
  user_id            int                                null,
  constraint blog_ibfk_1
    foreign key (user_id) references user (user_id)
);

create index user_id
  on blog (user_id);

INSERT INTO db_french.blog (blog_id, blog_content, blog_date_creation, blog_title, user_id) VALUES (1, '<p>Lorem Ipsum is used by people within many industries, most notably within the publishing, typesetting, and graphic design fields.</p>

<blockquote>
<p>Go directly to our Lorem Ipsum samples&nbsp;<a href="https://blogging.com/lorem-ipsum/#lorem-ipsum">here</a>!</p>
</blockquote>

<p>Lorem Ipsum provides creators a view of what their finished products might look like by providing realistic appearing content without reliance on meaningful text.</p>

<p>Consequently, designers and publishers can focus on the formatting and visual aspects of their projects before the production of actual content.</p>

<p><strong>Other Names for Lorem Ipsum</strong></p>

<p>Before we dive into Lorem Ipsum, it is good to remember that it is often called something else:</p>

<ul>
	<li>Filler text</li>
	<li>Blind text</li>
	<li>Mock text</li>
	<li>Placeholder text</li>
	<li>Greeked text</li>
	<li>Replacement text</li>
	<li>Dummy text</li>
</ul>

<h2>An Interesting History</h2>

<p>The history of Lorem Ipsum is really interesting.</p>

<h3>It&rsquo;s Latin &mdash; Sorta</h3>

<p>One thing that no one questions is that Lerem Ipsum is based upon Latin. What&rsquo;s more, that Latin dates back to 45 BCE in Cicero&rsquo;s first book of&nbsp;<em>De Finibus Bonorum et Malorum</em>&nbsp;(&ldquo;On the Extremes of Good and Evil&rdquo;).</p>

<p>There are a few passages taken from the book. But the main one &mdash; that includes &ldquo;lorem ipsum&rdquo; &mdash; is &ldquo;qui dolorem ipsum.&rdquo; According to Google Translate, this means &ldquo;their distressing anguish and the very.&rdquo;</p>
', '2021-03-16 02:28:33', 'title 1', null);
INSERT INTO db_french.blog (blog_id, blog_content, blog_date_creation, blog_title, user_id) VALUES (2, '<p>Lorem Ipsum is used by people within many industries, most notably within the publishing, typesetting, and graphic design fields.</p>

<blockquote>
<p>Go directly to our Lorem Ipsum samples&nbsp;<a href="https://blogging.com/lorem-ipsum/#lorem-ipsum">here</a>!</p>
</blockquote>

<p>Lorem Ipsum provides creators a view of what their finished products might look like by providing realistic appearing content without reliance on meaningful text.</p>

<p>Consequently, designers and publishers can focus on the formatting and visual aspects of their projects before the production of actual content.</p>

<p><strong>Other Names for Lorem Ipsum</strong></p>

<p>Before we dive into Lorem Ipsum, it is good to remember that it is often called something else:</p>

<ul>
	<li>Filler text</li>
	<li>Blind text</li>
	<li>Mock text</li>
	<li>Placeholder text</li>
	<li>Greeked text</li>
	<li>Replacement text</li>
	<li>Dummy text</li>
</ul>

<h2>An Interesting History</h2>

<p>The history of Lorem Ipsum is really interesting.</p>

<h3>It&rsquo;s Latin &mdash; Sorta</h3>

<p>One thing that no one questions is that Lerem Ipsum is based upon Latin. What&rsquo;s more, that Latin dates back to 45 BCE in Cicero&rsquo;s first book of&nbsp;<em>De Finibus Bonorum et Malorum</em>&nbsp;(&ldquo;On the Extremes of Good and Evil&rdquo;).</p>

<p>There are a few passages taken from the book. But the main one &mdash; that includes &ldquo;lorem ipsum&rdquo; &mdash; is &ldquo;qui dolorem ipsum.&rdquo; According to Google Translate, this means &ldquo;their distressing anguish and the very.&rdquo;</p>
', '2021-03-16 02:28:41', 'title 2', null);
INSERT INTO db_french.blog (blog_id, blog_content, blog_date_creation, blog_title, user_id) VALUES (3, '<p>Lorem Ipsum is used by people within many industries, most notably within the publishing, typesetting, and graphic design fields.</p>

<blockquote>
<p>Go directly to our Lorem Ipsum samples&nbsp;<a href="https://blogging.com/lorem-ipsum/#lorem-ipsum">here</a>!</p>
</blockquote>

<p>Lorem Ipsum provides creators a view of what their finished products might look like by providing realistic appearing content without reliance on meaningful text.</p>

<p>Consequently, designers and publishers can focus on the formatting and visual aspects of their projects before the production of actual content.</p>

<p><strong>Other Names for Lorem Ipsum</strong></p>

<p>Before we dive into Lorem Ipsum, it is good to remember that it is often called something else:</p>

<ul>
	<li>Filler text</li>
	<li>Blind text</li>
	<li>Mock text</li>
	<li>Placeholder text</li>
	<li>Greeked text</li>
	<li>Replacement text</li>
	<li>Dummy text</li>
</ul>

<h2>An Interesting History</h2>

<p>The history of Lorem Ipsum is really interesting.</p>

<h3>It&rsquo;s Latin &mdash; Sorta</h3>

<p>One thing that no one questions is that Lerem Ipsum is based upon Latin. What&rsquo;s more, that Latin dates back to 45 BCE in Cicero&rsquo;s first book of&nbsp;<em>De Finibus Bonorum et Malorum</em>&nbsp;(&ldquo;On the Extremes of Good and Evil&rdquo;).</p>

<p>There are a few passages taken from the book. But the main one &mdash; that includes &ldquo;lorem ipsum&rdquo; &mdash; is &ldquo;qui dolorem ipsum.&rdquo; According to Google Translate, this means &ldquo;their distressing anguish and the very.&rdquo;</p>
', '2021-03-16 02:28:49', 'title 3', null);
create table brainstorming
(
  brainstorming_id            int auto_increment
    primary key,
  brainstorming_content       text                               null,
  brainstorming_date_creation datetime default CURRENT_TIMESTAMP null,
  created_by_id               int                                null,
  constraint brainstorming_ibfk_1
    foreign key (created_by_id) references user (user_id)
);

create index created_by_id
  on brainstorming (created_by_id);

INSERT INTO db_french.brainstorming (brainstorming_id, brainstorming_content, brainstorming_date_creation, created_by_id) VALUES (1, 'idea 1', '2021-03-16 01:59:17', 1);
INSERT INTO db_french.brainstorming (brainstorming_id, brainstorming_content, brainstorming_date_creation, created_by_id) VALUES (2, 'idea 2', '2021-03-16 01:59:25', 1);
INSERT INTO db_french.brainstorming (brainstorming_id, brainstorming_content, brainstorming_date_creation, created_by_id) VALUES (3, 'idea 3', '2021-03-16 01:59:30', 1);
create table compte_rendu
(
  compter_rendu_id      int auto_increment
    primary key,
  compter_rendu_obj     varchar(255) null,
  compter_rendu_content text         null
);


create table note_service
(
  note_service_id        int auto_increment
    primary key,
  note_service_date      varchar(50)  null,
  note_service_compagnie varchar(100) null,
  note_service_dep_from  varchar(100) null,
  note_service_dep_to    varchar(100) null,
  note_service_informe   varchar(50)  null,
  note_service_m         varchar(50)  null,
  note_service_demande   varchar(50)  null,
  note_service_fonction  varchar(50)  null,
  note_service_rappel    varchar(50)  null,
  note_service_content   text         null,
  note_service_signature varchar(50)  null
);


create table postit
(
  postit_id            int auto_increment
    primary key,
  postit_content       text                               null,
  postit_date_creation datetime default CURRENT_TIMESTAMP null,
  postit_title         varchar(50)                        null,
  sender_id            int                                null,
  receiver_id          int                                null,
  vue                  int                                null,
  constraint postit_ibfk_1
    foreign key (receiver_id) references user (user_id),
  constraint postit_ibfk_2
    foreign key (sender_id) references user (user_id)
);

create index receiver_id
  on postit (receiver_id);

create index sender_id
  on postit (sender_id);

INSERT INTO db_french.postit (postit_id, postit_content, postit_date_creation, postit_title, sender_id, receiver_id, vue) VALUES (1, 'fefefe', '2021-03-15 01:29:08', 'fefefe', 1, 1, 1);
INSERT INTO db_french.postit (postit_id, postit_content, postit_date_creation, postit_title, sender_id, receiver_id, vue) VALUES (2, 'ezaezaezae', '2021-03-30 15:20:21', 'dzda', 1, 1, 0);
INSERT INTO db_french.postit (postit_id, postit_content, postit_date_creation, postit_title, sender_id, receiver_id, vue) VALUES (3, 'ezaezaezaezeazezaeae', '2021-03-30 15:20:27', 'zeaezaeaz', 1, 1, 1);
create table rating
(
  rating_id        int auto_increment
    primary key,
  brainstorming_id int null,
  user_id          int null,
  rating           int null,
  constraint rating_ibfk_1
    foreign key (brainstorming_id) references brainstorming (brainstorming_id),
  constraint rating_ibfk_2
    foreign key (user_id) references user (user_id)
);

create index brainstorming_id
  on rating (brainstorming_id);

create index user_id
  on rating (user_id);

INSERT INTO db_french.rating (rating_id, brainstorming_id, user_id, rating) VALUES (1, 1, 1, 4);
create table reunion
(
  reunion_id    int auto_increment
    primary key,
  reunion_title varchar(50)  null,
  reunion_date  varchar(100) null,
  reunion_hour  varchar(100) null,
  user_id       int          null,
  constraint reunion_ibfk_1
    foreign key (user_id) references user (user_id)
);

create index user_id
  on reunion (user_id);

INSERT INTO db_french.reunion (reunion_id, reunion_title, reunion_date, reunion_hour, user_id) VALUES (6, '', '', '', null);
INSERT INTO db_french.reunion (reunion_id, reunion_title, reunion_date, reunion_hour, user_id) VALUES (7, 'meeting', '2021-03-26', '15:27', 1);
create table reunion_invit
(
  reunion_invit_id int auto_increment
    primary key,
  user_id          int null,
  reunion_id       int null,
  constraint reunion_invit_ibfk_1
    foreign key (user_id) references user (user_id),
  constraint reunion_invit_ibfk_2
    foreign key (reunion_id) references reunion (reunion_id)
);

create index reunion_id
  on reunion_invit (reunion_id);

create index user_id
  on reunion_invit (user_id);

INSERT INTO db_french.reunion_invit (reunion_invit_id, user_id, reunion_id) VALUES (10, 1, 6);
INSERT INTO db_french.reunion_invit (reunion_invit_id, user_id, reunion_id) VALUES (11, 2, 6);
INSERT INTO db_french.reunion_invit (reunion_invit_id, user_id, reunion_id) VALUES (12, 3, 6);
INSERT INTO db_french.reunion_invit (reunion_invit_id, user_id, reunion_id) VALUES (13, 1, 7);
INSERT INTO db_french.reunion_invit (reunion_invit_id, user_id, reunion_id) VALUES (14, 2, 7);
INSERT INTO db_french.reunion_invit (reunion_invit_id, user_id, reunion_id) VALUES (15, 3, 7);
create table user
(
  user_id         int auto_increment
    primary key,
  user_username   varchar(50)  null,
  user_email      varchar(100) null,
  user_password   varchar(100) null,
  user_birthdate  date         null,
  user_role       varchar(50)  null,
  user_department varchar(50)  null
);

INSERT INTO db_french.user (user_id, user_username, user_email, user_password, user_birthdate, user_role, user_department) VALUES (1, 'test1', 'test1@gmail.com', 'test', '2021-03-03', 'ROLE_DEV', 'DEP');
INSERT INTO db_french.user (user_id, user_username, user_email, user_password, user_birthdate, user_role, user_department) VALUES (2, 'test2', 'test2@gmail.com', 'test', '2021-03-03', 'ROLE_DEV', 'DEP');
INSERT INTO db_french.user (user_id, user_username, user_email, user_password, user_birthdate, user_role, user_department) VALUES (3, 'test3', 'test3@gmail.com', 'test', '2021-03-03', 'ROLE_DEV', 'DEP');