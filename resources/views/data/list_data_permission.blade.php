@foreach($userData['data'] as $key => $perInfo)
    <tr>
        <td align='center'>{{ ($key+1) }}</td>
        <td align='center'>{{$perInfo ->name}}</td>
        <td align='center'>{{$perInfo ->code}}</td>
        <td align='center'>

            <select class="form-control" align='center' onchange="getRole({{$perInfo->id}})"
                    id='per_{{$perInfo->id}}'>
                <option value="">Chọn người dùng</option>
                @foreach($roles as $role)
                    <option value="{{$role->id}}" @if(in_array($role->id, $perInfo->role->pluck('id')->toArray())) selected @endif >{{$role->name}}</option>
                @endforeach
            </select>
        </td>
        <td align='center'>
            <a href="javascript:void(0)" onclick="editPost({{$perInfo ->id}})" class="btn btn-info">Update</a>
            <a href="javascript:void(0)" onclick="deleted({{$perInfo ->id}})" class="btn btn-info">Delete</a>
        </td>
    </tr>
@endforeach