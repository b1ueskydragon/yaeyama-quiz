@extends('layouts.authenticated')

@section('title','クイズ一覧')

@section('content')
<div class="container">
  <h1>@yield('title')</h1>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th style="width:16px">{{ __('NO.') }}</th>
          <th style="width:400px">{{ __('Title') }}</th>
          <th style="width:120px">{{ __('Category') }}</th>
          <th style="width:88px">{{ __('地域') }}</th>
          <th style="width:110px">{{ __('updated_at') }}</th>
          <th style="width:80px">{{ __('編集') }}</th>
          <th style="width:80px">{{ __('削除') }}</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($quiz_posts as $key => $quiz)
        <tr>
          <td>{{ $key+1 }}</td>
          <td>{{ $quiz->title }}</td>
          <td>{{ $quiz->category->name }}</td>
          <td>{{ $quiz->region->name }}</td>
          <td>{{ $quiz->updated_at->format('Y/m/d') }}</td>
          <td>
            <a href="{{ url('mypage/'.$quiz->id.'/edit') }}" class="btn btn-primary">
              <i class="fas fa-pencil-alt"></i>
            </a>
          </td>
          <td>
            <form style="display:inline" action="{{ url('mypage/'.$quiz->id) }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">
                <i class="fas fa-trash-alt"></i>
              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection