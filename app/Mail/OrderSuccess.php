<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Order;
use MailerSend\Helpers\Builder\Variable;
use MailerSend\Helpers\Builder\Personalization;
use MailerSend\LaravelDriver\MailerSendTrait;
use Illuminate\Support\Arr;

class OrderSuccess extends Mailable
{
    use Queueable, SerializesModels, MailerSendTrait;

    /**
     * Create a new message instance.
     */
    public function __construct(public Order $order)
    {

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('notification@vern.dta32.my.id', 'VERN'),
            subject: 'VERN - Order Success',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.ordersuccess',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

    // public function build()
    // {
    //     $to = Arr::get($this->to, '0.address');

    //     return $this->view('emails.ordersuccess')
    //         ->mailersend(
    //             null,
    //             [
    //                 new Variable($to, ['name' => 'Your Name'])
    //             ],
    //             ['tag'],
    //             [
    //                 new Personalization($to, [
    //                     'var' => 'variable',
    //                     'number' => 123,
    //                     'object' => [
    //                         'key' => 'object-value'
    //                     ],
    //                     'objectCollection' => [
    //                         [
    //                             'name' => 'MailerSend'
    //                         ],
    //                         [
    //                             'name' => 'Guru'
    //                         ]
    //                     ],
    //                 ])
    //             ]
    //         );
    // }
}
