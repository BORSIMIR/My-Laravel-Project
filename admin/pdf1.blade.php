<!DOCTYPE html>
<html>
<head>
<style>

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
<img src="admin/assets/images/logo13.png" height="8%">

<h3>Patient's Appointment Data</h3>


<table id="customers">
  <tr>
    <th style="text-align:center;">Full Name</th>
    <th style="text-align:center;">Phone</th>
    <th style="text-align:center;">Doctor</th>
    <th style="text-align:center;">Date</th>
  </tr>
  @if(count($appoint))
  @foreach($appoint as $appoints)
  <tr>
    <td style="text-align:center;">{{$appoints->name}}, {{$appoints->gname}} {{$appoints->mname}}.</td>
    <td style="text-align:center;">{{$appoints->phone}}</td>
    <td style="text-align:center;">{{$appoints->doctor}}</td>
    <td style="text-align:center;">{{$appoints->date}}{{$appoints->date1}}{{$appoints->date2}}{{$appoints->date3}}{{$appoints->date4}}{{$appoints->date5}}{{$appoints->date6}}</td>
  </tr>
  @endforeach
  @else
  <tr>
    <td colspan="3">No appointment found</td>
 
  </tr>

  @endif


</table>

</body>
</html>


