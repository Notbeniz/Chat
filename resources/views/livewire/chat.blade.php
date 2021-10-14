<div class="row">
    <div class="col-md-9">
        <div class="chat">
            @foreach ($messages as $message)
                <p class="my-2">
                    {{$message->message}}
                </p>
                <br>
            @endforeach
        </div>
        @if (! is_null($user_id))
            
            <div>
                <input wire:model="message" class="form-control" placeholder="Type your message here...">
                <div class="text-center mt-3">
                    <button class="btn btn-info" wire:click.prevent="sendMSG" >Send</button>
                </div>  
            </div>
        @endif
    </div>
    <div class="col-md-3">
        
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                <h2>{{Auth::user()->username}}</h2>
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($users as $user)
                <li class="list-group-item ">
                    <button class="btn @if($user->id == $user_id) redColor @endif" wire:click="chaneUser({{$user->id}})" >{{$user->username}}</button>
                </li>
                @endforeach
            </ul>
          </div>
    </div>
</div>
