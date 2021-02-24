@foreach($userData['data'] as $key => $roleInfo)
    <tr>
        <td align='center'>{{ ($key+1) }}</td>
        <td align='center'>{{$roleInfo ->name}}</td>
        <td align='center'>{{$roleInfo ->code}}</td>
        <td align='center'>
            <select class="form-control" align='center' onchange="getRole({{$roleInfo->id}})"
                    id='user_{{$roleInfo->id}}'>
                <option value="">Chọn người dùng</option>
                @foreach($users as $user)
                    <option value="{{$user->id}}" @if(in_array($user->id, $roleInfo->user->pluck('id')->toArray())) selected @endif >{{$user->email}}</option>
                @endforeach
            </select>
        </td>
        <td align='center'>
            <a href="javascript:void(0)" onclick="editPost({{$roleInfo ->id}})" class="btn btn-info">Update</a>
            <a href="javascript:void(0)" onclick="deleted({{$roleInfo ->id}})" class="btn btn-info">Delete</a>
        </td>
    </tr>
@endforeach