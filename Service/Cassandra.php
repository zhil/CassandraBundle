<?php
namespace Zhil\Bundle\CassandraBundle\Service;

class CassandraPDO
{
    protected $nodes        = '';
    protected $keyspace     = '';
    protected $connection   = NULL;

    public function __construct($nodes, $keyspace)
    {
        $this->nodes        = $nodes;
        $this->keyspace     = $keyspace;
        $this->connection   = new Cassandra\Connection($nodes);

        $this->exec('USE '. $this->keyspace .';');
    }

    public function query($query)
    {
        return $this->connection->query($query);
    }
}