 Web CMS Programming with Yii
=============================
 Yii - a high-performance component-based PHP framework.

DEMO-URL
------------
 http://demo-yii1admin.coderfix.cn/
 username admins
 password 123456


INSTALLATION
------------

Please make sure the release file is unpacked under a Web-accessible
directory. You shall see the following files and directories:

      assets/              JS CSS these static resource files
      css/                 Other CSS static resource files
      protected/           Major projects of the project
      upload/              File upload directory
      static/              Other static resource files
      framework/           framework source files
      vendor/              Class library introduced by the third party
      README               this file


REQUIREMENTS
------------

The minimum requirement by Yii is that your Web server supports
PHP 5.1.0 or above. Yii has been tested with Apache HTTP server
on Windows and Linux operating systems.

Note that this project has been tested on the **PHP7** !

QUICK START
-----------

- Download the project to your server wwwroot directory
- Set up the corresponding server virtual machine to the project root directory.
- Import database file, file location in ```protected/data/yii_admin.sql```
- Modify the database configuration file in the configuration file, the file is located in ```protected/config/main.php```
- username is ```admins```  , password is  ```123456```

Note, please open your server's rewire module, to ensure that the project address of the effective jump

Please ensure that the following directory has the right to write
- assets
- protected/runtime

WHAT IN THIS
-----------

This project has the following modules

-  srbac, a role based authority management module
-  unlimited classification module
-  article editing module


WRITE IN THE END
-----------

This project continues to update, please look forward to