# Поиграйтесь с модификаторами доступа в классе Product
- private
- protected
- public
Измените их у свойств и методов в классах 
- [BookProduct.php](BookProduct.php)
- [ClothingProduct.php](ClothingProduct.php)

Создайте объект класса [ClothingProduct.php](ClothingProduct.php) и [BookProduct.php](BookProduct.php)

и повызывайте методы и свойства (напрямую) этих объектов - посмотрите на вывод ошибок на экране
- когда вы будете обращаться извне (в глобальной области видимости) к private или protected 
свойствам или методов - будете получать ошибку
- когда вы будете тоже самое делать с public свойствами и методами - то ошибки не будет

Однако public изначально считается ЗЛОм - так как нарушает инкапсуляцию, делает свойства и методы объекта доступными извне
Это может привести к тому что будет доступен вызов метода который меняет внутреннее состояние объекта и получите либо Логическую 
либо, еще круче, фатальную ошибку

И помните - прятать нужно все до чего не нужен доступ извне. Публичным, в идеале может быть только один метод 
в классе - та самая ручка которую можно дернуть для получения желаемого результата. Но это правило не всегда применимо 
- на практике вы это поймете

# Удачи! 