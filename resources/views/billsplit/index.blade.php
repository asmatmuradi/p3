@extends('layouts.master')

@section('content')
      <h1 class="text-center">Bill Split</h1>
    <div class="container">
        <form method='GET' action='/' class="form-horizontal">
          <fieldset>
            <!-- Form Name -->

            <!-- tabAmount input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="totalTab">*Total Tab</label>
              <div class="col-md-10">
                <input id="totalTab" name="totalTab" type="number" class="form-control input-md" value='{{ $totalTab or ''}}'>
                @if($errors->get('totalTab'))
                <div class="alert alert-danger">
                  @include('modules.error-field', ['fieldName' => 'totalTab'])
                </div>
                @endif
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="splitHowManyWay">*Split How Many Way?</label>
              <div class="col-md-10">
                <input id="splitHowManyWay" name="splitHowManyWay" type="number" class="form-control input-md" value='{{ $splitHowManyWay or ''}}'>
                @if($errors->get('splitHowManyWay'))
                <div class="alert alert-danger">
                  @include('modules.error-field', ['fieldName' => 'splitHowManyWay'])
                </div>
                @endif
              </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
              <label class="col-md-4" for="radios-0">Service Tip</label>
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
              </div>
              <div class="col-md-10">
                @if($errors->get('radios'))
                <div class="alert alert-danger">
                  @include('modules.error-field', ['fieldName' => 'radios'])
                </div>
                @endif
                <input id="radioValue" name="radioValue" type="number" class="form-control input-md" value='{{$radioValue or ''}}'>
              </div>
            </div>

            <!-- Select Discount -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="discount">
                Discount
              </label>
              <div class="col-md-10">
                <select id="discount" name="discount" class="form-control">
               <option value=0>Does Not Apply</option>
               <option value =0.10>EmployeeDiscount - 10%</option>
               <option value =0.05>StudentDiscount - 5%</option>
               <option value=0.07>SeniorCitizenDiscount - 7%</option>
             </select>
             <script type="text/javascript">
              document.getElementById('discount').value = "{{$discount}}";
            </script>
              </div>
            </div>

            <!--RountUp-->
            <div class="form-group">
              <div class="col-md-4">
              <label class="form-check-label">
                <input type="checkbox" id="roundUp" name="roundUp" class="form-check-input" {{ ($roundUp) ? 'CHECKED' : ''}}>
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
      </div>
@endsection
