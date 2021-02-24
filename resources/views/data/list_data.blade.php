
@foreach($userData['data'] as $key => $lits)
    @if(\Illuminate\Support\Facades\Auth::user())

        @if($lits->id_users == \Illuminate\Support\Facades\Auth::user()->id or \Illuminate\Support\Facades\Auth::user()->id == 3)

    <tr>
        <td align='center' >{{ ($key+1) }}</td>
        <td align='center'>{{$lits->title}}</td>
        <td align='center'>{{$lits->describe}}</td>
        <td align='center'>{{$lits->summary}}</td>
        <td align='center'>{{$lits->content}}</td>
        <td align='center'>{{$lits->url}}</td>
        <td align='center'>{{$lits->email}}</td>
        <td align='center'>
            @can('sua')
            <a href="javascript:void(0)" onclick="editPost({{$lits ->id}})" class="btn btn-info">Update</a>
            @endcan
            {{--<a href="javascript:void(0)" data-id="{{$lits ->id}}" onclick="editPost()" class="btn btn-info">Update</a>--}}
                @can('xoa')
            <a href="javascript:void(0)" onclick="deleted({{$lits ->id}})" class="btn btn-info">Delete</a>
                @endcan
        </td>
    </tr>

        @endif

    @endif
@endforeach
