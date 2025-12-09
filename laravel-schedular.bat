@echo off
cd /d C:\xampp\htdocs\Projects XAV\Scheduledemo
C:\xampp\php\php.exe artisan schedule:run >> NUL 2>&1
