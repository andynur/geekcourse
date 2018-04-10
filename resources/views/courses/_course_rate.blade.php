@php ($averageRating = floor( (int)$rating / 2) )

<select class="rate-bar">
    <option value="1" {{ $averageRating == 1 ? 'selected' : '' }}>1</option>
    <option value="2" {{ $averageRating == 2 ? 'selected' : '' }}>2</option>
    <option value="3" {{ $averageRating == 3 ? 'selected' : '' }}>3</option>
    <option value="4" {{ $averageRating == 4 ? 'selected' : '' }}>4</option>
    <option value="5" {{ $averageRating == 5 ? 'selected' : '' }}>5</option>
</select>