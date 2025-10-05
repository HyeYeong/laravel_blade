## 구조
### Routing

routes/web.php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('home'); // home.blade.php 이란 파일
});

#### .env 환경설정

데이터베이스, 애플리케이션 키 등을 설정

## MVC개념

#### Model
- 담당하는것? 
- - 데이터(테이블)와 그 데이터와 관련된 비즈니스 로직을 책임짐.
- - DB 쿼리(Eloquent), 관계(hasMany, belongsTo 등), 액세서/뮤테이터(accessor/mutator), 쿼리 스코프(scope), 도메인 메서드(예: $post->publish()), 팩토리/시더 관련 정의 등

- 왜 중요함?
- - 데이터 접근과 도메인 규칙(예: “게시물은 published_at이 있어야 공개다”)을 모델에 모아두면 코드가 재사용 가능하고 테스트하기 쉬워진다.
- - “Fat model, skinny controller” 원칙: 컨트롤러는 가능한 얇게, 로직은 모델(또는 서비스)로.

#### VIEW
- 화면에 보여지는 내용들을 기재
- 로직은 최대한 적지 말아야함
-   이 곳에 blade파일이 저장됨.
    resources/views/

#### Controller
- 담당하는것?
- - HTTP 요청을 받아서(요청 데이터 검증), 적절한 모델/서비스를 호출하고, 뷰나 JSON 응답을 반환한다.
- - 라우트와 모델/뷰를 연결하는 조정자 역할(Orchestrator).
- 구체적 역할?
- - 요청 검증(짧은 경우) 또는 FormRequest 사용으로 분리
- - 권한 체크(간단한 경우) 또는 Policy 사용
- - 필요한 모델을 불러오고(또는 의존성 주입), 결과를 가공해서 View/JSON으로 반환

#### 전체적인 흐름
1. 클라이언트 → HTTP 요청
2. routes/web.php가 요청을 라우팅 → 컨트롤러 메서드 호출
3. 컨트롤러가 Validation → Model/Eloquent 호출 또는 Service 위임
4. Model이 DB와 상호작용 → 결과 반환
5. 컨트롤러가 View(Blade)나 JSON으로 응답 반환 → 클라이언트

#### TIPS
- 뷰: 표시 로직만 (조건문, 루프, 간단한 포맷팅). 복잡한 변환/계산은 컨트롤러나 모델에서 처리해서 뷰에 넘겨라.
- 컨트롤러: 요청/응답 흐름, 간단한 데이터 가공, 인증/권한 체크, 뷰 선택.
- 모델: 데이터 관련 모든 규칙과 메서드, 쿼리 스코프, 도메인 행동.

## "Route → Controller → View"를 연결하는 가장 기본적인 구조 만들기
1. Route 설정
- routes/web.php
- Route::get('/hello', [HelloController::class, 'index']);

2. Controller 생성
- php artisan make:controller
- - HelloController //컨트롤러 파일이 생성됨
- - 여기서 Target class [HelloController] does not exist. 이런 에러가 떴었음
- - -> 왜? routes/web.php 에 새로 추가한 컨트롤러를 사용할거라르는 use 구문이 빠져있었다.

#### TIPS
- 혹시 캐시 문제일 경우 아래의 캐시 클리어 커맨드를 사용하기 
- - php artisan route:clear
- - php artisan config:clear
- - php artisan cache:clear