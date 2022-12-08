<x-layout>

    @section('content')
        <article>
            <h1 class="hite">{!! $album->title !!}</h1>

            <div class="title">{!! $album->body !!}</div>
        </article>
        
        {{-- display comments info --}}
        <div class="comments-info">
            <div class="user-comments">
                @foreach($album->comments as $comment)
                    <x-post-comments :comment="$comment" />
                @endforeach
            </div>
            
            {{-- create a new  --}}
            @if(auth()->user())
                <form method="POST" action="{{ url('/albums/' . $album) }}">
                    @csrf
                    @method('POST')
                    {{ method_field('POST') }}

                    <div class="comments">
                        <div class="comments-section">
                            @csrf
                            <div class="package1">
                                <img src="https://i.pravatar.cc/100?id ={{ auth()->id() }}" alt="">
                                <h2> Tell us your opinion!</h2>
                            </div>  
            
                            <div class="package2">
                                <textarea 
                                    name="message" 
                                    rows="5" 
                                    placeholder="Do you want to say something?">
                                </textarea>

                                    @error('message')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                            </div>
                            
                            <div class="package3">
                                <input type="submit" name="submit" class="send-btn" value="Send">
                            </div>
                        </div>
                    </div>
                </form>
            @endif
        
        </div>
    @endsection

</x-layout>