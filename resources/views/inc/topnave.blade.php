

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ '/' }}">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
@if ((!session()->has('user')))
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('doctorLogin')}}">log in</a>
          </li> 
          
      @else

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('doctorLogout')}}">logout</a>

          </li>
          
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('patientList')}}">See patient list</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('prescribed')}}">prescribed patient</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('myprofile') }}">view my profile</a>
          </li>
         @endif
      
         

        
        
         
       
          
          </li>
        </ul>
      </div>
    </div>
  </nav>