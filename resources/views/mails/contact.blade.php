        Contact from <i>{{ $roomeo->sender }}</i>,
        <p><b>UnitRef:</b>&nbsp;{{ $roomeo->unitRef }}</p>
        <p>Somebody got in touch through the website</p>
        
        <p><u>Follow below data from contact:</u></p>
        
        <div>
        <p><b>Name:</b>&nbsp;{{ $roomeo->name }}</p>
        <p><b>Surname:</b>&nbsp;{{ $roomeo->surname }}</p>
        <p><b>E-mail:</b>&nbsp;{{ $roomeo->email }}</p>
        <p><b>Phone:</b>&nbsp;{{ $roomeo->phone }}</p>
        <p><b>I am:</b>&nbsp;{{ $roomeo->iam }}</p>
        <p><b>How did you know:</b>&nbsp;{{ $roomeo->howdid }}</p>
        <p><b>Message:</b>&nbsp;{{ $roomeo->message }}</p>

    </div>
</div>
 
<!-- <p><u>Values passed by With method:</u></p>
 
<div>
<p><b>testVarOne:</b>&nbsp;{{-- $testVarOne--}}</p>
<p><b>testVarTwo:</b>&nbsp;{{-- $testVarTwo --}}</p>
</div> -->
 
<br/>
<i>E-mail sent from http://roomeo.co.uk</i>