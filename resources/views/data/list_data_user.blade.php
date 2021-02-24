@foreach($userData['data'] as $key => $lits)
    <tr>
        <td align='center'>{{ ($key+1) }}</td>
        <td align='center'>{{$lits ->email}}</td>
        <td align='center'>{{$lits ->password}}</td>
        <td align='center'>
            <a href="javascript:void(0)" onclick="editPost({{$lits ->id}})" class="btn btn-info">Update</a>
            {{--<a href="javascript:void(0)" data-id="{{$lits ->id}}" onclick="editPost()" class="btn btn-info">Update</a>--}}
            <a href="javascript:void(0)" onclick="deleted({{$lits ->id}})" class="btn btn-info">Delete</a>
        </td>
    </tr>
@endforeach