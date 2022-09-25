<?php

use Illuminate\Support\Facades\Route;
use App\View\Components\auth\App as Authcomponents;
use App\View\Components\dashboard\Dashboard as DashboardComponents;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Authcomponents::class, 'render']);
Route::get('/dashboard', [DashboardComponents::class, 'render']);