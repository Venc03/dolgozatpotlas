<form action="/api/clubs" method="post">
    {{csrf_field()}}
    <input type="text" name="location" placeholder="Location">
    <input type="text" name="max_number" placeholder="Max Number">
        @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>
    <input type="date" name="establishment" placeholder="Establishment">
    <input type="submit" value="Ok">
</form>