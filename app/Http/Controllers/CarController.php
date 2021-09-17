<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Get allCars.
     *
     * @return json
     */
    public function index()
    {
        $cars = Car::with('category')->get();
        // $cars = Car::whereRelation('category', 'name', 'car')->get();

        return response()->json([
            'error' => false,
            'data' => $cars
        ]);
    }

    /**
     * CreateCar.
     *
     * @return json
     */
    public function store(CarRequest $request)
    {
        $car = new Car();
        $car->name = $request->name;
        $car->category_id = $request->category_id;
        $car->save();

        return response()->json([
            'error' => false,
            'data' => $car
        ]);
    }

    /**
     * CreateCar.
     *
     * @return json
     */
    public function update(CarRequest $request, Car $car)
    {
        // $car = Car::findOrFail($id);
        $car->name = $request->name;
        $car->category_id = $request->category_id;
        $car->save();

        return response()->json([
            'error' => false,
            'data' => $car
        ]);
    }

    /**
     * CreateCar.
     *
     * @return json
     */
    public function destroy(Car $car)
    {
        // $car = Car::findOrFail($id);
        $car->delete();

        return response()->json([
            'error' => false,
            'data' => $car
        ]);
    }

    /**
     * CreateCar.
     *
     * @return json
     */
    public function show(Car $car)
    {
        // dd($car);
        $employee = $car->employees;

        return response()->json([
            'error' => false,
            'data' => $employee
        ]);
    }
}
