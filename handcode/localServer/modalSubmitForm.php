<form action="{{ url('contact')}}" method="POST">
    {{ csrf_field() }}
    <h5 class="mb-2">Basic Info</h5>
    <div class="form-group">
       <label for="name">Name:</label>
       <input type="name" name="name" class="form-control" id="name">
</div><div class="form-group">
       <label for="email">Email:</label>
       <input type="email" name="email" class="form-control" id="email">
    </div>
    <div class="form-group">
       <label name="message">Message:</label>
       <input id="subject" name="message" class="form-control">
    </div>
