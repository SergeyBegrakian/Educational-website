@extends('samepart_layout')
@section('the_same_part')


<div >
            <ul>
                <li id ="information">
                <h style="color:black;margin-left:40px; height:30px ;"></h>
             
       
                </li>
                <li class="formbold-step-menu2">
    
            
                </li>
                <li class="formbold-step-menu3">
   
            
                </li>
            </ul>
        </div>

</div>

<div >
        <div class="row" style=" margin-left:40px; width: 1360px" >
                <div class="card">
                    <div class="card-body" style="width: 1360px !important;">
                            
                        <div class="table-responsive">
                            <table class="table" style="width: 1360px !important;" >
                                <thead>
                                    <tr>
                                    <th>Photo</th>
                                        <th>Title</th>
                                        <th>Mentors</th>
                                        <th>Category</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($courses as $courses)
                                    <tr>
                                    <td> 
							                        <img src="{{ asset('images/' . $courses->image_path)}}" style="width:130px; height:120px;">
						                              </a>
                                        </td> 
                                        
                                        <td>{{$courses->title}}</td> 
                                        <td>{{$courses->mentor->full_name}}</td>
                                        <td>{{$courses->category->name}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>

    </div>




@endsection
