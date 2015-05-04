<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookingRequest;
use App\RoomUser;
use Auth;
use App\Room as Room;
use App\User as User;
use Mail;

use Illuminate\Http\Request;

class RoomController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function booking(BookingRequest $request)
    {

        $date = \Request::input('date');
        $time = \Request::input('time');
        $check = RoomUser::whereDateAndTime($date, $time)->count();
        if($check == 0)
        {
            $booking = new RoomUser();
            $booking->fill($request->all());
            $booking->user_id = Auth::user()->id;
            $booking->save();

            $data = User::joinRoomAndRoomUsers()->where('room_users.id', $booking->id)->get();

            Mail::send('emails.bukti', ['data' => $data], function ($message) use ($data)
            {
                $message->to($data[0]->email, $data[0]->name)->subject('Bukti Pemesanan - studentarea.uii.ac.id');
            });
            return redirect('home')->with('successMessage', 'Berhasil memesan ruangan');
        }
        return redirect()->back()->with('errorMessage', 'Ruangan tersebut telah dipesan');

    }

    public function showBooking()
    {

        $activeUser = Auth::user();
        $rooms = Room::all();
        return view('booking', [
            'user' => $activeUser,
            'rooms' => $rooms
        ]);

    }

}
