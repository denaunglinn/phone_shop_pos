<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\User;
use App\Models\ItemCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    public function itemCategories(Request $request){
        if($request->ajax()){
            $search = $request->search;
            $page = $request->page;
            $resultCount = 8;
            $offset = ($page - 1) * $resultCount;

            $item_category = ItemCategory::where('trash',0)
            ->where('name', 'like', '%' . $search . '%')
            ->skip($offset)
            ->take($resultCount)->get();

            $count = count($item_category);
            $endCount = $offset + $resultCount;
            $morePages = $endCount > $count;

            $results = array(
                "results" => $item_category,
                "pagination" => array(
                    "more" => $morePages,
                ),
            );

            return response()->json($results);
        }   
    }

    public function customers(Request $request){
        if($request->ajax()){
            $search = $request->search;
            $page = $request->page;
            $resultCount = 8;
            $offset = ($page - 1) * $resultCount;

            $customers = User::where('trash',0)
            ->where('name', 'like', '%' . $search . '%')
            ->where('phone', 'like', '%' . $search . '%')
            ->skip($offset)
            ->take($resultCount)->get();

            $count = count($customers);
            $endCount = $offset + $resultCount;
            $morePages = $endCount > $count;

            $results = array(
                "results" => $customers,
                "pagination" => array(
                    "more" => $morePages,
                ),
            );

            return response()->json($results);
        }   
    }
}
