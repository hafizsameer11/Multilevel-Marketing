@foreach ($users as $t)
@if($t->role=='admin')
@php
    continue;
@endphp
@endif
<tr class="invest-tb">
    <td class="table-srt">{{ $count }}</td>
    <td class="contry"> <a href="{{ route('user.details', ['id' => $t->id]) }}">{{ $t->username }}</a> </td>
    <td class="contry">{{ $t->name }} </td>
    <td class="contry">{{ $t->cnic }}</td>
    <td class="contry">{{ $t->userMeta->user_balance }} </td>
    @if ($t->status == 0)
    <td class="contry">
        <a href="{{ route('unblock.user', ['id' => $t->id]) }}" class="btn btn-outline-success">Unblock the User</a>
    </td>
    @else
    <td class="contry">
        <a href="{{ route('block.user', ['id' => $t->id]) }}" class="btn btn-outline-danger">Restrict That User</a>
    </td>
    @endif
</tr>
@php
$count--;
@endphp
@endforeach
