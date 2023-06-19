<?php

namespace App\Providers;

use App\Models\Inscription;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $user = Auth::user();
        $bacCount = DB::table('demandebacs')->count();
        $attestationCount = DB::table('demandeattestations')->count();
        $releveCount = DB::table('demandereleves')->count();
        $TotalMessage = $bacCount + $attestationCount + $releveCount;
    
        View::composer('admin.navbar', function ($view) use ($bacCount, $attestationCount, $releveCount, $TotalMessage, $user) {
            $view->with([
                'bacCount' => $bacCount,
                'attestationCount' => $attestationCount,
                'releveCount' => $releveCount,
                'TotalMessage' => $TotalMessage,
                'user' => $user,
            ]);
        });
    
        View::composer('etudiant.navbar', function ($view) {
            $user = Auth::user();
            $userName = $user ? User::where('id', $user->id)->pluck('nom')->first() : null;
            $userLastName = $user ? User::where('id', $user->id)->pluck('prenom')->first() : null;
            $view->with('userName', $userName)
                 ->with('userLastName', $userLastName)
                 ->with('user',$user);
        });

        View::composer('admin.navbar', function ($view) {
            $user = Auth::user();
            $userName = $user ? User::where('id', $user->id)->pluck('nom')->first() : null;
            $userLastName = $user ? User::where('id', $user->id)->pluck('prenom')->first() : null;
            $view->with('userName', $userName)
                 ->with('userLastName', $userLastName)
                 ->with('user',$user);
        });
        
    
        View::share('inscres', Inscription::all());
    }
    
    
}
