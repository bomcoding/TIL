# Linux
> [생활코딩 Linux강좌](https://opentutorials.org/course/2598)를 보고 정리한 내용입니다.

## Linux기초
* mkdir -p(--parents) : 필요하면 부모 디렉토리를 생성한다.
* sudo : (super user do)의 약자. 관리자 권한으로 명령어를 실행시킬때.
* nano 에디터 : 파일을 생성 및 수정 할 수 있는 에디터
* 패키지 매니저 : apt
* git : 버전관리 프로그램

## IO Redirection
* output
* input
* append

## 쉘과 쉘스크립트
* shell : 사용자가 입력한 명령을 해석.
	* bash(리눅스탑제), zsh(다운로드)

## 디렉토리
* /  – Root
	* 최상위 디렉토리. 모든 디렉토리들을 절대경로로 표기할 때 루트에서 시작해야함.
* /bin – User Binaries
	* 기본적인 명령어를 가진 디렉토리.
* /sbin – System Binaries
	* 시스템관리자용 명령어를 가진 디렉토리.
* /etc – Configuration Files
	* 시스템의 거의 모든 설정파일이 존재하는 디렉토리.
* /dev – Device Files
	* 시스템 디바이스 파일을 저장하고 있는 디렉토리.
* /proc – Process Information
	* 가상파일시스템. 현재 메모리에 존재하는 모든 작업들이 파일형태로 존재하는 곳.
* /var – Variable Files
	* 시스템운용중에 생성되었다가 삭제되는 데이터를 일시적으로 저장하기 위한 디렉토리.
* /tmp – Temporary Files
	* 시스템을 사용하는 모든 사용자들이 공동으로 사용하는 디렉토리.
* /usr – User Programs
	* 시스템이 아닌 일반사용자들이 주로 사용하는 디렉토리.
* /home – Home Directories
	* 사용자의 홈디렉토리.
* /boot – Boot Loader Files
	* 리눅스 부트로더(Boot Loader)가 존재하는 디렉토리.
* /lib – System Libraries
	* 커널이 필요로하는 커널모듈파일들과 프로그램에 필요한 각종 라이브러리 파일들이 존재하는 디렉토리.
* /opt – Optional add-on Applications
	* 애드온 소프트웨어를 설치할 수 있도록 만들어진 디렉토리.
* /media – Removable Media Devices
	* 탈부착이 가능한 장치들의 마운트포인트로 사용되는 디렉토리.
* /mnt – Mount Directory
	* 탈부착이 가능한 장치들의 '일시적인' 마운트포인트로 사용하는 디렉토리.
* /srv – Service Data
	* 서비스 디렉토리. ftp, http, cvs 등의 데이터 포함.