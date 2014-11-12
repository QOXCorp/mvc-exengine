MVC-ExEngine Configuration Directory

Please set up your MVC-ExEngine installation editing the following files:

exengine.php and eemvc.php

the first one `exengine.php` is the framework core configuration, the usual
editing only affects the `http_path` parameter and is relative to the URL
of your application.

on the second one `eemvc.php` you must your application configuration and
default values (database, language, folder locations, autoload libraries, etc)
please remember that MVC-ExEngine has session support disabled by default,
you must set the session configuration and the enable it, instructions are
provided as comments in the file.

QOX Corporation www.qox-corp.com