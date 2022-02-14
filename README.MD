# Familty Tree

## What is Family Tree?

Family Tree is a full-stack application with a backend written in PHP and a frontend in Angular.

The application is currently **in-progress** and was made just for fun and for the sake of learning.

## Prerequisites

- Composer installed
- XAMMP for windows
- The php internationalize package enabled  (`extension=intl` inside `xampp/php/php.ini`)

## Setup for XAMPP
First, we need to modify the httpd-vhost.conf file, it's under the conf/extra folder of your XAMPP instalation, for example: 
`D:/xampp/apache/conf/extra/httpd-vhost.conf`, we need to add the following:

```xml
NameVirtualHost *

<VirtualHost *>
  DocumentRoot "D:\xampp\htdocs"
  ServerName localhost
</VirtualHost>

<VirtualHost *>
  DocumentRoot "D:/xampp/htdocs/familytree/backend/public"
  ServerName api.familytree.local
</VirtualHost>

<VirtualHost *>
  DocumentRoot "D:/xampp/htdocs/familytree/frontend/public"
  ServerName app.familytree.local
</VirtualHost>
```

Restarts your apache server.

Now, we need to update (as admin) the hosts file, it's under the drivers/etc folder of your Windows/System32 folder, for example: 
`C:/Windows/System32/drivers/etc/hosts`, we need to add the following:

```ini
127.0.0.1     api.familytree.local
127.0.0.1     app.familytree.local
```

The preparations are done, we need to clone the familytree project inside the `D:/xampp/htdocs/` folder

Under the backend subdirectory we need to run compose install

Under the frontend subdirectory we need to run:
- npm install
- npm run build

Now you can enter the http://app.familytree.local/ url

The backend can be accessed with the http://api.familytree.local/ url

Remember that for update the frontend in the http://app.familytree.local/ you need to run `npm run build` under the frontend folder

For development you can run npm run start and work in http://localhost:4200/
