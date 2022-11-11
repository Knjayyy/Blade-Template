@extends('blade')

@section('content')

<h1 class="text-center"><i>Merchandises</i></h1>

<table class="table table-bordered table-hover table=sm">
<tr class="table-dark">
      <th>Merchandise</th>
      <th>Definition</th>
    </tr>
    <tr>
      <td>Convenience Goods</td>
      <td>Convenience goods are necessary items that people require for basic survival and health.</td>
    </tr>
    <tr>
      <td>Impulse Goods</td>
      <td>Impulse goods are items that customers buy without originally planning to when they entered the store.</td>
    </tr>
    <tr>
    <td>Shopping Products</td>
      <td>Shopping products are items that customers typically research or want to learn information about before buying.</td>
    </tr>
    <tr>
      <td>Specialty Goods</td>
      <td>Specialty goods are items that may be in limited stock,
        possess luxury associations or come from particular companies that may not have many convenient locations.</td>
    </tr>
  </table>

@endsection
