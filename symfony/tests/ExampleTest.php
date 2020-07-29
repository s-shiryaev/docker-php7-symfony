<?php

namespace App\Tests;


use Psr\Cache\CacheItemPoolInterface;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ExampleTest extends KernelTestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;


    /**
     * @var CacheItemPoolInterface
     */
    private $cache;

    protected function setUp()
    {
        $kernel = self::bootKernel();

        $this->entityManager = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();
        $this->cache = $kernel->getContainer()
            ->get('cache.app');
    }

    protected function tearDown(): void
    {
        $this->entityManager->close();
        $this->entityManager = null; // avoid memory leaks
        parent::tearDown();
    }


    public function testDoctrineConnection()
    {
        $this->assertTrue($this->entityManager->getConnection()->connect());
    }

    public function testRedisConnection()
    {
        $this->assertTrue($this->cache->clear());
    }
}
