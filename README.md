<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

- composer install
- Run php artisan key:generate
- Run php artisan migrate

for the data sample

```bash
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=CategorySeeder
php artisan db:seed --class=ProductSeeder

php artisan jwt:secret
```
- Run php artisan serve 

## Documentasi API 

## Register

```bash
POST: localhost:8000/api/register
Request Body:
{
  "name":"asima",
  "email":"asima6453@gmail.com",
  "password":"admin12345",
  "password_confirmation": "admin12345"
}
```
- Output
```js
{
  "message": "201 Scuccess Create",
  "user": {
    "name": "asima",
    "email": "asima6453@gmail.com",
    "updated_at": "2025-02-12T14:12:15.000000Z",
    "created_at": "2025-02-12T14:12:15.000000Z",
    "id": 6
  },
  "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYXBpL3JlZ2lzdGVyIiwiaWF0IjoxNzM5MzY5NTM1LCJleHAiOjE3MzkzNzMxMzUsIm5iZiI6MTczOTM2OTUzNSwianRpIjoiMWdTSXM0N005YWdvTWg5UiIsInN1YiI6IjYiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.STOEqxRXT1eKV9eMYfgv0sVosfPcU0ku9mEMFzwiNJo"
}
```
## Login

```bash
POST: localhost:8000/api/login
Request Body:
{
  "email": "asima6453@gmail.com",
  "password": "admin12345"
}
```

- Output
```js
{
  "user": {
    "id": 6,
    "name": "asima",
    "email": "asima6453@gmail.com",
    "email_verified_at": null,
    "created_at": "2025-02-12T14:12:15.000000Z",
    "updated_at": "2025-02-12T14:12:15.000000Z"
  },
  "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNzM5MzY5NjM3LCJleHAiOjE3MzkzNzMyMzcsIm5iZiI6MTczOTM2OTYzNywianRpIjoiaEJLZk51N1Z2M3R1dUREQyIsInN1YiI6IjYiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.QIcIu4dOg0Tq3bF-q-EU5N3ZTKXZS236cD_iGcSJRi8"
}
```

## Category Product

```bash
GET: localhost:8000/api/products
Header:
{
Accept: */*
User-Agent: Thunder Client (https://www.thunderclient.com)
Authorization: TOKEN_JWT_USER
}
```

- Output
```js
{
  "success": true,
  "data": [
    {
      "id": 2,
      "name": "Product 2",
      "price": 15000,
      "image": "product2.jpg",
      "product_category_id": 2,
      "created_at": "2025-02-12T06:46:58.000000Z",
      "updated_at": "2025-02-12T06:46:58.000000Z"
    },
    {
      "id": 4,
      "name": "nihil",
      "price": 19134,
      "image": "product1.jpg",
      "product_category_id": 4,
      "created_at": "2025-02-12T06:46:58.000000Z",
      "updated_at": "2025-02-12T06:46:58.000000Z"
    },
    {
      "id": 5,
      "name": "neque",
      "price": 25869,
      "image": "product2.jpg",
      "product_category_id": 5,
      "created_at": "2025-02-12T06:46:58.000000Z",
      "updated_at": "2025-02-12T06:46:58.000000Z"
    },
  ]
}
```
----


- Create

```bash
POST: localhost:8000/api/products
Header: 

{
    Accept: */*
    User-Agent: Thunder Client (https://www.thunderclient.com)
    Authorization: TOKEN_JWT_USER
}

Request Body:
{
    "name": "tv",
    "category_product_id": 3,
    "price": 20000,
    "description": "Ini adalah tv categori 3"
}
```

- Output
```js
{
  "success": true,
  "message": "Category created successfully",
  "data": {
    "name": "Elektronik",
    "updated_at": "2025-02-12T14:20:42.000000Z",
    "created_at": "2025-02-12T14:20:42.000000Z",
    "id": 31
  }
}
```

---


- Delete

```bash
DELETE: localhost:8000/api/categories/1
Header: 

{
    Accept: */*
    User-Agent: Thunder Client (https://www.thunderclient.com)
    Authorization: TOKEN_JWT_USER
}

```

- Output
```js
{
  "success": true,
  "message": "Category deleted successfully"
}
```
---

- Update

```bash
PUT: localhost:8000/api/categories/31
Header: 

{
    Accept: */*
    User-Agent: Thunder Client (https://www.thunderclient.com)
    Authorization: TOKEN_JWT_USER
}

Body: 

{
    "name":"Televisi"
}

```

- Output
```js
{
  "success": true,
  "message": "Category updated successfully",
  "data": {
    "id": 31,
    "name": "Televisi",
    "created_at": "2025-02-12T14:20:42.000000Z",
    "updated_at": "2025-02-12T14:29:25.000000Z"
  }
}
```

## Products



```bash
GET: localhost:8000/api/products
Header:
{
Accept: */*
User-Agent: Thunder Client (https://www.thunderclient.com)
Authorization: TOKEN_JWT_USER
}
```

- Output
```js
{
  "success": true,
  "data": [
    {
      "id": 1,
      "name": "tv",
      "price": 20000,
      "image": "tv.png",
      "product_category_id": 3,
      "created_at": "2025-02-12T14:54:43.000000Z",
      "updated_at": "2025-02-12T14:54:43.000000Z"
    }
  ]
}
```
----


- Create

```bash
POST: localhost:8000/api/products
Header: 

{
    Accept: */*
    User-Agent: Thunder Client (https://www.thunderclient.com)
    Authorization: TOKEN_JWT_USER
}

Request Body:
{
    "name": "tv",
    "image": "tv.png",
    "price": 20000,
    "product_category_id": 3
}
```

- Output
```js
{
  "success": true,
  "message": "Product created successfully",
  "data": {
    "name": "tv",
    "image": "tv.png",
    "price": 20000,
    "product_category_id": 3,
    "updated_at": "2025-02-12T14:54:43.000000Z",
    "created_at": "2025-02-12T14:54:43.000000Z",
    "id": 1
  }
}
```

---

```