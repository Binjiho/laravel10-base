<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
//        $this->reportable(function (Throwable $e) {
//            //
//        });
    }

    /**
     * 이미지 요청인지 확인
     */
    protected function isImageRequest($request)
    {
        $path = $request->path();
        $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp', 'ico'];

        $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));

        return in_array($extension, $imageExtensions);
    }

    public function render($request, Throwable $exception)
    {
        // 이미지 파일 요청인 경우 기본 처리로 넘김
        if ($this->isImageRequest($request)) {
            return parent::render($request, $exception);
        }
        
        // Model fail 일때
        if ($exception instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) {
            return notFoundRedirect();
        }

        if ($this->isHttpException($exception)) {
            $statusCode = $exception->getStatusCode();

            switch ($statusCode) {
                case 404: // 404 Not Found
                    break;

                case 419: // 419 CSRF Token Expired
                    return CSRFRedirect();

                case 500: // 500 Internal Server Error
                    return serverRedirect();

                case 543: // 커스텀 에러 리다이렉트
                    return handleCustomRedirect();

                default: // 기타 HTTP 에러 처리
                    return errorRedirect('back', ($statusCode . ' ERROR'));
            }
        }

        if (!isDev()) {
            // 그외 처리하지 못한 에러 발생시 debug 아닐경우 메인페이지로 이동
            return serverRedirect();
        }

        return parent::render($request, $exception);
    }
}
