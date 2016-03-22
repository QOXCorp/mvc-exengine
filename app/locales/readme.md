Views localization
===

MVC-ExEngine supports per view localization to improve order in your
application.

Just add a folder for each view file that you have. For example,
if you have a view named 'myview.phtml' in /app/views/, you should have
a folder named myview.phtml in /app/locales, like this: 
/app/locales/myview.phtml/, inside that folder you should create your
locale files and must match the root's locale files.

Real life example:
---

View:
/app/views/frontpage.phtml

Locale:
/app/locales/frontpage.phtml/en.yml

Root locale:
/app/locales/en.yml

How does it work
----------------

MVC-ExEngine localization engine will automatically recognize this
 situation and will choose the appropiate string, if the string is found
 in the views/frontpage.phtml/en.yml, it will use it, if not, will search
 in the root's en.yml and if not will search in the default localization
 of the application, if not found, will write the string that is used to
 find the translation.
 
It is ready to use?
-------------------
No. This feature is not ready yet. This file is a preview version.