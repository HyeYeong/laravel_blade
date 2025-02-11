## start command

```
php artisan serve
http://localhost:8000
```

## 구조

#### VIEW

-   이 곳에 blade파일이 저장됨.
    resources/views/

#### Routing

routes/web.php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('home'); // home.blade.php 이란 파일
});

#### .env 환경설정

데이터베이스, 애플리케이션 키 등을 설정
