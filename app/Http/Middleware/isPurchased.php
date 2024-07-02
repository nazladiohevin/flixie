<?php

namespace App\Http\Middleware;

use App\Models\Film;
use App\Models\PurchasedFilm;
use App\Models\Transaction;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class isPurchased
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
        
        if (!auth()->check()) return redirect("/login");
        
        $userId = Auth::id();   
             
        $filmId = $request->route("film")->id;
        $isPurchasedFilm = PurchasedFilm::where("user_id", $userId)
            ->where("film_id", $filmId)->exists();
        $isFree = Film::find($filmId)->is_free;
        
        
        if (!$isPurchasedFilm && !$isFree) {            
            return redirect()->back()->with("error", "Lakukan pembelian film ini terlebih dahulu");
        }

        return $next($request);
    }
}
