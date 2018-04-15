<?php

namespace App\Mail;

use App\Model\Transaction;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TransactionReceivedMail extends Mailable implements ShouldQueue {

    use Queueable,
        SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $transaction;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Transaction $transaction) {
        $this->transaction = $transaction;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->view('email.transaction.received', [
            'transaction' => $this->transaction
                ])->subject('Smart Pay Transaction Received')
                ->to($this->transaction->to->email);
    }

}
