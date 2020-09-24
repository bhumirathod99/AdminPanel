@extends('layouts.adminPanel')

@section('content')
<div class="container-fluid">

          <div class="row">
          <a href="{{ route('Skills.create') }}" class="btn btn-primary btn-round">Add New Category</a>
            <div class="col-md-12">
              <div class="card">
              
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Categories of freelancer</h4>
             
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    

                   
                    <table class="table">
                    <form method="POST" action="/freelancerCategories" class="form-control">
                    
                      <thead class=" text-primary">
                      <tr>
                        <th>
                          ID
                        </th>
                        <th>
                         Master Skill
                        </th>
                        <th>
                         Sub Skill 
                        </th>
                        <th>
                        Image
                        </th>
                        <th>
                        Description
                        </th>
                        <th colspan="2">
                        Action
                        </th>
                       </tr>
                      </thead>
                      <tbody>
                      
                          @foreach ($skills as $skill)
                          <tr>
                            <td>{{ $skill->id }}</td>
                            <td>{{ $skill->skill_master }}</td>
                            <td>{{ $skill->skill }}</td>
                            <td>{{ $skill->image }}</td>
                            <td>{{ $skill->discription }}</td>
                            <td><a class="btn btn-primary btn-round" href="{{ route('Skills.edit',$skill->id) }}">Edit</a></td>
                            
                            <td>
                      
                            <form action="{{ route('Skills.destroy',$skill->id) }}" method="POST">
                               
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary btn-round">Delete</button>
                            </form>
                            </td>
                            
                            
                            </tr>  
                          @endforeach
                      
                        

                      </tbody>
                      </form>
                    </table>
                   
                  </div>
                </div>
              </div>
            </div>
        </div>
@endsection

@section('script')
    
@endsection

