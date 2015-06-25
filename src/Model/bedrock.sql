DROP TABLE apps;
DROP TABLE categories;
DROP TABLE authors;

CREATE TABLE authors
(
	id integer NOT NULL AUTO_INCREMENT,
	developer_id varchar(255) NOT NULL,
	name varchar(25) NOT NULL,
	CONSTRAINT authors_PK PRIMARY KEY (id)
);

CREATE TABLE categories
(
	id integer NOT NULL,
	name varchar(255) NOT NULL,
	color varchar(25) NOT NULL,
	CONSTRAINT categories_PK PRIMARY KEY (id)
);

-- TODO: Store app/faces images, maybe just store urls
-- as json and let pebble host all images?
CREATE TABLE apps
(
	id integer NOT NULL AUTO_INCREMENT,
	app_id varchar(255) NOT NULL,
	author_id integer NOT NULL,
	category_id integer NOT NULL,
	description TEXT,
	published_date DATE NOT NULL,
	hearts integer NOT NULL,
	name varchar(50) NOT NULL,
	url varchar(100) NOT NULL,
	type tinyint NOT NULL,
	CONSTRAINT apps_PK PRIMARY KEY (id),
	CONSTRAINT authors_FK FOREIGN KEY (author_id) REFERENCES authors(id) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT categories_FK FOREIGN KEY (category_id) REFERENCES categories(id)
);