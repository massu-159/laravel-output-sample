@extends('app')


@section('title', $user->name.'の節税記録')

@section('content')
@include('nav')
<div class="container">
    @include('users.user')
    @include('users.tabs', ['hasScores' => true,'hasArticles' => false, 'hasLikes' => false])
    <div class="card-body pt-0">

      @if(!isset($scores[0]))
      ※値がありません。
      @else
      　※値が存在します。
      @foreach($scores as $score)
      {{@score}}
      @endforeach
      @endif

      <score-button
      {{-- :initial-is-scored-by='@json($score->isScoredBy(Auth::user()))' --}}
      >
      </score-button>
    </div>
    
</div>
@endsection