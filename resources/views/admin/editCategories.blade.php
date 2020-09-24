@extends('layouts.adminPanel')

@section('content')
<div class="container-fluid">

          <div class="row">
          
            <div class="col-md-12">
              <div class="card">
              
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Edit Category of freelancer</h4>
             
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    

                   
                    <table class="table">
                    <form method="post" action="{{ route('Skills.update',$skill->id) }}" class="form-control">
                    @csrf
                    @method('PATCH')
                    
                    <thead class=" text-primary">
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
                       
                      </thead>
                      <tbody>
             
                      <tr>

                        <td>
                          <input type="text" class="form-control"  name="master_skill" value="{{$skill->skill_master}}" placeholder="Master Skill Name">
                        </td>
                        <td>
                          <input type="text" class="form-control" name="sub_skill" value="{{$skill->skill}}" placeholder="Sub Skill Name">
                        </td>
                        <td>
                          <input type="file" class="form-control" name="image" value="{{$skill->image}}">
                        </td>
                        <td>
                          <input type="text" class="form-control" placeholder="Description" name="description" value="{{$skill->discription}}">
                        </td>
                        <td>
                        <button type="submit" class="btn btn-primary btn-round">Update</button>
                        </td>
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



