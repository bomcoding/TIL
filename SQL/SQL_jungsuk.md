# SQL의 정석

* 데이터베이스 특징
```
→ 데이터의 대규모 저장소.
→ 한 조직체의 운영데이터와 설명(스키마, 메타데이터)를 포함
```
* 데이터베이스 목적 및 DBMS장점
```
→ 데이터 중복의 최소화★
→ 데이터 공유, 보안유지
→ 데이터 무결성★★
→ 데이터 관리 표준화
→ 자료 접근성 및 응답성 향상
```
* 관계형 데이터베이스(RDB)
```
→ TABLE은 행과 열로 구성
→ Column들은 데이터 무결성을 보장받아야 함
→ RDBMS가 전체 데이터베이스(RDB)를 관리
```
* 데이터베이스 용어★★★
```
Table : 행과 열의 조합으로 구성된 기본 저장단위
Row : Column들의 값의 조합
Column : Table상에서 단일 종류의 데이터를 의미
Field : Row와 Column교차점에 위치, 값을 저장가능
Primary Key : 변하지 않는 Column. NULL허용 x
Foreign key : 같거나 다른 Table을 ‘참조’하는 단일 Column
View : 부분집합으로 논리적이고 가상적인 Table
Sequence : 자동으로 고유한 숫자값을 생성. 기본키 값 생성
index : 쿼리(Query) 속도를 향상
Synonym : Object에 대한 또다른 이름으로 Alias역할
```
* SQL (Structured Query Language)
```
→ DB서버에 명령을 내리기 위한 언어.(ANSI에서 책정한 표준)
```
* Oracle DB의 기본계정
```
SYSTEM (주로 사용)
→ Oracle DB를 관리할 때 사용하는 (DBA)계정
→ 모든 시스템 권한 소유
→ 테이블을 생성하거나, 일반 데이터를 insert해서는 안되며, 반드시 데이터베이스를 관리하기 위해 사용.
```
데이터 타입★★★
VARCHAR2(size)
가변길이 문자값. 최고길이 1, 최대길이 2000
NUMBER
38자리까지 유효한 부동소수점 숫자
NUMBER(p, s)
전체 자리수p, 소수점 자리수s
DATE
날짜 데이터
LONG(큰 문자)
2GB까지의 가변길이 문자값. 테이블 당 한개만 가능
RAW, LONGRAW
문자값이면서, 이진데이터를 저장하는데 사용

테이블 생성시(대소문자 무관)
create table [스키마.]테이블명 (컬럼명1 datatype [default 형식]);
→ 스키마 : 객체의 집합으로서 테이블들을 소유함
→ 테이블명 : 새로 생성하려는 테이블 이름
→ 컬럼명 : 테이블에 포함된 컬럼의 이름
→ DATATYPE : 칼럼이 가질 데이터의 타입과 크기
→ DEFAULT : 데이터 입력시 기본값을 명시

SQL명령어
부류
명령어
설명
RETRIEVE★★★
SELECT
원하는 데이터를 검색
DML★★★
INSERT
UPDATE
DELETE
-테이블에 새로운 행을 삽입
-테이블에 있는 행을 수정
-테이블로부터 행을 삭제
DDL★★★
CREATE, AKTER,
DROP, RENAME,
TRUNCATE, COMMENT
구조를 만들거나, 구조변경, 삭제 등 데이터 구조 명령어
TANSACTION
COMMIT
ROLLBACK
SAVEPOINT
논리적인 작업단위, DML에 의해 조작된 결과를 다루는 명령어
DCL★★★
GRANT
REVOKE
DB에 접근하고 사용하도록 권한을 주고받는 명령어

데이터 검색★
전체 데이터 검색
→ SELECT 
특정 컬럼 검색
→ 컬럼 사이를 ,(콤마)로 구분
산술식을 이용한 검색
→ +, -, *, /, () 산술표혀식
ALIAS부여
→ 나타나는 칼럼의 이름을 바꿔보여준다.
컬럼 합성
→ 합성연산자(||)를 사용해 다른 컬럼과 연결 출력
중복행 제거
→ SELECT DISTINCT [컬럼명]
정렬순서 지정(오름차, 내림차 데이터 정렬)
→ ORDER BY [칼럼or표현식] (ASC or DESC);
WHERE절 연산자
논리비교연산자
-  !=, <>, ^= (같지 않으면..이라는 뜻)
SQL비교연산자
- NOT BETWEEN ~ AND ~
- NOT IN
- NOT LIKE
- IS NOT NULL
// title = null (X)   title is not null (O)
AND, OR (그리고, 또는)

문자형 함수
UPPER
모두 대문자로
LPAD(왼출력)
채울 수, 채울문자
LOWER
모두 소문자로
RPAD(오른출력)
채울 수, 채울문자
INITCAP
앞글자만 대문자
LTRIM(좌삭제)
지정문자 삭제
CONCAT
두 단어를 결합
RTRIM(우삭제)
지정문자 삭제
SUBSTR
n번째부터 n개
TRANSLATE
대체문자로 변경
LENGTH
문자열의 길이
REPLACE
바꿀문자로 변경

숫자형 함수
함수
사용목적
POWER
거듭제곱
ROUND
숫자를 반올림
SQRT
제곱근
TRUNC
숫자를 버림
SIGN
양수,음수,0을 구별
MOD
나누기에서 나머지 값
CHR
ASCII해당 문자구함

날짜형 함수
SYSDATE
현재 날짜, 시간
ADD_MONTHS
몇 개월 후의 날짜
LAST_DAY
해당월 마지막날
ROUND
날짜 반올림
MONTHS_BETWEEN
두 날짜사이의 마지막 날짜
TRUNC
날짜 버림
날짜 산술연산
날짜 + 숫자
날짜 반환
특정 날부터 며칠 후의 날짜 계산
날짜 - 숫자
날짜 반환
특정 날부터 며칠 전의 날짜 계산
날짜 - 날짜
숫자 반환
두 날짜사이의 차이를 숫자로 계산

변환형 함수
TO_CHAR(문자값, ‘형식’)
숫자나 날짜를 문자열로 변환
TO_NUMBER(문자값)
문자를 숫자로 변환
TO_DATE(문자값, ‘형식’)
문자를 날짜로 변환

그룹 함수
함수
사용목적
MIN(a)
a의 최솟값
COUNT(a)
a의 행의 개수
MAX(a)
a의 최댓값
AVG(a)
a의 평균
STDDEV(a)
a의 표준편차
SUM(a)
a의 합계
VARIANCE(a)
a의 분산
*COUNT(*)를 제외한 모든 그룹함수는 null값을 고려하지 않는다.

GROUP BY와 HAVING
→ GROUP BY : 전체데이터를 소그룹으로 나눌 칼럼을 명시
→ HAVING : GROUP에 대한 조건을 기술 (WHERE 대신)
JOIN
→ 하나 이상의 테이블로 연관된 데이터를 검색해오는 방법
Equijoin(InnerJoin)
등가조인. 칼럼간의 값들이 일치할 경우에 사용.
Non-Equijoin
비등가조인. 칼럼 값이 일치하지 않을 경우 사용.
OuterJoin(+)연산자
조건을 만족하지 않아도 모든 행들을 보려 할때 사용.
Self Join
같은 테이블의 행들을 join하고자 할때 사용.

SET연산자
UNION
각 쿼리결과의 합집합
UNION ALL
각 쿼리결과의 합집합에 공통부분을 더함
INTERSECT
각 쿼리결과에 교집합
MINUS
첫번째 쿼리와 두번째 쿼리결과의 차집합

SubQUERY
→ SELECT문 안에 포함된 또다른 SELECT문장
→ 괄호로 묶여있어야 한다.
→ 구문에서는 ORDER BY절을 포함할 수 없다.
→ 연산자의 오른쪽에 나타나야 한다.
→ 단일행 연산자(=,>,>=,<,<=,<>)는 전달되는 행이 하나일 때.
→ 복수행 연산자(IN, NOT IN)는 전달되는 행이 여러개일 때.

Constraint(테이블 제약조건)- 무결성 유지를 위함.
NOT NULL*
컬럼이 null을 가질 수 없다.(필수값)
UNIQUE(유일한)*
모든 행에서 고유한 값을 가져야 한다.
PRIMARY KEY(기본키)

→ 각 행을 유일하게 구별
→ 테이블에 단하나만 허용
→ NOT NULL+UNIQUE 자동생성
FOREIGN KEY(참조키)

→ 컬럼이나 컬럼의 조합을 참조
→ 부모테이블의 값과 일치 or null이어야 함
→ 참조하려는 타입이 PK여야 함
→ 참조하려는 컬럼의 데이터타입 일치
CHECK
컬럼값이 반드시 참이어야 하는 조건

TRANSACTION CONTROL
→ commit하기 전에는 rollback으로 savepoint까지 되돌릴 수 있다.
명시적 트랜잭션 제어명령(수동)
COMMIT
모든 데이터 변경사항을 DB에 저장하고 트랜잭션 종료
SAVEPOINT이름
현재 트랜잭션에 savepoint를 지정
ROLLBACK
[to savepoint이름]
저장되지 않은 모든데이터 변경사항을 취소하고 현재의 트랜잭션 종료
암시적 트랜잭션 제어명령(자동)
자동 COMMIT
(rollback불가)
DDL, DCL명령을 실행하면 자동 commit
명시적 실행을 하지 않고 정상종료하면 자동 commit
ROLLBACK
SQL 
Plus의 비정상 종료, 시스템 실패시 자동rollback

COMMIT, ROLLBACK이전의 상태
→ buffer에만 영향을 받았기 때문에 이전 상태로 복구가능
→ 다른사용자가 현재사용자 작업결과를 볼 수 없다.
→ 변경된 행은 Lock이 설정되어 있어 다른 user가 변경불가


COMMIT후의 데이터 상태
→ 데이터 변경사항이 DB에 반영됨
→ 이전 데이터를 복구 불가
→ 모든사용자가 결과확인 가능
→ Lock이 풀리고 다른 사용자들이 행을 조작가능하게 됨

ROLLBACK후의 데이터 상태
→ 데이터 변경사항 취소, 이전 데이터 재저장
	→ Lock이 풀리고 다른 사용자들이 행을 조작가능하게 됨
	→ Savepoint를 이용해 원하는 위치로 롤백가능

Dictionary
→ oracle server에 의해 생성, 유지보수 됨
→ DB정보를 가짐
→ 읽기전용 뷰(view)와 테이블의 집합
예시
→ DB객체명(TABLE, SEQUENCE, VIEW, INDEX)
→ 테이블 제약조건


ALTER TABLE_(기존 테이블을 변경)
→ 컬럼의 추가, 수정
→ 제약조건 추가, 삭제, 활성화, 비활성화(Constraint)


Privileges
→ 특정한 SQL문장을 수행하거나 특정 object에 허가된 작업

Role_(사용자에게 허가 할 수 있는 Privileges의 그룹)*
→ 권한부여와 회수를 쉽게 할 수 있다.
→ 한 사용자가 여러 Role을 access할 수 있고, 여러 사용자에게 같은 Role을 부여할 수 있다.
→ 사용자는 Role에 Role을 부여할 수도 있다.
ex) CREATE ROLE role이름;

SEQUENCE
→ Primary key(기본키)값을 생성하기 위해 사용
→ 자동으로 Unique number(고유숫자)를 생성
→ 공유가능한 Object
의사(가상)컬럼 NEXTVAL, CURRVAL
→ nextval은 사용가능한 당음 sequence값을 반환
→ nextval은 참조되더라도 매번 고유한 값 반환
→ currval은 현재 sequence값 포함
→ currval은 반드시 nextval사용 후에 참조

인덱스(index)★★★★
→ 데이터를 좀더 빠르게 검색하기 위해 사용하는 Object
→ OracleServer가 최적화 방법에 따라 인덱스를 골라 사용함
→ OracleServer가 index를 자동으로 사용하고 유지보수함
→ B*Tree의 검색방법으로 입출력 횟수를 줄임(이진트리)
→ 논리적, 물리적 테이블과는 독립적
→ 자동 생성되기도 하고 사용자 정의로 만들기도 함
→ 테이블 각 행에 대응하는 주소(ROWID)와 인덱스 컬럼값으로 구성
index가 필요할 때
→ 조건절이나 조인조건에서 컬럼을 자주 이용 할 때
→ 컬럼이 넓은 범위 값을 가질 때
→ 많은 NULL값을 갖는 컬럼일 때
→ 테이블에 데이터가 많고, 조회되는 행의 수가 전체의 10~15%정도 일때
index가 존재하지만 사용되지 않은 경우
→ INDEXED 컬럼이 비교되기 전에 변형이 일어난 경우
→ 부정(NOT, <>)으로 조건을 기술한 경우
→ INDEXED 컬럼이 NULL로 비교할 경우(NULL에 저장X)
→ Optimizer의 취사선택(힌트_주석으로 넣어야 실행한다.)
	※index는 적절히 사용해야 한다. 많다고 좋은 것이 아님.

CORRELATED SUBQUERY(상관쿼리)_교제 참고

View
→ 테이블이나 뷰를 기초로 한 가상의 테이블
→ 자체 데이터는 없지만 데이터를 보거나 변경 가능
→ 실제적으로 SQL문으로 저장됨
장점
→ DB의 선택적인 내용을 보여줄 수 있기 때문에 액세스를 제한함.(보안상 이유)
→ 복잡한 SQL문의 결과를 간단한 SQL문으로 가능하게 함
→ 한 개의 뷰로 여러 테이블 데이터를 검색(JOIN)
사용규칙
→ 테이블이 1개인 간단한 뷰에서는 DML연산 수행가능

NVL FUNCTION
→ NULL값을 포함하는 컬럼을 지정된 값으로 변경하는데 사용
→ 모든 데이터 타입에 적용가능

DECODE FUNCTION _ CASE문과 동일
→ 값을 비교해 해당하는 값을 돌려주는 함수
ex) DECODE(형식, 비교값1, 결과치, 비교값2, 결과치, … 기본치)

ROLLUP함수 → 그룹별 합계
CUBE함수 → 그룹별 합계 & 소계
RANK함수 → 행별, 그룹별 순위를 계산

Multi Row Comparison Operator
→ IN/NOT IN (LIST에 있는 값과 같은지 / 같지 않은지 비교)
→ ANY/ALL (리턴 값 중 하나와 비교/ 모두와 비교)
→ EXISTS/NOT EXISTS(subquery에서 만족값 발견하면 true / 발견하지 못하면 true)

rowid, rownum
(rowid)→ 각 행의 물리적인 주소를 고유하게 지정
(rownum)→ 리턴되는 행의 수를 제한하는 경우에 사용
