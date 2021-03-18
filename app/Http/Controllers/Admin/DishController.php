<?php

namespace App\Http\Controllers\Admin;

use App\Dish;
use App\Restaurant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $dishes = $user->dishes->sortBy('name');
        return view('admin.dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();
        $restaurants = $user->restaurants;
        return view('admin.dishes.create', compact('restaurants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::id();
        $request['slug'] = Str::slug($request->name);
        $request['user_id'] = $user;
        
        if(!$request->hasFile('cover')){
            $validatedData = $request->validate([
                'name' => 'required',
                'slug' => 'required',
                'ingredients' => 'required',
                'visibility' => 'required',
                'price' => 'required',
                'cover' => 'nullable | image',
                'user_id' => 'exists:users,id',
                'restaurant_id' => 'required | exists:restaurants,id'
            ]);
        }else{
            $validatedData = $request->validate([
                'name' => 'required',
                'slug' => 'required',
                'ingredients' => 'required',
                'visibility' => 'required',
                'price' => 'required',
                'cover' => 'nullable | image',
                'user_id' => 'exists:users,id',
                'restaurant_id' => 'required | exists:restaurants,id'
            ]);
            $cover = Storage::put('dish_img', $request->cover);
            $validatedData['cover'] = $cover;
        }

        Dish::create($validatedData);
        $new_dish = Dish::orderBy('id', 'desc')->first();
        $new_dish->user()->associate($request->user_id)->save();
        $new_dish->restaurant()->associate($request->restaurant_id)->save();

        return redirect()->route('admin.dishes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        $user = Auth::id();

        if ($user !== $dish->user_id) {
            return redirect("/");
        } else {
            return view('admin.dishes.show', compact('dish'));
        } 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
        $user = Auth::id();
        $user = auth()->user();
        
        $restaurants = $user->restaurants;
        return view('admin.dishes.edit', compact('dish', 'restaurants'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dish $dish)
    {
        $request['slug'] = Str::slug($request->name);

        if($request->hasFile('cover')){
            Storage::delete($dish->cover);
            $validatedData = $request->validate([
                'name' => 'required',
                'slug' => 'required',
                'ingredients' => 'required',
                'visibility' => 'required',
                'price' => 'required',
                'cover' => 'nullable | image | mimes:jpeg,png,jpg,gif,svg',
                'user_id' => 'exists:users,id',
                'restaurant_id' => 'required | exists:restaurants,id'
            ]);
            $cover = Storage::put('dish_img', $request->cover);
            $validatedData['cover'] = $cover;
            $dish->update($validatedData);
        }else{
            $validatedData = $request->validate([
                'name' => 'required',
                'slug' => 'required',
                'ingredients' => 'required',
                'visibility' => 'required',
                'price' => 'required',
                'cover' => 'nullable | image | mimes:jpeg,png,jpg,gif,svg',
                'user_id' => 'exists:users,id',
                'restaurant_id' => 'required | exists:restaurants,id'
            ]);
            $dish->update($validatedData);
        }

        $new_dish = Dish::orderBy('id', 'desc')->first();
        $new_dish->restaurant()->associate($request->restaurant_id)->save();

        return redirect()->route('admin.dishes.index', $new_dish);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish)
    {
        Storage::delete($dish->cover);
        $dish->delete();
        return redirect()->route('admin.dishes.index');
    }
}
