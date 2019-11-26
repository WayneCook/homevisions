<?php

use Illuminate\Database\Seeder;
use App\Message;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $message = new Message();
        $message->name = 'Wayne Cook';
        $message->email = 'waynedemetra@gmail.com';
        $message->phone = '626-935-5508';
        $message->message = 'This is your first message';
        $message->save();

        $message = new Message();
        $message->name = 'Dimitri Cook';
        $message->email = 'dimitri@gmail.com';
        $message->phone = '626-935-5508';
        $message->message = 'This is your first message This is your first message This is your first message This is your first message';
        $message->save();
    }
}
