@extends('layouts.master')


@section('title')
    Bill Split Project3
@endsection


@section('content')
      <h1>Bill Split</h1>

        <!-- tabAmount input-->
        <div class="form-group">
          <label for="Total_Tab">Total Tab</label>
            <input id="Total_Tab" name="Total_Tab" type="number" >
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label  for="Split_How_Many_Way?">Split How Many Way?</label>
            <input id="Split_How_Many_Way?" name="Split_How_Many_Way?" type="number" >
        </div>

        <!-- Multiple Radios -->
@endsection
