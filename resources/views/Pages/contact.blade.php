@extends('Layout.layout')
@section('titre')
Laracarte | Contact
@stop 
@section('contenue')
<div class="container" >
   <div class="row">
   <div class="col-md-8 offset-md-2 sm-10 offset-sm-1" >
   <h2>Get In Touch</h2>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, asperiores?
        <a href="mailto:steevesanon6@gmail.com"><strong>Help</strong></a>
    </p>
    <form action="{{route('contact.store')}}" method="post">
    
        {{csrf_field()}}
        <div class="form-group ">
        <label for=""><i class="fas fa-signature "></i> Nom</label>
        <input class="form-control " name="nom" type="text" placeholder="Medium input" required>
        {!!$errors->first('nom','<p class="Err">:message</p>')!!}
        </div>
        <div class="form-group">
        <label for=""><i class="fas fa-at"></i> Email</label>
        <input class="form-control" name="email" type="email" placeholder="Medium input" required>
        {!!$errors->first('email','<p class="Err">:message</p>')!!}
        </div>
        <div class="form-group purple-border">
        <label for="exampleFormControlTextarea4"><i class="far fa-comment-alt"></i> Message</label>
        <textarea class="form-control" name="message" id="exampleFormControlTextarea4" rows="10" required></textarea>
        {!!$errors->first('message','<p class="Err">:message</p>')!!}
        </div>

        <div class="form-group">
        <button type="submit" class="btn btn-elegant btn-block"><i class="far fa-paper-plane"></i> Envoyer Message</button>
        </div>
    </form>
   </div>
   </div>
</div>
@stop