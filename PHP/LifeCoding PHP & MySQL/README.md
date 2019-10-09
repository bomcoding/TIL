# PHP & MySQL

## 설정

* Bitanmi apache, mysql
	- manager-windows 프로그램에서 서버가 작동중인지 확인.
	
* Web page(PHP)
``
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>WEB</title>
    </head>
    <body>
        <h1>WEB</h1>
        <ol>
            <li>HTML</li>
        </ol>
        <h2>Welcome</h2>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit
    </body>
</html>
``
* Database(MySQL)
	* opentutorials 데이터베이스 생성
``
	CREATE DATABASE opentutorials;
``
  
  * topic 테이블 생성
``
	CREATE TABLE topic (
		id int(11) NOT NULL AUTO_INCREMENT,
		title varchar(45) NOT NULL,
		description text,
		created datetime NOT NULL,
		PRIMARY KEY(id)
	) ENGINE=InnoDB;
``