<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DevelopersController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\InquiriesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\InsightController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\servicesController;
use App\Http\Controllers\liveSearchController;
use App\Http\Controllers\HomeSearchController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\mortgageLoanController;
use App\Http\Controllers\testController;
use App\Http\Controllers\SpecialController;

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

Route::get('tost', [testController::class, 'index'])->name('tes');

Route::get('l', [HomeController::class,'l']);

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/developer', [DevelopersController::class, 'index'])->name('developer');

Route::get('/Project/{slug}/Developer', [ProjectsController::class, 'getProjectAgainstDeveloper'])->name('projects.developer');

Route::get('/Buy', [PropertiesController::class, 'Buyindex'])->name('buy');

Route::get('/Rent', [PropertiesController::class, 'Rentindex'])->name('rent');

Route::get('/Project', [ProjectsController::class, 'index'])->name('project');

Route::get('/Project-details/{id}', [ProjectsController::class, 'getProject'])->name('project_details');

Route::get('/property-details/{id}', [PropertiesController::class, 'getProject'])->name('property_details');


Route::get('/liveSearch-rent', [liveSearchController::class, 'searchRent'])->name('liveSearch.rent');
Route::get('/liveSearch-buy', [liveSearchController::class, 'searchBuy'])->name('liveSearch.buy');
Route::get('/liveSearch-newProjects', [liveSearchController::class, 'searchNewP'])->name('liveSearch.newProjects');

Route::get('/liveSearch-rent-ind', [liveSearchController::class, 'searchBuyPage'])->name('liveSearch.rentpage');
Route::get('/liveSearch-buy-ind', [liveSearchController::class, 'searchBuyPage'])->name('liveSearch.searchBuyPage');
Route::get('/liveSearch-newProjects-ind', [liveSearchController::class, 'searchBuyPage'])->name('liveSearch.newProjectspage');


Route::get('Project/sort-By-New', [ProjectsController::class, 'sortingByNew'])->name('projects.sortingByNew');
Route::get('Project/sort-By-Price-High', [ProjectsController::class, 'sortingByPriceHigh'])->name('projects.sortingByPriceHigh');
Route::get('Project/sort-By-Price-Low', [ProjectsController::class, 'sortingByPriceLow'])->name('projects.sortingByPriceLow');
Route::get('Project/sort-By-Area-High', [ProjectsController::class, 'sortingByAreaHigh'])->name('projects.sortingByAreaHigh');
Route::get('Project/sort-By-Area-Low', [ProjectsController::class, 'sortingByAreaLow'])->name('projects.sortingByAreaLow');
Route::get('Project/sort-By-Ready', [ProjectsController::class, 'sortingByReady'])->name('projects.sortingByReady');
Route::get('Project/sort-By-Off-Plan', [ProjectsController::class, 'sortingByOffPlan'])->name('projects.sortingByOffPlan');
Route::get('Project/villas', [ProjectsController::class, 'getVillas'])->name('projects.getVillas');
Route::get('Project/apartments', [ProjectsController::class, 'getApartments'])->name('projects.getApartments');

Route::get('Buy/search', [HomeSearchController::class, 'searchBuy'])->name('buy.search');

Route::get('Rent/search', [HomeSearchController::class, 'searchRent'])->name('rent.search');

Route::get('Project/search', [HomeSearchController::class, 'searchProject'])->name('projects.search');

Route::post('Rent/filters', [RentController::class, 'searchRent'])->name('rent.filter');

Route::post('Buy/filters', [BuyController::class, 'searchBuy'])->name('buy.filter');

Route::post('Project/filters', [ProjectsController::class, 'searchProjects'])->name('projects.filter');



Route::get('rent/sort-By-New', [PropertiesController::class, 'rentsortingByNew'])->name('rent.sortingByNew');
Route::get('rent/sort-By-Price-High', [PropertiesController::class, 'rentsortingByPriceHigh'])->name('rent.sortingByPriceHigh');
Route::get('rent/sort-By-Price-Low', [PropertiesController::class, 'rentsortingByPriceLow'])->name('rent.sortingByPriceLow');
Route::get('rent/sort-By-Area-High', [PropertiesController::class, 'rentsortingByAreaHigh'])->name('rent.sortingByAreaHigh');
Route::get('rent/sort-By-Area-Low', [PropertiesController::class, 'rentsortingByAreaLow'])->name('rent.sortingByAreaLow');
Route::get('rent/villas', [PropertiesController::class, 'getVillasRent'])->name('rent.getVillasRent');
Route::get('rent/apartments', [PropertiesController::class, 'getApartmentsRent'])->name('rent.getApartmentsRent');

Route::get('/blog',[BlogController::class, 'index'])->name('blog');

Route::get('/blogdetails/{slug}',[BlogController::class, 'detail'])->name('blog.post');

Route::post('/send', [InquiriesController::class, 'send'])->name('send.message');
Route::post('/contactagent', [InquiriesController::class, 'contactagent'])->name('contactagent.message');

Route::get('/contactus', [ContactController::class, 'index'])->name('contact');

Route::post('/mortgage', [mortgageLoanController::class, 'store'])->name('mortgageLoan');

Route::post('/contactsend', [ContactController::class, 'contactsend'])->name('contactus');

Route::post('/contact', [ContactController::class, 'contactsend'])->name('msend.message');

Route::get('/sell', [SellController::class, 'index'])->name('sell');
Route::post('/sell', [SellController::class, 'store'])->name('sell');

Route::get('/aboutus', [AboutUsController::class, 'index'])->name('about.us');

Route::get('/insight', [InsightController::class, 'index'])->name('insight');

Route::get('/careers', [CareersController::class, 'index'])->name('careers');

Route::post('/apply', [CareersController::class, 'apply'])->name('apply');





Route::get('/property-management', [servicesController::class, 'index'])->name('property-management');


Route::get('/addstatus', [ProjectsController::class, 'addstatus'])->name('l');
Route::get('/test', [SpecialController::class, 'index'])->name('lsa');




Route::get('/lol', function () {
    return view('welcome');
})->name('lol');

Route::get('/lol1', function () {
    return view('emails.sell_form');
})->name('lol1');

