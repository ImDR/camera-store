# Camera Store Challenge

This challenge is completed in Lumen (5.5.2) (Laravel Components 5.5.*).

Lumen is a “micro-framework” created by Laravel. It has been designed to develop micro services or RESTful API.

**Migration and Seeding**

``php artisan migrate:refresh --seed``

### 1. list all products

**Request**

url: http://localhost/camera-store/public/product

method: GET

### 2. list all categories 

**Request**

url: http://localhost/camera-store/public/category

method: GET

### 3. list all products of a speciﬁc category 

**Request**

url: http://localhost/camera-store/public/category/{cat_id}

method: GET

example: http://localhost/camera-store/public/category/2

### 4. user login

**Request**

url: http://localhost/camera-store/public/login

method: POST

parameters: email (required), password (required)

### 5. add product to cart

**Request**

url: http://localhost/camera-store/public/cart

method: POST

parameters: product_id (required), qty (required)

### 5.2. get my cart

**Request**

url: http://localhost/camera-store/public/cart

method: GET

### 6. get cart for a speciﬁc user 

**Request**

url: http://localhost/camera-store/public/user/{id}/cart

method: GET

example: http://localhost/camera-store/public/user/1/cart
