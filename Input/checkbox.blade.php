<div class="flex rounded-md shadow-sm">
    <input type="checkbox" name="{{$name}}" 
    {!! $attributes->merge(['class' => 'rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}>
    <label for="{{$name}}" 
    class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
</div>