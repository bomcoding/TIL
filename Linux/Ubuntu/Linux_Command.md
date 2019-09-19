# Command List

* ls :  현재 디렉토리의 파일 목록을 출력하는 명령어.
* ls -l : 목록 자세히 보기.
* pwd : 현재 위치하고 있는 디렉토리를 알려주는 명령어.
* mkdir ~ : 새로 생성할 디렉토리명.
* cd : 상대경로(..)와 절대경로(/*/*)
* rm : 디렉토리를 삭제할 때는 -r을 붙여줘야 함(신중)
* --help : 거의 모든 커멘드 뒤에 붙이면 도움말을 표시.
* man : 매뉴얼의 약자. 커멘드의 상세설명.
* touch : 파일명 변경.
* cp : 파일 복사.
* mv : 파일 이동.
* sudo : 관리자 권한.
* apt : 설치 커멘드.
	* apt-get install : 패키지 설치.
	* apt-get update : 패키지 업데이트.
	* apt-get upgrade :  프로그램 업그레이드.
	* apt-get remove :  프로그램 삭제.
	* apt-cache search : 설치하고자 하는 프로그램 찾을 때.
* wget : URL을 통해 다운로드
* IO Redirection
	* < : input - 화면에 입력을 위한 Redirection기호.
		* standard input - 표준입력, (오른쪽)파일의 내용을 (왼쪽)파일에 입력한다.
	* > : ouput - 화면에 출력을 위한 Redirection기호.
		* 1> : standard output - 표준출력, 데이터를 이동하는 기호.
		* 2> : standard error - 실행하는 과정에서 발생한 데이터는 2>기호로 통해 이동.
	* >> : output append - Redirection 후 그 결과를 추가.
	* << : input append - 여러 개의 정보를 한 파일에 다중입력(<<임의)
	* /dev/null : 파일의 내용을 삭제
* shell
	* echo : 출력
	* bash shell(기본탑재)
	* zsh shell(설치)