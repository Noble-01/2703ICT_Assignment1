@extends('Layout.Master')
@section('title')
    Home
@endsection
@section('Home')
    <form action="/action_page.php" id="usrform">
    Name: <input type="text" name="usrname">
    <input type="submit">
    </form>
    <br>
    <textarea rows="4" cols="50" name="comment" form="usrform">
    Enter text here...</textarea>

    <p>The text area above is outside the form element, but should still be a part of the form.</p>

    <p><b>Note:</b> The form attribute is not supported in IE.</p>

@endsection
