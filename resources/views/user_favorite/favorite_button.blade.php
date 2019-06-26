<!--フォローボタンから改変-->
<!--もし現在のユーザがログインユーザーidと違うなら（自分以外のユーザーであれば）-->
<!--お気に入りボタンは自分のポストにも利用可能なのでコメントアウト-->
<!--@if (Auth::id() != $user->id)-->
    @if (Auth::user()->is_favorite($micropost->id))
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
<!--@endif-->