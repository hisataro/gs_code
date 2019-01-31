

-- 課題 SQL-------------------------------------------
1. SELECT文を使って、"id" 「1,3,5」だけ抽出するSQLを作る
SELECT * FROM gs_an_table WHERE id=1 OR id=3 OR id=5;

2. SELECT文を使って、"id" 「4〜8」を抽出するSQLを作る
SELECT * FROM gs_an_table WHERE id>=4 AND id<=8;

3. SELECT文を使って、"email"「 test1」を抽出するあいまい検索
SELECT * FROM gs_an_table WHERE email LIKE 'test01%';

4. SELECT文を使って、"新しい日付順"にソートするSQLを作る。
SELECT * FROM gs_an_table ORDER BY indate DESC

6. SELECT文を使って、"新しい日付順"で、「5個」だけ取得するSQLを作る
SELECT * FROM gs_an_table ORDER BY indate DESC LIMIT 5

------------------------------------------------------






INSERT INTO gs_an_table(name,email,naiyou,indate)
VALUES
('今井','test03@test.jp','test3',sysdate())

INSERT INTO gs_an_table(name,email,naiyou,indate)VALUES(;name,;email,;naiyou,sysdate())



SELECT * FROM gs_an_table WHERE name='生井'

SELECT * FROM gs_an_table WHERE id=1

SELECT * FROM gs_an_table WHERE name LIKE '%木%'

SELECT * FROM gs_an_table ORDER BY indate DESC LIMIT 3

