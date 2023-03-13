# SimpleLamp
最小のPHP,Apache,MySQLコンテナ構成

## Apache
### httpd.conf
- mod_proxy.soを有効化
- mod_proxy_fcgi.soを有効化
### httpd-vhosts.conf
```
<VirtualHost *:80>
    ServerName localhost
    ServerAlias *.localhost
    DocumentRoot "/usr/local/apache2/htdocs"
    <Directory "/usr/local/apache2/htdocs">
        Require all granted
        DirectoryIndex index.php
        AllowOverride FileInfo
        FallbackResource /index.php
    </Directory>
    ProxyPassMatch "^/(.*.php(/.*)?)$" "fcgi://php:9000/usr/local/apache2/htdocs/$1"
</VirtualHost>
```
