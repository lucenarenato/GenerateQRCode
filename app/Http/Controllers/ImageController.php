<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\UserImageOrder;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return response()->json($images);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        $image = new Image();
        $image->path = $imagePath;
        $image->save();

        return response()->json(['message' => 'Image uploaded successfully', 'image' => $image], 201);
    }

    public function show($id)
    {
        $image = Image::find($id);
        if ($image) {
            return response()->json($image);
        } else {
            return response()->json(['message' => 'Image not found'], 404);
        }
    }

    public function linkImageToUser(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Upload the image
        $imagePath = $request->file('image')->store('images', 'public');

        // Save the image record
        $image = new Image();
        $image->path = $imagePath;
        $image->save();

        // Generate a random 6-digit order number
        $orderNumber = mt_rand(100000, 999999);

        // Save the user-image order record
        $userImageOrder = UserImageOrder::create([
            'user_id' => $request->user_id,
            'image_id' => $image->id,
            'order_number' => $orderNumber,
        ]);

        return response()->json(['message' => 'Image uploaded and linked to user successfully', 'userImageOrder' => $userImageOrder], 201);
    }

    public function listImages()
    {
        $images = Image::all();
        return view('images.index', compact('images'));
    }
}

