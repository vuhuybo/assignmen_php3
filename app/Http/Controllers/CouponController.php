<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Carts;
use Illuminate\Http\Request;
use App\Models\Coupon;
use Illuminate\Validation\Rules\Can;
use Carbon\Carbon;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coupon = Coupon::all();
        return view('admin.coupon.index',compact('coupon'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.coupon.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $coupon = new Coupon();
        $coupon ->code = $data['code'];
        $coupon ->discount = $data['discount'];
        $coupon ->minimum = $data['minimum'];
        $coupon ->start = $data['start'];
        $coupon ->end = $data['end'];

        $coupon->save();

        return redirect()->route('coupon.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $delcoupon = Coupon::find($id);
        return view('admin.coupon.update',compact('delcoupon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $coupon = Coupon::find($id);
        $coupon ->code = $data['code'];
        $coupon ->discount = $data['discount'];
        $coupon ->minimum = $data['minimum'];
        $coupon ->start = $data['start'];
        $coupon ->end = $data['end'];

        $coupon->save();

        return redirect()->route('coupon.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $coupon = Coupon::find($id);
        $coupon->delete();
        return redirect()->route('coupon.index');
    }

    public function applypromotion()
    {
        $coupon = $_GET['value'];
        $data = Coupon::where('code', $coupon)->where('start', '<=', Carbon::now())->where('end', '>=', Carbon::now())->first();
        if ($data) {
            $success = ' Áp dụng mã thành công !';
            $discount = $data->discount;
            return [
                'discount' => $discount,
                'success' => $success
            ];
        }
    }


    // public function applyPromotion(Request $request)
    // {
    //     // Lấy mã khuyến mại từ request
    //     $code = $request->input('code');

    //     // Tìm khuyến mại với mã khuyến mại tương ứng
    //     $coupon = Coupon::where('code', $code)->first();

    //     if ($coupon && $coupon->isValid()) {
    //         // Lấy thông tin đơn hàng từ request hoặc từ session
    //         $carts = Carts::find($request->input('id'));

    //         if ($carts) {
    //             // Kiểm tra điều kiện tối thiểu
    //             if ($carts->total >= $coupon->minimum) {
    //                 // Tính toán giá trị giảm giá
    //                 $discountAmount = min($coupon->discount, $carts->total);

    //                 // Áp dụng giảm giá vào đơn hàng
    //                 $carts->total-= $discountAmount;
    //                 $carts->code = $coupon->code;
    //                 $carts->discount_amount = $discountAmount;
    //                 $carts->save();

    //                 return response()->json([
    //                     'success' => true,
    //                     'message' => 'Khuyến mại được áp dụng thành công.',
    //                     'order' => $carts,
    //                 ]);
    //             } else {
    //                 return response()->json([
    //                     'success' => false,
    //                     'message' => 'Giá trị đơn hàng không đủ điều kiện áp dụng khuyến mại.',
    //                 ]);
    //             }
    //         } else {
    //             return response()->json([
    //                 'success' => false,
    //                 'message' => 'Đơn hàng không tồn tại.',
    //             ]);
    //         }
    //     } else {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Mã khuyến mại không hợp lệ hoặc đã hết hạn.',
    //         ]);
    //     }
    // }




}
