<?php

namespace App\Repository;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Message;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;


class ConversationRepository {
    private $user;
    private $message;

    public function __construct(User $user, Message $messaege) {
        $this->user = $user;
        $this->message = $messaege;
    }

    public function getConversations(int $userId)
        {
            $conversations =  $this->user->newQuery()
                ->select('nom', 'id')
                ->where('id', '!=', $userId)
                ->get();

            // $unread = $this->unreadCount($userId);
            // foreach ($conversations as $conversation) {
            //     if (isset($unread[$conversation->id])) {
            //         $conversation -> unread = $unread[$conversation->id];
            //     }else {
            //         $conversation -> unread = 0;
            //     }
            // }

            return $conversations;
        }

    public function createMessage(string $content, int $from, int $to)
    {
        return $this->message->newQuery()->create ([
            'content' => $content,
            'from_id' => $from,
            'to_id' => $to,
            'create_at' => Carbon::now()
        ]);
    }

    public function getMessagesFor(int $from, int $to): Builder
{
    return $this->message->newQuery()
        ->whereRaw("((from_id = $from AND to_id = $to) OR (from_id = $to AND to_id = $from))")
        ->orderBy('create_at', 'DESC') // Use 'create_at' if that's the correct column name in your database
        ->with([
            'from' => function ($query) {
                return $query->select('nom', 'id');
            }
        ]);
}



    //compter le nombre de messages non lus //
    public function unreadCount(int $userId)
        {
            return $this->message->newQuery()
                ->where('to_id', $userId)
                ->groupBy('from_id')
                ->selectRaw('from_id, COUNT(id) as count')
                ->whereRaw('read_at  IS NULL')
                ->get()
                ->pluck('count', 'from_id');
        }

// marque tous les message de cette utilisateur comme lu 
        public function readAllFrom(int $from, int $to) {
             
         $this->message->where('from_id' , $from )->where( 'to_id' , $to)->update(['read_at' => Carbon::now()]);

        }

}
