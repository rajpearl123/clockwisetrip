<?php
namespace App\Mail;

use App\Models\Booking;
use Illuminate\Mail\Mailable;

class BookingConfirmationAdmin extends Mailable
{
    public $booking;

    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }

    public function build()
    {
        return $this->subject('New Booking Received')
                    ->view('emails.booking_confirmation_admin')
                    ->with(['booking' => $this->booking]);
    }
}