<?php

namespace App\Notifications;

use App\Bid;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use NotificationChannels\WebPush\WebPushChannel;
use NotificationChannels\WebPush\WebPushMessage;
use Illuminate\Notifications\Messages\MailMessage;

class BidsTomorrow extends Notification
{
    use Queueable;
    
    public function via($notifiable)
    {
        return [WebPushChannel::class];
    }
    
    public function toWebPush($notifiable, $notification)
    {
        $submissionCount = Bid::where('submission_date', Carbon::tomorrow())
                            ->where('status_id', 'pending_estimate')
                            ->orWhere('status_id', 'pending_proposal')
                            ->orWhere('status_id', 'ready_for_submission')
                            ->count();


        $infoCount = Bid::where('info_date', Carbon::tomorrow())
                        ->where('status_id', 'prebid')
                        ->count();
                    
        return (new WebPushMessage)
            ->title('Hikaa Bidding Wing')
            ->icon('/notification-icon.png')
            ->body("$submissionCount Submissions Tomorrow
$infoCount Info Sessions Tomorrow");
            // ->action('Open Site', 'open');
    }
    
}