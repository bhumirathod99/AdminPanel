@extends('layouts.adminPanel')

@section('content')
<div class="container-fluid">

          <div class="row">
          
            <div class="col-md-12">
              <div class="card">
              
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Add New Category of freelancer</h4>
             
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    

                   
                    <table class="table">
                    <form method="post" action="{{route('Skills.store')}}" class="form-control">
                    @csrf
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
                      
                        <td>
                          <input type="text" class="form-control"  name="master_skill" placeholder="Master Skill Name">
                        </td>
                        <td>
                          <input type="text" class="form-control" name="sub_skill" placeholder="Sub Skill Name">
                        </td>
                        <td>
                          <input type="file" class="form-control" name="image">
                        </td>
                        <td>
                          <input type="text" class="form-control" placeholder="Description" name="description">
                        </td>
                        <td>
                        <a href="{{route('Skills.store')}}" class="btn btn-primary btn-round">Add</a>
                        </td>
                       
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



