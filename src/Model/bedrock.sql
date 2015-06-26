DROP TABLE apps;

-- TODO: Store app/faces images, maybe just store urls
-- as json and let pebble host all images?
-- Changelog will be stored as a stringified json
CREATE TABLE apps
(
  appId varchar(255) NOT NULL,
  author varchar(50) NOT NULL,
  category_color varchar(50) NOT NULL,
  categoryId varchar(255) NOT NULL,
  category_name varchar(255) NOT NULL,
  changelog TEXT NOT NULL,
  description TEXT,
  developerId varchar(255) NOT NULL,
  header varchar(255) NOT NULL,
  hearts integer NOT NULL,
  icon varchar(255) NOT NULL,
  latest_release_date DATETIME NOT NULL,
  latest_release TEXT NOT NULL,
  list_image varchar(255) NOT NULL,
  name varchar(50) NOT NULL,
  published_date DATETIME NOT NULL,
  screenshots TEXT NOT NULL,
  share_link varchar(255) NOT NULL,
  type varchar(25) NOT NULL,
  url varchar(100),
  uuid varchar(255) NOT NULL,
  CONSTRAINT apps_PK PRIMARY KEY (appId)
);