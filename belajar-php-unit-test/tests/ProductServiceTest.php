<?php

namespace ProgrammerZamanNow\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class ProductServiceTest extends TestCase
{
    private ProductRepository $repository;
    private ProductService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createStub(ProductRepository::class);
        $this->service = new ProductService($this->repository);
    }

    public function testStub()
    {
        $product = new product();
        $product->setId("1");

        $this->repository->method("findById")->willReturn($product);

        $result = $this->repository->findById("1");
        self::assertSame($product, $result);
    }

    public function testStubMap()
    {
        $product1 = new product();
        $product1->setId(1);

        $product2 = new product();
        $product2->setId(2);

        $map = [
            ["1", $product1],
            ["2", $product2],
            ["3", $product2],
        ];

        $this->repository->method("findById")->willReturnMap($map);

        var_dump($this->repository->findById("3"));

        self::assertSame($product1, $this->repository->findById("1"), "Data tidak ditemukan");
        self::assertSame($product2, $this->repository->findById("2"), "Data tidak ditemukan");

    }

    public function testStubCallback()
    {
        $this->repository->method("findById")
            ->willReturnCallback(function (string $id)  {
                $product = new product();
                $product->setId($id);
                return $product;
            });

        self::assertSame("1", $this->repository->findById("1")->getId());
        self::assertSame("2", $this->repository->findById("2")->getId());
    }

    public function testRegisterSuccess()
    {
        $this->repository->method("findById")->willReturn(null);
        $this->repository->method("save")->willReturnArgument(0);

        $product = new product();
        $product->setId("1");
        $product->setName("Contoh");

        $result = $this->service->register($product);


        self::assertEquals($product->getId(), $result->getId());
        self::assertEquals($product->getName(), $result->getName());

    }

    public function testRegisterFailed()
    {
        $this->expectException(\Exception::class);

        echo "Masuk pak ekokokoko\n";

        $productInDB = new product();
        $productInDB->setId("1");
        $this->repository->method("findById")->willReturn($productInDB);

        $product = new product();
        $product->setId("1");
        $product->setName("Contoh");

        $this->service->register($product);

    }

    public function testDeleteSuccess()
    {
        $product = new product();
        $product->setId("1");

        $this->repository->method("findById")->willReturn($product);

        $this->service->delete(1);

        self::assertTrue(true, "Success delete");
    }

    public function testDeleteFailed()
    {
        $this->expectException(\Exception::class);

        $this->repository->method("findById")->willReturn(null);


        $this->service->delete(1);
    }
}
