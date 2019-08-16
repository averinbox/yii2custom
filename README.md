<p align="center">
    <a href="https://www.yiiframework.com/" target="_blank">
        <img src="https://www.yiiframework.com/files/logo/yii.png" width="400" alt="Yii Framework" />
    </a>
</p>

<h1 align="center">Yii 2 Custom Template</h1>
<h3>Кастомный шаблон Yii2</h3>

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2.svg)](https://packagist.org/packages/yiisoft/yii2)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2.svg)](https://packagist.org/packages/yiisoft/yii2)
[![Build Status](https://img.shields.io/travis/yiisoft/yii2.svg)](https://travis-ci.org/yiisoft/yii2)
[![Code Coverage](https://scrutinizer-ci.com/g/yiisoft/yii2/badges/coverage.png?s=31d80f1036099e9d6a3e4d7738f6b000b3c3d10e)](https://scrutinizer-ci.com/g/yiisoft/yii2/)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/yiisoft/yii2/badges/quality-score.png?s=b1074a1ff6d0b214d54fa5ab7abbb90fc092471d)](https://scrutinizer-ci.com/g/yiisoft/yii2/)
[![Code Climate](https://img.shields.io/codeclimate/github/yiisoft/yii2.svg)](https://codeclimate.com/github/yiisoft/yii2)

СТРУКТУРА ФАЙЛОВ
-------------------

```
config                  Конфиги приложения  
framework               Фреймворк
public                  Точка входа веб-приложения
    assets/                 Содержит ассеты, например: js, css
runtime                 Временные файлы
src                     Приложение
    applications            Интерфейсы приложения, например: frontend, backend, api
        frontend/               Интерфейс публичного представления приложения
    commands/               Консольные контроллеры (команды)
    components/             Компоненты, переопредиляющие стандартные классы фреймфорка
    models/                 Общие модели для интерфейсов приложения
test/                    Тесты
vendor/                  Вендорные пакеты
```

Системные требования
-------------------

```
php 7.2
pgsql 9.5
```

Установка
-------------------

```
composer install
chmod 0777 runtime
chmod 0777 public/assets
```

Конфиги
-------------------

Для создания конфигурации приложения, требуется настроить файл .env (.env.example)
