echo off
:top
cls
ECHO Updating DB
cd C:\wamp\www\MyNewsWebsite\magpierss-0.72\scripts
start php dbtrial.php
sleep 5

timeout /T 5
ECHO Updated DB
goto top
pause

REM start /min IEXPLORE.EXE http://localhost/MyNewsWebsite/magpierss-0.72/scripts/dbtrial.php