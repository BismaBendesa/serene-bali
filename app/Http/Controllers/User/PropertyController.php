<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Query;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PropertyController extends Controller
{
  public function index()
  {
    // query select data from database
    $catalogCardData = Property::select('id', 'property_name', 'property_service', 'location', 'price', 'land_area', 'views', 'building_area', 'max_pax')->get();

    // $property = Property::find($id);
    // dd($catalogCardData);
    return view('user.property.index', [
      'title' => 'Property Catalog',
      'catalogCardData' => $catalogCardData
    ]);
  }

  public function show($id)
  {

    $property = Property::find($id);
    $property->increment('views');

    return view('user.property.show', [
      'title' => 'Property Details',
      'property' => $property,
    ]);
  }

  public function search(Request $request)
  {
    // validate search input
    $validated = $request->validate([
      'property_name' => 'nullable|string|max:255',
      // 'search' => 'nullable|string|max:255',
      'location' => 'nullable|string|max:255',
      'ambience' => 'nullable|string|max:255',
      'budget' => 'nullable|string|max:255',
      // 'duration' => 'nullable|string|max:255',
      // 'start_date' => 'nullable|string|max:255'
    ]);

    // fetch search input 
    $name = $validated['property_name'] ?? null;
    $location = $validated['location'] ?? null;
    $ambience = $validated['ambience'] ?? null;
    $budget = $validated['budget'] ?? null;
    // $duration = $validated['duration'] ?? null;
    // $start_date = $validated['$start_date'] ?? null;

    // Split the budget into min and max value
    if ($budget) {
      $budgetRange = explode('-', $budget);
      $minPrice = $budgetRange[0];
      $maxPrice = $budgetRange[1];
    }

    // Set Empty for "Any" filter in ambience
    if ($ambience === '') {
      $ambience = null;  // Reset ambience to null if "Any" is selected (empty string)
    }

    // Query the properties based on the search input
    $properties = Property::query()
      ->when($name, function ($query, $name) {
        return $query->where('property_name', 'like', '%' . $name . '%');
      })
      ->when($location, function ($query, $location) {
        return $query->where('location', 'like', '%' . $location . '%');
      })
      ->when($budget, function ($query) use ($minPrice, $maxPrice) {
        return $query->whereBetween('price', [$minPrice, $maxPrice]);
      })
      ->when($ambience, function ($query, $ambience) {
        return $query->where('ambience', 'like', '%' . $ambience . '%');
      })
      ->get();

    // return query results
    return view('user.property.index', [
      'title' => 'Property Catalog',
      'catalogCardData' => $properties,
      'oldInputs' => $validated,
    ]);
  }
}
