<?php

// check Url
if (!function_exists('checkUrl')) {
    function checkUrl(): string
    {
        $uri = str_replace('://www.', '://', request()->getUri());

        if (strpos($uri, config('site.app.api.url')) !== false) {
            return 'api';
        }

        if (strpos($uri, config('site.app.admin.url')) !== false) {
            return 'admin';
        }

        return 'web';
    }
}

// global auth
if (!function_exists('thisAuth')) {
    function thisAuth()
    {
        if (checkUrl() == 'admin') {
            return auth('admin');
        }

        return auth('web');
    }
}

// get App Name
if (!function_exists('getAppName')) {
    function getAppName(): string
    {
        return config('site.app.' . checkUrl() . '.app_name');
    }
}

// get default url
if (!function_exists('getDefaultUrl')) {
    function getDefaultUrl($auth = false): string
    {
        if ($auth) {
            return thisAuth()->check()
                ? getDefaultUrl()
                : url('auth/login');
        }

        return url('/');
    }
}

// thisLevel
if (!function_exists('thisLevel')) {
    function thisLevel(): string
    {
        return thisUser()->level ?? '';
    }
}


// isAdmin
if (!function_exists('isAdmin')) {
    function isAdmin(): bool
    {
        return ((thisUser()->is_admin ?? '') === 'Y');
    }
}

// 금액 표기
if (!function_exists('priceKo')) {
    function priceKo($price = 0)
    {
        $price = unComma($price);

        // 값이 0보다 작거나 10억 보다 클때
        if ($price <= 0 || $price >= 100000000) {
            return $price;
        }

        $result = '';
        $unitArray = ['', '십', '백', '천', '만', '십', '백', '천', '억'];
        $unitArray2 = ['', '십', '백', '천', '만', '십만', '백만', '천만', '억'];

        // 각 자리수 계산
        $unitIndex = 0;

        while ($price > 0 && $unitIndex < count($unitArray)) {
            $mod = (int)$price % 10; // 1의 자리 수를 가져옴

            if ($mod > 0) {
                switch ($mod) {
                    case 1:
                        $mod = empty($result) ? '일' : '';
                        break;

                    case 2:
                        $mod = '이';
                        break;

                    case 3:
                        $mod = '삼';
                        break;

                    case 4:
                        $mod = '사';
                        break;

                    case 5:
                        $mod = '오';
                        break;

                    case 6:
                        $mod = '육';
                        break;

                    case 7:
                        $mod = '칠';
                        break;

                    case 8:
                        $mod = '팔';
                        break;

                    case 9:
                        $mod = '구';
                        break;

                    case 10:
                        $mod = '십';
                        break;
                }

                $result = $mod . (empty($result) ? $unitArray2[$unitIndex] : $unitArray[$unitIndex]) . $result;
            }

            $price = intval($price / 10); // 자릿수 낮춤
            $unitIndex++;
        }

        return $result;
    }
}

// D-day
if (!function_exists('getDayCount')) {
    function getDayCount($date) // Y-m-d 형태로
    {
        $today =  \Carbon\Carbon::now()->startOfDay();
        $target = \Carbon\Carbon::parse($date); // 대상 날짜 변환
        $diff = $today->diffInDays($target, false); // 날짜 차이 계산 (음수 허용)

        if ($diff < 0) {
            return "END"; // 종료
        }

        if ($diff == 0) {
            return "Today"; // 당일
        }

        return "D-" . $diff; // 남은 날짜
    }
}

// wiseu connection
if (!function_exists('wiseuConnection')) {
    function wiseuConnection()
    {
        $host = env('DB_HOST_WISEU');
        $port = env('DB_PORT_WISEU', '1433');
        $dbname = env('DB_DATABASE_WISEU');
        $username = env('DB_USERNAME_WISEU');
        $password = env('DB_PASSWORD_WISEU');

        try {
            $conn = new \PDO(
                "dblib:host={$host}:{$port};dbname={$dbname};TrustServerCertificate=True",
                $username,
                $password,
                [
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                    \PDO::SQLSRV_ATTR_ENCODING => \PDO::SQLSRV_ENCODING_UTF8
                ]
            );

            return $conn;
        } catch (\PDOException $e) {
            // Log or handle the connection error
            throw $e;
        }
    }
}

