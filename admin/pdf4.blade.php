<!DOCTYPE html>
<html>
<head>
<style>
  .page-break{
    page-break-after: always;
  }
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


<h3>Doctor's Data</h3>

<table id="customers">
  <tr>

    <th style="text-align:center;">Name</th>
    <th style="text-align:center;">Specialty</th>
    <th style="text-align:center;">Schedule 1</th>
    <th style="text-align:center;">Schedule 2</th>
    <th style="text-align:center;">Schedule 3</th>
  </tr>
  @if(count($doctor))
  @foreach($doctor as $doctors)
  <tr>

    <td style="text-align:center;">{{$doctors->name}}</td>
    <td style="text-align:center;">{{$doctors->speciality}}</td>
    <td style="text-align:center;">{{$doctors->schedule1}} {{$doctors->sched1}} - {{$doctors->sched2}}</td>
    <td style="text-align:center;">{{$doctors->schedule2}} {{$doctors->sched3}} - {{$doctors->sched4}}</td>
    <td style="text-align:center;">{{$doctors->schedule3}} {{$doctors->sched5}} - {{$doctors->sched6}}</td>

  </tr>

  @endforeach

  @else
 

  @endif

</table>

</body>
</html>


