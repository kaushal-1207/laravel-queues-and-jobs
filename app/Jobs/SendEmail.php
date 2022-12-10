<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
// use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Mail::to('gupool14@gmail.com')->send(new TestMail($this->data));
        $emaildescreption = 'This is Test Mail';
        Mail::send('email',compact('emaildescreption'),function($msg){
            $msg->from('gupool14@gmail.com','Kaushal Parekh');
            $msg->to('gupool14@gmail.com','GU Pool');
            $msg->subject('Test Email');
            $msg->attach(public_path('robots.txt'));
        });
    }
}
