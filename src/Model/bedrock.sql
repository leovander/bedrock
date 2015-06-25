DROP TABLE apps;

-- TODO: Store app/faces images, maybe just store urls
-- as json and let pebble host all images?
CREATE TABLE apps
(
	id integer NOT NULL AUTO_INCREMENT,
	app_id varchar(255) NOT NULL,
	developer_id varchar(255) NOT NULL,
	developer_name varchar(50) NOT NULL,
	category varchar(255) NOT NULL,
	category_color varchar(50) NOT NULL,
	description TEXT,
	published_date DATE NOT NULL,
	hearts integer NOT NULL,
	name varchar(50) NOT NULL,
	url varchar(100) NOT NULL,
	type tinyint NOT NULL,
	created DATETIME,
    modified DATETIME,
	CONSTRAINT apps_PK PRIMARY KEY (id)
);