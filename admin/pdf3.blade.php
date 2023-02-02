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

<h3>Total User</h3>

<table id="customers">
  <tr>
    <th style="text-align:center;">Fullname</th>

    <th style="text-align:center;">Contact #</th>
    <th style="text-align:center;">Address</th>
    <th style="text-align:center;">Birth Date</th>
    <th style="text-align:center;">Age</th>
    <th style="text-align:center;">Sex</th>
    <th style="text-align:center;">Civil Status</th>

  </tr>
@if(count($user))
  @foreach($user as $users)
  <tr>
    <td style="text-align:center;">{{$users->fullname}}</td>

    <td style="text-align:center;">{{$users->phone}}</td>
    <td style="text-align:center;">{{$users->address}}</td>
    <td style="text-align:center;">{{$users->birthdate}}</td>
    <td style="text-align:center;">{{$users->age}}</td>
    <td style="text-align:center;">{{$users->sex}}</td>
    <td style="text-align:center;">{{$users->civil}}</td>

  </tr>
@endforeach
  @else
  

  @endif



</table>

</body>
</html>


