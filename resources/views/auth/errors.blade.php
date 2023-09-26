
@if (count($errors))

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  @foreach ($errors->all() as $error)

    <strong><span aria-hidden="true">&times; {{ $error }}</strong></span> <br>
  @endforeach
</div>

@else
@if (session('error'))

<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
      <strong><span aria-hidden="true">&times; {{ session('error') }}</strong></span> <br>

  </div>
@endif
@endif
