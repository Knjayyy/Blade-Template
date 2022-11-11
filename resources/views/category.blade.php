@extends('blade')

@section('content')

<h1 class="text-center"><i>Categories</i></h1>

<table class="table table-bordered table-hover table=sm">
    <tr class="table-dark">
      <th>Category</th>
      <th>knots (kt)</th>
      <th>meter per second (m/s)</th>
      <th>kilometers per hour (km/h)</th>
    </tr>
    <tr>
      <td>1</td>
      <td>64 - 82</td>
      <td>33 - 42</td>
      <td>119 - 153</td>
    </tr>
    <tr>
      <td>2</td>
      <td>83 - 95</td>
      <td>43 - 48</td>
      <td>154 - 177</td>
    </tr>
    <tr>
      <td>3</td>
      <td>96 - 113</td>
      <td>49 - 58</td>
      <td>178 - 209</td>
    </tr>
    <tr>
      <td>4</td>
      <td>114 - 135</td>
      <td>59 - 69</td>
      <td>210 - 249</td>
    </tr>
      <td>5</td>
      <td>135-</td>
      <td>70-</td>
      <td>249-</td>
    </tr>
  </table>

@endsection
