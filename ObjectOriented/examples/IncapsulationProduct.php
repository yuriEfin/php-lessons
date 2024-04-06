<?php

namespace ObjectOriented\examples;

class ProductDto
{
    public function __construct(
        public int $price,
        public string $title,
        public int $discount
    ) {
    }
}

interface CreateOperationInterface
{
    public function create(ProductDto $productDto);
}

interface CreateRepositoryInterface
{
    public function create(ProductDto $productDto);
}

interface EntityInterface
{
}

readonly class DbProduct implements EntityInterface
{
    public function __construct(
        public int $price,
        public string $title,
        public int $discount
    ) {
    }
}

class DbManager
{
    public $dbAdapter;
    
    public function save(EntityInterface $entity)
    {
        $this->dbAdapter->persist($entity); // метод который сделает запись в БД, как он это сделает вопрос пятый - важно что мы сохраним наш товар в бд
    }
}

class ProductRepository implements CreateRepositoryInterface
{
    public function __construct(
        public DbManager $dbManager
    ) {
    }
    
    public function create(ProductDto $productDto): bool
    {
        if ($productDto->price <= 0) {
            return false;
        }
        
        // start transaction
        $this->dbManager->save(new DbProduct($productDto->price, $productDto->title, $productDto->discount));
        
        // commit
        
        return false;
    }
}

class CreateProductService implements CreateOperationInterface
{
    private readonly CreateRepositoryInterface $repository;
    
    public function create(ProductDto $productDto): bool
    {
        try {
            // ловим ошибки - например в валидации мы не проверили на уникальность, а в бд индекс на уникальность стоит - вылетим в ошибку
            return $this->repository->create($productDto);
        } catch (DbException $exception) { // класса DbException у нас нет, представим что есть..
            // обработка ошибки
            return false;
        }
    }
}

$productService = new  CreateProductService();
$productService->create(new ProductDto(/*...properties...*/));


interface EntityInterface
{

}

echo '<pre>';
$product = new DbProduct(500, 'Карта памяти 32Gb', 3);
$product->price = 400;
$product->title = 'Другой товар';
var_dump($product);
