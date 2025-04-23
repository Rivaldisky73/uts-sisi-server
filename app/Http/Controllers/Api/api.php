<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\SupplierController;
use App\Http\Controllers\Api\ItemController;
use App\Http\Controllers\Api\ReportController;

// Rute Resource
Route::apiResource('admins', AdminController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('suppliers', SupplierController::class);
Route::apiResource('items', ItemController::class);

// Rute Laporan
Route::get('reports/stock-summary', [ReportController::class, 'stockSummary']);
Route::get('reports/low-stock',     [ReportController::class, 'lowStock']);
Route::get('reports/by-category/{id}', [ReportController::class, 'byCategory']);
Route::get('reports/category-summary', [ReportController::class, 'categorySummary']);
Route::get('reports/supplier-summary', [ReportController::class, 'supplierSummary']);
Route::get('reports/overall-summary',  [ReportController::class, 'overallSummary']);
