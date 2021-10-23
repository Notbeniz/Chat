<div class="chat p-2">
        @foreach ($messages as $message)
        <div class="text-right">
            <p class="msg m-2 p-2">
                {{$message->message}}
            </p>
        </div>
        @endforeach
        <div class="msg m-2 p-2">
            some text
        </div>
        <div class="msg m-2 p-2">
            some text
        </div>
        <div class="text-right">
            <p class="msg m-2 p-2">
                some text - right
            </p>
        </div>
        <div class="msg m-2 p-2">
            some text
        </div>
        @if (! is_null($user_id))
            <div class="chat-box p-3">
                <div class="row text-center">
                    <div class="col-10">
                        <input wire:model.lazy="message" class="form-control" placeholder="Type your message here...">
                    </div>
                    <div class="col-2">
                        <button class="btn btn-info" wire:click.prevent="sendMSG" >Send</button>
                    </div>
                </div> 
            </div>
        @endif
</div>