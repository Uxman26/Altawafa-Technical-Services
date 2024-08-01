<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontEndController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login_post', [AuthController::class, 'login_post'])->name('login_post');
Route::post('/update_profile', [AuthController::class, 'update_profile'])->name('update_profile');
Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
Route::get('/', [FrontEndController::class, 'home'])->name('home');
Route::get('/about_us', [FrontEndController::class, 'about_us'])->name('about_us');

Route::get('/technical_services', [FrontEndController::class, 'technical_services'])->name('technical_services');
Route::get('/exterior_building', [FrontEndController::class, 'exterior_building'])->name('exterior_building');
Route::get('/electromechanical_work', [FrontEndController::class, 'electromechanical_work'])->name('electromechanical_work');
Route::get('/electromechanical_equipment', [FrontEndController::class, 'electromechanical_equipment'])->name('electromechanical_equipment');
Route::get('/plumbing', [FrontEndController::class, 'plumbing'])->name('plumbing');
Route::get('/carpentery', [FrontEndController::class, 'carpentery'])->name('carpentery');
Route::get('/ceiling', [FrontEndController::class, 'ceiling'])->name('ceiling');
Route::get('/electrical_fittings', [FrontEndController::class, 'electrical_fittings'])->name('electrical_fittings');
Route::get('/plaster_works', [FrontEndController::class, 'plaster_works'])->name('plaster_works');

Route::get('/ac_maintenance', [FrontEndController::class, 'ac_maintenance'])->name('ac_maintenance');
Route::get('/contact_us', [FrontEndController::class, 'contact_us'])->name('contact_us');
Route::get('/gallery', [FrontEndController::class, 'gallery'])->name('gallery');
Route::get('/garden_maintenance', [FrontEndController::class, 'garden_maintenance'])->name('garden_maintenance');
Route::get('/get_a_quote', [FrontEndController::class, 'get_a_quote'])->name('get_a_quote');
Route::get('/kitchen_work', [FrontEndController::class, 'kitchen_work'])->name('kitchen_work');
Route::get('/marble_fixing', [FrontEndController::class, 'marble_fixing'])->name('marble_fixing');
Route::get('/services', [FrontEndController::class, 'services'])->name('services');
Route::get('/swimming_pool', [FrontEndController::class, 'swimming_pool'])->name('swimming_pool');
Route::get('/wall_painting', [FrontEndController::class, 'wall_painting'])->name('wall_painting');
Route::get('/testimonial_ahmed_kabir', [FrontEndController::class, 'testimonial_ahmed_kabir'])->name('testimonial_ahmed_kabir');
Route::get('/testimonial_jyothika_basu', [FrontEndController::class, 'testimonial_jyothika_basu'])->name('testimonial_jyothika_basu');
Route::get('/testimonial_navadeep_sidd', [FrontEndController::class, 'testimonial_navadeep_sidd'])->name('testimonial_navadeep_sidd');
