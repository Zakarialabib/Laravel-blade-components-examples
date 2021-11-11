<div class="relative inline-block w-60 mr-2 align-middle select-none transition duration-200 ease-in">
    <select name="{{$name}}" id="{{$id}}" @if($checked) checked @endif {{ $attributes->merge(['class'=>"form-select form-control"])}} />
        <label for="{{$id}}" class="block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
    </select>
</div>