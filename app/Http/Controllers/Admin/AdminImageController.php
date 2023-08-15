<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class AdminImageController extends Controller
{
    public function storeImage(Request $request, $productId)
    {
        // Validate the incoming request
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the validation rules as needed
        ]);

        // Get the uploaded image
        $image = $request->file('image');

        // Generate a unique image filename
        $imageFileName = time() . '_' . $image->getClientOriginalName();

        // Store the image in the storage/app/public directory
        $imagePath = $image->storeAs('public', $imageFileName);

        // Create a new image record in the database
        Image::create([
            'product_id' => $productId,
            'image_path' => $imagePath,
        ]);

        return response()->json(['message' => 'Image uploaded successfully']);
    }
}
