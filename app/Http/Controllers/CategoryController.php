<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Get all Categories.
     *
     * @return json
     */
    public function index()
    {
        $categories = Category::all();

        return response()->json([
            'error' => false,
            'data' => $categories
        ]);
    }

    /**
     * Create Category.
     *
     * @return json
     */
    public function store(CategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return response()->json([
            'error' => false,
            'data' => $category
        ]);
    }

    /**
     * Create Category.
     *
     * @return json
     */
    public function update(CategoryRequest $request, Category $category)
    {
        // $category =  Category::findOrFail($id);
        $category->name = $request->name;
        $category->save();

        return response()->json([
            'error' => false,
            'data' => $category
        ]);
    }

    /**
     * Create Category.
     *
     * @return json
     */
    public function destroy(Category $category)
    {
        // $category =  Category::findOrFail($id);
        $category->delete();

        return response()->json([
            'error' => false,
            'data' => $category
        ]);
    }

    /**
     * Create Category.
     *
     * @return json
     */
    public function show(Category $category)
    {
        return response()->json([
            'error' => false,
            'data' => $category
        ]);
    }
}
