@props(['value', 'stat'])


{{-- @php
    dd($value, $stat);
@endphp --}}



<input type="hidden" name="domaine_id[]" value={{ $value }}>
<div class="mt-2">
    <div class="star-group">
        <input type="radio"
            class="star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none  ring-0 border-transparent ring-transparent bg-transparent"
            id="one" name="note[{{ $value }}]" value="1">
        <input type="radio"
            class="star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none  ring-0 border-transparent ring-transparent bg-transparent"
            id="two" name="note[{{ $value }}]" value="2">
        <input type="radio"
            class="star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none  ring-0 border-transparent ring-transparent bg-transparent"
            id="three" name="note[{{ $value }}]" value="3">
        <input type="radio"
            class="star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none  ring-0 border-transparent ring-transparent bg-transparent"
            id="four" name="note[{{ $value }}]" value="4">
        <input type="radio"
            class="star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none  ring-0 border-transparent ring-transparent bg-transparent"
            id="five" name="note[{{ $value }}]" value="5">
        <input type="radio"
            class="star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none  ring-0 border-transparent ring-transparent bg-transparent"
            id="six" name="note[{{ $value }}]" value="6">
        <input type="radio"
            class="star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none  ring-0 border-transparent ring-transparent bg-transparent"
            id="seven" name="note[{{ $value }}]" value="7">
        <input type="radio"
            class="star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none  ring-0 border-transparent ring-transparent bg-transparent"
            id="eight" name="note[{{ $value }}]" value="8">
        <input type="radio"
            class="star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none  ring-0 border-transparent ring-transparent bg-transparent"
            id="nine" name="note[{{ $value }}]" value="9">
        <input type="radio"
            class="star checked:bg-transparent checked:hover:bg-transparent checked:active:bg-transparent checked:focus:bg-transparent focus:bg-transparent focus:outline-none focus:ring-0 focus:ring-transparent border-0 outline-none  ring-0 border-transparent ring-transparent bg-transparent"
            id="ten" name="note[{{ $value }}]" value="10">
    </div>
</div>
