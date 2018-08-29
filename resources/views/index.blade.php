@extends('layouts.master')

@section('content')

<table>
    <thead>
        <tr>
            <th>Task</th>
            @isAdmin
            <th>Assigned to</th>
            @endisAdmin
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>

    <tbody>
        <tr>
        <td><a href="">Slim down to 10 kg</a></td>
        @isAdmin
        <td>Buzz Narith</td>
        @endisAdmin
        <td><a title="edit" href=""><i class="small material-icons">edit</i></a></td>
        <td><a title="delete" href=""><i class="small material-icons">delete_forever</i></a></td>
        </tr>

        <tr>
        <td><a href="">Oder 20 pepsi boxer</a></td>
        @isAdmin
        <td>fuller Narith</td>
        @endisAdmin
        <td><a title="edit" href=""><i class="small material-icons">edit</i></a></td>
        <td><a title="delete" href=""><i class="small material-icons">delete_forever</i></a></td>
        </tr>
    
        <tr>
            <td><a href=""><strike>Repair the door lock</strike> </a></td>
            
            @isAdmin
            <td>Harry Narith</td>
            @endisAdmin
            <td><a title="edit" href=""><i class="small material-icons">edit</i></a></td>
            <td><a title="delete" href=""><i class="small material-icons">delete_forever</i></a></td>
        </tr>
        <tr>
            <td><a href="">Wash the floor</a></td>
            
            @isAdmin
            <td>Marvel Narith</td>
            @endisAdmin
            <td><a title="edit" href=""><i class="small material-icons">edit</i></a></td>
            <td><a title="delete" href=""><i class="small material-icons">delete_forever</i></a></td>
        </tr>
        
    </tbody>
</table>

 <ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
    </ul>

<form class="col s12">


    <div class="row">
        <div class="input-field col s12">
        <input id="task" type="text" class="validate">
        <label for="task">New task</label>
        </div>
    </div>

   @include('partials.coworkers')
        

    <a class="waves-effect waves-light btn">Add new task</a>

</form>

@isWorker
<br><br><br>
<form action="" class="col s12">
    <div class="input-field ">
            <select>
                <option value="" disabled selected>Send invitation to:</option>
            
                <option value="2">Buzz Narith</option>
                <option value="3">Fuller capitain</option>
                <option value="4">Buzz Jake</option>
                <option value="5">Marv capitain</option>
            </select>
            <label>Send invitation</label>
    </div>

</form>


@endisWorker

    @isAdmin
    <br><br><br>
    <ul class="collection with-header">
        <li class="collection-header"><h4>My Coworkers</h4></li>
        <li class="collection-item"><div>Buzz Narith<a href="#!" class="secondary-content"><i class="material-icons">delete</i></a></div></li>
        <li class="collection-item"><div>Fuller Narith<a href="#!" class="secondary-content"><i class="material-icons">delete</i></a></div></li>
        <li class="collection-item"><div>Fever Narith<a href="#!" class="secondary-content"><i class="material-icons">delete</i></a></div></li>
        <li class="collection-item"><div>wow Narith<a href="#!" class="secondary-content"><i class="material-icons">delete</i></a></div></li>
        <li class="collection-item"><div>Good  Narith<a href="#!" class="secondary-content"><i class="material-icons">delete</i></a></div></li>
        
        
    </ul>

    @endisAdmin


@endsection

