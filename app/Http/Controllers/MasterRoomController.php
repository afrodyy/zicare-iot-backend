<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomMaster;
use Illuminate\Http\JsonResponse;

class MasterRoomController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Room masters fetched successfully',
            'data'    => RoomMaster::select('id', 'name')->get()
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $room = RoomMaster::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Room master created successfully',
            'data'    => $room,
        ], 201);
    }

    public function show($id): JsonResponse
    {
        $room = RoomMaster::find($id);

        if (!$room) {
            return response()->json([
                'success' => false,
                'message' => 'Room master not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Room master fetched successfully',
            'data'    => $room,
        ]);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $room = RoomMaster::find($id);

        if (!$room) {
            return response()->json([
                'success' => false,
                'message' => 'Room master not found',
            ], 404);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $room->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Room master updated successfully',
            'data'    => $room,
        ]);
    }

    public function destroy($id): JsonResponse
    {
        $room = RoomMaster::find($id);

        if (!$room) {
            return response()->json([
                'success' => false,
                'message' => 'Room master not found',
            ], 404);
        }

        $room->delete();

        return response()->json([
            'success' => true,
            'message' => 'Room master deleted successfully',
        ]);
    }
}
