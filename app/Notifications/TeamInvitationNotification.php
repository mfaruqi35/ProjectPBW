<?php
namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class TeamInvitationNotification extends Notification
{
    public $invitation;

    public function __construct($invitation)
    {
        $this->invitation = $invitation;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $url = url('/invitations/' . $this->invitation->token . '/accept');

        return (new MailMessage)
            ->subject('Team Invitation')
            ->line('You have been invited to join the team: ' . $this->invitation->team->name)
            ->action('Accept Invitation', $url)
            ->line('Thank you for using our application!');
    }
}