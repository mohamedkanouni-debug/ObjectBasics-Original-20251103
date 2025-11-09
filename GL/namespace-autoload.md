Namespacing:
1. move each class to src/class.php
2. create composer.json within the project root
3. execute composer install
4. add to composer.json 
    {
        "autoload":{
            "psr-4":{
                "App\\": "src"
            }
        }
    }

    alt. "classmap":["src"]

5. add namespace App; to each class
6. execute composer dump-autoload
7. in the index file add prefix App\Class
8. in the index file add require "vendor/autoload.php";
9. instead of prefix use App\Class
10. move class ot src/users/class so change its namespace and use