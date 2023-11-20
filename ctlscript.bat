@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist D:\XAMMP\hypersonic\scripts\ctl.bat (start /MIN /B D:\XAMMP\server\hsql-sample-database\scripts\ctl.bat START)
if exist D:\XAMMP\ingres\scripts\ctl.bat (start /MIN /B D:\XAMMP\ingres\scripts\ctl.bat START)
if exist D:\XAMMP\mysql\scripts\ctl.bat (start /MIN /B D:\XAMMP\mysql\scripts\ctl.bat START)
if exist D:\XAMMP\postgresql\scripts\ctl.bat (start /MIN /B D:\XAMMP\postgresql\scripts\ctl.bat START)
if exist D:\XAMMP\apache\scripts\ctl.bat (start /MIN /B D:\XAMMP\apache\scripts\ctl.bat START)
if exist D:\XAMMP\openoffice\scripts\ctl.bat (start /MIN /B D:\XAMMP\openoffice\scripts\ctl.bat START)
if exist D:\XAMMP\apache-tomcat\scripts\ctl.bat (start /MIN /B D:\XAMMP\apache-tomcat\scripts\ctl.bat START)
if exist D:\XAMMP\resin\scripts\ctl.bat (start /MIN /B D:\XAMMP\resin\scripts\ctl.bat START)
if exist D:\XAMMP\jetty\scripts\ctl.bat (start /MIN /B D:\XAMMP\jetty\scripts\ctl.bat START)
if exist D:\XAMMP\subversion\scripts\ctl.bat (start /MIN /B D:\XAMMP\subversion\scripts\ctl.bat START)
rem RUBY_APPLICATION_START
if exist D:\XAMMP\lucene\scripts\ctl.bat (start /MIN /B D:\XAMMP\lucene\scripts\ctl.bat START)
if exist D:\XAMMP\third_application\scripts\ctl.bat (start /MIN /B D:\XAMMP\third_application\scripts\ctl.bat START)
goto end

:stop
echo "Stopping services ..."
if exist D:\XAMMP\third_application\scripts\ctl.bat (start /MIN /B D:\XAMMP\third_application\scripts\ctl.bat STOP)
if exist D:\XAMMP\lucene\scripts\ctl.bat (start /MIN /B D:\XAMMP\lucene\scripts\ctl.bat STOP)
rem RUBY_APPLICATION_STOP
if exist D:\XAMMP\subversion\scripts\ctl.bat (start /MIN /B D:\XAMMP\subversion\scripts\ctl.bat STOP)
if exist D:\XAMMP\jetty\scripts\ctl.bat (start /MIN /B D:\XAMMP\jetty\scripts\ctl.bat STOP)
if exist D:\XAMMP\hypersonic\scripts\ctl.bat (start /MIN /B D:\XAMMP\server\hsql-sample-database\scripts\ctl.bat STOP)
if exist D:\XAMMP\resin\scripts\ctl.bat (start /MIN /B D:\XAMMP\resin\scripts\ctl.bat STOP)
if exist D:\XAMMP\apache-tomcat\scripts\ctl.bat (start /MIN /B /WAIT D:\XAMMP\apache-tomcat\scripts\ctl.bat STOP)
if exist D:\XAMMP\openoffice\scripts\ctl.bat (start /MIN /B D:\XAMMP\openoffice\scripts\ctl.bat STOP)
if exist D:\XAMMP\apache\scripts\ctl.bat (start /MIN /B D:\XAMMP\apache\scripts\ctl.bat STOP)
if exist D:\XAMMP\ingres\scripts\ctl.bat (start /MIN /B D:\XAMMP\ingres\scripts\ctl.bat STOP)
if exist D:\XAMMP\mysql\scripts\ctl.bat (start /MIN /B D:\XAMMP\mysql\scripts\ctl.bat STOP)
if exist D:\XAMMP\postgresql\scripts\ctl.bat (start /MIN /B D:\XAMMP\postgresql\scripts\ctl.bat STOP)

:end

