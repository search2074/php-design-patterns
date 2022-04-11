<?php

declare(strict_types=1);

namespace Patterns\Structural\Adapter\Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Structural\Adapter\SmsNotification;
use Patterns\Structural\Adapter\EmailNotification;
use Patterns\Structural\Adapter\TelegramNotification;

class AdapterTest extends TestCase
{
    public function test_can_send_email_notification()
    {
        $email = 'user@gmail.com';
        $title = 'title';
        $message = 'message';
        $notification = new EmailNotification($email);
        $notification->send($title, $message);
        $this->expectOutputString("send email with title title to email user@gmail.com that says message");
    }

    public function test_can_send_telegram_notification()
    {
        $chatId = '100500';
        $title = 'title';
        $message = 'message';
        $notification = new TelegramNotification($chatId);
        $notification->send($title, $message);
        $this->expectOutputString("send telegram message #title to chat 100500 that says #message");
    }

    public function test_can_send_sms_notification()
    {
        $phone = 88001234567;
        $title = 'title';
        $message = 'message';
        $notification = new SmsNotification($phone);
        $notification->send($title, $message);
        $this->expectOutputString("send sms message #title to 88001234567 that says #message");
    }
}