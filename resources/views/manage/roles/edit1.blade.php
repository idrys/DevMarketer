@extends('layouts.manage')

@section('content')

<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">Edit {{$role->display_name}}</h1>
        </div>
        <div class="column">
        <a href="{{route('roles.edit', $role->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i>Edit</a>
        </div>
    </div>
    <hr class="m-t-0">
    
    <form action="{{ route('roles.update', $role->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
    
        <div class="columns">
            <div class="column">
                <div class="box">
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <h1 class="title">Role Details: </h1>

                                <div class="filed">
                                    <p class="control">
                                        <label for="display_name" class="label">Name (Human Readable</label>
                                        <input type="text" class="input" value="{{$role->display_name}}" name="display_name" id="display_name">    
                                    </p>
                                </div>
                                    
                                <div class="filed">
                                    <p class="control">
                                        <label for="name" class="label">Slug (Can not be edited</label>
                                        <input type="text" name="name" class="input" value="{{$role->name}}" disabled id="name">    
                                    </p>
                                </div>

                                <div class="filed">
                                    <p class="control">
                                        <label for="description" class="label">Description</label>
                                        <input type="text" class="input" value="{{$role->description}}" id="description">    
                                    </p>
                                </div>
                                
                            </div>

                        </div>
                    </article>
                </div>
            </div>
        </div>

        <div class="columns">
            <div class="column">
                <div class="box">
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <h2 class="title">Role Details: </h1>
                                
                                <!--b-checkbox-group v-model="permissionsSelected"-->
                                    @foreach ($permissions as $permission)
                                      <div class="field" >
                                        <b-checkbox v-model="permissionsSelected" native-value="{{$permission->id}}">{{$permission->display_name}} <em>({{$permission->description}})</em></b-checkbox>
                                      </div>
                                    @endforeach
                                <!--/ul-->
                                
                            </div> <!-- end of content -->
                        </div> <!-- end of media-content -->
                    </article>
                </div> <!-- end of box -->
                <button class="button is-primary">Save Changes to Role</button>
            </div> <!-- end of column -->
        </div> <!-- columns -->

    </form>
</div>

@endsection

@section('scripts')
<script>
let app = new Vue({
    el: '#app',
    data: {
        permissionsSelected: {!!$role->permissions->pluck('id')!!}
    }
});
</script>
@endsection