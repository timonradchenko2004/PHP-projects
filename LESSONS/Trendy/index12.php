<?
/*
1. Создать базу данных "Shop" в БД создать табличку
Product с полями id (int not null primary key) Name
(text) Price (int).

2. Написать запрос для добавления продуктов в табличку
(добавить 10 продуктов).
*/

$db = new PDO("mysql:host=localhost;dbname=shop;charset=utf8", "root", "", [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

//$db->query("INSERT INTO Product (name, price) VALUES ('Монитор 1', 10)");

/*
for ($i = 1; $i < 10; $i++) {
	$name = 'Монитор '.($i + 1);
	$price = rand(1, 25);
	$db->query("INSERT INTO Product (name, price) VALUES ('$name', $price)");
}
*/

/*
3. Написать запросы для вывода:
a) Всех продуктов;
b) Продуктов, цена которых выше 10;
c) Продуктов, цена которых больше 5 и меньше 20;
d)Продуктов, которые начинаются на букву A;
e) Всех продуктов, отсортированных по возрастанию
цены.
*/

//a) Всех продуктов;
/*
$result = $db->query("SELECT id, name, price FROM Product");
//$rows = $result->fetchAll();
while ($row = $result->fetch()) {
	echo "<h1>".$row["name"]."</h1>";
	echo "<h2>Цена: ".$row["price"]."</h2>";
	echo "<hr>";echo "<hr>";
}
*/

//b) Продуктов, цена которых выше 10;
/*
$result = $db->query("SELECT id, name, price FROM Product WHERE price > 10");
while ($row = $result->fetch()) {
	echo "<h1>".$row["name"]."</h1>";
	echo "<h2>Цена: ".$row["price"]."</h2>";
	echo "<hr>";echo "<hr>";
}
*/

//c) Продуктов, цена которых больше 5 и меньше 20;
/*
$result = $db->query("SELECT id, name, price FROM Product WHERE price > 5 AND price < 20");
while ($row = $result->fetch()) {
	echo "<h1>".$row["name"]."</h1>";
	echo "<h2>Цена: ".$row["price"]."</h2>";
	echo "<hr>";echo "<hr>";
}
*/

//d)Продуктов, которые начинаются на Монитор;
/*
$result = $db->query("SELECT id, name, price FROM Product WHERE name LIKE 'Монитор %'");
while ($row = $result->fetch()) {
	echo "<h1>".$row["name"]."</h1>";
	echo "<h2>Цена: ".$row["price"]."</h2>";
	echo "<hr>";echo "<hr>";
}
*/

//e) Всех продуктов, отсортированных по возрастанию цены.
/*
$result = $db->query("SELECT id, name, price FROM Product ORDER BY price");
while ($row = $result->fetch()) {
	echo "<h1>".$row["name"]."</h1>";
	echo "<h2>Цена: ".$row["price"]."</h2>";
	echo "<hr>";echo "<hr>";
}
*/

//4. Написать запрос, который позволит поменять цену продукта. 
/*
$id = 5;
$price = 15;
$db->query("UPDATE Product SET price=$price WHERE id=$id");
*/

//5. Создать табличку Category с полями id (int not null primary key), Name (text). 
//7. Написать запрос для добавления категорий в табличку Category.

/*
$categories = ['Мониторы', 'Телефоны', 'Планшеты'];
foreach ($categories as $category) {
	$db->query("INSERT INTO Category (name) VALUES ('$category')");
}
*/

/*6. Написать запросы для вывода:
a) Всех категорий;
b) Категорий, отсортированных по возрастанию;
c) Категорий, отсортированных по id по убыванию.*/


//a) Всех категорий;
/*
$result = $db->query("SELECT id, name FROM Category");
while ($row = $result->fetch()) {
	echo "<h1>".$row["name"]."</h1>";
	echo "<hr>";echo "<hr>";
}
*/

//b) Категорий, отсортированных по возрастанию;
/*
$result = $db->query("SELECT id, name FROM Category ORDER BY name ASC");
while ($row = $result->fetch()) {
	echo "<h1>".$row["name"]."</h1>";
	echo "<hr>";echo "<hr>";
}
*/

//c) Категорий, отсортированных по id по убыванию.
/*
$result = $db->query("SELECT id, name FROM Category ORDER BY id DESC");
while ($row = $result->fetch()) {
	echo "<h1>".$row["id"]." - ".$row["name"]."</h1>";
	echo "<hr>";echo "<hr>";
}
*/

/*
8. В табличку Product добавить поле idCategory которое будет внешним ключом 
к табличке Category по полю id.
*/

/*9. Обновить все записи в табличке Product (добавить
в поле idCategory значение категории).*/

/*
10. Написать скрипты для вывода:
a) Всех продуктов с категориями;
b) Продуктов только одной категории;
c) Продуктов, не имеющих категории.
*/

//a) Всех продуктов с категориями;
/*
$result = $db->query("SELECT Product.name AS p_name, Product.price, Category.name 
AS c_name FROM Product, Category WHERE Product.category_id = Category.id");

while ($row = $result->fetch()) {
	echo "<h1>".$row["p_name"]."</h1>";
	echo "<h2>Цена: ".$row["price"]."</h2>";
	echo "<h2>Категория: ".$row["c_name"]."</h2>";
	echo "<hr>";
}
*/

//b) Продуктов только одной категории;
/*$cat = 'Планшеты';
$result = $db->query("SELECT Product.name AS p_name, Product.price, Category.name 
AS c_name FROM Product, Category WHERE Product.category_id = Category.id AND Category.name = '$cat'");

while ($row = $result->fetch()) {
	echo "<h1>".$row["p_name"]."</h1>";
	echo "<h2>Цена: ".$row["price"]."</h2>";
	echo "<h2>Категория: ".$row["c_name"]."</h2>";
	echo "<hr>";
}
*/

//c) Продуктов, не имеющих категории.

$result = $db->query("SELECT name, price FROM Product WHERE category_id IS NULL");

while ($row = $result->fetch()) {
	echo "<h1>".$row["name"]."</h1>";
	echo "<h2>Цена: ".$row["price"]."</h2>";
	echo "<hr>";
}