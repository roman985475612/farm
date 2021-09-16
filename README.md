# Ферма

*Для установки требуется версия PHP не ниже 8.0*

Установка и запуск:
1. `git clone https://github.com/roman985475612/farm.git`
2. `composer install`
3. `php main.php`

Реализованная функциональность:
1. Добавление животных в хлев `Cawshed::addAnimal`
2. Сбор продукции у всех животных зарегистрированных в хлеву `Cawshed::collectProducts`
3. Подсчет общего количества собранной продукции `Warehouse::getTotalAmountProducts`
4. Вывод на экран общего количества собранной продукции `Warehouse::showTotalAmountProducts`
5. Юнит-тестирование `composer test`