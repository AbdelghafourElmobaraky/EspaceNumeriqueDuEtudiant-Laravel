<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Repository\ConversationRepository;
use App\Repository\createMessage;
use App\Notifications\MessageReceived;
use Illuminate\Auth\AuthManager;
use App\Http\Requests\StoreMessageRequest;

class ConversationsController extends Controller
{
    

    private $r;
    private $auth;

    public function __construct(ConversationRepository $conversationRepository, AuthManager $auth){
        
        $this->middleware('auth');
        $this->r = $conversationRepository;
        $this->auth = $auth;
    }

    public function index() {
        
        // $users  = User::select('nom' , 'id')->where('id' , '!=' , Auth::user()->id)->get();

        return view('conversations.index',[
            'users' => $this->r->getConversations($this->auth->user()->id),
            'unread' => $this->r->unreadCount($this->auth->user()->id)

        ]);

    }

    

    public function create()
    {
        //
    }

    public function store(User $user, StoreMessageRequest $request){
        $message = $this->r->createMessage(
            $request->get('content'),
            $this->auth->user()->id,
            $user->id
        );
        $user->notify(new MessageReceived($message));
        return redirect()->route('conversations.show', ['user' => $user->id]);

    }

    public function show(User $user) {

        $me = $this->auth->user();

        // $users  = User::select('nom' , 'id')->where('id' , '!=' , Auth::user()->id)->get();

        $messages = $this->r->getMessagesFor($me->id, $user->id)->paginate(4);

        $unread = $this->r->unreadCount($me->id);



        if (isset($unread[$user->id])) {

            $this->r->readAllFrom($user->id, $me->id);

            unset($unread[$user->id]);

        }

        return view('conversations.show',[

            'users' => $this->r->getConversations($this->auth->user()->id),

            'user' => $user,

            'messages' => $messages,

            'unread' => $unread

        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
