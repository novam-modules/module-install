@extends('layouts.master')
@section('layout')
<form action="/admin/account" method="POST" class="list-group">
    @csrf
    <div class="list-group-item">
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" name="mods[projects]">
            <label class="form-check-label" for="projects">Projects</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" name="mods[reports]">
            <label class="form-check-label" for="reports">Reports</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" name="mods[inventory]">
            <label class="form-check-label" for="inventory">Inventory</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" name="mods[documedia]">
            <label class="form-check-label" for="documedia">Documents & Media</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" name="mods[operations]">
            <label class="form-check-label" for="operations">Business Operations</label>
        </div>
    </div>

    <div class="list-group-item">
        <div class="form-check form-check-inline">
            <button type="submit" class="btn btn-primary">Update</div>
        </div>
    </div>
</form>
@isset($Accounts)
@foreach($Accounts as $account)
<div class="accordion" id="accounts-wrapper">
  <div class="card">
    <div class="card-header" id="heading{{ $account->id }}">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{ $account->id }}" aria-expanded="false" aria-controls="collapse{{ $account->id }}">
          {{ $loop->iteration }} -- {{ $account->name ?? ''}}
        </button>
      </h5>
    </div>
    <div id="collapse{{ $account->id }}" class="collapse" aria-labelledby="heading{{ $account->id }}" data-parent="#accounts-wrapper">
      <div class="card-body">
            @include('content.sys.account.create', $account);
      </div>
    </div>
  </div>
</div>
@endforeach

@endisset
@endsection
