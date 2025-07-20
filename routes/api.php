<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterRoomController;

Route::apiResource('master-room', MasterRoomController::class);