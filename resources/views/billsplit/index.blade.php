@extends('layouts.master')

@section('content')
      <h1 class="text-center">Bill Split</h1>
    <div class="container">
        <form method='GET' action='/' class="form-horizontal">
          <fieldset>
            <!-- Form Name -->

            <!-- tabAmount input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="Total_Tab">*Total Tab</label>
              <div class="col-md-10">
                <input id="Total_Tab" name="Total_Tab" type="number" class="form-control input-md" value='{{ $Total_Tab or ''}}'>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="Split_How_Many_Way?">*Split How Many Way?</label>
              <div class="col-md-10">
                <input id="Split_How_Many_Way?" name="Split_How_Many_Way?" type="number" class="form-control input-md" value='{{ $Split_How_Many_Way or ''}}'>
              </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
              <label class="col-md-4" for="radios-0">*Service Tip</label>
              <div class="col-md-4">
                <div class="radio">
                  <label for="radios-0">
               <input type="radio" name="radios" id="radios-0" value=1 {{ ($radios==1) ? 'checked' : ''}}>
               By %
             </label>
                </div>
                <div class="radio">
                  <label for="radios-1">
               <input type="radio" name="radios" id="radios-1" value=2 {{ ($radios==2) ? 'checked' : ''}}>
               By $
             </label>
                </div>
                <script type="text/javascript">
                 document.getElementByValue('radios').value = "{{$radios}}";
               </script>
              </div>
              <div class="col-md-10">
                <input id="radioValue" name="radioValue" type="number" class="form-control input-md" value='{{$radioValue or ''}}'>
              </div>
            </div>

            <!-- Select Discount -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="Discount">
                Discount
              </label>
              <div class="col-md-10">
                <select id="Discount" name="Discount" class="form-control">
               <option value=0>Does Not Apply</option>
               <option value =0.10>EmployeeDiscount - 10%</option>
               <option value =0.05>StudentDiscount - 5%</option>
               <option value=0.07>SeniorCitizenDiscount - 7%</option>
             </select>
             <script type="text/javascript">
              document.getElementById('Discount').value = "{{$Discount}}";
            </script>
              </div>
            </div>

            <!--RountUp-->
            <div class="form-group">
              <div class="col-md-4">
              <label class="form-check-label">
                <input type="checkbox" id="RoundUp" name="RoundUp" class="form-check-input" {{ ($RoundUp) ? 'CHECKED' : ''}}>
                RoundUp
              </label>
              </div>
            </div>

            <!-- Submit Button -->
            <div class="form-group">
              <div class="col-md-6">
                <button id="submit" name="submit" class="btn btn-primary ">Calculate</button>
              </div>
            </div>
          </fieldset>
        </form>

        @if($tabForEachWay != null)
            <div class="alert alert-success text-center col-md-10">
            <h2> The bill is ${{ $tabForEachWay }} each way.</h2>
            </div>
        @endif

@endsection
