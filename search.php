<<?php 

public function searchProduct(Request $request) {
        $search = $request->Input('search');
        $products = DB::table('products')
                ->where('productName', 'LIKE', "%" . $search . "%")
                ->orwhere('productInformation', 'LIKE', "%" . $search . "%")
                ->orwhere('shortDescription', 'LIKE', "%" . $search . "%")
                ->orwhere('longDescription', 'LIKE', "%" . $search . "%")
                ->orwhere('newPrice', 'LIKE', "%" . $search . "%")
                ->orwhere('oldPrice', 'LIKE', "%" . $search . "%")
                ->get();
        return view('frontEnd.scearch.scearch', ['products' => $products]);
    }

 ?>