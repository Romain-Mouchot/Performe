@props(['name', 'stat'])


<div class="mt-2">
    <div class="star-group">
        <input type="radio"
            class="star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none  ring-0 border-transparent ring-transparent bg-transparent"
            id="one" name="{{ $name }}" value="1" {{ $stat >= 1 ? 'checked' : '' }}>
        <input type="radio"
            class="star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none  ring-0 border-transparent ring-transparent bg-transparent"
            id="two" name="{{ $name }}" value="2" {{ $stat >= 2 ? 'checked' : '' }}>
        <input type="radio"
            class="star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none  ring-0 border-transparent ring-transparent bg-transparent"
            id="three" name="{{ $name }}" value="3" {{ $stat >= 3 ? 'checked' : '' }}>
        <input type="radio"
            class="star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none  ring-0 border-transparent ring-transparent bg-transparent"
            id="four" name="{{ $name }}" value="4" {{ $stat >= 4 ? 'checked' : '' }}>
        <input type="radio"
            class="star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none  ring-0 border-transparent ring-transparent bg-transparent"
            id="five" name="{{ $name }}" value="5" {{ $stat >= 5 ? 'checked' : '' }}>
        <input type="radio"
            class="star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none  ring-0 border-transparent ring-transparent bg-transparent"
            id="six" name="{{ $name }}" value="6" {{ $stat >= 6 ? 'checked' : '' }}>
        <input type="radio"
            class="star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none  ring-0 border-transparent ring-transparent bg-transparent"
            id="seven" name="{{ $name }}" value="7" {{ $stat >= 7 ? 'checked' : '' }}>
        <input type="radio"
            class="star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none  ring-0 border-transparent ring-transparent bg-transparent"
            id="eight" name="{{ $name }}" value="8" {{ $stat >= 8 ? 'checked' : '' }}>
        <input type="radio"
            class="star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none  ring-0 border-transparent ring-transparent bg-transparent"
            id="nine" name="{{ $name }}" value="9" {{ $stat >= 9 ? 'checked' : '' }}>
        <input type="radio"
            class="star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none  ring-0 border-transparent ring-transparent bg-transparent"
            id="ten" name="{{ $name }}" value="10" {{ $stat >= 10 ? 'checked' : '' }}>
    </div>
</div>
