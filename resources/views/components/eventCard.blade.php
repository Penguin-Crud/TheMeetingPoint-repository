@props(['itemEvent'])
<div class="col">
    <div class="card shadow-sm h-100">

        <img class="bd-placeholder-img card-img-top" style="object-fit:cover" width="100%"  height="225" src="{{ $itemEvent->image }}" alt="No funciona">

        <div class="card-body">
            <div class="d-flex justify-content-between">
                <p class="card-text" style="font-weight:bold">{{ $itemEvent->title }}</p>
                <div class="d-flex justify-content-between">
                    <p class="{{($itemEvent->isEventExpired())?'text-danger': 'text-secondary'}}">{{ $itemEvent->date }}</p>
                </div>
            </div>
            <p class="card-text">{{ $itemEvent->description }}</p>
            <div class="d-flex justify-content-between">
                @auth
                    @if ($itemEvent->isEventExpired())
                        <button class="btn-secondary text-white">Event Expired</button>
                    @else
                        @if (Auth::user()->isSubscribed($itemEvent))
                            <button class="bg-danger text-white">You are Subscribed</button>
                        @else
                            <form action="{{ route('allowevent', ['id' => $itemEvent->id ]) }}" method="POST" >
                                @csrf
                                <button class="bg-warning text-white">Suscribe</button>
                            </form>
                        @endif
                    @endif
                @endauth
                @guest
                    @if ($itemEvent->isEventExpired())
                        <button class="btn-secondary text-white">Event Expired</button>
                    @else
                        <form action="{{ route('allowevent', ['id' => $itemEvent->id ]) }}" method="POST" >
                            @csrf
                            <button class="bg-warning text-white">Suscribe</button>
                        </form>
                    @endif
                @endguest
                <p class="{{($itemEvent->isFull())?'text-danger': 'text-secondary'}}">Persons : {{$itemEvent->countStudents()}} / {{ $itemEvent->people }}</p>
            </div>
            <div class="d-flex justify-content-center align-items-center flex-column">
                @auth

                @if (Auth::user()->isAdmin())

                <div class="btn-group mt-2">
                    <form action="{{route('events.destroy', ['id' => $itemEvent->id])}}" method="POST" class="me-1" style="width: 6vw">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-secondary text-white bg-danger w-100">Delete</button>
                        @method('DELETE')
                    </form>

                    <a href="{{route('events.edit', ['id' => $itemEvent->id])}}" class="ms-1" style="width: 6vw">
                        <button type="button" class="btn btn-sm btn-outline-secondary text-white w-100" style="background-color: blue">Edit</button>
                    </a>
                </div>
                @endif
                @endauth
            </div>
        </div>
    </div>
</div>
