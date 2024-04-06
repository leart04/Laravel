<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ViewFile</title>
</head>
<body>

    {{-- <select> @foreach ($data as $item)
        <option>{{ $item->title}}</option>
    
        
    @endforeach
    </select>  --}}
<table atyle=" border:1px solid black;border-collpase:collapse; ">
    <tr>
        <td>Id</td>
        <td>Title</td>
        <td>Completed</td>
    </tr>
    @foreach ($data as $item)
    <tr>
        <td> {{ $item->id}} </td>
        <td> {{ $item->title}} </td>
        <td> {{ $item->is_completed}} </td>

    </tr>
    @endforeach
</table>
    
        
    </select>
</body>
</html>