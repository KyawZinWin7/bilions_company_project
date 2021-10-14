## Installation

- `composer install`
- `composer dump-autoload -o`

## Nginx configuration

#### Mac

```
server {
  server_name  bilions.local;
  root       /path/to/project/folder;
  index index.php home.php;
  location / {
	try_files $uri $uri/ /index.php?$query_string;
    location ~ \.php$ {
      fastcgi_pass   127.0.0.1:9000;
      fastcgi_index  index.php;
      fastcgi_param SCRIPT_FILENAME /path/to/project/folder$fastcgi_script_name;
      include        fastcgi_params;
    }
  }
  location ~ /\.ht {
    deny all;
  }
}

```

### Linux

```
server {
  server_name bilions.local;
  root /path/to/project/folder;;
  index index.php index.html;
  location / {
    try_files $uri $uri/ /index.php?$query_string;
  }
  location ~ \.php$ {
    include snippets/fastcgi-php.conf;
    fastcgi_pass unix:/run/php/php7.4-fpm.sock;
  }
  location ~ /\.ht {
    deny all;
  }
}
```

- This line may vary depend on your PHP version
  `fastcgi_pass unix:/run/php/php7.4-fpm.sock;`
