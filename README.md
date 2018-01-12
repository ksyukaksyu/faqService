FAQ servise with moderation and telegram-bot
===============================

@author Ksenia Konovalova

# Install
Additional info for nginx server:
```
https://github.com/yiisoft/yii2/blob/master/docs/guide/start-installation.md#recommended-nginx-configuration-
```

Home:
```
/frontend/web/
```

User:
```
admin:adminadmin
```

## DB
DB config:
```
/common/config/main.php
```

DB dump:
```
faq.sql
```

DB schema:
```
db_schema.jpg
```

![schema](db_schema.jpg)


# Features

## Logger

Class:
```php
class common\log\AppTarget
```

Log file:
```
/frontend/runtime/logs/actions.log
```

## Bloking by key words

Class:
```php
class frontend\models\Stopword
class frontend\models\StopwordsSearch
```

Method:
```php
frontend\models\Question->save()
```

## Telegram Bot
Class:
```php
class frontend\mods\Telegram
```

Bot:
```
http://telegram.me/FAQNetDiplomaBot
```
