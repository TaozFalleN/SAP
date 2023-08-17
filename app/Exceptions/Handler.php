<?php

namespace App\Exceptions;

use App\Models\LogSistema;
use App\Models\Sistema;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
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
     *
     * @return void
     */
    public function register()
    {
        /*if(config('system.app_debug') == false){
            $this->reportable(function (Throwable $e) {
                $sistema = Sistema::credencialesSistema();
                LogSistema::insertar($e->getMessage(), $e->getFile(), $e->getLine(), Carbon::now(), Auth::user()->usu_id, $sistema->sis_id);
            });
    
            $this->renderable(function (Throwable $e, $request) {
                if((!request()->ajax()) && ($e->getMessage() != "Unauthenticated.")){
                    return response()->view('errors.default.index', [], 500);
                }
            });
        }*/
    }
}


