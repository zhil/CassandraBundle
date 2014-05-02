CassandraBundle
===============

Symfony2 bundle for the Cassandra NoSQL database (use [php-cassandra](https://github.com/mauritsl/php-cassandra) )

## Installation

* Include in `AppKernel.php`

  ```php
  new Zhil\Bundle\CassandraBundle\ZhilCassandraBundle(),
  ```

* Configure parameters in `app/config/parameters.yml`

  ```yml
  parameters:
      #...

      zhil.cassandra.nodes: host=localhost;port=9160
      zhil.cassandra.keyspace: my_keyspace
  ```

## Usage

```php
/**
 * @var \Zhil\Bundle\CassandraBundle\Service\Cassandra $cassandra
 */
$cassandra = $this->get('zhil.cassandra');

$stmt = $cassandra->prepare("SELECT id FROM my_table WHERE id = :id LIMIT 1;");
$stmt->bindValue(':id', $id);
$stmt->execute();

$row = $stmt->fetchObject();
```
