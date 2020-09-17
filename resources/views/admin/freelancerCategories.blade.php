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
                        <th>
                        Action
                        </th>
                       </tr>
                      </thead>
                      <tbody>
                      <tr>
                          @foreach ($skill as $skills)
                            <td>{{ $skills->id }}</td>
                            <td>{{ $skills->skill_master }}</td>
                            <td>{{ $skills->skill }}</td>
                            <td>{{ $skills->image }}</td>
                            <td>{{ $skills->discription }}</td>
                            <td>
                            <a href="{{ route('Skills.edit',$skill->id) }}" class="btn btn-primary btn-round">Edit</a>
                            <a href="{{ route('Skills.destroy',$skill->id) }}" class="btn btn-primary btn-round">Delete</a>
                            </td>
                            
                          @endforeach
                         </tr>  
                        

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

