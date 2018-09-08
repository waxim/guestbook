@if(Auth::user())
    <div class='entry'>
        <form method='POST' action='/'>
            {{ csrf_field() }}
            <label>Your Message</label>
            <p>Enter a message below to let the website owner know you were here.</p>
            <textarea name='message' class='form-control' rows='5'></textarea>
            <p><button type='submit' class='btn btn-primary'>Send</button></p>
        </form>
    </div>
@endif