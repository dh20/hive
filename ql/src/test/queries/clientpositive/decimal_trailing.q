set hive.mapred.mode=nonstrict;
DROP TABLE IF EXISTS DECIMAL_TRAILING;

CREATE TABLE DECIMAL_TRAILING (
  id int,
  a decimal(10,4),
  b decimal(15,8)
  )
ROW FORMAT DELIMITED
   FIELDS TERMINATED BY ','
STORED AS TEXTFILE;

LOAD DATA LOCAL INPATH '../../data/files/kv10.txt' INTO TABLE DECIMAL_TRAILING;

SELECT * FROM DECIMAL_TRAILING ORDER BY id;

DROP TABLE DECIMAL_TRAILING;
