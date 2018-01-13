# Camera Store Challenge

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

### get my cart

**Request**

url: http://localhost/camera-store/public/cart

method: GET

### 6. get cart for a speciﬁc user 

**Request**

url: http://localhost/camera-store/public/user/{id}/cart

method: GET

example: http://localhost/camera-store/public/user/1/cart
