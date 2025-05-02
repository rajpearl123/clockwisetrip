<?php
namespace App\Mail;

use App\Models\Booking;
use Illuminate\Mail\Mailable;

class BookingConfirmationUser extends Mailable
{
    public $booking;

    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }

    public function build()
    {
        return $this->subject('Your Booking Confirmation')
                    ->view('emails.booking_confirmation_user')
                    ->with(['booking' => $this->booking]);
    }
}