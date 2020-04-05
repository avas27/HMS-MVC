<h1>id is : <?php echo $id?></h1>
<h1><?php echo $course?></h1>
@foreach ($sub as $sub)
<h1>id: {{$sub->id}} &nbsp;&nbsp;name: {{$sub->emp_name}} designation:{{$sub->emp_dept}} </h1>    
@endforeach
<h2>{{$empSal->avg}}</h2>   
<h2><?php print_r($empSal) ?></h2> 
















