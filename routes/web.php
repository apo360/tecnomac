<?php

use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\MailboxController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteConfigController;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Employee;
use App\Models\Equipment;

Route::get('/', function () {

    $arquivos = Brand::all();

    $categories = Category::all();

    $equipments = Equipment::all();

    return view('welcome', compact('arquivos', 'categories', 'equipments'));
    
})->name('welcome');

Route::prefix('page_equipments')->group(function () {
    Route::get('/', function() {
        $equipments = Equipment::all();
        $categories = Category::all();
        return view('equipment', compact('equipments', 'categories'));
    })->name('page.equipment');

    Route::get('/detail/{id}', function ($id) {
        // Lógica para exibir detalhes de um equipamento específico
    })->name('equipment.detail');

    Route::get('/list', function () {
        // Lógica para exibir a lista de equipamentos em formato de lista
    })->name('equipments.list');

    Route::get('/grid', function () {
        // Lógica para exibir a lista de equipamentos em formato de grade (já exibida na rota '/')
    })->name('equipments.grid');

    Route::get('/categories/{id}', function ($id) {
        // Lógica para exibir a lista de equipamentos de uma categoria específica
    })->name('categories.view');

    Route::get('/quotations/print', function () {
        // Lógica para imprimir uma cotação (necessário implementar)
    })->name('quotations.print');
});


Route::get('our-solution', function() 
{ 
    $categories = Category::all();
    return view('our_solution', compact('categories')); 
})->name('solution');

Route::get('about-us', function() {
    $employees = Employee::all();
    return view('about', compact('employees')); 
})->name('about');

Route::get('contact-us', function() { return view('contact_us'); })->name('contact');

Route::post('contact/send', [ContactController::class, 'enviarEmail'])->name('contact.submit');

Route::get('contact-us/success', function() { return view('emails.email-contact'); })->name('contact_sucess');

// Terms & Conditions
Route::get('terms-and-conditions', function() {return view('terms-and-conditions');})->name('terms');

// Protections & Coverages
Route::get('protections-and-coverages', function() {return view('protections-and-coverages');})->name('protections');




Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');

    // routes/web.php
    Route::resources(
        [
            'employees' => EmployeeController::class,
            'equipments' => EquipmentController::class,
            'page-config' => WebsiteConfigController::class,
            'partners' => PartnerController::class,
            'categories' => CategoryController::class,
            'brands' => BrandController::class,
            'users' => UserController::class,
            
        ]
    );

    Route::post('/employees/toggle-view', [EmployeeController::class, 'toggleView'])->name('employees.toggleView');

    Route::get('/mailbox', [MailboxController::class, 'index'])->name('mailbox');
    Route::get('/mailbox/compose', [MailboxController::class, 'compose'])->name('mailbox.compose');
    Route::get('/mailbox/read', [MailboxController::class, 'read'])->name('mailbox.read');
    Route::get('/mailbox/whatsapp', [MailboxController::class, 'whatsapp'])->name('mailbox.whatsapp');

    Route::post('/logout', function () {
        Auth::guard('web')->logout(); // Especifica explicitamente o guard
        return redirect('/login'); // Redireciona para a página inicial após o logout
    })->name('logout');

    Route::get('contact-us/list-emails', [ContactController::class, 'listarEmails'])->name('list_emails');
});
