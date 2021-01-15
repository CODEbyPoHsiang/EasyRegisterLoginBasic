<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

Laravel EasyRegisterLogin
======================


## 
1. CLONE 專案 :
```
   git clone https://github.com/CODEbyPoHsiang/EasyRegisterLogin
```
2. cd 進入專案資料夾
```
  cd EasyRegisterLogin
```
3. 更名env檔 
```
cp .env.example .env
```
4. 安裝 composer 
```
  composer install
```
5. 建立專案使用的 database(只需一次)

6. An application key can be generated
```
  php artisan key:generate
```
7. migrate 資料表
```
  php artisan migrate
```
8. 啟動 artisan serve  服務
```
  php artisan serve
```
---
## 註冊 & 登入 API:

* 註冊 API (POST)
```
http://localhost:8000/api/register
```
* 登入 API (POST)
```
http://localhost:8000/api/login
```
* 登出 API (POST / 獲取token才能操作)
```
http://localhost:8000/api/logout
```
* 使用者清單 API (GET / 獲取token才能操作)
```
http://localhost:8000/api/list
```
---
## 編輯 ENV API:

*  env 項目清單 API (GET)
```
http://localhost:8000/api/env_list
```
* 新增 env 項目 API (POST)
```
http://localhost:8000/api/env_new
```
* 修改 env 項目 API (PUT)
```
http://localhost:8000/api/env_edit
```
* 刪除 env 項目 API (DELETE)
```
http://localhost:8000/api/env_del
```


