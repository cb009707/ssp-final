<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use Illuminate\Http\Request;


class BookingController extends Controller
{


    public function frontEndForm() {
        return view('pages.booking');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $bookings = (new Booking());

        if($request->has('user_id')){
            $bookings = $bookings->where('user_id', $request->user_id);
        }

         return view('admin.booking.index', [
            'bookings' => $bookings->paginate(10),
         ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.booking.form',[
            'booking' => (new Booking()),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookingRequest $request)
    {
        $booking = Booking::create([
            'full_name' => $request->get('full_name'),
            'nic' => $request->get('nic'),
            'phone_number' => $request->get('phone_number'),
            'type' => $request->get('type'),
            'payment' => $request->get('payment'),
            'card_No' => $request->get('card_No'),
            'sec_No' => $request->get('sec_No'),
            'service' => $request->get('service'),
            'address' => $request->get('address'),
            'plate' => $request->get('plate'),
            'chasis' => $request->get('chasis'),
            'discount' => $request->get('discount'),
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('booking.receipt', ['booking' => $booking->id]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        return view('admin.booking.form', [
            'booking' => $booking
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        //$booking->update($request->all());
        //$booking->full_name = $request->input('full_name');
            $booking->nic = $request->input('nic');
            $booking->phone_number = $request->input('phone_number');
            $booking->type = $request->input('type');
            $booking->payment = $request->input('payment');
            $booking->card_No = $request->input('card_No');
            $booking->sec_No = $request->input('sec_No');
            $booking->service = $request->input('service');
            $booking->address = $request->input('address');
            $booking->plate = $request->input('plate');
            $booking->chasis = $request->input('chasis');
            $booking->discount = $request->input('discount');
            //$booking->user_id = auth()->user()->id;

            $booking->update();

        //return redirect()->route('user-bookings', ['booking' => $booking]);
        return redirect()->route('admin.booking.index', ['user_id' => $booking->user_id])
            ->with('success', 'Booking successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
        $booking->delete();
        return redirect()->route('admin.user.index')->with('success','Booking successfully deleted!!');
    }

    public function showuserbook()
    {
        $data['bookings']=Booking::bookuser();
        return view('admin.booking.index',$data);
    }

    public function receipt($id)
    {
        $booking = Booking::findOrFail($id);
        return view('pages.receipt', compact('booking'));
    }

    public function getServiceAnalytics()
    {
        $currentYear = now()->year;
        $serviceCounts = Booking::getServiceCountsForYear($currentYear);

        return view('newadmin.dashboard', [
            'serviceCounts' => $serviceCounts,
            'year' => $currentYear
        ]);
    }

}
