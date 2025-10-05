<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $local_variable = '<p>local_variable! 저는 <strong style="color: blue">p태그</strong>를 가지고 있어요.</p>';
    ?>
    <h1>{{ $messeage }}</h1>
    <div>
        <h2>HTML포함 출력</h2>
        <p>{{ $local_variable }}</p>
    </div>
    <div>
        <h2>escape없이 출력. 이건 XSS주의!</h2>
        <p>{!! $local_variable !!}</p>
    </div>
    <div>
        <h2>변수 데이터 받기</h2>
        <p>이름: {{ $user['name'] }}</p>
        <p>나이: {{ $user['age'] }}</p>
        <p>종류: {{ $user['role'] }}</p>
    </div>
    <div>
        <h2>If and else</h2>
        @if ($user['name'] == '피카츄')
            <p>저는 피카츄예요</p>
        @else
            <p>저는 피카츄가 아니랍니다</p>
        @endif
    </div>
    <div>
        <h2>foreach</h2>
        @foreach ( $fruits as $fruit )
            <p>{{ $fruit }}</p>
        @endforeach
    </div>
</body>
</html>