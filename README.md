# mvc

mvc is a small php mvc project .

## installation

install once with composer:

```
composer require itrax/db-wrapper
```

then add this to your project:

```php
require __DIR__ . '/vendor/autoload.php';
use Itrax\DbWrapper\dbwrapper;
$db = new dbwrapper();
```

## usage

```php
/* connect to database */
$db = new dbwrapper('127.0.0.1', 'username', 'password', 'database', 3306);

/* insert/update/delete */
$id = $db->insert('tablename', ['col1' => 'foo'])->excute();
$db->update('tablename', ['col1' => 'bar'])->where(['id' => $id])->excute();
$db->delete('tablename')->where(['id' => $id])->excute();

/* select */
$db->select('tablename','columns')->getAll();
$db->select('tablename','columns')->getRow();
$db->select('tablename','columns')->where(['id' => $id])->getRow();

$db->select('tablename','columns')->where(['id' => $id])->andWhere(['id' => $id])->getRow();

$db->select('tablename','columns')->where(['id' => $id])->orWhere(['id' => $id])->getRow();

```


