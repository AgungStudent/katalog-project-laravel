<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Contact;
use App\Models\FinishingMachine;
use App\Models\Product;

class FrontendController extends Controller
{
    private $products;
    private $contacts;
    private $finishingMachines;

    public function __construct()
    {
        $this->finishingMachines = FinishingMachine::latest()->get()->take(4);
        $this->products = Product::latest()->get()->take(6);
        $this->contacts = Contact::all();
    }

    private function data()
    {
        return [
            'products' => $this->products,
            'finishingMachines' => $this->finishingMachines,
            'contacts' => $this->contacts,
        ];
    }

    public function homepage()
    {

        return view('frontend.homepage', [
            'clients' => Client::get()->take(11),
        ] + $this->data());
    }

    public function showAllProduct()
    {
        return view('frontend.product', [
            'products' => Product::simplePaginate(9),
            'clients' => Client::get()->take(11),
            'finishingMachines' => $this->finishingMachines,
            'contacts' => $this->contacts,
        ]);
    }

    public function ShowProduct(Product $product)
    {
        return view('frontend.detail-product', [
            'product' => $product,
        ]+ $this->data());
    }

    public function about()
    {
        return view('frontend.about', $this->data());
    }

    public function client()
    {
        return view('frontend.client', [
            'clients' => Client::simplePaginate(11),
        ]+$this->data());
    }

    public function finishingMachines()
    {
        return view('frontend.finishing-machine', [
            'finishingMachines' => FinishingMachine::simplePaginate(9),
            'products' => $this->products,
            'contacts' => $this->contacts,
        ]);
    }
}
