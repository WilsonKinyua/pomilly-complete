<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// ---------------------- Company pages --------------------------------------------------------
Route::resource('/company/aboutus','AboutUsController');
Route::resource('/company/missionandvision',"MissionVisionController");
Route::resource('/company/corevalues',"CoreValuesController");
Route::resource('/company/motto',"MottoController");
Route::resource('/company/ourhistory',"OurHistoryController");
Route::resource('/company/whatisfoodrecycling',"WhatIsFoodRecyclingController");
Route::resource('/company/whatwedo',"WhatWeDoController");
Route::resource('/company/depositfood',"DepositFoodController");
Route::resource('/company/volunteer',"VolunteerController");
Route::resource('/company/donate',"DonateController");
Route::resource('/company/whatsnew',"WhatsNewController");

// ---------------------- end of Company pages--------------------------------------------------------

Route::resource('/team',"TeamController");
Route::resource('/ourgoals',"OurGoalsController");

Route::resource('/services/sustainableagricultural',"SustainableAgriculturalConsultancyController");
Route::resource('/services/foodwasterecyclingindustry',"FoodWasteRecyclingIndustryController");
Route::resource('/services/foodbankingfoodsecurity',"FoodBankingFoodSecurityController");
Route::resource('/services/eosphconsultancy',"EosphconsultancyController");

Route::resource("blog","BlogController");
Route::resource("contactus","ContactUsController");

