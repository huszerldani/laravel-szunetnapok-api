## Fejlesztés alatt

# Laravel Munkaszüneti napok API

Egyszerű munkaszüneti napok lekérdezése bármelyik évre, kiegészítve a plusz munkanapokkal.

## A package a [szunetnapok.hu](https://szunetnapok.hu/) API-ját használja
https://szunetnapok.hu/

### [Az eredeti API dokumentációja](https://szunetnapok.hu/acc#api_desc)

## Feltételek

A használathoz szükséges API kulcsot igényelni:
#### [Szünetnapok.hu regisztráció](https://szunetnapok.hu/reg)

## Telepítés

```bash
composer require huszerldani/laravel-szunetnapok-api
```
<br/>
Az API kulcsot a .env file-ban kell megadni:

```
SZUNETNAPOK_API_KEY=
```

## Használat

```php
use Pinasen\SzunetNapok\SzunetNapok;

$year = 2021;

// Év megadása nem kötelező.
// Alapértelmezetten az aktuális évet kéri le
$szunetnapok = SzunetNapok::getYear($year);
```
