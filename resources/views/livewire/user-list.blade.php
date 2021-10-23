<div class="text-left">
    @foreach ($users as $user)
    <div class=" py-2 box " wire:click="testFunc({{$user->id}})" >
        <img src="" alt="" class="mr-3">
        {{$user->username}}
    </div>
    @endforeach
</div>
