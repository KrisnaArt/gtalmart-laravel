<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        return view('checkout.index', [
            'user' => User::where('id', Auth::id())->first(),
            'product' => Product::where('id', request('product_id'))->first(),
            'product_count' => Product::where('id', request('product_id'))->count(),
            'cart' => Cart::where('id', request('cart'))->first()
        ]);
    }

    public function checkoutProduct(Request $request)
    {
        switch ($request->category) {
            case (1):
                if (Transaction::where('no_invoice', 'EDU-0001')->exists()) {
                    $invoice = Transaction::latest()->first()->no_invoice;
                    $no = explode('-', $invoice);
                    $number = substr($no[1], -1);
                    $invoiceNumber = 'EDU' . '-' . str_pad((int)$number + 1, 4, 0, STR_PAD_LEFT);
                } else {
                    $invoiceNumber = 'EDU-0001';
                }
                break;
            case (2):
                if (Transaction::where('no_invoice', 'COM-0001')->exists()) {
                    $invoice = Transaction::latest()->first()->no_invoice;
                    $no = explode('-', $invoice);
                    $number = substr($no[1], -1);
                    $invoiceNumber = 'COM' . '-' . str_pad((int)$number + 1, 4, 0, STR_PAD_LEFT);
                } else {
                    $invoiceNumber = 'COM-0001';
                }
                break;
            case (3):
                if (Transaction::where('no_invoice', 'FLM-0001')->exists()) {
                    $invoice = Transaction::latest()->first()->no_invoice;
                    $no = explode('-', $invoice);
                    $number = substr($no[1], -1);
                    $invoiceNumber = 'FLM' . '-' . str_pad((int)$number + 1, 4, 0, STR_PAD_LEFT);
                } else {
                    $invoiceNumber = 'FLM-0001';
                }
                break;
            case (4):
                if (Transaction::where('no_invoice', 'APP-0001')->exists()) {
                    $invoice = Transaction::latest()->first()->no_invoice;
                    $no = explode('-', $invoice);
                    $number = substr($no[1], -1);
                    $invoiceNumber = 'APP' . '-' . str_pad((int)$number + 1, 4, 0, STR_PAD_LEFT);
                } else {
                    $invoiceNumber = 'APP-0001';
                }
                break;
            case (5):
                if (Transaction::where('no_invoice', 'SPC-0001')->exists()) {
                    $invoice = Transaction::latest()->first()->no_invoice;
                    $no = explode('-', $invoice);
                    $number = substr($no[1], -1);
                    $invoiceNumber = 'SPC' . '-' . str_pad((int)$number + 1, 4, 0, STR_PAD_LEFT);
                } else {
                    $invoiceNumber = 'SPC-0001';
                }
                break;
            case (6):
                if (Transaction::where('no_invoice', 'VOG-0001')->exists()) {
                    $invoice = Transaction::latest()->first()->no_invoice;
                    $no = explode('-', $invoice);
                    $number = substr($no[1], -1);
                    $invoiceNumber = 'VOG' . '-' . str_pad((int)$number + 1, 4, 0, STR_PAD_LEFT);
                } else {
                    $invoiceNumber = 'VOG-0001';
                }
                break;
        }
        $invoice = [
            'product_id' => $request->product_id,
            'no_invoice' => $invoiceNumber,
            'status' => $request->status
        ];

        $invoice['user_id'] = Auth::id();

        Transaction::create($invoice);

        request()->session()->flash('Berhasil', 'barang sudah ditambahkan');

        $cart = $request->cart;

        $this->payment($cart);

        return redirect('/payment');
    }

    public function payment($cart)
    {
        Cart::destroy($cart);
        return redirect('/uploadPayment')->with('suscess','product adeleted');
    }

    public function uploadPayment(Request $request)
    {
        $validateData = $request->validate([
            'bank' => 'required'
        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('bukti-upload');
        }

        return redirect('/dashboard/transaksi')->with('suscess','product adeleted');
    }
}
